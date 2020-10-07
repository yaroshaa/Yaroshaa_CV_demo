<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model {

    protected $table = 'education';
    protected $fillable = [

        'id',
        'order', 
        'date_start',
        'date_stop',
        'number_ed',
        'status',
        'created_at',
        'updated_at'
    ];

    public function translate()
    {
        return $this->hasOne('App\Models\LangEducation');
    }

    
    


}
