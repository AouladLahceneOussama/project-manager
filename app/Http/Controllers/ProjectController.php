<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    //
    public function index()
    {
        if (Auth::user()->is_admin) {
            $projects = Project::with(['user', 'manager'])->orderBy('created_at', 'desc')->paginate(10);
            $count = Project::count();
        } else {
            $projects = Project::with(['user', 'manager'])->where('managed_by', Auth::id())->orderBy('created_at', 'desc')->paginate(10);
            $count = Project::where('managed_by', Auth::id())->count();
        }

        return view('projects.index', compact('projects', 'count'));
    }

    public function create()
    {
        $managers = User::where('is_admin', 0)->get();
        return view('projects.create', compact('managers'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => ['required', 'string'],
            'manager' => 'required'
        ]);

        Project::create([
            'title' => $request->title,
            'created_by' => Auth::id(),
            'managed_by' => $request->manager
        ]);

        return redirect()->route('projects');
    }

    public function edit($id)
    {
        $project = Project::where('id', $id)->first();
        $managers = User::where('is_admin', 0)->get();

        return view('projects.update', compact('project', 'managers'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string'],
            'manager' => 'required'
        ]);

        Project::where('id', $request->id)->update([
            'title' => $request->title,
            'managed_by' => $request->manager
        ]);

        return back();
    }

    public function destroy($id)
    {
        Project::where('id', $id)->delete();
        return back();
    }
}
