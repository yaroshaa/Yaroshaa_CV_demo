<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LangCategory extends Model {

    protected $table = 'lang_category';
    protected $fillable = [
        'id',
        'lang_id',
        'category_id',
        'name',   
        'description',               
        'created_at',
        'updated_at'
    ];

}
