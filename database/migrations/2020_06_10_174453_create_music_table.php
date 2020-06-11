<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('music', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('genres');
            $table->integer('listens');
            $table->timestamps();
        });

      Schema::create('artist_music', function (Blueprint $table) {
          $table->foreignId('artist_id');
          $table->foreignId('music_id');
          $table->timestamps();


          $table->foreign('artist_id')->references('id')->on('artists')->onDelete('cascade');
          $table->foreign('music_id')->references('id')->on('music')->onDelete('cascade');
      });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('music');
    }
}
