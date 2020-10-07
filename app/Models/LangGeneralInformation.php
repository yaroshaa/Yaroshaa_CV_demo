<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LangGeneralInformation extends Model {

    protected $table = 'lang_general_information';
    protected $fillable = [

        'id',
        'lang_id',
        'general_information_id',
        'site_name',
        'site_description',
        'meta_name',
        'meta_description',
        'meta_keywords',
        'first_name',
        'last_name',
        'slogan',
        'age',
        'position',
        'address',
        'auto_text_mail',
        'link_pdf',
        'created_at',
        'updated_at'
    ];

}
