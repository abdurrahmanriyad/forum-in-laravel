<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = "tags";
    protected $fillable = ["title"];

    public function getTagsForForm(){
        $tags = $this::all();
        $tempTags = [];
        foreach($tags as $tag){
            $tempTags[$tag->id] = $tag->title;
        }

        return $tempTags;
    }
}
