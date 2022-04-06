<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $table = 'pr_tags';
    protected $primaryKey = 'tg_tag_id';

    protected $fillable = ['tg_description'];

    public function posts(){
        return $this->morphedByMany(Post::class, 'taggable', 'pr_taggables', 'tag_id', 'taggable_id');
    }

    public function videos(){
        return $this->morphedByMany(Video::class, 'taggable', 'pr_taggables', 'tag_id', 'taggable_id');
    }
}
