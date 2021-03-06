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
        Schema::create('users', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->string('email')->unique();
            $table->string('profile_image')->nullable();
            $table->date('birth_date');
            $table->string('gender');
            $table->string('Role');
            $table->string('specialization')->nullable();
            $table->integer('ssn')->unique();
            $table->string('insurance_provider')->nullable();
            $table->string('phone_number1');
            $table->string('phone_number2')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
<<<<<<< HEAD
            $table->string('Op_code')->nullable();
=======
            // $table->string('Op_code');
>>>>>>> 7e5994bf56c4b89cb81376c93c978e64b77858a9
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
        Schema::dropIfExists('users');
    }
};





  // $table->string('password');
            // $table->string('fname');
            // $table->string('mname');
            // $table->string('lname');
            // $table->string('birthdate');
            // $table->string('gender');
            // $table->string('ssn')->unique();
            // $table->string('insurance')->nullable();
            // $table->string('num1');
            // $table->string('role');
            // $table->string('num2')->nullable();
