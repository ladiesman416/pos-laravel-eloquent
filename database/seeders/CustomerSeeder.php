<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        Customer::insert([
            ['full_name' => 'Maria Santos',   'email' => 'maria@example.com', 'phone' => '0917-111-1111'],
            ['full_name' => 'Juan Dela Cruz', 'email' => 'juan@example.com',  'phone' => '0917-222-2222'],
            ['full_name' => 'Ana Reyes',      'email' => 'ana@example.com',   'phone' => '0917-333-3333'],
            ['full_name' => 'Pedro Garcia',   'email' => 'pedro@example.com', 'phone' => '0917-444-4444'],
            ['full_name' => 'Liza Mendoza',   'email' => 'liza@example.com',  'phone' => '0917-555-5555'],
        ]);
    }
}