<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\LangSpokenLanguage;

class LangSpokenLanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lang_spoken_language')->delete();
        //1
        LangSpokenLanguage::create([
            'id' => 1,
            'lang_id' => 1,
            'spoken_language_id' => 1,
            'name' => 'Українська',
            'level' => 'Вільне володіння'
        ]);

        LangSpokenLanguage::create([
            'id' => 2,
            'lang_id' => 2,
            'spoken_language_id' => 1,
            'name' => 'Украинский',
            'level' => 'Свободное владение'
        ]);

        LangSpokenLanguage::create([
            'id' => 3,
            'lang_id' => 3,
            'spoken_language_id' => 1,
            'name' => 'Ukrainian',
            'level' => 'Fluency'
        ]);

        //2
        LangSpokenLanguage::create([
            'id' => 4,
            'lang_id' => 1,
            'spoken_language_id' => 2,
            'name' => 'Російська',
            'level' => 'Вільне володіння'
        ]);

        LangSpokenLanguage::create([
            'id' => 5,
            'lang_id' => 2,
            'spoken_language_id' => 2,
            'name' => 'Русский',
            'level' => 'Свободное владение'
        ]);

        LangSpokenLanguage::create([
            'id' => 6,
            'lang_id' => 3,
            'spoken_language_id' => 2,
            'name' => 'Russian',
            'level' => 'Fluency'
        ]);

        //3
        LangSpokenLanguage::create([
            'id' => 7,
            'lang_id' => 1,
            'spoken_language_id' => 3,
            'name' => 'Англійська',
            'level' => 'Пороговий рівень'
        ]);

        LangSpokenLanguage::create([
            'id' => 8,
            'lang_id' => 2,
            'spoken_language_id' => 3,
            'name' => 'Английский',
            'level' => 'Пороговый уровень'
        ]);

        LangSpokenLanguage::create([
            'id' => 9,
            'lang_id' => 3,
            'spoken_language_id' => 3,
            'name' => 'English',
            'level' => 'Intermediate'
        ]);

    }
}
