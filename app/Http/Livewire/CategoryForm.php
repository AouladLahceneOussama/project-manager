<?php

namespace App\Http\Livewire;

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
    public $title = '';
    public $description = '';
    public $total = 0;

    protected $rules = [
        'title' => ['required', 'string'],
        'description' => ['required', 'max:255'],
        "subCategory.*.title" => ['required', 'string'],
        "subCategory.*.description" => ['required', 'max:255'],
        "subCategory.*.total" => ['required'],
    ];

    public function render()
    {
        return view('livewire.category-form');
    }

    public function mount()
    {
        $this->subCategory = [
            ['title' => '', 'description' => '', 'total' => 0],
            ['title' => '', 'description' => '', 'total' => 0]
        ];
    }

    public function showSubCategoryForm()
    {
        $this->showSubCategory = !$this->showSubCategory;

        // empty the array
        if (!$this->showSubCategory) {
            $this->subCategory = [
                ['title' => '', 'description' => '', 'total' => 0],
                ['title' => '', 'description' => '', 'total' => 0]
            ];
        }
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
            ]);

            $category = Category::create([
                'project_id' => $this->project_id,
                'managed_by' => Auth::id(),
                'title' => $this->title,
                'description' => $this->description,
                'total' => $this->subCategory[0]['total'] + $this->subCategory[1]['total'],
            ]);

            foreach ($this->subCategory as $sub) {
                Subcategory::create([
                    'categories_id' => $category->id,
                    'title' => $sub['title'],
                    'description' => $sub['description'],
                    'total' => $sub['total'],
                ]);
            }
        }

        //update the project total price
        $newTotal = Category::where('project_id', $this->project_id)->sum('total');
        Project::where('id', $this->project_id)->update([
            'total' => $newTotal
        ]);

        return redirect('/projects/' . $this->project_id . '/category/' . $category->id);
    }
}
