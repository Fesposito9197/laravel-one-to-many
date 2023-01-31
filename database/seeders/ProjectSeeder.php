<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Type;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        Project::truncate();

        for ($i = 0; $i < 20; $i++) {
            $type = Type::inRandomOrder()->first();
            $new_project = new Project();
            $new_project->title = $faker->sentence(2);
            $new_project->description = $faker->text(800);
            $new_project->client_name = $faker->company();
            $new_project->slug = Str::slug($new_project->title, '-');
            $new_project->type_id = $type->id;
            $new_project->save();
        }
    }
}
