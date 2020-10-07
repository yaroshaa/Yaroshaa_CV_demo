<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GeneralInformation extends Model {

    protected $table = 'general_information';
    protected $fillable = [

        'id',
        'lang_id',
        'status',
        'created_at',
        'updated_at'
    ];
    public function translate()
    {
        return $this->hasOne('App\Models\LangGeneralInformation');
    }


}
