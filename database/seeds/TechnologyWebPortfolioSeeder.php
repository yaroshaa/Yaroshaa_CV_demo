<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\TechnologyWebPortfolio;

class TechnologyWebPortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('technology_web_portfolio')->delete();
        //1
        TechnologyWebPortfolio::create([
            'web_portfolio_id' => 1,
            'technology_id' => 13
        ]);
        TechnologyWebPortfolio::create([
            'web_portfolio_id' => 1,
            'technology_id' => 6
        ]);

        //2
        TechnologyWebPortfolio::create([
            'web_portfolio_id' => 2,
            'technology_id' => 14
        ]);
        TechnologyWebPortfolio::create([
            'web_portfolio_id' => 2,
            'technology_id' => 6
        ]);

        //3
        TechnologyWebPortfolio::create([
            'web_portfolio_id' => 3,
            'technology_id' => 14
        ]);
        TechnologyWebPortfolio::create([
            'web_portfolio_id' => 3,
            'technology_id' => 15
        ]);
        TechnologyWebPortfolio::create([
            'web_portfolio_id' => 3,
            'technology_id' => 6
        ]);

        //4
        TechnologyWebPortfolio::create([
            'web_portfolio_id' => 4,
            'technology_id' => 16
        ]);
        TechnologyWebPortfolio::create([
            'web_portfolio_id' => 4,
            'technology_id' => 6
        ]);


         //5
         TechnologyWebPortfolio::create([
            'web_portfolio_id' => 5,
            'technology_id' => 14
        ]);
        TechnologyWebPortfolio::create([
            'web_portfolio_id' => 5,
            'technology_id' => 6
        ]);


         //6
         TechnologyWebPortfolio::create([
            'web_portfolio_id' => 6,
            'technology_id' => 14
        ]);
        TechnologyWebPortfolio::create([
            'web_portfolio_id' => 6,
            'technology_id' => 6
        ]);


         //7
         TechnologyWebPortfolio::create([
            'web_portfolio_id' => 7,
            'technology_id' => 1
        ]);
        TechnologyWebPortfolio::create([
            'web_portfolio_id' => 7,
            'technology_id' => 6
        ]);


         //8
         TechnologyWebPortfolio::create([
            'web_portfolio_id' => 8,
            'technology_id' => 13
        ]);
        TechnologyWebPortfolio::create([
            'web_portfolio_id' => 8,
            'technology_id' => 6
        ]);

         //9
         TechnologyWebPortfolio::create([
            'web_portfolio_id' => 9,
            'technology_id' => 14
        ]);
        TechnologyWebPortfolio::create([
            'web_portfolio_id' => 9,
            'technology_id' => 6
        ]);


         //10

        TechnologyWebPortfolio::create([
            'web_portfolio_id' => 10,
            'technology_id' => 6
        ]);

        TechnologyWebPortfolio::create([
            'web_portfolio_id' => 10,
            'technology_id' => 24
        ]);



        //11
        TechnologyWebPortfolio::create([
            'web_portfolio_id' => 11,
            'technology_id' => 6
        ]);
        TechnologyWebPortfolio::create([
            'web_portfolio_id' => 11,
            'technology_id' => 24
        ]);


         //12
         TechnologyWebPortfolio::create([
            'web_portfolio_id' => 12,
            'technology_id' => 14
        ]);
        TechnologyWebPortfolio::create([
            'web_portfolio_id' => 12,
            'technology_id' => 6
        ]);


         //13
         TechnologyWebPortfolio::create([
            'web_portfolio_id' => 13,
            'technology_id' => 14
        ]);
        TechnologyWebPortfolio::create([
            'web_portfolio_id' => 13,
            'technology_id' => 6
        ]);

         //14
         TechnologyWebPortfolio::create([
            'web_portfolio_id' => 14,
            'technology_id' => 14
        ]);
        TechnologyWebPortfolio::create([
            'web_portfolio_id' => 14,
            'technology_id' => 6
        ]);


         //15
         TechnologyWebPortfolio::create([
            'web_portfolio_id' => 15,
            'technology_id' => 14
        ]);
        TechnologyWebPortfolio::create([
            'web_portfolio_id' => 15,
            'technology_id' => 24
        ]);


         //16
         TechnologyWebPortfolio::create([
            'web_portfolio_id' => 16,
            'technology_id' => 14
        ]);
        TechnologyWebPortfolio::create([
            'web_portfolio_id' => 16,
            'technology_id' => 6
        ]);


         //17
         TechnologyWebPortfolio::create([
            'web_portfolio_id' => 17,
            'technology_id' => 14
        ]);
        TechnologyWebPortfolio::create([
            'web_portfolio_id' => 17,
            'technology_id' => 6
        ]);


         //18
        TechnologyWebPortfolio::create([
            'web_portfolio_id' => 18,
            'technology_id' => 14
        ]);
        TechnologyWebPortfolio::create([
            'web_portfolio_id' => 18,
            'technology_id' => 6
        ]);


         //19
        TechnologyWebPortfolio::create([
            'web_portfolio_id' => 19,
            'technology_id' => 1
        ]);
        TechnologyWebPortfolio::create([
            'web_portfolio_id' => 19,
            'technology_id' => 4
        ]);
        TechnologyWebPortfolio::create([
            'web_portfolio_id' => 19,
            'technology_id' => 5
        ]);

        //20
         TechnologyWebPortfolio::create([
            'web_portfolio_id' => 20,
            'technology_id' => 6
        ]);
        TechnologyWebPortfolio::create([
            'web_portfolio_id' => 20,
            'technology_id' => 7
        ]);
        TechnologyWebPortfolio::create([
            'web_portfolio_id' => 20,
            'technology_id' => 8
        ]);
        TechnologyWebPortfolio::create([
            'web_portfolio_id' => 20,
            'technology_id' => 24
        ]);

         //21
         TechnologyWebPortfolio::create([
            'web_portfolio_id' => 21,
            'technology_id' => 14
        ]);
        TechnologyWebPortfolio::create([
            'web_portfolio_id' => 21,
            'technology_id' => 6
        ]);


         //22
         TechnologyWebPortfolio::create([
            'web_portfolio_id' => 22,
            'technology_id' => 13
        ]);
        TechnologyWebPortfolio::create([
            'web_portfolio_id' => 22,
            'technology_id' => 6
        ]);

        //23
        TechnologyWebPortfolio::create([
            'web_portfolio_id' => 23,
            'technology_id' => 13
        ]);
        TechnologyWebPortfolio::create([
            'web_portfolio_id' => 23,
            'technology_id' => 6
        ]);


    }
}
