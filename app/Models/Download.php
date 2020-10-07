<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Download extends Model {

    protected $table = 'downloads';
    protected $fillable = [
        'id',
        'lang_id',
        'link',
        'status',
        'created_at',
        'updated_at'
    ];

}
