<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Education;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('education')->delete();  

        Education::create([            
            'id' => 1,
            'order' => 3, 
            'date_start' => '1996',
            'date_stop' => '1997',
            'number_ed' => 'first',
            'status' => 1
        ]);

        Education::create([            
            'id' => 2,
            'order' => 5, 
            'date_start' => '1997',
            'date_stop' => '2003',
            'number_ed' => 'second',
            'status' => 1
        ]);          

        Education::create([            
            'id' => 3,
            'order' => 2, 
            'date_start' => '2015',
            'date_stop' => '2015',
            'number_ed' => 'third',
            'status' => 1
        ]); 

        Education::create([            
            'id' => 4,
            'order' => 1, 
            'date_start' => '2015',
            'date_stop' => '2016',
            'number_ed' => 'third',
            'status' => 1
        ]); 

        Education::create([            
            'id' => 5,
            'order' => 4, 
            'date_start' => '2013',
            'date_stop' => '2013',
            'number_ed' => 'additionally',
            'status' => 1
        ]); 
                      
    }
}
