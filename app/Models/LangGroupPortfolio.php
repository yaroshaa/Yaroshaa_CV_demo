<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LangGroupPortfolio extends Model
{
    protected $table = 'lang_group_portfolio';
    protected $fillable = [
        'id',
        'lang_id',
        'group_portfolio_id',
        'name',
        'description',
        'created_at',
        'updated_at'
    ];
}
