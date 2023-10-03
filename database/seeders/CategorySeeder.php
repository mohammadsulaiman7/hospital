<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $names=['sports','teeth','heart','style','hair'];
    public function run(): void
    {
        foreach($this->names as $key => $name)
        {
            Category::create([
                'name'=> $name,
            ]);
        }
    }
}
