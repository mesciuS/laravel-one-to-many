<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i ++) {
            $newpost = new Post();
            $newpost->title = $faker->sentence(6, true);
            $newpost->slug = Str::slug($newpost->title, '-');
            $newpost->content = $faker->text(300);
    
            $newpost->save();
        }
    }
}
