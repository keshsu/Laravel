<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\BlogTagService;

class BlogTagsController extends Controller
{
    protected $blogTagService;

    public function __construct(BlogTagService $blogTagService){
        $this->blogTagService = $blogTagService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogTagService= $this->blogTagService->get();
        return view('blogtags.index',compact('blogTagService'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogtags.register');
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
            'tag'=>'required',
            'status'=>'required'
        ]);
        if($this->blogTagService->store($request->all())){
            return redirect()->route('tags.index')->with('success','Successfully Created');
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
        $blogTagService = $this->blogTagService->getById($id);
        return view('blogtags.edit',compact('blogTagService'));
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
            'tag'=>'required',
            'status'=>'required'
        ]);
        if($this->blogTagService->update($request->all(),$id)){
            return redirect()->route('tags.index')->with('success','Successfully Created');
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
        if($this->blogTagService->destroy($id)){
            return redirect()->back()->with('success','Succesfully Deleted');
        }
    }
}
