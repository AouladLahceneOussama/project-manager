<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    //
    public function index()
    {
        if(!Gate::allows('crud-users')) abort('403');

        $users = User::where('is_admin', 0)->paginate(10);
        $count = User::where('is_admin', 0)->count();

        return view('users.index', compact('users', 'count'));
    }

    public function create()
    {
        if(!Gate::allows('crud-users')) abort('403');

        return view('users.create');
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('users');
    }

    public function edit($id)
    {
        if(!Gate::allows('crud-users')) abort('403');

        $user = User::where('id', $id)->first();
        return view('users.update', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        User::where('id', $request->id)->update([
            'name' => $request->name,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('users');
    }

    public function destroy($id)
    {
        User::where('id', $id)->delete();
        return back();
    }
}
