@extends('layouts.app')

@section('content')
    <div class="min-w-screen min-h-screen bg-gray-100 flex items-center justify-center px-5 py-5">
        <div class="bg-gray-100 text-gray-500 rounded-3xl shadow-xl w-full overflow-hidden" style="max-width:1000px">

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="w-full m-auto md:w-1/2 py-10 px-5 md:px-10">
                    <div class="text-center mb-10">
                        <h1 class="font-bold text-3xl text-gray-900">Login</h1>
                        <p>Enter your Login Credentials</p>
                    </div>
                    <div>

                        <x-form-item name="email" placeholder="johndoe@gmail.com" type='email'>
                        </x-form-item>

                        <x-form-item name="password" placeholder="***" type="password">
                        </x-form-item>
                        <div class="">
                            <label for="remember">Remember me</label>
                            <input type="checkbox" name="remember" id="remember">
                        </div>

                        <div class="flex justify-center">
                            <button class="link-btn">Login Now</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
