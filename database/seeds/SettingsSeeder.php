<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Settings;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->delete();       
        Settings::create([

            'id' => '1',            
            'site_domain' => 'yaroshaa.com',
            'front_img' => '/photo.png',
            'logo' => '/logo/logo.png',
            'time_work' => '9-20',            
            'email_first' => 'yaroshaa@gmail.com',
            'email_second' => '',
            'email_third' => '',
            'phone_first' => '+380997648710',
            'phone_second' => '',
            'phone_third' => '',
            'phone_fourth' => '',
            'link_github' => 'http://yaroshaa.com',
            'link_bitbuket' => '',
            'link_azure' => '',
            'banned_ids' => '',
            'skype' => 'yaroshaa',
            'mode' => 1,
            'google_analitics' => '1234567',
            'yandex_metrics' => '1234567',
            'pinterest_id' => '1234567',
            'bing_id' => '1234567',
            'link_facebook' => 'http://yaroshaa.com',
            'link_pinterest' => 'http://yaroshaa.com',
            'link_twitter' => 'http://yaroshaa.com',
            'link_instagram' => 'http://yaroshaa.com',
            'link_linkedin' => 'http://yaroshaa.com',
            'copiright' => 'yaroshaa.com',
            'ip_admin' => '', 
            'default_lang_id' => 3,
            'password' => Hash::make('fktrctq')

        ]);
        
    }
}
