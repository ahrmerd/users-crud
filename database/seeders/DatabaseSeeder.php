<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::query()->create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'username' => 'admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('password'),
            'is_admin' => 1,
        ]);
    }
}
