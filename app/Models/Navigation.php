<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Navigation extends Model {

    protected $table = 'navigation';
    protected $fillable = [

        'id',        
        'status',
        'created_at',
        'updated_at'
    ];
    public function translate()
    {
        return $this->hasOne('App\Models\LangNavigation');
    }
    

}
