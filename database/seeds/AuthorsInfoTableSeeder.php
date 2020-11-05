<?php

use Illuminate\Database\Seeder;
use App\AuthorInfo;
use App\Author;
use Faker\Generator as Faker;


class AuthorsInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {

            $authors = Author::all();

            foreach($authors as $author){

                $newInfo = new AuthorInfo;
                $newInfo->author_id = $author->id;
                $newInfo->country = $faker->state();
                $newInfo->bio = $faker->paragraph(6, true);
                $newInfo->image = "https://comicvine1.cbsistatic.com/uploads/scale_small/11111/111118938/7053073-miura.jpg";
                $newInfo->save();

            }


        }
    }
}
