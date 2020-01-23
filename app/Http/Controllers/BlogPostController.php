<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\BlogPostService;
use App\Services\BlogUserController;

use App\BlogUser;
use App\BlogTag;

class BlogPostController extends Controller
{
    protected $blogTagService;
    protected $blogAuthorService;

    public function __construct(BlogPostService $blogPostService){
        $this->blogPostService = $blogPostService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogPostService = $this->blogPostService->get();
        return view('blogposts.index',compact('blogPostService'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blogAuthorService = BlogUser::all();
        $blogTagService = BlogTag::all();

        // dd($blogAuthorService,$blogTagService);
        return view('blogposts.register',compact('blogAuthorService','blogTagService'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'author_id'=>'required','title'=>'required','file'=>'required','blog_tag'=>'required',
            'banner_image'=>'required','status'=>'required'
        ]);
        if($this->blogPostService->store($request->all())){
            return redirect()->route('posts.index'->with('success','Successfully Created'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blogPostService = $this->blogPostCategory->getById($id);
        return view('blogposts.edit',compact('blogPostCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'author_id'=>'required','title'=>'required','file'=>'required','blog_tag'=>'required',
            'banner_image'=>'required','status'=>'required'
        ]);

        if($this->blogPostService->update($request->all(),$id)){
            return redirect()->route('posts.index'->with('success','Successfully Created'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if($this->blogPostService->destroy($id)){
            return view('blogposts.index')->with('success','Successfully Deleted');
        }
    }
}
