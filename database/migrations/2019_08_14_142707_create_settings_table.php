<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('front_img')->nullable();
            $table->string('site_domain')->nullable();
            $table->string('logo')->nullable();
            $table->string('time_work')->nullable();
            $table->string('email_first')->nullable();
            $table->string('email_second')->nullable();
            $table->string('email_third')->nullable();
            $table->string('phone_first')->nullable();
            $table->string('phone_second')->nullable();
            $table->string('phone_third')->nullable();
            $table->string('phone_fourth')->nullable();
            $table->string('link_github')->nullable();
            $table->string('link_bitbuket')->nullable();
            $table->string('link_azure')->nullable();
            $table->string('banned_ids')->nullable();
            $table->string('skype')->nullable();
            $table->boolean('mode')->default(true);
            $table->string('google_analitics')->nullable();
            $table->string('yandex_metrics')->nullable();
            $table->string('pinterest_id')->nullable();
            $table->string('bing_id')->nullable();
            $table->string('link_facebook')->nullable();
            $table->string('link_pinterest')->nullable();
            $table->string('link_twitter')->nullable();
            $table->string('link_instagram')->nullable();
            $table->string('link_linkedin')->nullable();
            $table->string('copiright')->nullable();
            $table->text('navigation')->nullable();
            $table->boolean('status')->default(true);
            $table->string('ip_admin')->nullable();
            $table->string('default_lang_id')->nullable();
            $table->string('password', 64)->unique();
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
        Schema::dropIfExists('settings');
    }
}
