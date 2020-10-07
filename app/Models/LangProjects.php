<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LangProjects extends Model {

    protected $table = 'lang_projects';
    protected $fillable = [
        'id',
        'lang_id',
        'project_id',
        'name',   
        'description',   
        'description_list',
        'full_text',
        'created_at',
        'updated_at'
    ];
}
