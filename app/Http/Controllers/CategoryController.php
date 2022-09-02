<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function show($id)
    {
        $categories = Category::with('project')->where('project_id', $id)->get();
        $count = Category::where('project_id', $id)->count();

        return view('category.index', compact('categories', 'count'));
    }

    public function create($id)
    {
        return view('category.create', compact('id'));
    }

    public function categoryDetail($id, $category_id)
    {
        $category = Category::with('subcategories')->where('id', $category_id)->first();
        return view('category.details', compact('category'));
    }
}
