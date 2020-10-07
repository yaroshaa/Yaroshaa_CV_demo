<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tools extends Model {

    protected $table = 'tools';
    protected $fillable = [

        'id',
        'link_img',
        'order', 
        'status',
        'created_at',
        'updated_at'
    ];

}
