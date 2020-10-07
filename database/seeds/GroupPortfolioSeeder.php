<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\GroupPortfolio;

class GroupPortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('group_portfolio')->delete();
        GroupPortfolio::create([
            'id' => 1,
            'key' => 'shop',
            'icon' => '',
            'nav_class' => 'shop',
            'status' => 1,
            'order' => 1
        ]);

        GroupPortfolio::create([
            'id' => 2,
            'key' => 'landing',
            'icon' => '',
            'nav_class' => 'landing',
            'status' => 1,
            'order' => 2
        ]);

        GroupPortfolio::create([
            'id' => 3,
            'key' => 'website',
            'icon' => '',
            'nav_class' => 'website',
            'status' => 1,
            'order' => 3
        ]);

        GroupPortfolio::create([
            'id' => 4,
            'key' => 'art',
            'icon' => '',
            'nav_class' => 'art',
            'status' => 1,
            'order' => 4
        ]);
    }
}
