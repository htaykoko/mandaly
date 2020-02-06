<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->text('title');
            $table->text('body');
            $table->string('title_image')->nullable();
            $table->string('file_name')->nullable();
            $table->string('path')->nullable();
            $table->integer('specialist_id')->nullable();

            $table->integer('view_count')->nullable();
            $table->smallInteger('created_by')->nullable();
            $table->smallInteger('updated_by')->nullable();
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
        Schema::dropIfExists('blogs');
    }
}
