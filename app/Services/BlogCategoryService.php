<?php

namespace App\Services;

// use Illuminate\Http\Request;

use App\BlogCategory;
class BlogCategoryService 
{
    public function __construct(BlogCategory $blogcategory){
        $this->blogcategory = $blogcategory;
    }   

    public function getById($id){
        return $this->blogcategory->where('id','=',$id)->first();
        // $this->blogcategory->find($id);
    }

    public function get(){
        return $this->blogcategory->get();
    }
    
    public function store(array $request){
       try{
           //mass assignment always tale array not object
           return $this->blogcategory->create($request);
       }
       catch(Exception $e){
            throw $e;
       }
        
    }
    
    public function update($data,$id){
        try{
            $blogcategory = $this->getById($id);

            $updatedblogcategory = $blogcategory->update($data);

            return $updatedblogcategory;
        }
        catch(Exception $e){
            throw $e;
        }
    }

    public function destroy($id){
        try{
            $blogcategory = $this->getById($id);
            return $blogcategory->delete();
        }
        catch(Exception $e){
            throw $e;
        }
    }
    
}