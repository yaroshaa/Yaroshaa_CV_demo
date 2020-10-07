<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechnologyWebPortfolioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technology_web_portfolio', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('web_portfolio_id');
            $table->foreign('web_portfolio_id')->references('id')->on('web_portfolio');
            $table->unsignedBigInteger('technology_id');
            $table->foreign('technology_id')->references('id')->on('technologies');
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
        Schema::dropIfExists('technology_web_portfolio');
        Schema::enableForeignKeyConstraints();
    }
}

