<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\LangCategory;

class LangCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lang_category')->delete();
        LangCategory::create([
            'lang_id' => 1,
            'category_id' => 1,
            'name' => 'Старт',
            'description' => 'Старт',
        ]);

        LangCategory::create([
            'lang_id' => 2,
            'category_id' => 1,
            'name' => 'Старт',
            'description' => 'Старт',
        ]);

        LangCategory::create([
            'lang_id' => 3,
            'category_id' => 1,
            'name' => 'Старт',
            'description' => 'Старт',
        ]);

         /////
        LangCategory::create([
            'lang_id' => 1,
            'category_id' => 2,
            'name' => 'Образование и опыт',
            'description' => 'Description',
        ]);

        LangCategory::create([
            'lang_id' => 2,
            'category_id' => 2,
            'name' => 'Образование и опыт',
            'description' => 'Description',
        ]);
        LangCategory::create([
            'lang_id' => 3,
            'category_id' => 2,
            'name' => 'Education and experience',
            'description' => 'Description',
        ]);

         /////
         LangCategory::create([
            'lang_id' => 1,
            'category_id' => 3,
            'name' => 'Языки общения',
            'description' => 'Языки общения',
        ]);

        LangCategory::create([
            'lang_id' => 2,
            'category_id' => 3,
            'name' => 'Языки общения',
            'description' => 'Языки общения',
        ]);
        LangCategory::create([
            'lang_id' => 3,
            'category_id' => 3,
            'name' => 'Languages spoken',
            'description' => 'Description',
        ]);

         /////
         LangCategory::create([
            'lang_id' => 1,
            'category_id' => 4,
            'name' => 'Инструменты для работы',
            'description' => 'Инструменты для работы',
        ]);

        LangCategory::create([
            'lang_id' => 2,
            'category_id' => 4,
            'name' => 'Инструменты для работы',
            'description' => 'Инструменты для работы',
        ]);
        LangCategory::create([
            'lang_id' => 3,
            'category_id' => 4,
            'name' => 'Tools for work',
            'description' => 'Tools for work',
        ]);

         /////
         LangCategory::create([
            'lang_id' => 1,
            'category_id' => 5,
            'name' => 'Технологии для работы',
            'description' => 'Технологии для работы',
        ]);

        LangCategory::create([
            'lang_id' => 2,
            'category_id' => 5,
            'name' => 'Технологии для работы',
            'description' => 'Технологии для работы',
        ]);

        LangCategory::create([
            'lang_id' => 3,
            'category_id' => 5,
            'name' => 'Technologies for work',
            'description' => 'Technologies for work',
        ]);

        /////
        LangCategory::create([
            'lang_id' => 1,
            'category_id' => 6,
            'name' => 'Работы WEB',
            'description' => 'Работы WEB',
        ]);

        LangCategory::create([
            'lang_id' => 2,
            'category_id' => 6,
            'name' => 'Работы WEB',
            'description' => 'Работы WEB',
        ]);

        LangCategory::create([
            'lang_id' => 3,
            'category_id' => 6,
            'name' => 'WEB Works',
            'description' => 'WEB Works',
        ]);


        /////
        LangCategory::create([
            'lang_id' => 1,
            'category_id' => 7,
            'name' => 'Мои проекты',
            'description' => 'Мои проекты',
        ]);

        LangCategory::create([
            'lang_id' => 2,
            'category_id' => 7,
            'name' => 'Мои проекты',
            'description' => 'Мои проекты',
        ]);

        LangCategory::create([
            'lang_id' => 3,
            'category_id' => 7,
            'name' => 'My projects',
            'description' => 'My projects',
        ]);

        /////
        LangCategory::create([
            'lang_id' => 1,
            'category_id' => 8,
            'name' => 'Дизайн',
            'description' => 'Дизайн',
        ]);

        LangCategory::create([
            'lang_id' => 2,
            'category_id' => 8,
            'name' => 'Дизайн',
            'description' => 'Дизайн',
        ]);

        LangCategory::create([
            'lang_id' => 3,
            'category_id' => 8,
            'name' => 'Design',
            'description' => 'Design',
        ]);


        /////
        LangCategory::create([
            'lang_id' => 1,
            'category_id' => 9,
            'name' => 'Другие увлечения',
            'description' => 'Другие увлечения',
        ]);

        LangCategory::create([
            'lang_id' => 2,
            'category_id' => 9,
            'name' => 'Другие увлечения',
            'description' => 'Другие увлечения',
        ]);

        LangCategory::create([
            'lang_id' => 3,
            'category_id' => 9,
            'name' => 'Other hobbies',
            'description' => 'Other hobbies',
        ]);

        /////
        LangCategory::create([
            'lang_id' => 1,
            'category_id' => 10,
            'name' => 'В социальных сетях',
            'description' => 'В социальных сетях',
        ]);

        LangCategory::create([
            'lang_id' => 2,
            'category_id' => 10,
            'name' => 'В социальных сетях',
            'description' => 'В социальных сетях',
        ]);

        LangCategory::create([
            'lang_id' => 3,
            'category_id' => 10,
            'name' => 'In social networks',
            'description' => 'In social networks',
        ]);

        /////
        LangCategory::create([
            'lang_id' => 1,
            'category_id' => 11,
            'name' => 'Контакты',
            'description' => 'Контакты',
        ]);

        LangCategory::create([
            'lang_id' => 2,
            'category_id' => 11,
            'name' => 'Контакты',
            'description' => 'Контакты',
        ]);

        LangCategory::create([
            'lang_id' => 3,
            'category_id' => 11,
            'name' => 'Contacts',
            'description' => 'Contacts',
        ]);


    }
}
