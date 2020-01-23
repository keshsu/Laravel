<?php

namespace App\Services;

// use Illuminate\Http\Request;

use App\BlogPost;
use App\BlogUser;
use App\BlogTag;
class BlogPostService 
{
    public function __construct(BlogPost $BlogPost){
        $this->blogPost = $BlogPost;
    }   

    public function getById($id){
        return $this->blogPost->where('id','=',$id)->first();
        // $this->blogPost->find($id);
    }

    public function get(){
        return $this->blogPost->get();
    }
    
    public function store(array $request){
       try{
           //mass assignment always take array not object
            $tags = implode(' ',$request['blog_tag']);
            $request['blog_tag'] = $tags;
            return $this->blogPost->create($request);
       }
       catch(Exception $e){
            throw $e;
       }
        
    }
    
    public function update($data,$id){
        try{
            $BlogPost = $this->getById($id);

            $updatedBlogPost = $BlogPost->update($data);

            return $updatedBlogPost;
        }
        catch(Exception $e){
            throw $e;
        }
    }

    public function destroy($id){
        try{
            $BlogPost = $this->getById($id);
            return $BlogPost->delete();
        }
        catch(Exception $e){
            throw $e;
        }
    }
    
}