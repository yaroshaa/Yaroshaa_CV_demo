<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebPortfolio extends Model {

    protected $table = 'web_portfolio';
    protected $fillable = [
        'id',
        'group',
        'thumb',
        'img_link',
        'demo_link',
        'web_link',
        'new_work',
        'status',
        'order',
        'created_at',
        'updated_at'
    ];

    public function translate()
    {
        return $this->hasOne('App\Models\LangWebPortfolio');
    }

    public function icons()
    {
        return $this->belongsToMany('App\Models\Technology');
    }




}
