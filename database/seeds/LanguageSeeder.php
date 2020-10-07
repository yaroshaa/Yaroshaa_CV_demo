<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Language;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('language')->delete();
        Language::create([

            'key' => 'uk',
            'name' => 'Українська',
            'status' => 1

        ]);

        Language::create([

            'key' => 'ru',
            'name' => 'Русский',
            'status' => 1

        ]);
        
        Language::create([

            'key' => 'en',
            'name' => 'English',
            'status' => 1

        ]);

        
    }
}
