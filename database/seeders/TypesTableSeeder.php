<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class TypesTableSeeder extends Seeder
{

    public function run(Faker $faker)
    {

        $types = ["Laravel", "Php", "Javascript", "React"];

        foreach ($types as $type) {

            $newType = new type();

            $newType->name = $type;


            $newType->description = $faker->sentence();

            $newType->save();

        }
    }

}


