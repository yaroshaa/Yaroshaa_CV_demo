<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLangExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lang_experiences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('lang_id');
            $table->foreign('lang_id')->references('id')->on('language');
            $table->unsignedBigInteger('experience_id');
            $table->foreign('experience_id')->references('id')->on('experience');
            $table->string('name')->nullable();
            $table->text('description')->nullable();        
            $table->text('full_text')->nullable();
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('lang_experiences');
        Schema::enableForeignKeyConstraints();       

    }
}
