<?php

use Illuminate\Database\Seeder;
use App\Models\LangWebPortfolio;
use Illuminate\Support\Facades\DB;



class LangWebPortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lang_web_portfolio')->delete();
        //1
        LangWebPortfolio::create([
            'lang_id' => 1,
            'web_portfolio_id' => 1,
            'name' => 'Bereginia',
            'description' => 'Магазин косметики і еко-товарів',
            'full_text' => 'Магазин косметики і еко-товарів'
        ]);
        LangWebPortfolio::create([
            'lang_id' => 2,
            'web_portfolio_id' => 1,
            'name' => 'Bereginia',
            'description' => 'Магазин косметики и эко-товаров',
            'full_text' => 'Магазин косметики и эко-товаров'
        ]);
        LangWebPortfolio::create([
            'lang_id' => 3,
            'web_portfolio_id' => 1,
            'name' => 'Bereginia',
            'description' => 'Сosmetics and eco-goods store',
            'full_text' => 'Сosmetics and eco-goods store'
        ]);

        //2
        LangWebPortfolio::create([
            'lang_id' => 1,
            'web_portfolio_id' => 2,
            'name' => 'МосПромКабель',
            'description' => 'МосПромКабель',
            'full_text' => 'МосПромКабель'
        ]);
        LangWebPortfolio::create([
            'lang_id' => 2,
            'web_portfolio_id' => 2,
            'name' => 'МосПромКабель',
            'description' => 'МосПромКабель',
            'full_text' => 'МосПромКабель'
        ]);
        LangWebPortfolio::create([
            'lang_id' => 3,
            'web_portfolio_id' => 2,
            'name' => 'MosPromKabel',
            'description' => 'Сosmetics and eco-goods store',
            'full_text' => 'Сosmetics and eco-goods store'
        ]);

        //3
        LangWebPortfolio::create([
            'lang_id' => 1,
            'web_portfolio_id' => 3,
            'name' => 'Healthyway Production Inc.',
            'description' => 'Офіційний сайт компанії Healthyway Production Inc. ',
            'full_text' => 'Офіційний сайт компанії Healthyway Production Inc. '
        ]);
        LangWebPortfolio::create([
            'lang_id' => 2,
            'web_portfolio_id' => 3,
            'name' => 'Healthyway Production Inc.',
            'description' => 'Официальный сайт компании Healthyway Production Inc.',
            'full_text' => 'Официальный сайт компании Healthyway Production Inc. '
        ]);
        LangWebPortfolio::create([
            'lang_id' => 3,
            'web_portfolio_id' => 3,
            'name' => 'Healthyway Production Inc.',
            'description' => 'Official site of Healthyway Production Inc. company',
            'full_text' => 'Official site of Healthyway Production Inc. company'
        ]);


        //4
        LangWebPortfolio::create([
            'lang_id' => 1,
            'web_portfolio_id' => 4,
            'name' => 'Наука краси',
            'description' => 'Офіційний представник SherCosmetics',
            'full_text' => 'Офіційний представник SherCosmetics'
        ]);
        LangWebPortfolio::create([
            'lang_id' => 2,
            'web_portfolio_id' => 4,
            'name' => 'Наука красоты',
            'description' => 'Официальный представитель SherCosmetics',
            'full_text' => 'Официальный представитель SherCosmetics'
        ]);
        LangWebPortfolio::create([
            'lang_id' => 3,
            'web_portfolio_id' => 4,
            'name' => 'Beauty science',
            'description' => 'SherCosmetics Official',
            'full_text' => 'SherCosmetics Official'
        ]);

        //5
        LangWebPortfolio::create([
            'lang_id' => 1,
            'web_portfolio_id' => 5,
            'name' => 'Новосибірск - Кабель',
            'description' => '',
            'full_text' => ''
        ]);
        LangWebPortfolio::create([
            'lang_id' => 2,
            'web_portfolio_id' => 5,
            'name' => 'Новосибірск - Кабель',
            'description' => '',
            'full_text' => ''
        ]);
        LangWebPortfolio::create([
            'lang_id' => 3,
            'web_portfolio_id' => 5,
            'name' => 'Novosibirsk - Cable',
            'description' => '',
            'full_text' => ''
        ]);

        //6
        LangWebPortfolio::create([
            'lang_id' => 1,
            'web_portfolio_id' => 6,
            'name' => 'Naukaavicenna',
            'description' => '',
            'full_text' => ''
        ]);
        LangWebPortfolio::create([
            'lang_id' => 2,
            'web_portfolio_id' => 6,
            'name' => 'Naukaavicenna',
            'description' => '',
            'full_text' => ''
        ]);
        LangWebPortfolio::create([
            'lang_id' => 3,
            'web_portfolio_id' => 6,
            'name' => 'Naukaavicenna',
            'description' => '',
            'full_text' => ''
        ]);

        //7
        LangWebPortfolio::create([
            'lang_id' => 1,
            'web_portfolio_id' => 7,
            'name' => 'Motodevices',
            'description' => 'Магазин комплектуючих для мототехніки',
            'full_text' => 'Магазин комплектуючих для мототехніки'
        ]);
        LangWebPortfolio::create([
            'lang_id' => 2,
            'web_portfolio_id' => 7,
            'name' => 'Motodevices',
            'description' => 'Магазин комплектующих для мототехники',
            'full_text' => 'Магазин комплектующих для мототехники'
        ]);
        LangWebPortfolio::create([
            'lang_id' => 3,
            'web_portfolio_id' => 7,
            'name' => 'Motodevices',
            'description' => 'Motorcycle parts store',
            'full_text' => 'Motorcycle parts store'
        ]);

        //8
        LangWebPortfolio::create([
            'lang_id' => 1,
            'web_portfolio_id' => 8,
            'name' => 'Сектор Здоров\'я',
            'description' => 'Сайт аптеки Сектор Здоров\'я',
            'full_text' => ' Сектор Здоров\'я'
        ]);
        LangWebPortfolio::create([
            'lang_id' => 2,
            'web_portfolio_id' => 8,
            'name' => 'Сектор Здоровья',
            'description' => 'Сайт аптеки сектор здоровья',
            'full_text' => 'Сайт аптеки сектор здоровья'
        ]);
        LangWebPortfolio::create([
            'lang_id' => 3,
            'web_portfolio_id' => 8,
            'name' => 'Сектор Здоровья',
            'description' => 'Pharmacy site',
            'full_text' => 'Pharmacy site'
        ]);

        //9
        LangWebPortfolio::create([
            'lang_id' => 1,
            'web_portfolio_id' => 9,
            'name' => 'ПромКабельЕнерго',
            'description' => '',
            'full_text' => ''
        ]);
        LangWebPortfolio::create([
            'lang_id' => 2,
            'web_portfolio_id' => 9,
            'name' => 'ПромКабельЭнерго',
            'description' => '',
            'full_text' => ''
        ]);
        LangWebPortfolio::create([
            'lang_id' => 3,
            'web_portfolio_id' => 9,
            'name' => ' PromCabelEnergo',
            'description' => '',
            'full_text' => ''
        ]);

        //10
        LangWebPortfolio::create([
            'lang_id' => 1,
            'web_portfolio_id' => 10,
            'name' => 'Yaaco',
            'description' => 'Сайт компанії Yaaco',
            'full_text' => 'Сайт компанії Yaaco'
        ]);
        LangWebPortfolio::create([
            'lang_id' => 2,
            'web_portfolio_id' => 10,
            'name' => 'Yaaco',
            'description' => 'Сайт компании Yaaco',
            'full_text' => 'Сайт компании Yaaco'
        ]);
        LangWebPortfolio::create([
            'lang_id' => 3,
            'web_portfolio_id' => 10,
            'name' => 'Yaaco',
            'description' => 'Site Yaaco company',
            'full_text' => 'Site Yaaco company'
        ]);

        //11
        LangWebPortfolio::create([
            'lang_id' => 1,
            'web_portfolio_id' => 11,
            'name' => 'Svetlanabeauty',
            'description' => '',
            'full_text' => ''
        ]);
        LangWebPortfolio::create([
            'lang_id' => 2,
            'web_portfolio_id' => 11,
            'name' => 'Svetlanabeauty',
            'description' => '',
            'full_text' => ''
        ]);
        LangWebPortfolio::create([
            'lang_id' => 3,
            'web_portfolio_id' => 11,
            'name' => 'Svetlanabeauty',
            'description' => '',
            'full_text' => ''
        ]);

        //12
        LangWebPortfolio::create([
            'lang_id' => 1,
            'web_portfolio_id' => 12,
            'name' => 'Домовенок',
            'description' => 'Сайт приватного дитячого садка',
            'full_text' => 'Сайт приватного дитячого садка'
        ]);
        LangWebPortfolio::create([
            'lang_id' => 2,
            'web_portfolio_id' => 12,
            'name' => 'Домовенок',
            'description' => 'Сайт частного детского сада',
            'full_text' => 'Сайт частного детского сада'
        ]);
        LangWebPortfolio::create([
            'lang_id' => 3,
            'web_portfolio_id' => 12,
            'name' => 'Домовенок',
            'description' => 'Private kindergarten site',
            'full_text' => 'Private kindergarten site'
        ]);

        //13
        LangWebPortfolio::create([
            'lang_id' => 1,
            'web_portfolio_id' => 13,
            'name' => 'Socelin',
            'description' => ' ',
            'full_text' => ''
        ]);
        LangWebPortfolio::create([
            'lang_id' => 2,
            'web_portfolio_id' => 13,
            'name' => 'Socelin',
            'description' => '',
            'full_text' => ''
        ]);
        LangWebPortfolio::create([
            'lang_id' => 3,
            'web_portfolio_id' => 13,
            'name' => 'Socelin',
            'description' => '',
            'full_text' => ''
        ]);

        //14
        LangWebPortfolio::create([
            'lang_id' => 1,
            'web_portfolio_id' => 14,
            'name' => 'Toeurope',
            'description' => ' ',
            'full_text' => ''
        ]);
        LangWebPortfolio::create([
            'lang_id' => 2,
            'web_portfolio_id' => 14,
            'name' => 'Toeurope',
            'description' => '',
            'full_text' => ''
        ]);
        LangWebPortfolio::create([
            'lang_id' => 3,
            'web_portfolio_id' => 14,
            'name' => 'Toeurope',
            'description' => '',
            'full_text' => ''
        ]);

        //15
        LangWebPortfolio::create([
            'lang_id' => 1,
            'web_portfolio_id' => 15,
            'name' => 'Xopc',
            'description' => ' ',
            'full_text' => ''
        ]);
        LangWebPortfolio::create([
            'lang_id' => 2,
            'web_portfolio_id' => 15,
            'name' => 'Xopc',
            'description' => '',
            'full_text' => ''
        ]);
        LangWebPortfolio::create([
            'lang_id' => 3,
            'web_portfolio_id' => 15,
            'name' => 'Xopc',
            'description' => '',
            'full_text' => ''
        ]);

        //16
        LangWebPortfolio::create([
            'lang_id' => 1,
            'web_portfolio_id' => 16,
            'name' => 'Дядя Паша',
            'description' => ' ',
            'full_text' => ''
        ]);
        LangWebPortfolio::create([
            'lang_id' => 2,
            'web_portfolio_id' => 16,
            'name' => 'Дядя Паша',
            'description' => '',
            'full_text' => ''
        ]);
        LangWebPortfolio::create([
            'lang_id' => 3,
            'web_portfolio_id' => 16,
            'name' => 'Дядя Паша',
            'description' => '',
            'full_text' => ''
        ]);

        //17
        LangWebPortfolio::create([
            'lang_id' => 1,
            'web_portfolio_id' => 17,
            'name' => 'ЗПТКЛ',
            'description' => ' ',
            'full_text' => ''
        ]);
        LangWebPortfolio::create([
            'lang_id' => 2,
            'web_portfolio_id' => 17,
            'name' => 'ЗПТКЛ',
            'description' => '',
            'full_text' => ''
        ]);
        LangWebPortfolio::create([
            'lang_id' => 3,
            'web_portfolio_id' => 17,
            'name' => 'ZPTCL',
            'description' => '',
            'full_text' => ''
        ]);

        //18
        LangWebPortfolio::create([
            'lang_id' => 1,
            'web_portfolio_id' => 18,
            'name' => 'ДокПроф',
            'description' => ' ',
            'full_text' => ''
        ]);
        LangWebPortfolio::create([
            'lang_id' => 2,
            'web_portfolio_id' => 18,
            'name' => 'ДокПроф',
            'description' => '',
            'full_text' => ''
        ]);
        LangWebPortfolio::create([
            'lang_id' => 3,
            'web_portfolio_id' => 18,
            'name' => 'DocProf',
            'description' => '',
            'full_text' => ''
        ]);

        //19
        LangWebPortfolio::create([
            'lang_id' => 1,
            'web_portfolio_id' => 19,
            'name' => 'Iotamaze',
            'description' => ' ',
            'full_text' => ''
        ]);
        LangWebPortfolio::create([
            'lang_id' => 2,
            'web_portfolio_id' => 19,
            'name' => 'Iotamaze',
            'description' => '',
            'full_text' => ''
        ]);
        LangWebPortfolio::create([
            'lang_id' => 3,
            'web_portfolio_id' => 19,
            'name' => 'Iotamaze',
            'description' => '',
            'full_text' => ''
        ]);

        //20
        LangWebPortfolio::create([
            'lang_id' => 1,
            'web_portfolio_id' => 20,
            'name' => 'EKTA Presentation',
            'description' => ' ',
            'full_text' => ''
        ]);
        LangWebPortfolio::create([
            'lang_id' => 2,
            'web_portfolio_id' => 20,
            'name' => 'EKTA Presentation',
            'description' => '',
            'full_text' => ''
        ]);
        LangWebPortfolio::create([
            'lang_id' => 3,
            'web_portfolio_id' => 20,
            'name' => 'EKTA Presentation',
            'description' => '',
            'full_text' => ''
        ]);

        //21
        LangWebPortfolio::create([
            'lang_id' => 1,
            'web_portfolio_id' => 21,
            'name' => 'Лекафарм',
            'description' => ' ',
            'full_text' => ''
        ]);
        LangWebPortfolio::create([
            'lang_id' => 2,
            'web_portfolio_id' => 21,
            'name' => 'Лекафарм',
            'description' => '',
            'full_text' => ''
        ]);
        LangWebPortfolio::create([
            'lang_id' => 3,
            'web_portfolio_id' => 21,
            'name' => 'Lecafarm',
            'description' => '',
            'full_text' => ''
        ]);

        //22
        LangWebPortfolio::create([
            'lang_id' => 1,
            'web_portfolio_id' => 22,
            'name' => 'ДезинфекТОР',
            'description' => ' ',
            'full_text' => ''
        ]);
        LangWebPortfolio::create([
            'lang_id' => 2,
            'web_portfolio_id' => 22,
            'name' => 'ДезінфекТОР',
            'description' => '',
            'full_text' => ''
        ]);
        LangWebPortfolio::create([
            'lang_id' => 3,
            'web_portfolio_id' => 22,
            'name' => 'DezinfecTOP',
            'description' => '',
            'full_text' => ''
        ]);

        //22
        LangWebPortfolio::create([
            'lang_id' => 1,
            'web_portfolio_id' => 23,
            'name' => 'Хорт',
            'description' => ' ',
            'full_text' => ''
        ]);
        LangWebPortfolio::create([
            'lang_id' => 2,
            'web_portfolio_id' => 23,
            'name' => 'Хорт',
            'description' => '',
            'full_text' => ''
        ]);
        LangWebPortfolio::create([
            'lang_id' => 3,
            'web_portfolio_id' => 23,
            'name' => 'Hort',
            'description' => '',
            'full_text' => ''
        ]);

    }
}
