<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TechnologyWebPortfolio extends Model {

    protected $table = 'technology_web_portfolio';
    protected $fillable = [
        'id',
        'web_portfolio_id',
        'technology_id',
        'created_at',
        'updated_at'
    ];
}
