<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([ 
            'name' => 'Sarmin-Id', 
            'email' => 'sarmin.id@gmail.com', 
            'password' => Hash::make('admin123'), 
            'created_at' => \Carbon\Carbon::now(), 'email_verified_at' => \Carbon\Carbon::now() ]);
    }
}
