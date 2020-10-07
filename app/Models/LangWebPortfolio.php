<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LangWebPortfolio extends Model {

    protected $table = 'lang_web_portfolio';
    protected $fillable = [
        'id',
        'lang_id',
        'web_portfolio_id',
        'name',   
        'description',   
        'full_text',            
        'created_at',
        'updated_at'
    ];

}
