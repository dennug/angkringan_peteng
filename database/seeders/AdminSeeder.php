<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'nama'     => 'Administrator',
            'username'    => 'admin',
            'role'    => 'admin',
            'password' => bcrypt('admin12345'),
        ]);

        Admin::create([
            'nama'     => 'Kasir',
            'username'    => 'kasir',
            'role'    => 'kasir',
            'password' => bcrypt('kasir123'),
        ]);
        Admin::create([
            'nama'     => 'Naufal',
            'username'    => 'naufal',
            'role'    => 'kasir',
            'password' => bcrypt('kasir1234'),
        ]);
    }
}
