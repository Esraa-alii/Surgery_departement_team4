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
        Schema::create('operations', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('Op_type');
            $table->string('med_after_sur')->nullable();
            $table->string('fees');
            $table->string('postoperation_appointment');
            $table->string('Op_code');
            $table->string('Op_room');
            $table->integer('Op_case');
            $table->integer('Pssn')->unique();
            $table->string('insurance')->nullable();
            $table->string('enter_date');
            $table->string('release_date');
            $table->rememberToken();
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
        Schema::dropIfExists('operations');
    }
};
