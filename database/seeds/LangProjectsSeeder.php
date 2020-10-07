<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\LangProjects;

class LangProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lang_projects')->delete();
        LangProjects::create([
            'lang_id' => 1,
            'project_id' => 1,
            'name' => 'CityFor',
            'description' => 'Еко портал, де кожен може оцінити місце і умови в яких живе, акцентувати увагу на поточних проблемах, показати позитивну і негативну сторону свого міста, gоказать які люди живуть рядів з ним. <br> <br> Цей проект покликаний звернути увагу на екологічні проблеми міст, на моральні недоліки людей живуть в цих містах. <br> <br> Покликаний показати правду про те, в яких насправді умовах живуть люди. <br> <br> Так само цей проект допоможе людям отримувати інформацію про поточний екологічний стан середовища їх проживання, з повівши лениями в разі перевищення норм забруднення.',
            'description_list' => '<ul><li><span class="circle"></span><span>Отримуй інформацію про еко стані в реальному часі</span></li><li><span class="circle"></span><span>Додай фото проблемних і хороших сторін твого міста</span></li><li><span class="circle"></span><span>Оцінюй роботу комунальних служб</span></li><li><span class="circle"></span><span>Бери участь в опитуваннях</span></li></ul>',
            'full_text' => 'Еко портал, де кожен може оцінити місце і умови в яких живе, акцентувати увагу на поточних проблемах, показати позитивну і негативну сторону свого міста, gоказать які люди живуть рядів з ним. <br> <br> Цей проект покликаний Зверніть увагу на екологічні проблеми міст, на моральні недоліки людей живуть в ЦИХ містах. <br> <br> покликаний показати правду про те, в яких насправді умовах живуть люди. <br> <br> Так само цей проект допоможе людям отримувати інформацію про поточний екологічних стані середовища їх проживання, з введе лениями в разі перевищення норм забруднення.'
        ]);

        LangProjects::create([
            'lang_id' => 2,
            'project_id' => 1,
            'name' => 'CityFor',
            'description' => 'Эко портал, где каждый может оценить место и условия в которых живет, акцентировать внимание на текущих проблемах, показать положительную и отрицательную сторону своего города, gоказать какие люди живут рядов с ним. <br> <br> Этот проект призван Обратите внимание на экологические проблемы городов, на нравственные недостатки людей живущих в ЭТИХ городах. <br> <br> призван показать правду о том, в каких на самом деле условиях живут люди. <br> <br> Так же этот проект поможет людям получать информацию о текущем экологических состоянии среды их обитания, с введет лениями в случае превышения норм загрязнения.',
            'description_list' => '<ul><li><span class="circle"></span><span>Получай информацию об эко состоянии в реальном времени</span></li><li><span class="circle"></span><span>Добавляй фото проблемных и хороших сторон твоего города</span></li><li><span class="circle"></span><span>Оценивай работу коммунальных служб</span></li><li><span class="circle"></span><span>Участвуй в опросах</span></li></ul>',
            'full_text' => 'Эко портал, где каждый может оценить место и условия в которых живет, акцентировать внимание на текущих проблемах, показать положительную и отрицательную сторону своего города, gоказать какие люди живут рядов с ним. <br> <br> Этот проект призван Обратите внимание на экологические проблемы городов, на нравственные недостатки людей живущих в ЭТИХ городах. <br> <br> призван показать правду о том, в каких на самом деле условиях живут люди. <br> <br> Так же этот проект поможет людям получать информацию о текущем экологических состоянии среды их обитания, с введет лениями в случае превышения норм загрязнения.'
        ]);

        LangProjects::create([
            'lang_id' => 3,
            'project_id' => 1,
            'name' => 'CityFor',
            'description' => 'It’s an eco portal where everyone can assess the place and conditions in which he lives, focus on current problems, show the positive and negative side of his city, show what people live in rows with him. <br> <br> This project is designed to pay attention to the environmental problems of cities, to the moral shortcomings of people living in these cities. <br> <br> is intended to show the truth about the conditions in which people actually live. <br> <br> Also, this project will help people get information about the current ecological state of their environment, with the introduction of information in case pollution standards are exceeded.',
            'description_list' => '<ul><li><span class="circle"></span><span>Get real-time eco status information</span></li><li><span class="circle"></span><span> Add photos of the problematic and good sides of your city</span></li><li><span class="circle"></span><span>Evaluate the work of public utilities</span></li><li><span class="circle"> </span><span>Take the polls</span></li></ul>',
            'full_text' => 'It’s an eco portal where everyone can assess the place and conditions in which he lives, focus on current problems, show the positive and negative side of his city, show what people live in rows with him. <br> <br> This project is designed to pay attention to the environmental problems of cities, to the moral shortcomings of people living in these cities. <br> <br> is intended to show the truth about the conditions in which people actually live. <br> <br> Also, this project will help people get information about the current ecological state of their environment, with the introduction of information in case pollution standards are exceeded.'
        ]);
    }
}
