<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMRSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('murotal_reciter_surah', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('murotal_id');
            $table->unsignedInteger('reciter_id');
            $table->unsignedInteger('surah_id');
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
        Schema::dropIfExists('murotal_reciter_surah');
    }
}
