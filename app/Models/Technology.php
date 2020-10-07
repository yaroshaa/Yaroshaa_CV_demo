<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Technology extends Model {

    protected $table = 'technologies';
    protected $fillable = [

        'id',
        'name',
        'link_img',
        'icon',
        'order',
        'status',
        'created_at',
        'updated_at'
    ];


}
