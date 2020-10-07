<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupPortfolio extends Model
{
    protected $table = 'group_portfolio';
    protected $fillable = [

        'id',
        'key',
        'icon',
        'nav_class',
        'order',
        'status',
        'created_at',
        'updated_at'
    ];

    public function translate()
    {
        return $this->hasOne('App\Models\LangGroupPortfolio');
    }
}
