<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {

    protected $table = 'projects';
    protected $fillable = [

        'id',
        'link_img',
        'link_logo',
        'order', 
        'status',
        'created_at',
        'updated_at'
    ];
    public function translate()
    {
        return $this->hasOne('App\Models\LangProjects');
    }

}
