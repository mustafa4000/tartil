<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopplayingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topplayings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('qori');
            $table->string('rewayat');
            $table->string('path')->nullable();
            $table->integer('favorite_id');
            $table->integer('playlist_id');
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
        Schema::dropIfExists('topplayings');
    }
}
