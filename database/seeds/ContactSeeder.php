<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->delete();        
        Contact::create([

            'name' => 'Name',  
            'email' => 'email@gmail.com',
            'subject' => 'subject',
            'text' => 'text',
            'answer' => 1,
            'text_answer' => 'text answer',
            'status' => 1,

        ]);        
        
    }
}
