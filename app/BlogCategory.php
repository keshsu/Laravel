<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $table = 'tbl_blog_category';

    protected $fillable = ['name','name_clean','status'];

    protected $appends = ['full_name'];

    public function getFullNameAttribute(){
        return $this->name." ".$this->name_clean;
    }
    public function setNameAttribute($value){
        $this->attributes['name'] = ucfirst($value);
    }
}
