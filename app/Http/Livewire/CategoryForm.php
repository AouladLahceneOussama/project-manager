<?php

namespace App\Http\Livewire;

use App\Models\Billing;
use App\Models\Category;
use App\Models\Project;
use App\Models\Subcategory;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CategoryForm extends Component
{
    public $showSubCategory = false;
    public $project_id;
    public $subCategory = [];
    public $billings = [];
    public $title = '';
    public $description = '';
    public $total = 0;

    // protected $rules = [
    //     'title' => ['required', 'string'],
    //     'description' => ['required', 'max:255'],
    //     "subCategory.*.title" => ['required', 'string'],
    //     "subCategory.*.description" => ['required', 'max:255'],
    //     "billings.*.*.title" => ['required', 'string'],
    //     "billings.*.*.total" => ['required', 'gt:0'],
    // ];

    protected $messages = [
        'required' => 'Required Field',
        'email' => 'Valid Email',
        'unique' => 'Unique',
        'min' => 'Very Short',
        'max' => 'Very Long',
        'gt' => 'Less Than 0',
    ];

    public function render()
    {
        return view('livewire.category-form');
    }

    public function mount()
    {
        $this->subCategory = [
            '1' => ['title' => '', 'description' => '', 'total' => 0],
            '2' => ['title' => '', 'description' => '', 'total' => 0]
        ];

        $this->billings = [
            '1' => [],
            '2' => []
        ];
        // dd($this->billings);
    }

    // Show / Hide the subcategory form
    public function showSubCategoryForm()
    {
        $this->showSubCategory = !$this->showSubCategory;

        // empty the array
        if (!$this->showSubCategory) {
            $this->subCategory = [
                '1' => ['title' => '', 'description' => '', 'total' => 0],
                '2' => ['title' => '', 'description' => '', 'total' => 0]
            ];
        }
    }

    // Add new Billing
    public function addBillingForm($index)
    {
        $this->validate([
            'subCategory.' . $index . '.title' => ['required', 'string'],
        ]);

        $count = count($this->billings[$index]) + 1;
        $this->billings[$index][] = ['title' => $this->subCategory[$index]['title'] . '-' . $count, 'total' => 0];

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
        return array_sum($total);
    }

    public function updated($name, $value)
    {
        $stacks = explode('.', $name);
        if ($stacks[0] == 'billings' && $stacks[3] == 'total')
            $this->subCategory[$stacks[1]]['total'] =  $this->calculateTotal($stacks[1]);
    }

    public function save()
    {
        $category = '';

        if (!$this->showSubCategory) {

            $this->validate([
                'title' => ['required', 'string'],
                'description' => ['required', 'max:255'],
                'total' => ['required', 'gt:0'],
            ]);

            $category = Category::create([
                'project_id' => $this->project_id,
                'managed_by' => Auth::id(),
                'title' => $this->title,
                'description' => $this->description,
                'total' => $this->total,
            ]);
        } else {
            $this->validate([
                'title' => ['required', 'string'],
                'description' => ['required', 'max:255'],
                'subCategory.*.title' => ['required', 'string'],
                'subCategory.*.description' => ['required', 'max:255'],
                'subCategory.*.total' => ['required', 'gt:0'],
                "billings.*.*.title" => ['required', 'string'],
                "billings.*.*.total" => ['required', 'gt:0'],
            ]);

            // Save the category
            $category = Category::create([
                'project_id' => $this->project_id,
                'managed_by' => Auth::id(),
                'title' => $this->title,
                'description' => $this->description,
                'total' => $this->subCategory[1]['total'] + $this->subCategory[2]['total'],
            ]);

            // Save the sub-category
            foreach ($this->subCategory as $index => $sub) {
                $subC = Subcategory::create([
                    'categories_id' => $category->id,
                    'title' => $sub['title'],
                    'description' => $sub['description'],
                    'total' => $sub['total'],
                ]);

                // Save the Billings
                foreach ($this->billings[$index] as $b) {
                    Billing::create([
                        'subcategories_id' => $subC->id,
                        'title' => $b['title'],
                        'total' => $b['total']
                    ]);
                }
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
