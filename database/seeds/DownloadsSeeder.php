<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Download;

class DownloadsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('downloads')->delete();      
        Download::create([
            'lang_id' => 1,  
            'link' => '/cv_uk.pdf',        
            'status' => 1,
        ]);
        Download::create([
            'lang_id' => 2,  
            'link' => '/cv_ru.pdf',        
            'status' => 1,
        ]);
        Download::create([
            'lang_id' => 3,  
            'link' => '/cv_en.pdf',        
            'status' => 1,
        ]);

    }
}
