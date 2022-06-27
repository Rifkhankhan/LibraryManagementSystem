<?php

namespace Database\Seeders;
use App\Models\User;
use Hash;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       User::create([
            'lastname'=>'Rifkhan',
            'firstname'=>'Mohammed',
            'email'=>'rifkhan@gmail.com',
            'gender'=>'male',
            'address'=>'dfewdvwgw',
            'mobile'=>'0758596321',
            'password'=>Hash::make('123456789r'),
            'role'=>'librarian'
       ]);
    }
}
