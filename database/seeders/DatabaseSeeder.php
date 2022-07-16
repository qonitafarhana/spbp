<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::create([
    		'username' => 'admin123',
    		'password' => Hash::make('password'),
            'role'     => 'ADMIN',
    	]);
        // \App\Models\User::factory(10)->create();
    }
}
