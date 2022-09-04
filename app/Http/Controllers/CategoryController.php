<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class CategoryController extends Controller
{
    //
    public function show($id)
    {
        if (!Gate::allows('see-project-detail', [Project::where('managed_by', Auth::id())->get(), $id])) abort('403');

        $categories = Category::with(['project', 'subcategories'])->where('project_id', $id)->get();
        $count = Category::where('project_id', $id)->count();

        return view('category.index', compact('categories', 'count'));
    }

    public function create($id)
    {
        return view('category.create', compact('id'));
    }

    public function categoryDetail($id, $category_id)
    {
        if (!Gate::allows('see-project-detail', [Project::where('managed_by', Auth::id())->get(), $id])) abort('403');

        $category = Category::with('subcategories')->where('id', $category_id)->first();
        return view('category.details', compact('category'));
    }

    public function destroy($id, $category_id)
    {
        Category::where('id', $category_id)->delete();

        //update the project total price
        $newTotal = Category::where('project_id', $id)->sum('total');
        Project::where('id', $id)->update([
            'total' => $newTotal
        ]);

        return back();
    }
}
