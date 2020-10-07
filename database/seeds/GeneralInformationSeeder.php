<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\GeneralInformation;

class GeneralInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('general_information')->delete();
        GeneralInformation::create([
            'id' => 1,
            'status' => 1
        ]);
    }
}
