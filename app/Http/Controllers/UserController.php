<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Repositories\UserRepository;

use App\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        
        return view('users/index', compact('users'));
    }

    public function create()
    {
        return view('users/create');
    }

    public function store(UserRequest $request, UserRepository $repository)
    {
        $profile = $request->file('profile');
        $profileName = time() . '-' . request()->profile->getClientOriginalName();
        request()->profile->move(public_path('profiles'), $profileName);
        
        $data = $request->all();
        $data['profile'] = $profileName;
        $users = $repository->createUser($data);
        $users->save();
        
        return redirect()->route('users');
    }

    public function edit(UserRepository $repository, $id)
    {
        $users = $repository->find($id);

        return view('users/edit', compact('users'));
        //return redirect()->route('users.edit');
    }

    public function update(UserRequest $request, UserRepository $repository, $id)
    {
        $user = $repository->find($id);
        $profile = $request->file('profile');
        if($user->image != null){
            unlink('profiles/'.$user->profiles);
        }
        $profileName = time() . '-' . request()->profile->getClientOriginalName();
        request()->profile->move(public_path('profiles'), $profileName);

        $data = $request->all();
        $data['profile'] = $profileName;
        $users = $repository->updateUser($data, $id);     

        return redirect()->route('users');
    }

    public function show(UserRepository $repository, $id)
    {
        $user = $repository->find($id);
        $user->profile = asset('profiles/'. $user->profile);

       $user = $repository->find($id);
       $users = $repository->find($id);
       
        return view('users/show', compact('user'));
    }

    public function destroy(UserRepository $repository, $id)
    {
        $repository->delete($id);

        return redirect()->route('users');
    }
}
