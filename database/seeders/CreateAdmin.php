<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateAdmin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => "admin@admin.com",
            'phone' => '0938534656',
            'usertype' =>'1',
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'user',
            'email' => "user@user.com",
            'phone' => '0938534656',
            'usertype' =>'0',
            'password' => bcrypt('password'),
        ]);
    }
}
