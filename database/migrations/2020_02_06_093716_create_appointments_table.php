<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->date('appointment_date');
            $table->string('appointment_time');
            $table->string('phone_no');
            $table->string('nrc')->nullable();
            $table->string('address')->nullable();
            $table->smallInteger('specialist_id')->nullable();
            $table->string('email')->nullable();
            $table->text('message')->nullable();
            $table->string('file_name')->nullable();
            $table->text('file_path')->nullable();
            
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
        Schema::dropIfExists('appointments');
    }
}
