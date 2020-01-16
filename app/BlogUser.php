<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogUser extends Model
{
    protected $table = "tbl_blog_user";

    protected $fillable =  ['first_name','last_name','display_name','gender','email','contact','address','website','status'];

    
    protected $appends = ['full_name'];
    
    function getFullNameAttribute(){
        return getFullName([$this->first_name,$this->last_name]);
    }

    function setFirstNameAttribute($value){
        $this->attributes['first_name'] =  getFirstLetterCapital($value);
    }

}
