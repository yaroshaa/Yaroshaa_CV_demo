<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model {

    protected $table = 'settings';
    protected $fillable = [

        'id',
        'site_domain',
        'front_img',
        'logo',
        'time_work',        
        'email_first',
        'email_second',
        'email_third',
        'phone_first',
        'phone_second',
        'phone_third',
        'phone_fourth',  
        'link_github',
        'link_bitbuket',
        'link_azure',
        'banned_ids',
        'skype',
        'mode',
        'google_analitics',
        'yandex_metrics',
        'pinterest_id',
        'bing_id',
        'link_facebook',
        'link_pinterest',
        'link_twitter',
        'link_instagram',
        'link_linkedin',
        'copiright',        
        'status',
        'ip_admin', 
        'default_lang_id',  
        'password',       
        'created_at',
        'updated_at'

    ];

}
