<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)  // Usa Dependency Injection per Faker
    {
        for ($i = 0; $i < 12; $i++) {
            Comic::create([
                'title' => $faker->randomElement(['batman', 'spiderman', 'wolverine', 'hulk', 'superman', 'ironman', 'captainamerica', 'deadpool', 'wonderwoman', 'thor', 'hawkeye', 'thanos']),
                'description' => $faker->paragraph(),
                'thumb' => $faker->imageUrl(100, 250),
                'price' => $faker->randomFloat(2, 0, 100),
                'series' => $faker->randomElement(['batman', 'spiderman', 'wolverine', 'hulk', 'superman', 'ironman', 'captainamerica', 'deadpool', 'wonderwoman', 'thor', 'hawkeye', 'thanos']),
                'sale_date' => $faker->date(),
                'type' => $faker->randomElement(['comic', 'graphic novel']),
            ]);
        }
    }
}
