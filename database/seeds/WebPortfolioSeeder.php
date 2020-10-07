<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\WebPortfolio;


class WebPortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('web_portfolio')->delete();
        WebPortfolio::create([
            'id' => 1,
            'group' => 'shop',
            'thumb' => 'bereginia-thumb.png',
            'img_link' => 'bereginia.png',
            'demo_link' => '/demo/bereginia/index.html',
            'web_link' => '',
            'new_work' => 1,
            'status' => 1,
            'order' => 1
        ]);

        WebPortfolio::create([
            'id' => 2,
            'group' => 'landing',
            'thumb' => 'mospromkabel-thumb.png',
            'img_link' => 'mospromkabel.png',
            'demo_link' => '/demo/mospromkabel/index.html',
            'web_link' => '',
            'status' => 1,
            'order' => 100
        ]);

        WebPortfolio::create([
            'id' => 3,
            'group' => 'website',
            'thumb' => 'healthyway-thumb.png',
            'img_link' => 'healthyway.png',
            'demo_link' => '',
            'web_link' => 'http://healthyway.com.ua',
            'new_work' => 1,
            'status' => 1,
            'order' => 3
        ]);

        WebPortfolio::create([
            'id' => 4,
            'group' => 'website',
            'thumb' => 'naukaikrasa-thumb.png',
            'img_link' => 'naukaikrasa.png',
            'demo_link' => '',
            'web_link' => 'http://naukaikrasa.com',
            'new_work' => 1,
            'status' => 1,
            'order' => 5
        ]);

        WebPortfolio::create([
            'id' => 5,
            'group' => 'landing',
            'thumb' => 'novosib-cabel-thumb.png',
            'img_link' => '/novosib-cabel.png',
            'demo_link' => '/demo/novosib-cabel/index.html',
            'web_link' => '',
            'status' => 1,
            'order' => 100
        ]);

        WebPortfolio::create([
            'id' => 6,
            'group' => 'website',
            'thumb' => 'naukaavicenna-thumb.png',
            'img_link' => 'naukaavicenna.png',
            'demo_link' => '/demo/naukaavicenna.html',
            'web_link' => 'http://naukaavicenna.yaroshaa.com',
            'new_work' => 1,
            'status' => 1,
            'order' => 9
        ]);

        WebPortfolio::create([
            'id' => 7,
            'group' => 'shop',
            'thumb' => 'motodevices-thumb.png',
            'img_link' => 'motodevices.png',
            'demo_link' => '/demo/motodevices/index.html',
            'web_link' => '',
            'new_work' => 1,
            'status' => 1,
            'order' => 4
        ]);

        WebPortfolio::create([
            'id' => 8,
            'group' => 'shop',
            'thumb' => 'sectorzdorovya-thumb.png',
            'img_link' => 'sectorzdorovya.png',
            'demo_link' => '/demo/sectorzdorovya/index.html',
            'web_link' => 'http://sectorzdorovya.com',
            'new_work' => 1,
            'status' => 1,
            'order' => 12
        ]);

        WebPortfolio::create([
            'id' => 9,
            'group' => 'landing',
            'thumb' => 'promcabel-thumb.png',
            'img_link' => 'promcabel.png',
            'demo_link' => '/demo/promcabel/index.html',
            'web_link' => '',
            'status' => 1,
            'order' => 100
        ]);

        WebPortfolio::create([
            'id' => 10,
            'group' => 'landing',
            'thumb' => 'yaaco-thumb.png',
            'img_link' => 'yaaco.png',
            'demo_link' => '/demo/yaaco/index.html',
            'web_link' => 'http://yaaco.yaroshaa.com/',
            'new_work' => 1,
            'status' => 1,
            'order' => 2
        ]);

        WebPortfolio::create([
            'id' => 11,
            'group' => 'website',
            'thumb' => 'beautysalon-thumb.png',
            'img_link' => 'beautysalon.png',
            'demo_link' => '/demo/beautysalon/index.html',
            'web_link' => 'http://svetlanabeautysalon.yaroshaa.com/',
            'new_work' => 1,
            'status' => 1,
            'order' => 8
        ]);

        WebPortfolio::create([
            'id' => 12,
            'group' => 'website',
            'thumb' => 'domovenock-thumb.png',
            'img_link' => 'domovenock.png',
            'demo_link' => '/demo/domovenock/index.html',
            'web_link' => 'http://domovenock.com/',
            'new_work' => 1,
            'status' => 1,
            'order' => 14
        ]);

        WebPortfolio::create([
            'id' => 13,
            'group' => 'website',
            'thumb' => 'socelin-thumb.png',
            'img_link' => 'socelin.png',
            'demo_link' => '/demo/socelin/index.html',
            'web_link' => 'https://socelin.ru/',
            'new_work' => 1,
            'status' => 1,
            'order' => 13
        ]);

        WebPortfolio::create([
            'id' => 14,
            'group' => 'website',
            'thumb' => 'toeurope-thumb.png',
            'img_link' => 'toeurope.png',
            'demo_link' => '/demo/toeurope/index.html',
            'web_link' => 'http://toeurope.yaroshaa.com',
            'new_work' => 1,
            'status' => 1,
            'order' => 15
        ]);

        WebPortfolio::create([
            'id' => 15,
            'group' => 'website',
            'thumb' => 'xopc-thumb.png',
            'img_link' => 'xopc.png',
            'demo_link' => '/demo/xopc/index.html',
            'web_link' => 'http://xopc.yaroshaa.com',
            'new_work' => 1,
            'status' => 1,
            'order' => 6
        ]);

        WebPortfolio::create([
            'id' => 16,
            'group' => 'website',
            'thumb' => 'dyadya-pasha-thumb.png',
            'img_link' => 'dyadya-pasha.png',
            'demo_link' => '/demo/dyadya-pasha/index.html',
            'web_link' => 'https://dyadya-pasha.com/',
            'new_work' => 1,
            'status' => 1,
            'order' => 7
        ]);

        WebPortfolio::create([
            'id' => 17,
            'group' => 'website',
            'thumb' => 'zptkl-thumb.png',
            'img_link' => 'zptkl.png',
            'demo_link' => '/demo/zptkl/index.html',
            'web_link' => 'http://zptkl.yaroshaa.com',
            'status' => 1,
            'order' => 0
        ]);

        WebPortfolio::create([
            'id' => 18,
            'group' => 'website',
            'thumb' => 'docprof-thumb.png',
            'img_link' => 'docprof.png',
            'demo_link' => '/demo/docprof/index.html',
            'web_link' => 'http://newsite.docprof.com.ua',
            'status' => 1,
            'order' => 0
        ]);

        WebPortfolio::create([
            'id' => 19,
            'group' => 'website',
            'thumb' => 'iotamaze-thumb.png',
            'img_link' => 'iotamaze.png',
            'demo_link' => '/demo/iotamaze/index.html',
            'web_link' => 'http://iotamaze.io',
            'status' => 1,
            'order' => 0
        ]);

        WebPortfolio::create([
            'id' => 20,
            'group' => 'website',
            'thumb' => 'ektapresent-thumb.png',
            'img_link' => 'ektapresent.png',
            'demo_link' => '/demo/ektapresent/index.html',
            'web_link' => 'http://ektapresent.yaroshaa.com',
            'status' => 0,
            'order' => 0
        ]);

        WebPortfolio::create([
            'id' => 21,
            'group' => 'website',
            'thumb' => 'lekafarm-thumb.png',
            'img_link' => 'lekafarm.png',
            'demo_link' => '/demo/lekafarm/index.html',
            'web_link' => 'http://lekafarm.yaroshaa.com',
            'status' => 0,
            'order' => 0
        ]);

        WebPortfolio::create([
            'id' => 22,
            'group' => 'shop',
            'thumb' => 'dezinfector-thumb.png',
            'img_link' => 'dezinfector.png',
            'demo_link' => '/demo/dezinfector/index.html',
            'web_link' => 'http://dezinfector.yaroshaa.com',
            'new_work' => 1,
            'status' => 1,
            'order' => 11
        ]);

        WebPortfolio::create([
            'id' => 23,
            'group' => 'shop',
            'thumb' => 'hort-thumb.png',
            'img_link' => 'hort.png',
            'demo_link' => '',
            'web_link' => 'http://hort.in.ua',
            'new_work' => 1,
            'status' => 1,
            'order' => 10
        ]);



    }
}
