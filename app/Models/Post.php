<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'pr_posts';
    protected $primaryKey = 'po_post_id';

    public function tags(){
        return $this->morphToMany(Tag::class, 'taggable', 'pr_taggables', 'taggable_id', 'tag_id');
    }
}
