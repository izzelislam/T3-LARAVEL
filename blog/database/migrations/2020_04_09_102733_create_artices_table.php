<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artices', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('categories_id')->unsigned();
            $table->string('title');
            $table->string('articles');
            $table->timestamps();

            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artices');
    }
}
