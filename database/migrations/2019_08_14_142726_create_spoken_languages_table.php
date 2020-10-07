<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpokenLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spoken_languages', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned()->unique();
            $table->string('key')->unique();
            $table->boolean('reading')->default(true);
            $table->boolean('spelling')->default(true);
            $table->boolean('exposition')->default(true);
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
        Schema::dropIfExists('spoken_languages');
    }
}
