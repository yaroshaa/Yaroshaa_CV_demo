<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LangEducation extends Model {

    protected $table = 'lang_educations';
    protected $fillable = [
        'id',
        'lang_id',
        'education_id',
        'name',   
        'description', 
        'full_text',                
        'created_at',
        'updated_at'
    ];

}
