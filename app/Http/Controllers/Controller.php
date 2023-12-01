<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $users = DB::table('users')->orderBy('id', 'asc')->paginate(10);

        return view('index', ['users' => $users]);
    }

    public function create()
    {
        return view('create');
    } 

    public function store()
    {
        //validation
        request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required'
        ]);

        $password = Hash::make(request('password'));

        $user = new User();
        $user->name = request('name');
        $user->email = request('email');
        $user->password = $password;
        $user->save();

        return redirect()->route('index');
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('edit', ['user' => $user]);
    }

    public function update($id)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'required'
        ]);

        $password = Hash::make(request('password'));

        $user = User::find($id);
        $user->name = request('name');
        $user->email = request('email');
        $user->password = $password;
        $user->save();

        return redirect()->route('index');
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('index');
    }
}
