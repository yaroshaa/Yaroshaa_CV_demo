<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LangExperience extends Model {

    protected $table = 'lang_experiences';
    protected $fillable = [
        'id',
        'lang_id',
        'experience_id',
        'name',   
        'description',  
        'full_text',               
        'created_at',
        'updated_at'
    ];

}
