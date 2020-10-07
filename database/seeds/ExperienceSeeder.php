<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Experience;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('experience')->delete();        
        Experience::create([
            'id' => 1,
            'order' => 4, 
            'date_start' => '2009',
            'date_stop' => '2015',
            'status' => 1
        ]);   
        Experience::create([            
            'id' => 2,
            'order' => 3, 
            'date_start' => '2016',
            'date_stop' => '2017',
            'status' => 1
        ]);     
        Experience::create([            
            'id' => 3,
            'order' => 2, 
            'date_start' => '2017',
            'date_stop' => '2018',
            'status' => 1
        ]);   
        
        Experience::create([            
            'id' => 4,
            'order' => 1, 
            'date_start' => '2018',
            'date_stop' => 'now',
            'status' => 1
        ]);  
    }
}
