@extends('layouts.app')

@section('content')
    <div class="h-full flex justify-center items-center ">
        <div
            class="mt-16 relative flex flex-col justify-center max-w-xs p-6 shadow-md rounded-xl sm:px-12 dark:bg-gray-900 dark:text-gray-100">

            @if (Auth::user()->is_admin)
                <a class=" scale-50 absolute top-0 right-0 " href="{{ route('users.edit', Auth::id()) }}">
                    <svg class="fill-orange-500 hover:fill-slate-800" xmlns="http://www.w3.org/2000/svg" height="48"
                        width="48">
                        <path
                            d="M9 39h2.2l22.15-22.15-2.2-2.2L9 36.8Zm30.7-24.3-6.4-6.4 2.1-2.1q.85-.85 2.1-.85t2.1.85l2.2 2.2q.85.85.85 2.1t-.85 2.1Zm-2.1 2.1L12.4 42H6v-6.4l25.2-25.2Zm-5.35-1.05-1.1-1.1 2.2 2.2Z" />
                    </svg>
                </a>
            @endif

            <img src="https://source.unsplash.com/150x150/?portrait?3" alt=""
                class="w-32 h-32 mx-auto rounded-full dark:bg-gray-500 aspect-square">
            <div class="space-y-4 text-center divide-y divide-gray-700">
                <div class="my-2 space-y-1">
                    <h2 class="text-xl font-semibold sm:text-2xl">{{ Auth::user()->first_name }}
                        {{ Auth::user()->last_name }}</h2>
                    <p class="text-xs sm:text-base dark:text-gray-400">{{ Auth::user()->email }}</p>
                    </p>
                    <p class="text-xs sm:text-base dark:text-gray-900">{{ Auth::user()->username }}</p>
                    </p>
                </div>
                <div class="flex justify-center pt-2 space-x-4 align-center">
                    <span
                        class="px-5 text-xs sm:text-base dark:text-gray-400">{{ Auth::user()->is_admin ? 'Admin' : 'User' }}
                        @if (Auth::user()->is_admin)
                            <svg style="transform: scale(.5)" xmlns="http://www.w3.org/2000/svg" height="48"
                                width="48">
                                <path fill="blue"
                                    d="m17.3 45-3.8-6.5-7.55-1.55.85-7.35L2 24l4.8-5.55-.85-7.35 7.55-1.55L17.3 3 24 6.1 30.7 3l3.85 6.55 7.5 1.55-.85 7.35L46 24l-4.8 5.6.85 7.35-7.5 1.55L30.7 45 24 41.9Zm1.35-3.95L24 38.8l5.5 2.25 3.35-5 5.85-1.5-.6-5.95 4.05-4.6-4.05-4.7.6-5.95-5.85-1.4-3.45-5L24 9.2l-5.5-2.25-3.35 5-5.85 1.4.6 5.95L5.85 24l4.05 4.6-.6 6.05 5.85 1.4ZM24 24Zm-2.15 6.65L33.2 19.4l-2.25-2.05-9.1 9-4.75-4.95-2.3 2.25Z" />
                            </svg>
                        @endif
                </div>
            </div>
        </div>
    </div>
@endsection
