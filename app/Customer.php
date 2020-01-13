<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

    protected $fillable = ['first_name','middle_name','last_name','email','contact','address'];


    //accessors = getters
    //Mutators = setters

    //accessors
    protected $appends = ['full_name'];


    public function getFullNameAttribute(){
        if($this->middle_name){
            $this->middle_name= $this->middle_name." ";
        }
        return $this->first_name." ".$this->middle_name." ".$this->last_name;
    }

    // [ first_name, middle_name, last_name,...,full_name] aauxa


    //mutators
    public function setFirstNameAttribute($value){
        $this->attributes['first_name']= ucfirst($value);
    }
    public function setLastNameAttribute($value){
        $this->attributes['last_name']= ucfirst($value);
    }
    public function setMiddleNameAttribute($value){
        $this->attributes['middle_name']= ucfirst($value);
    }
}
