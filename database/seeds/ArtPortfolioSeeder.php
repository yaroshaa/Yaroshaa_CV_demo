<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\ArtPortfolio;


class ArtPortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('art_portfolio')->delete();
        ArtPortfolio::create([
            'id' => 1,
            'img_link' => '/img.png',
            'icon_svg' => '',
            'status' => 1,
            'order' => 0

        ]);

        ArtPortfolio::create([
            'id' => 2,
            'img_link' => '/img.png',
            'icon_svg' => '',
            'status' => 1,
            'order' => 0

        ]);

        ArtPortfolio::create([
            'id' => 3,
            'img_link' => '/img.png',
            'icon_svg' => '',
            'status' => 1,
            'order' => 0
        ]);

        ArtPortfolio::create([
            'id' => 4,
            'img_link' => '/img.png',
            'icon_svg' => '',
            'status' => 1,
            'order' => 0
        ]);

        ArtPortfolio::create([
            'id' => 5,
            'img_link' => '/img.png',
            'icon_svg' => '',
            'status' => 1,
            'order' => 0
        ]);

        ArtPortfolio::create([
            'id' => 6,
            'img_link' => '/img.png',
            'icon_svg' => '',
            'status' => 1,
            'order' => 0
        ]);

        ArtPortfolio::create([
            'id' => 7,
            'img_link' => '/img.png',
            'icon_svg' => '',
            'status' => 1,
            'order' => 0
        ]);


        ArtPortfolio::create([
            'id' => 8,
            'img_link' => '/img.png',
            'icon_svg' => '',
            'status' => 1,
            'order' => 0
        ]);

        ArtPortfolio::create([
            'id' => 9,
            'img_link' => '/img.png',
            'icon_svg' => '',
            'status' => 1,
            'order' => 0
        ]);

        ArtPortfolio::create([
            'id' => 10,
            'img_link' => '/img.png',
            'icon_svg' => '',
            'status' => 1,
            'order' => 0
        ]);
    }
}
