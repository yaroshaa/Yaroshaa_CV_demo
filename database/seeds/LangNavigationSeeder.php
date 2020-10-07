<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\LangNavigation;

class LangNavigationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lang_navigation')->delete();
        LangNavigation::create([
            'id' => 1,
            'lang_id' => 1,
            'navigation_id' => 1,
            'nav_list' => '{"navigation":[{"name":"Старт","class":"start"},{"name":"Освіта і досвід","class":"aboutme"},{"name":"Мови","class":"spokenlangs"},{"name":"Інструменти","class":"tools"},{"name":"Роботы","class":"webportfolio"},{"name":"Проекти","class":"projects"},{"name":"Контакти","class":"contacts"}]}'
        ]);

        LangNavigation::create([
            'id' => 2,
            'lang_id' => 2,
            'navigation_id' => 1,
            'nav_list' => '{"navigation":[{"name":"Старт","class":"start"},{"name":"Образование и опыт","class":"aboutme"},{"name":"Языки","class":"spokenlangs"},{"name":"Инструменты","class":"tools"},{"name":"Работы","class":"webportfolio"},{"name":"Мои Проекты","class":"projects"},{"name":"Контакты","class":"contacts"}]}'
        ]);

        LangNavigation::create([
            'id' => 3,
            'lang_id' => 3,
            'navigation_id' => 1,
            'nav_list' => '{"navigation":[{"name":"Start","class":"start"},{"name":"Education & Experiences","class":"aboutme"},{"name":"Langs","class":"spokenlangs"},{"name":"Tools","class":"tools"},{"name":"Works","class":"webportfolio"},{"name":"Projects","class":"projects"},{"name":"Contacts","class":"contacts"}]}'
        ]);
    }
}
