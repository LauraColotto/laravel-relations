<?php

use Illuminate\Database\Seeder;
use App\Comic;
use App\Author;
use Faker\Generator as Faker;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {

            $newComic = new Comic();
            $newComic->title = $faker->text(50);
                if(rand(0,1) == 1) {
                    $newComic->original_title = $faker->text(50);
                };
            $newComic->author = $author->id;        
            $newComic->country = $faker->state();
            $newComic->volumes = $faker->numberBetween(1, 250);
            $newComic->edition = $faker->company();
            $newComic->reading = (rand(0,1) == 1) ? "LT" : "RT";
            $newComic->color = rand(0, 1);
            $newComic->release = $faker->date();
            $newComic->price = $faker->randomFloat(2, 0, 800);
            $newComic->cover = $faker->imageUr(200, 300);
            $newComic->save();
        }
    }
}
