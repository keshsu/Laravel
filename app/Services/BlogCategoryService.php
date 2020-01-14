<?php

namespace App\Services;

// use Illuminate\Http\Request;

use App\BlogCategory;
class BlogCategoryService 
{
    public function __construct(BlogCategory $blogCategory){
        $this->blogCategory = $blogCategory;
    }   

    public function getById($id){
        return $this->blogCategory->where('id','=',$id)->first();
        // $this->blogCategory->find($id);
    }

    public function get(){
        return $this->blogCategory->get();
    }
    
    public function store(array $request){
       try{
           //mass assignment always tale array not object
           return $this->blogCategory->create($request);
       }
       catch(Exception $e){
            throw $e;
       }
        
    }
    
    public function update($data,$id){
        try{
            $blogCategory = $this->getById($id);

            $updatedblogCategory = $blogCategory->update($data);

            return $updatedblogCategory;
        }
        catch(Exception $e){
            throw $e;
        }
    }

    public function destroy($id){
        try{
            $blogCategory = $this->getById($id);
            return $blogCategory->delete();
        }
        catch(Exception $e){
            throw $e;
        }
    }
    
}