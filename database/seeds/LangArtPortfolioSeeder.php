<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\LangArtPortfolio;

class LangArtPortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lang_art_portfolio')->delete();       
        LangArtPortfolio::create([

            'lang_id' => 2,
            'art_portfolio_id' => 1,
            'name' => 'Name_1',   
            'description' => 'Description_1'

        ]); 

        LangArtPortfolio::create([

            'lang_id' => 2,
            'art_portfolio_id' => 2,
            'name' => 'Name_2',   
            'description' => 'Description_2'

        ]); 

        LangArtPortfolio::create([

            'lang_id' => 2,
            'art_portfolio_id' => 3,
            'name' => 'Name_3',   
            'description' => 'Description_3'

        ]); 

        LangArtPortfolio::create([

            'lang_id' => 2,
            'art_portfolio_id' => 4,
            'name' => 'Name_4',   
            'description' => 'Description_4'

        ]); 

        LangArtPortfolio::create([

            'lang_id' => 2,
            'art_portfolio_id' => 5,
            'name' => 'Name_5',   
            'description' => 'Description_6'

        ]); 

        LangArtPortfolio::create([

            'lang_id' => 2,
            'art_portfolio_id' => 6,
            'name' => 'Name_6',   
            'description' => 'Description_6'

        ]); 

        LangArtPortfolio::create([

            'lang_id' => 2,
            'art_portfolio_id' => 7,
            'name' => 'Name_7',   
            'description' => 'Description_7'

        ]); 

        LangArtPortfolio::create([

            'lang_id' => 2,
            'art_portfolio_id' => 8,
            'name' => 'Name_8',   
            'description' => 'Description_8'

        ]); 

        LangArtPortfolio::create([

            'lang_id' => 2,
            'art_portfolio_id' => 9,
            'name' => 'Name_9',   
            'description' => 'Description_9'

        ]); 

        LangArtPortfolio::create([

            'lang_id' => 2,
            'art_portfolio_id' => 10,
            'name' => 'Name_10',   
            'description' => 'Description_10'

        ]); 
        
        
    }
}
