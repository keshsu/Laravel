<?php

namespace App\Services;

// use Illuminate\Http\Request;

use App\BlogUser;
class BlogUserService 
{
    public function __construct(BlogUser $BlogUser){
        $this->blogUser = $BlogUser;
    }   

    public function getById($id){
        return $this->blogUser->where('id','=',$id)->first();
        // $this->blogUser->find($id);
    }

    public function get(){
        return $this->blogUser->get();
    }
    
    public function store(array $request){
       try{
           //mass assignment always tale array not object
           return $this->blogUser->create($request);
       }
       catch(Exception $e){
            throw $e;
       }
        
    }
    
    public function update($data,$id){
        try{
            $BlogUser = $this->getById($id);

            $updatedBlogUser = $BlogUser->update($data);

            return $updatedBlogUser;
        }
        catch(Exception $e){
            throw $e;
        }
    }

    public function destroy($id){
        try{
            $BlogUser = $this->getById($id);
            return $BlogUser->delete();
        }
        catch(Exception $e){
            throw $e;
        }
    }
    
}