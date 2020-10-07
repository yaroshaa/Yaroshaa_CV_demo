<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Project;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->delete();
        Project::create([
            'id' => 1,
            'link_img' => 'promo-cityfor.png',
            'link_logo' => 'CityFor_logo.png',
            'order' => 1,
            'status' => 1
        ]);
    }
}
