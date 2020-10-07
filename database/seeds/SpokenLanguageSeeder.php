<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\SpokenLanguage;


class SpokenLanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('spoken_languages')->delete();
        SpokenLanguage::create([
            'id' => 1,
            'key' => 'uk',
            'reading' => 1,
            'spelling' => 1,
            'exposition' => 1,
            'status' => 1
        ]);

        SpokenLanguage::create([
            'id' => 2,
            'key' => 'ru',
            'reading' => 1,
            'spelling' => 1,
            'exposition' => 1,
            'status' => 1
        ]);

        SpokenLanguage::create([
            'id' => 3,
            'key' => 'en',
            'reading' => 1,
            'spelling' => 1,
            'exposition' => 1,
            'status' => 1
        ]);
    }
}
