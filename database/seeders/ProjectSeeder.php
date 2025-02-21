<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Create 10 dummy projects
        foreach (range(1, 10) as $index) {
            Project::create([
                'title' => $faker->word,
                'description' => $faker->sentence,
                'image_url' => $faker->imageUrl(),
                'github_link' => $faker->optional()->url,
                'live_demo_link' => $faker->optional()->url,
            ]);
        }
    }
}
