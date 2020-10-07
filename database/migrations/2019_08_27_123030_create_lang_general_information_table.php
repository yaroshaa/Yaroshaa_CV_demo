<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLangGeneralInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lang_general_information', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('lang_id');
            $table->foreign('lang_id')->references('id')->on('language');
            $table->unsignedBigInteger('general_information_id');
            $table->foreign('general_information_id')->references('id')->on('general_information');
            $table->string('site_name')->nullable();
            $table->text('site_description')->nullable();
            $table->string('meta_name')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->text('slogan')->nullable();
            $table->text('position')->nullable();
            $table->string('age')->nullable();
            $table->text('auto_text_mail')->nullable();
            $table->string('link_pdf')->nullable();
            $table->string('address')->nullable();
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
        Schema::dropIfExists('lang_general_information');
        Schema::enableForeignKeyConstraints();
    }
}
