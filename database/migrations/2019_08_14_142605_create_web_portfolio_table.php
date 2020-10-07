<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebPortfolioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('web_portfolio', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('group')->nullable();
            $table->string('thumb')->nullable();
            $table->string('img_link')->nullable();
            $table->string('demo_link')->nullable();
            $table->string('web_link')->nullable();
            $table->boolean('new_work')->default(false);
            $table->boolean('status')->default(true);
            $table->integer('order')->default(0);
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
        Schema::dropIfExists('web_portfolio');
    }
}
