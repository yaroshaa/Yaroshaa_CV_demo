<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLangWebPortfolioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lang_web_portfolio', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('lang_id');
            $table->foreign('lang_id')->references('id')->on('language');
            $table->unsignedBigInteger('web_portfolio_id');
            $table->foreign('web_portfolio_id')->references('id')->on('web_portfolio');
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
        Schema::dropIfExists('lang_web_portfolio');
        Schema::enableForeignKeyConstraints();
        
       
    }
}
