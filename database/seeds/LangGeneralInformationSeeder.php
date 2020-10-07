<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\LangGeneralInformation;


class LangGeneralInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lang_general_information')->delete();
        LangGeneralInformation::create([
            'id' => 1,
            'lang_id' => 1,
            'general_information_id' => 1,
            'site_name' => 'Yaroshaa',
            'site_description' => 'CV Рage',
            'meta_name' => 'WEB Розробник, PHP  Розробник',
            'meta_description' => 'WEB Розробник, PHP  Розробник',
            'meta_keywords' => 'WEB Розробник, PHP  Розробник',
            'first_name' => ' Олексій',
            'last_name' => 'Ярош',
            'slogan' => 'slogan',
            'position' => 'WEB Розробник, PHP  Розробник',
            'age' => '02&nbsp;Липня&nbsp;1980',
            'address' => 'Україна, Запоріжжя',
            'auto_text_mail' => '',
            'link_pdf' => 'uk/yaroshaa_cv_uk_2020.pdf'
        ]);

        LangGeneralInformation::create([
            'id' => 2,
            'lang_id' => 2,
            'general_information_id' => 1,
            'site_name' => 'Yaroshaa',
            'site_description' => 'CV Рage',
            'meta_name' => 'WEB Разработчик, PHP Разработчик',
            'meta_description' => 'WEB Разработчик, PHP Разработчик',
            'meta_keywords' => 'WEB Разработчик, PHP Разработчик',
            'first_name' => 'Алексей',
            'last_name' => 'Ярош',
            'slogan' => 'slogan',
            'position' => 'WEB Разработчик, PHP Разработчик',
            'age' => '02&nbsp;Июля&nbsp;1980',
            'address' => 'Украина, Запорожье',
            'auto_text_mail' => '',
            'link_pdf' => 'ru/yaroshaa_cv_ru_2020.pdf'
        ]);

        LangGeneralInformation::create([
            'id' => 3,
            'lang_id' => 3,
            'general_information_id' => 1,
            'site_name' => 'Yaroshaa',
            'site_description' => 'CV Рage',
            'meta_name' => 'WEB Developer, PHP Developer',
            'meta_description' => 'WEB Developer, PHP Developer',
            'meta_keywords' => 'WEB Developer, PHP Developer',
            'first_name' => 'Oleksiy',
            'last_name' => 'Yarosh',
            'slogan' => 'slogan',
            'position' => 'WEB Developer, PHP Developer',
            'age' => '02&nbsp;July&nbsp;1980',
            'address' => 'Ukraine, Zaporizhzha',
            'auto_text_mail' => '',
            'link_pdf' => 'en/yaroshaa_cv_en_2020.pdf'
        ]);
    }
}
