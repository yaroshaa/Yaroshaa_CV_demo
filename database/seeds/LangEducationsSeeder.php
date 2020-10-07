<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\LangEducation;

class LangEducationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lang_educations')->delete();       
 
        ////////
        LangEducation::create([
            'lang_id' => 1,
            'education_id' => 1,
            'name' => 'Середня професійна освіта на базі Запорізького машинобудівний університету',   
            'description' => 'Програміст ЕОМ', 
            'full_text' => 'Програміст ЕОМ'
        ]); 
        LangEducation::create([
            'lang_id' => 2,
            'education_id' => 1,
            'name' => 'Среднее профессиональное образование на базе Запорожского машиностроительно университета',   
            'description' => 'Программист ЭВМ', 
            'full_text' => 'Программист ЭВМ'
        ]); 
        LangEducation::create([
            'lang_id' => 3,
            'education_id' => 1,
            'name' => 'Secondary professional education at the University of Engineering',   
            'description' => 'Computer programmer', 
            'full_text' => 'Computer programmer'
        ]); 
        
        ///////
        LangEducation::create([
            'lang_id' => 1,
            'education_id' => 2,
            'name' => 'Запорізький юридичний інститут',   
            'description' => 'Правознавець.', 
            'full_text' => 'Правознавець'
        ]); 
        LangEducation::create([
            'lang_id' => 2,
            'education_id' => 2,
            'name' => 'Запорожский юридический институт',   
            'description' => 'Правовед', 
            'full_text' => 'Правовед'
        ]); 
        LangEducation::create([
            'lang_id' => 3,
            'education_id' => 2,
            'name' => 'Zaporizhzhya Law Institute',   
            'description' => 'Lawyer', 
            'full_text' => 'Lawyer'
        ]); 
        

        ///////
        LangEducation::create([
            'lang_id' => 1,
            'education_id' => 3,
            'name' => 'Комп\'ютерна Академія «Шаг»',   
            'description' => 'Професійний курс "Веб дизайн".', 
            'full_text' => 'Професійний курс "Веб дизайн".'
        ]); 
        LangEducation::create([
            'lang_id' => 2,
            'education_id' => 3,
            'name' => 'Компьютерная Академия «Шаг»',   
            'description' => 'Профессиональный курс "Веб дизайн".', 
            'full_text' => 'Профессиональный курс "Веб дизайн".'
        ]); 
        LangEducation::create([
            'lang_id' => 3,
            'education_id' => 3,
            'name' => 'Computer Academy "ITStep"',   
            'description' => 'Professional course "Web Design".', 
            'full_text' => 'Professional course "Web Design".'
        ]); 

        /////
        LangEducation::create([
            'lang_id' => 1,
            'education_id' => 4,
            'name' => 'Комп\'ютерна Академія «Шаг»',   
            'description' => 'Професійний курс "Веб розробник« Вивчення PHP, MySQL, HTML, CSS.', 
            'full_text' => 'Професійний курс "Веб розробник« Вивчення PHP, MySQL, HTML, CSS.'
        ]); 

        LangEducation::create([
            'lang_id' => 2,
            'education_id' => 4,
            'name' => 'Компьютерная Академия «Шаг»',   
            'description' => 'Профессиональный курс "Веб разработчик" Изучение PHP, MySQL, HTML, CSS.', 
            'full_text' => 'Профессиональный курс "Веб разработчик" Изучение PHP, MySQL, HTML, CSS.'
        ]); 

        LangEducation::create([
            'lang_id' => 3,
            'education_id' => 4,
            'name' => 'Computer Academy "ITStep"',   
            'description' => 'Professional course "Web Developer" Learning PHP, MySQL, HTML, CSS.', 
            'full_text' => 'Professional course "Web Developer" Learning PHP, MySQL, HTML, CSS.'
        ]); 

        /////
        LangEducation::create([
            'lang_id' => 1,
            'education_id' => 5,
            'name' => 'Сертифікат - 1С: Професіонал',   
            'description' => 'Сертифікат 1С: Професіонал, знання основних механізмів платформи 1С: Підприємство 8.2<br> Сертифікат 1С: Професіонал, знання особливостей і застосування програми 1С: Бухгалтерія 8 для України', 
            'full_text' => 'Сертифікат 1С: Професіонал, знання основних механізмів платформи 1С: Підприємство 8.2 <br> Сертифікат 1С: Професіонал, знання особливостей і застосування програми 1С: Бухгалтерія 8 для України'
        ]); 

        LangEducation::create([
            'lang_id' => 2,
            'education_id' => 5,
            'name' => 'Сертификат — 1С: Профессионал',   
            'description' => 'Сертификат 1С: Профессионал , знание основных механизмов платформы 1С: Предприятие 8.2 <br> Сертификат 1С:Профессионал , знание особенностей и применение программы 1С: Бухгалтерия 8 для Украины', 
            'full_text' => 'Сертификат 1С: Профессионал , знание основных механизмов платформы 1С: Предприятие 8.2 <br> Сертификат 1С:Профессионал , знание особенностей и применение программы 1С: Бухгалтерия 8 для Украины'
        ]); 

        LangEducation::create([
            'lang_id' => 3,
            'education_id' => 5,
            'name' => 'Certificate - 1C: Professional',   
            'description' => 'Certificate 1C: Professional, knowledge of the basic mechanisms of the 1C: Enterprise 8.2 platform <br> Certificate 1C: Professional, knowledge of the features and application of the program 1C: Accounting 8 for Ukraine', 
            'full_text' => 'Certificate 1C: Professional, knowledge of the basic mechanisms of the 1C: Enterprise 8.2 platform <br> Certificate 1C: Professional, knowledge of the features and application of the program 1C: Accounting 8 for Ukraine'
        ]); 
    }
}
