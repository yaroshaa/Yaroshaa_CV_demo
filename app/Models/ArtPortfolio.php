<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArtPortfolio extends Model {

    protected $table = 'art_portfolio';
    protected $fillable = [
        'id',
        'img_link',
        'icon_svg',
        'status',
        'order',
        'created_at',
        'updated_at'
    ];
    public function translate()
    {
        return $this->hasOne('App\Models\LangArtPortfolio');
    }

}
