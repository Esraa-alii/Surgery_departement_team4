<?php

use App\Models\OperationRoom;
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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id()->unique();
            $table->date('op_date')->nullable();
            $table->foreignIdFor(OperationRoom::class)->nullable();
            $table->integer('cost')->nullable();
            $table->integer('patient_ssn');
            $table->integer('doctor_ssn');
            $table->string('surgery_name')->nullable();
            $table->string('report')->nullable();
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
        //
    }
};
