<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminDinkesSeeder extends Seeder
{
   
    public function run(): void
    {
        User::create([
            'name' => 'Admin Dinkes',
            'email' => 'dinkes@admin.com',
            'password' => Hash::make('password'),
            'role' => 'dinkes',
            'created_by' => null,
        ]);
    }
}
