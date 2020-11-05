<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors_info', function (Blueprint $table) {
            $table->foreignId('author_id')->constrained();
            $table->string("country", 30);
            $table->text("bio")->nullable();
            $table->string("image")->default("https://comicvine1.cbsistatic.com/uploads/scale_small/11111/111118938/7053073-miura.jpg");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('author_info');
    }
}
