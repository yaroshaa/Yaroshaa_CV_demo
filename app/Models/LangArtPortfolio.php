<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LangArtPortfolio extends Model {

    protected $table = 'lang_art_portfolio';
    protected $fillable = [
        'id',
        'lang_id',
        'art_portfolio_id',
        'name',   
        'description', 
        'created_at',
        'updated_at'
    ];

}
