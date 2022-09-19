@extends('layouts.app')

@section('content')
    <div class="container m-auto">
        <form autocomplete="off" action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="w-full m-auto md:w-1/2 py-10 px-5 md:px-10">
                <div class="text-center mb-10">
                    <h1 class="font-bold text-3xl text-gray-900">Create A User</h1>
                    <p>Enter the users information</p>
                </div>
                <div>
                    <x-form-item autocomplete="off" name="email" placeholder="johndoe@gmail.com" :value="old('email')"
                        type='email'>
                    </x-form-item>
                    <div class="flex">
                        <x-form-item autocomplete="off" :value="old('first_name')" name="first_name" placeholder="John">
                        </x-form-item>
                        <x-form-item autocomplete="off" name="last_name" :value="old('last_name')" placeholder="Doe">
                        </x-form-item>
                    </div>
                    <div class="flex">
                        <x-form-item autocomplete="off" name="username" placeholder="joed542" :value="old('username')">
                        </x-form-item>
                        <x-form-item autocomplete="off" name="password" placeholder="***" type="password">
                        </x-form-item>
                    </div>
                    <div class="mb-3">
                        <label for="remember" class="form-label">User Type: </label>
                        <select class="p-2 bg-gray-50 border border-gray-300 rounded-lg focus:border-0 focus:ring-0"
                            name="is_admin" id="is_admin">
                            <option value=0 selected>Normal User</option>
                            <option value=1>Admin User</option>
                        </select>
                        @error('is_admin')
                            <span class=" text-red-500">
                                {{ $message }}
                            </span>
                        @enderror

                    </div>

                    <div class="flex justify-center">
                        <button class="link-btn">Register Now</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
