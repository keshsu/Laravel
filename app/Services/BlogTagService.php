<?php

namespace App\Services;

// use Illuminate\Http\Request;

use App\BlogTag;
class BlogTagService 
{
    public function __construct(BlogTag $blogTag){
        $this->blogTag = $blogTag;
    }   

    public function getById($id){
        return $this->blogTag->where('id','=',$id)->first();
        // $this->blogTag->find($id);
    }

    public function get(){
        return $this->blogTag->get();
    }
    
    public function store(array $request){
       try{
           //mass assignment always tale array not object
           return $this->blogTag->create($request);
       }
       catch(Exception $e){
            throw $e;
       }
        
    }
    
    public function update($data,$id){
        try{
            $blogTag = $this->getById($id);

            $updatedblogTag = $blogTag->update($data);

            return $updatedblogTag;
        }
        catch(Exception $e){
            throw $e;
        }
    }

    public function destroy($id){
        try{
            $blogTag = $this->getById($id);
            return $blogTag->delete();
        }
        catch(Exception $e){
            throw $e;
        }
    }
    
}