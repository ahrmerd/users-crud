@extends('layouts.app')

@section('content')
    <div class="container m-auto">

        <div>
            <div class="flex items-center flex-col mt-5">
                <div class="flex">
                    <h1 class="font-bold text-3xl text-gray-900">Edit A User
                    </h1>
                    <form class="flex" method="POST" action="{{ route('users.destroy', $user->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class=" scale-50 hover:scale-75" type="submit" class="m-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48">
                                <path fill="red"
                                    d="M13.05 42q-1.25 0-2.125-.875T10.05 39V10.5H8v-3h9.4V6h13.2v1.5H40v3h-2.05V39q0 1.2-.9 2.1-.9.9-2.1.9Zm21.9-31.5h-21.9V39h21.9Zm-16.6 24.2h3V14.75h-3Zm8.3 0h3V14.75h-3Zm-13.6-24.2V39Z" />
                            </svg>
                        </button>
                    </form>
                </div>
                <p>Change users information</p>
            </div>
            <form autocomplete="off" action="{{ route('users.update', $user->id) }}" method="POST"
                class="w-full m-auto md:w-1/2 py-10 px-5 md:px-10">
                @method('PUT')
                @csrf
                <div>
                    <x-form-item autocomplete="off" name="email" placeholder="johndoe@gmail.com" :value="$user->email"
                        type='email'>
                    </x-form-item>
                    <div class="flex">
                        <x-form-item autocomplete="off" :value="$user->first_name" name="first_name" placeholder="John">
                        </x-form-item>
                        <x-form-item autocomplete="off" name="last_name" :value="$user->last_name" placeholder="Doe">
                        </x-form-item>
                    </div>
                    <div class="flex">
                        <x-form-item autocomplete="off" name="username" placeholder="joed542" :value="$user->username">
                        </x-form-item>
                    </div>
                    <div class="mb-3">
                        <label for="remember" class="form-label">User Type: </label>
                        <select class="p-2 bg-gray-50 border border-gray-300 rounded-lg focus:border-0 focus:ring-0"
                            name="is_admin" id="is_admin">
                            <option value=0 @if (!$user->is_admin) selected @endif>Normal User</option>
                            <option value=1 @if ($user->is_admin) selected @endif>Admin User</option>
                        </select>
                        @error('is_admin')
                            <span class=" text-red-500">
                                {{ $message }}
                            </span>
                        @enderror

                    </div>

                    <div class="flex justify-center">
                        <button class="link-btn">Update User</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
