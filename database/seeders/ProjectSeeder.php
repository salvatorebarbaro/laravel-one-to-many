<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker ): void
    {
        //dichiarazione del nuovo elemento
        $newProject = new Project();

        $newProject->title=$faker->sentence(1);
        $newProject->description=$faker->paragraph();

        //salviamo i dati
        $newProject->save();
    }
}
