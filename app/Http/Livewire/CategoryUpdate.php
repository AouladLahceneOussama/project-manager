<?php

namespace App\Http\Livewire;

use App\Models\Billing;
use App\Models\Category;
use App\Models\Project;
use App\Models\Subcategory;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CategoryUpdate extends Component
{
    public $showSubCategory = false;
    public $project_id;
    public $category_id;
    public $subCategory = [];
    public $subCategoryRepeat = 1;
    public $billings = [];
    public $title = '';
    public $description = '';
    public $total = 0;

    protected $messages = [
        'required' => 'Required Field',
        'email' => 'Valid Email',
        'unique' => 'Unique',
        'min' => 'Very Short',
        'max' => 'Very Long',
        'gt' => 'Less Than 0',
    ];

    public function mount()
    {
        $c = Category::with(['subcategories'])->where('id', $this->category_id)->first();
        $this->title = $c->title;
        $this->description = $c->description;
        $this->total = $c->total;

        // Initialise the form
        foreach ($c->subcategories as $index => $sub) {
            $this->subCategory[] = ['title' => $sub->title, 'total' => $sub->total];

            if (count($sub->billings) == 0) $this->billings[$index] = [];
            else {
                foreach ($sub->billings as $b) {
                    $this->billings[$index][] = ['title' => $b->title, 'info' => $b->info, 'total' => $b->total];
                }
            }
        }


        //    dd($this->subCategory, $this->billings);
    }

    public function render()
    {
        return view('livewire.category-update');
    }

    // Add the subCaegory form
    public function addSubCategory()
    {
        $this->validate([
            'subCategoryRepeat' => ['required', 'numeric', 'gt:0'],
        ]);

        for ($i = 0; $i < $this->subCategoryRepeat; $i++) {
            $this->subCategory[] = ['title' => '', 'total' => 0];
            $this->billings[count($this->subCategory) - 1] = [];
        }
    }

    // Remove the subCategory form
    public function removeSubCategory($index)
    {
        unset($this->subCategory[$index]);
        $this->subCategory = array_values($this->subCategory);
    }

    // Add new Billing
    public function addBillingForm($index)
    {
        $this->validate([
            'subCategory.' . $index . '.title' => ['required', 'string'],
        ]);

        $count = count($this->billings[$index]) + 1;
        $this->billings[$index][] = ['title' => $this->subCategory[$index]['title'] . '-' . $count, 'info' => '', 'total' => 0];

        if ($count >= 2)
            $this->subCategory[$index]['total'] = $this->calculateTotal($index);
    }

    // remove Billing
    public function removeBillingForm($SubCategoryIndex, $billingIndex)
    {
        unset($this->billings[$SubCategoryIndex][$billingIndex]);
        $this->billings[$SubCategoryIndex] = array_values($this->billings[$SubCategoryIndex]);
        $this->subCategory[$SubCategoryIndex]['total'] = $this->calculateTotal($SubCategoryIndex);
    }

    private function calculateTotal($subCategoryIndex)
    {
        // dd($subCategoryIndex);
        $total = array_column($this->billings[$subCategoryIndex], 'total');
        return (string)array_sum($total);
    }

    public function updated($name, $value)
    {
        
        $stacks = explode('.', $name);
        
        if ($stacks[0] == 'billings' && $stacks[3] == 'total'){
            $sum = (string)$this->calculateTotal($stacks[1]);
            // dd($sum);
            $this->subCategory[$stacks[1]]['total'] = $sum;
        }
    }

    public function save()
    {
        $category = '';

        $this->validate([
            'title' => ['required', 'string'],
            'description' => ['required', 'max:255'],
            'subCategory.*.title' => ['required', 'string'],
            "billings.*.*.title" => ['required', 'string'],
            // "billings.*.*.info" => ['required', 'string'],
            // "billings.*.*.total" => ['required', 'gt:0'],
        ]);

        // Delete the old record or category
        Category::find($this->category_id)->delete();

        // Save the category
        $category = Category::create([
            'id' => $this->category_id,
            'project_id' => $this->project_id,
            'managed_by' => Auth::id(),
            'title' => $this->title,
            'description' => $this->description,
            'total' => array_sum(array_column($this->subCategory, 'total')),
        ]);

        // Save the sub-category
        foreach ($this->subCategory as $index => $sub) {
            $subC = Subcategory::create([
                'categories_id' => $category->id,
                'title' => $sub['title'],
                'total' => $sub['total'],
            ]);

            // Save the Billings
            foreach ($this->billings[$index] as $b) {
                Billing::create([
                    'subcategories_id' => $subC->id,
                    'title' => $b['title'],
                    'info' => $b['info'],
                    'total' => $b['total']
                ]);
            }
        }


        // update the project total price
        $newTotal = Category::where('project_id', $this->project_id)->sum('total');
        Project::where('id', $this->project_id)->update([
            'total' => $newTotal
        ]);

        return redirect('/projects/' . $this->project_id . '/category/' . $category->id);
    }
}
