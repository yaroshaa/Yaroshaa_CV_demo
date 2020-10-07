<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\LangGroupPortfolio;

class LangGroupPortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lang_group_portfolio')->delete();
        LangGroupPortfolio::create([
            'lang_id' => 1,
            'group_portfolio_id' => 1,
            'name' => 'Інтернет Магазин',
            'description' => 'Опис Магазин'
        ]);

        LangGroupPortfolio::create([
            'lang_id' => 2,
            'group_portfolio_id' => 1,
            'name' => 'Интернет Магазин',
            'description' => 'Описание Магазин'
        ]);

        LangGroupPortfolio::create([
            'lang_id' => 3,
            'group_portfolio_id' => 1,
            'name' => 'Web Shop',
            'description' => 'Description Web Shop'
        ]);

        /////

        LangGroupPortfolio::create([
            'lang_id' => 1,
            'group_portfolio_id' => 2,
            'name' => 'Landing Page',
            'description' => 'Опис Landing Page'
        ]);

        LangGroupPortfolio::create([
            'lang_id' => 2,
            'group_portfolio_id' => 2,
            'name' => 'Landing Page',
            'description' => 'Описание Landing Page'
        ]);

        LangGroupPortfolio::create([
            'lang_id' => 3,
            'group_portfolio_id' => 2,
            'name' => 'Landing Page',
            'description' => 'Description Landing Page'
        ]);

        /////

        LangGroupPortfolio::create([
            'lang_id' => 1,
            'group_portfolio_id' => 3,
            'name' => 'Сайт',
            'description' => 'Опис Сайт'
        ]);

        LangGroupPortfolio::create([
            'lang_id' => 2,
            'group_portfolio_id' => 3,
            'name' => 'Сайт',
            'description' => 'Описание Сайт'
        ]);

        LangGroupPortfolio::create([
            'lang_id' => 3,
            'group_portfolio_id' => 3,
            'name' => 'Web Site',
            'description' => 'Description Web Site'
        ]);

        /////

        LangGroupPortfolio::create([
            'lang_id' => 1,
            'group_portfolio_id' => 4,
            'name' => 'Дизайн',
            'description' => 'Опис Дизайн'
        ]);

        LangGroupPortfolio::create([
            'lang_id' => 2,
            'group_portfolio_id' => 4,
            'name' => 'Дизайн',
            'description' => 'Описание Дизайн'
        ]);

        LangGroupPortfolio::create([
            'lang_id' => 3,
            'group_portfolio_id' => 4,
            'name' => 'Design',
            'description' => 'Description Design'
        ]);



    }
}
