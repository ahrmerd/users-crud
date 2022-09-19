@extends('layouts.app')


@section('content')
    <div class="container m-auto p-9">
        <form class=" w-1/2 mx-auto">
            <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <input type="search" id="default-search" name="search" value="{{ request('search') }}"
                    class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300"
                    placeholder="Search by Username, firstname, or lastname...">
                <button type="submit"
                    class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800  font-medium rounded-lg text-sm px-4 py-2">Search</button>
            </div>
        </form>
        <a href="{{ route('users.create') }}">
            <button class="px-3 py-2 border rounded-lg hover:bg-slate-600 hover:text-white">Add User</button>
        </a>

        <table class="responsive-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>username</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Admin</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td data-label="id">
                            {{ $user->id }}
                        </td>
                        <td data-label="username">
                            {{ $user->username }}
                        </td>
                        <td data-label="first Name">
                            {{ $user->first_name }}
                        </td>
                        <td data-label="last Name">
                            {{ $user->last_name }}
                        </td>
                        @if ($user->is_admin)
                            <td>
                                <svg style="transform: scale(.5)" xmlns="http://www.w3.org/2000/svg" height="48"
                                    width="48">
                                    <path fill="blue"
                                        d="m17.3 45-3.8-6.5-7.55-1.55.85-7.35L2 24l4.8-5.55-.85-7.35 7.55-1.55L17.3 3 24 6.1 30.7 3l3.85 6.55 7.5 1.55-.85 7.35L46 24l-4.8 5.6.85 7.35-7.5 1.55L30.7 45 24 41.9Zm1.35-3.95L24 38.8l5.5 2.25 3.35-5 5.85-1.5-.6-5.95 4.05-4.6-4.05-4.7.6-5.95-5.85-1.4-3.45-5L24 9.2l-5.5-2.25-3.35 5-5.85 1.4.6 5.95L5.85 24l4.05 4.6-.6 6.05 5.85 1.4ZM24 24Zm-2.15 6.65L33.2 19.4l-2.25-2.05-9.1 9-4.75-4.95-2.3 2.25Z" />
                                </svg>
                            </td>
                        @else
                            <td>
                                <svg style="transform: scale(.5)" xmlns="http://www.w3.org/2000/svg" height="48"
                                    width="48">
                                    <path fill="red"
                                        d="m16.5 33.6 7.5-7.5 7.5 7.5 2.1-2.1-7.5-7.5 7.5-7.5-2.1-2.1-7.5 7.5-7.5-7.5-2.1 2.1 7.5 7.5-7.5 7.5ZM24 44q-4.1 0-7.75-1.575-3.65-1.575-6.375-4.3-2.725-2.725-4.3-6.375Q4 28.1 4 24q0-4.15 1.575-7.8 1.575-3.65 4.3-6.35 2.725-2.7 6.375-4.275Q19.9 4 24 4q4.15 0 7.8 1.575 3.65 1.575 6.35 4.275 2.7 2.7 4.275 6.35Q44 19.85 44 24q0 4.1-1.575 7.75-1.575 3.65-4.275 6.375t-6.35 4.3Q28.15 44 24 44Zm0-3q7.1 0 12.05-4.975Q41 31.05 41 24q0-7.1-4.95-12.05Q31.1 7 24 7q-7.05 0-12.025 4.95Q7 16.9 7 24q0 7.05 4.975 12.025Q16.95 41 24 41Zm0-17Z" />
                                </svg>
                            </td>
                        @endif
                        <td class="flex justify-around">
                            <a class="scale-50 hover:scale-75 fill-blue-400" href="{{ route('users.show', $user->id) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48">
                                    <path
                                        d="M9 42q-1.25 0-2.125-.875T6 39V9q0-1.25.875-2.125T9 6h30q1.25 0 2.125.875T42 9v30q0 1.25-.875 2.125T39 42Zm0-3h30V13H9v26Zm15-5.25q-4 0-7.15-2.15-3.15-2.15-4.6-5.6 1.45-3.45 4.6-5.6Q20 18.25 24 18.25t7.15 2.15q3.15 2.15 4.6 5.6-1.45 3.45-4.6 5.6Q28 33.75 24 33.75Zm0-2.5q2.85 0 5.25-1.4T33 26q-1.35-2.45-3.75-3.85T24 20.75q-2.85 0-5.25 1.4T15 26q1.35 2.45 3.75 3.85t5.25 1.4Zm0-2.75q-1.05 0-1.775-.725Q21.5 27.05 21.5 26q0-1.05.725-1.775Q22.95 23.5 24 23.5q1.05 0 1.775.725.725.725.725 1.775 0 1.05-.725 1.775-.725.725-1.775.725Z" />
                                </svg>
                            </a>
                            <a class="scale-50 hover:scale-75" href="{{ route('users.edit', $user->id) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48">
                                    <path fill="orange"
                                        d="M9 39h2.2l22.15-22.15-2.2-2.2L9 36.8Zm30.7-24.3-6.4-6.4 2.1-2.1q.85-.85 2.1-.85t2.1.85l2.2 2.2q.85.85.85 2.1t-.85 2.1Zm-2.1 2.1L12.4 42H6v-6.4l25.2-25.2Zm-5.35-1.05-1.1-1.1 2.2 2.2Z" />
                                </svg>
                            </a>
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

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class=" mt-4 ">
            {{ $users->appends(['search' => request('search')])->links() }}
        </div>
    </div>
@endsection
