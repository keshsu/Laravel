<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $table = 'tbl_blog_category';

    protected $fillable = ['name','name_clean','status'];

    protected $appends = ['full_name'];

    // protected $full_name = getFullNameAttribute($this->attributes['name'],'',$this->attributes['name_clean']);
    function getFullNameAttribute(){
        return getFullName([$this->name,$this->name_clean]);
    }

    public function setNameAttribute($value){
        $this->attributes['name'] =  getFirstLetterCapital($value);
    }


}
