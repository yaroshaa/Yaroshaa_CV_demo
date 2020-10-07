<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    protected $table = 'category';
    protected $fillable = [
        'id',
        'key',
        'icon',  
        'nav_class',  
        'order',
        'status',
        'created_at',
        'updated_at'
    ];

    public function translate()
    {
        return $this->hasOne('App\Models\LangCategory');
    }

}
