<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMRSPlaylistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('murotal_reciter_surah_playlists', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('murotal_reciter_surah_id');
            $table->unsignedInteger('playlist_id');
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
        Schema::dropIfExists('murotal_reciter_surah_playlists');
    }
}
