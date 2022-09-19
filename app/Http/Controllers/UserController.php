<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(User::class, 'user');
    }

    public function index()
    {
        $search = request('search');

        //Where like is defined as a buider macro in AppServiceProvider
        $users = User::query()->when(
            $search,
            fn ($query) =>
            $query->whereLike('first_name', $search)
                ->whereLike('last_name', $search)
                ->whereLike('username', $search)
                ->whereLike('email', $search)
        )->latest()->paginate();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(StoreUserRequest $request)
    {
        $password = Hash::make($request->password);
        $user = User::query()->create([...$request->only(['username', 'first_name', 'last_name', 'is_admin', 'email']), 'password' => $password]);
        return redirect(route('users.show', $user->id));
    }

    public function show(User $user)
    {
        return view('users.show', ['user' => $user]);
    }

    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->only(['username', 'first_name', 'last_name', 'email', 'is_admin']));
        return view('users.show', ['user' => $user]);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect(route('users.index'));
    }
}
