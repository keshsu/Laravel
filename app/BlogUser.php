<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogUser extends Model
{
    protected $table = "tbl_blog_user";

    protected $fillable =  ['display_name','first_name','last_name','gender','email','contact','address','status'];

    
    protected $append = ['full_name'];

    function getFullNameAttribute(){
        return getFullName([$this->first_name,$this->last_name]);
    }
    function getFirstNameAttribute(){
        return getFirstLetterCapital($this->first_name);
    }
}
