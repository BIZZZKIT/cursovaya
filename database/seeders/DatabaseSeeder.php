<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       User::insert([
            'login'=>'User',
            'full_name'=>'Иванов Иван Иванович',
            'number_phone'=>'89238228388',
            'password'=>Hash::make('123456'),
       ]);

        User::insert([
            'login'=>'admin',
            'full_name'=>'admin',
            'number_phone'=>'admin',
            'password'=>Hash::make('admin'),
            'is_admin'=>true,
        ]);
    }
}
