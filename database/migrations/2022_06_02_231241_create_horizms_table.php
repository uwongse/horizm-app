<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horizms', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idUsers');
            $table->string('nameUsers');
            $table->string('title');
            $table->bigInteger('userRating');
            $table->string('description');
            $table->bigInteger('idPost');
            $table->bigInteger('postRating');
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
        Schema::dropIfExists('horizms');
    }
};
