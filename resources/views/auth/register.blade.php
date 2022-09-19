@extends('layouts.app')

@section('content')
    <div class="min-w-screen min-h-screen bg-gray-100 flex items-center justify-center px-5 py-5">
        <div class="bg-gray-100 text-gray-500 rounded-3xl shadow-xl w-full overflow-hidden" style="max-width:1000px">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="w-full m-auto md:w-1/2 py-10 px-5 md:px-10">
                    <div class="text-center mb-10">
                        <h1 class="font-bold text-3xl text-gray-900">REGISTER</h1>
                        <p>Enter your information to register</p>
                    </div>
                    <div>
                        <div class="flex">
                            <x-form-item :value="old('first_name')" name="first_name" placeholder="John">
                            </x-form-item>
                            <x-form-item name="last_name" :value="old('last_name')" placeholder="Doe">
                            </x-form-item>
                        </div>
                        <x-form-item name="email" placeholder="johndoe@gmail.com" :value="old('email')" type='email'>
                        </x-form-item>
                        <x-form-item name="username" placeholder="joed542" :value="old('username')">
                        </x-form-item>
                        <x-form-item name="password" placeholder="***" type="password">
                        </x-form-item>
                        <x-form-item name="password_confirmation" placeholder="***" type="password">
                        </x-form-item>
                        <div class="flex justify-center">
                            <button class="link-btn">Register Now</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
