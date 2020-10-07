<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model {

    protected $table = 'contacts';
    protected $fillable = [
        'id',
        'name',
        'email',
        'subject',
        'text',
        'answer',
        'text_answer',
        'status'
    ];

    protected $hidden = ['created_at', 'updated_at'];

}
