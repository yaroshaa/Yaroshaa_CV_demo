<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('education', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('order')->default(0);
            $table->string('date_start')->nullable();
            $table->string('date_stop')->nullable();
            $table->string('number_ed')->nullable();
            $table->boolean('status')->default(true);  
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
        Schema::dropIfExists('education');
    }
}
