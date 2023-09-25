<?php

namespace Database\Seeders;

use App\Models\Speciality;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateSpecialitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $specialities = ['Neurology','Internal medicine','Pediatrics','Cardiology','Otolaryngologists'];
    private $costs=['5','6','7','10','12'];
    public function run(): void
    {
        foreach ($this->specialities as $key => $speciality) {
            Speciality::create([
                'name' => $speciality,
                'cost' => $this->costs[$key],
            ]);
        }
    }
}
