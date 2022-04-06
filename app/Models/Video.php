<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $table = 'pr_videos';
    protected $primaryKey = 'vi_video_id';

    public function tags(){
        return $this->morphToMany(Tag::class, 'taggable', 'pr_taggables', 'taggable_id', 'tag_id');
    }
}
