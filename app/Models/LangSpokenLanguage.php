<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LangSpokenLanguage extends Model {

    protected $table = 'lang_spoken_language';
    protected $fillable = [
        'id',
        'lang_id',
        'spoken_language_id',
        'name',
        'level',
        'created_at',
        'updated_at'
    ];


}
