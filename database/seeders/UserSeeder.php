<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::insert([
            ['username' => 'admin',    'full_name' => 'Admin One'],
            ['username' => 'cashier1', 'full_name' => 'Cashier Two'],
            ['username' => 'cashier2', 'full_name' => 'Cashier Three'],
            ['username' => 'manager',  'full_name' => 'Manager Four'],
            ['username' => 'staff',    'full_name' => 'Staff Five'],
        ]);
    }
}