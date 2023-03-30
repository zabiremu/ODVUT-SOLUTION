<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user= new User();
        $user->name = 'zabir raihan';
        $user->email = 'zabir@gmail.com';
        $user->password = Hash::make('12345678');
        $user->save();

        $user= new User();
        $user->name = 'rakib raihan';
        $user->email = 'rakib@gmail.com';
        $user->password = Hash::make('12345678');
        $user->save();

        $user= new User();
        $user->name = 'test';
        $user->email = 'test@gmail.com';
        $user->password = Hash::make('12345678');
        $user->save();

        $user= new User();
        $user->name = 'admin';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('12345678');
        $user->save();
        
    }
}
