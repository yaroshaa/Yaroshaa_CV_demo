<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model {

    protected $table = 'experience';
    protected $fillable = [

        'id',
        'order', 
        'date_start',
        'date_stop',
        'status',
        'created_at',
        'updated_at'
    ];

    public function translate()
    {
        return $this->hasOne('App\Models\LangExperience');
    }

}
