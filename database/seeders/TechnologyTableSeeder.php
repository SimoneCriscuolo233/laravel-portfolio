<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;
class TechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = ["Php", "Javascript", "React", "NodeJS"];
        foreach ($technologies as $technology) {
            $newTechnology = new technology();
            $newTechnology->name = $technology;
            $newTechnology->save();

        }
    }
}
