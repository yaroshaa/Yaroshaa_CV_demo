<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\LangExperience;

class LangExperiencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lang_experiences')->delete();
        LangExperience::create([
            'lang_id' => 1,
            'experience_id' => 1,
            'name' => 'Фриланс',
            'description' => 'Створення сайту, верстка HTML / CSS, наповнення, встановлення додатків, створення і редагування шаблонів і тим, доробка і зміна модулів, перенесення сайту на хостинг, подальша підтримка (адміністрування) + доробка сайтів інших розробників, моделювання інтерфейсів. <br> <br> додатково: розробка друкованих макетів, установка і адміністрування ОС і ПО, організація і адміністрування мережі.',
            'full_text' => 'Створення сайту, верстка HTML / CSS, наповнення, встановлення додатків, створення і редагування шаблонів і тим, доробка і зміна модулів, перенесення сайту на хостинг, подальша підтримка (адміністрування) + доробка сайтів інших розробників, моделювання інтерфейсів. <br> <br> додатково: розробка друкованих макетів, установка і адміністрування ОС і ПО, організація і адміністрування мережі.'
        ]);
        LangExperience::create([
            'lang_id' => 2,
            'experience_id' => 1,
            'name' => 'Фриланс',
            'description' => 'Создание сайта, верстка HTML/CSS, наполнение, установка дополнений, создание и редактирование шаблонов и тем, доработка и изменение модулей, перенос сайта на хостинг, дальнейшая поддержка (администрирование) + доработка сайтов других разработчиков, моделирование интерфейсов.<br><br> Дополнительно: разработка печатных макетов, установка и администрирование ОС и ПО, организация и администрирование сети.',
            'full_text' => 'Создание сайта, верстка HTML/CSS, наполнение, установка дополнений, создание и редактирование шаблонов и тем, доработка и изменение модулей, перенос сайта на хостинг, дальнейшая поддержка (администрирование) + доработка сайтов других разработчиков, моделирование интерфейсов.<br><br> Дополнительно: разработка печатных макетов, установка и администрирование ОС и ПО, организация и администрирование сети.',
        ]);
        LangExperience::create([
            'lang_id' => 3,
            'experience_id' => 1,
            'name' => 'Freelance',
            'description' => 'Website development, HTML / CSS layout, filling in, installing add-ons, creating and editing templates and themes, finalizing and modifying modules, moving the site to hosting, further support (administration) + finalization of sites of other developers, interface modeling. <br> <br> Additionally: development of printed layouts, installation and administration of OS and software, organization and administration of the network.',
            'full_text' => 'Website development, HTML / CSS layout, filling in, installing add-ons, creating and editing templates and themes, finalizing and modifying modules, moving the site to hosting, further support (administration) + finalization of sites of other developers, interface modeling. <br> <br> Additionally: development of printed layouts, installation and administration of OS and software, organization and administration of the network.',
        ]);

        ///////
        LangExperience::create([
            'lang_id' => 1,
            'experience_id' => 2,
            'name' => 'Веб-студія Gladiolus',
            'description' => 'Створення сайтів (повний цикл починаючи з верстки і закінчуючи наповненням функціоналом сайту). <br> Розробка тем для Wordpress. <br> Розробка плагінів для Wordpress. <br> Доопрацювання готових плагінів і тем для Wordpress. <br> Створення сайтів на native PHP, HTML і CSS.',
            'full_text' => 'Створення сайтів (повний цикл починаючи з верстки і закінчуючи наповненням функціоналом сайту). <br> Розробка тем для Wordpress. <br> Розробка плагінів для Wordpress. <br> Доопрацювання готових плагінів і тем для Wordpress. <br> Створення сайтів на native PHP, HTML і CSS.'
        ]);
        LangExperience::create([
            'lang_id' => 2,
            'experience_id' => 2,
            'name' => 'Веб-cтудия Gladiolus',
            'description' => 'Создание сайтов (полный цикл начиная с верстки и заканчивая наполнением функционалом сайта).<br>Разработка тем для Wordpress.<br>Разработка плагинов для Wordpress.<br>Доработка готовых плагинов и тем для Wordpress.<br>Создание сайтов на native PHP, HTML и CSS.',
            'full_text' => 'Создание сайтов (полный цикл начиная с верстки и заканчивая наполнением функционалом сайта).<br>Разработка тем для Wordpress.<br>Разработка плагинов для Wordpress.<br>Доработка готовых плагинов и тем для Wordpress.<br>Создание сайтов на native PHP, HTML и CSS.',
        ]);
        LangExperience::create([
            'lang_id' => 3,
            'experience_id' => 2,
            'name' => 'Web Studio Gladiolus',
            'description' => 'Creation of sites (a full cycle starting from layout and ending with filling the site’s functionality). <br> Development of themes for Wordpress. <br> Development of plugins for Wordpress. <br> Development of ready-made plugins and themes for Wordpress. <br> Creating sites on "clean "PHP, HTML and CSS.',
            'full_text' => 'Creation of sites (a full cycle starting from layout and ending with filling the site’s functionality). <br> Development of themes for Wordpress. <br> Development of plugins for Wordpress. <br> Development of ready-made plugins and themes for Wordpress. <br> Creating sites on "clean "PHP, HTML and CSS.',
        ]);

        ///////
        LangExperience::create([
            'lang_id' => 1,
            'experience_id' => 3,
            'name' => 'Веб-студія FicusLife',
            'description' => 'Створення сайтів (повний цикл починаючи з верстки і закінчуючи наповненням функціоналом сайту) на платформі Wordpress. <br> Створення і доробка сайтів на платформі Opencart. <br> Основний напрямок роботи - розробка "під" Opencart.',
            'full_text' => 'Створення сайтів (повний цикл починаючи з верстки і закінчуючи наповненням функціоналом сайту) на платформі Wordpress. <br> Створення і доробка сайтів на платформі Opencart. <br> Основний напрямок роботи - розробка "під" Opencart.'
        ]);
        LangExperience::create([
            'lang_id' => 2,
            'experience_id' => 3,
            'name' => 'Веб-cтудия FicusLife',
            'description' => 'Создание сайтов (полный цикл начиная с верстки и заканчивая наполнением функционалом сайта) на платформе Wordpress. <br> Создание и доработка сайтов на платформе Opencart. <br> Основное направление работы - разработка "под" Opencart.',
            'full_text' => 'Создание сайтов (полный цикл начиная с верстки и заканчивая наполнением функционалом сайта) на платформе Wordpress. <br> Создание и доработка сайтов на платформе Opencart. <br> Основное направление работы - разработка "под" Opencart.',
        ]);
        LangExperience::create([
            'lang_id' => 3,
            'experience_id' => 3,
            'name' => 'Web Studio FicusLife',
            'description' => 'Website creation (full cycle starting with layout and ending with site functionality) on Wordpress platform. <br> Creating and improving sites on the Opencart platform. <br> The main area of work - development for Opencart.',
            'full_text' => 'Website creation (full cycle starting with layout and ending with site functionality) on Wordpress platform. <br> Creating and improving sites on the Opencart platform. <br> The main area of work - development for Opencart.',
        ]);


         ///////
         LangExperience::create([
            'lang_id' => 1,
            'experience_id' => 4,
            'name' => 'KM-WARE',
            'description' => 'Розробка платформи (інформаційного порталу) для підключення і відображення даних IOT (Laravel 5 *). <br> Розробка front-end частині Enterprise додатки (Angular 7. *). <br> Створення сайтів (повний цикл починаючи з верстки і закінчуючи наповненням функціоналом сайту) на платформі Wordpress.',
            'full_text' => 'Розробка платформи (інформаційного порталу) для підключення і відображення даних IOT (Laravel 5 *). <br> Розробка front-end частині Enterprise додатки (Angular 7. *). <br> Створення сайтів (повний цикл починаючи з верстки і закінчуючи наповненням функціоналом сайту) на платформі Wordpress.'
        ]);
        LangExperience::create([
            'lang_id' => 2,
            'experience_id' => 4,
            'name' => 'KM-WARE',
            'description' => 'Разработка платформы (информационного портала) для подключения и отображения данных IOT (Laravel 5*).<br>Разработка front-end части Enterprise приложения (Angular 7.*).<br>Создание сайтов (полный цикл начиная с верстки и заканчивая наполнением функционалом сайта) на платформе Wordpress.',
            'full_text' => 'Разработка платформы (информационного портала) для подключения и отображения данных IOT (Laravel 5*).<br>Разработка front-end части Enterprise приложения (Angular 7.*).<br>Создание сайтов (полный цикл начиная с верстки и заканчивая наполнением функционалом сайта) на платформе Wordpress.',
        ]);
        LangExperience::create([
            'lang_id' => 3,
            'experience_id' => 4,
            'name' => 'KM-WARE',
            'description' => 'Development of a platform (information portal) for connecting and displaying IOT data (Laravel 5 *). <br> Development of the front-end part of an Enterprise application (Angular 7. *). <br> Website development (a full cycle from layout to content filling site) on the platform of Wordpress.',
            'full_text' => 'Development of a platform (information portal) for connecting and displaying IOT data (Laravel 5 *). <br> Development of the front-end part of an Enterprise application (Angular 7. *). <br> Website development (a full cycle from layout to content filling site) on the platform of Wordpress.',
        ]);
    }
}
