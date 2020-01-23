<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{

    protected $table = 'tbl_blog_post';

    protected $fillable = ['id','author_id','title','clean_title','file','blog_tag','date_published',
    'banner_image','featured','status','comment_enabled','views'];

    protected $appends = ['full_title','tags'];

    function setTitleAttribute($value){
        $this->attributes['title']= \getFirstLetterCapital($value);
    }

    function getFullTitleAttribute(){
        return getFullName([$this->title,$this->clean_title]);
    }
}
