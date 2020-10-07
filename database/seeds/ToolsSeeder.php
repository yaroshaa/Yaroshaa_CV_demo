<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Tools;


class ToolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tools')->delete();
        Tools::create([
            'name' => 'Linux',
            'link_img' => '/tools/linux.png',
            'order' => 1,
            'status' => 1
        ]);
        Tools::create([
            'name' => 'Windows',
            'link_img' => '/tools/windows.png',
            'order' => 2,
            'status' => 1
        ]);
        Tools::create([
            'name' => 'NetBeans',
            'link_img' => '/tools/netbeans.png',
            'order' => 3,
            'status' => 1
        ]);
        Tools::create([
            'name' => 'PHPStorm',
            'link_img' => '/tools/phpstorm.png',
            'order' => 4,
            'status' => 1
        ]);
        Tools::create([
            'name' => 'Visual Studio Code',
            'link_img' => '/tools/vsc.png',
            'order' => 5,
            'status' => 1
        ]);
        Tools::create([
            'name' => 'Gedit',
            'link_img' => '/tools/gedit.png',
            'order' => 6,
            'status' => 1
        ]);
        Tools::create([
            'name' => 'NotepadPlusPlus',
            'link_img' => '/tools/notepad.png',
            'order' => 7,
            'status' => 1
        ]);
        Tools::create([
            'name' => 'SmartGit',
            'link_img' => '/tools/smartgit.png',
            'order' => 8,
            'status' => 1
        ]);
        Tools::create([
            'name' => 'InDesign',
            'link_img' => '/tools/indesign.png',
            'order' => 9,
            'status' => 1
        ]);
        Tools::create([
            'name' => 'Photoshop',
            'link_img' => '/tools/photoshop.png',
            'order' => 10,
            'status' => 1
        ]);
        Tools::create([
            'name' => 'Illustrator',
            'link_img' => '/tools/illustrator.png',
            'order' => 11,
            'status' => 1
        ]);
        Tools::create([
            'name' => 'Gimp',
            'link_img' => '/tools/gimp.png',
            'order' => 12,
            'status' => 1
        ]);
        Tools::create([
            'name' => 'InkScape',
            'link_img' => '/tools/inkscape.png',
            'order' => 13,
            'status' => 1
        ]);
        Tools::create([
            'name' => 'Tambourine :)',
            'link_img' => '/tools/tambourine.png',
            'order' => 14,
            'status' => 0
        ]);

    }
}
