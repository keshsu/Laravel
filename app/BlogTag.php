<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogTag extends Model
{
    protected $table ="tbl_blog_tag";

    protected $fillable = ['tag','tag_clean','status'];

    protected $appends= ['full_tag'];

    function getFullTagAttribute(){
        return \getFullName([$this->tag,$this->tag_clean]);
    }
    function setTagAttribute($value){
        $this->attributes['tag'] = \getFirstLetterCapital($value);
    }
}
