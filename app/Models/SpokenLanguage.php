<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpokenLanguage extends Model {

    protected $table = 'spoken_languages';
    protected $fillable = [

        'id',
        'key',
        'reading',
        'spelling',
        'exposition',
        'status',
        'created_at',
        'updated_at'
    ];

    public function translate()
    {
        return $this->hasOne('App\Models\LangSpokenLanguage');
    }

}
