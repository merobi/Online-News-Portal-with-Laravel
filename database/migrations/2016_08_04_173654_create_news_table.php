<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
             $table->increments('id');
            $table->integer('category_id');
            $table->tinyInteger('is_fetured');
            $table->tinyInteger('news_type');
            $table->string('news_title');
            $table->string('author_name');
            $table->text('short_description');
            $table->text('long_description');
            $table->string('image');
            $table->tinyInteger('publication_status');
            $table->tinyInteger('deletion_status');
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
        Schema::drop('news');
    }
}
