<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('technologies')->delete();
        Technology::create([
            'id' => 1,
            'name' => 'Laravel',
            'link_img' => 'laravel.svg',
            'icon' => 'icon_laravel.svg',
            'order' => 1,
            'status' => 1
        ]);
        Technology::create([
            'id' => 2,
            'name' => 'Lumen',
            'link_img' => 'lumen.svg',
            'icon' => 'icon_lumen.svg',
            'order' => 2,
            'status' => 1
        ]);
        Technology::create([
            'id' => 3,
            'name' => 'Angular',
            'link_img' => 'angular.svg',
            'icon' => 'icon_angular.svg',
            'order' => 3,
            'status' => 1
        ]);
        Technology::create([
            'id' => 4,
            'name' => 'Vue',
            'link_img' => 'vue.svg',
            'icon' => 'icon_vue.svg',
            'order' => 4,
            'status' => 1
        ]);
        Technology::create([
            'id' => 5,
            'name' => 'TailwindCSS',
            'link_img' => 'tailwindcss.svg',
            'icon' => 'icon_tailwindcss.svg',
            'order' => 5,
            'status' => 1
        ]);
        Technology::create([
            'id' => 6,
            'name' => 'Bootstrap',
            'link_img' => 'bootstrap.svg',
            'icon' => 'icon_bootstrap.svg',
            'order' => 6,
            'status' => 1
        ]);
        Technology::create([
            'id' => 7,
            'name' => 'Jquery',
            'link_img' => 'jquery.svg',
            'icon' => 'icon_jquery.svg',
            'order' => 7,
            'status' => 1
        ]);
        Technology::create([
            'id' => 8,
            'name' => 'Ajax',
            'link_img' => 'ajax.svg',
            'icon' => 'icon_ajax.svg',
            'order' => 8,
            'status' => 1
        ]);
        Technology::create([
            'id' => 9,
            'name' => 'Gulp',
            'link_img' => 'gulp.svg',
            'icon' => 'icon_gulp.svg',
            'order' => 9,
            'status' => 1
        ]);
        Technology::create([
            'id' => 10,
            'name' => 'Laravel-Mix',
            'link_img' => 'laravel-mix.svg',
            'icon' => 'icon_laravel-mix.svg',
            'order' => 10,
            'status' => 1
        ]);
        Technology::create([
            'id' => 11,
            'name' => 'Bitbucket',
            'link_img' => 'bitbucket.svg',
            'icon' => 'icon_bitbucket.svg',
            'order' => 11,
            'status' => 1
        ]);
        Technology::create([
            'id' => 12,
            'name' => 'Git',
            'link_img' => 'git.svg',
            'icon' => 'icon_git.svg',
            'order' => 12,
            'status' => 1
        ]);
        Technology::create([
            'id' => 13,
            'name' => 'Opencart',
            'link_img' => 'opencart.svg',
            'icon' => 'icon_opencart.svg',
            'order' => 13,
            'status' => 1
        ]);
        Technology::create([
            'id' => 14,
            'name' => 'WordPress',
            'link_img' => 'wp.svg',
            'icon' => 'icon_wp.svg',
            'order' => 14,
            'status' => 1
        ]);
        Technology::create([
            'id' => 15,
            'name' => 'WooCommerce',
            'link_img' => 'woo.svg',
            'icon' => 'icon_woo.svg',
            'order' => 15,
            'status' => 1
        ]);
        Technology::create([
            'id' => 16,
            'name' => 'Joomla',
            'link_img' => 'joomla.svg',
            'icon' => 'icon_joomla.svg',
            'order' => 16,
            'status' => 1
        ]);
        Technology::create([
            'id' => 17,
            'name' => 'CRON',
            'link_img' => 'cron.svg',
            'icon' => 'icon_cron.svg',
            'order' => 17,
            'status' => 1
        ]);
        Technology::create([
            'id' => 18,
            'name' => 'CURL',
            'link_img' => 'curl.svg',
            'icon' => 'icon_curl.svg',
            'order' => 18,
            'status' => 1
        ]);
        Technology::create([
            'id' => 19,
            'name' => 'Azure Dev Ops',
            'link_img' => 'azure-dev-ops.svg',
            'icon' => 'icon_azure-dev-ops.svg',
            'order' => 19,
            'status' => 1
        ]);
        Technology::create([
            'id' => 20,
            'name' => 'Webpack',
            'link_img' => 'webpack.svg',
            'icon' => 'icon_webpack.svg',
            'order' => 20,
            'status' => 1
        ]);
        Technology::create([
            'id' => 21,
            'name' => 'Axios',
            'link_img' => 'axios.svg',
            'icon' => 'icon_axios.svg',
            'order' => 21,
            'status' => 1
        ]);
        Technology::create([
            'id' => 22,
            'name' => 'CSS3',
            'link_img' => 'css3.svg',
            'icon' => 'icon_css3.svg',
            'order' => 22,
            'status' => 1
        ]);
        Technology::create([
            'id' => 23,
            'name' => 'html5',
            'link_img' => 'html5.svg',
            'icon' => 'icon_html5.svg',
            'order' => 23,
            'status' => 1
        ]);
        Technology::create([
            'id' => 24,
            'name' => 'PHP',
            'link_img' => 'php.svg',
            'icon' => 'icon_php.svg',
            'order' => 24,
            'status' => 1
        ]);
        Technology::create([
            'id' => 25,
            'name' => 'JavaScript',
            'link_img' => 'js.svg',
            'icon' => 'icon_js.svg',
            'order' => 25,
            'status' => 1
        ]);
        Technology::create([
            'id' => 26,
            'name' => 'TypeScript',
            'link_img' => 'ts.svg',
            'icon' => 'icon_ts.svg',
            'order' => 26,
            'status' => 1
        ]);
        Technology::create([
            'id' => 27,
            'name' => 'Prestashop',
            'link_img' => 'prestashop.svg',
            'icon' => 'icon_prestashop.svg',
            'order' => 27,
            'status' => 1
        ]);
    }
}
