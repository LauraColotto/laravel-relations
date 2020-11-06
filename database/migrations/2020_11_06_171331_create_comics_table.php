<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('author_id')->constrained();
            $table->string("title", 50);
            $table->string("original_title", 50)->nullable();
            $table->string("country", 30);
            $table->smallInteger("volumes");
            $table->string("edition", 30);
            $table->string("reading", 3);
            $table->boolean("color")->default(false);
            $table->date("release");
            $table->float("price", 5,2);
            $table->string("cover")->default("https://comicvine1.cbsistatic.com/uploads/scale_small/11111/111118938/7053073-miura.jpg");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comics');
    }
}
