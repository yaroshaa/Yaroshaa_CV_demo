<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LangNavigation extends Model {

    protected $table = 'lang_navigation';
    protected $fillable = [

        'id',        
        'lang_id',
        'navigation_id',
        'nav_list',
        'created_at',
        'updated_at'
    ];

}
