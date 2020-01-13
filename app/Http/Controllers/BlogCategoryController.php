<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\BlogCategoryService;

class BlogCategoryController extends Controller
{
    protected $blogCatService;

    public function __construct(BlogCategoryService $blogCatService){
        $this->blogCatService = $blogCatService;
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogCategory= $this->blogCatService->get();
        return view('blogcategories.index',compact('blogCategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogcategories.register');
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
            'name'=>'required',
        ]);

        if($this->blogCatService->store($request->all())){
            return redirect()->route('blogcategories.index')->with('success','Successfully Created');
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
        $blogCategory = $this->blogCatService->getById($id);
        return view('blogcategories.edit',compact('blogCategory'));
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
            'name'=>'required'
        ]);

        if($this->blogCatService->update($request->all(),$id)){
            return redirect()->route('blogcategories.index')->with('success','Successfully Updated');
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
        if($this->blogCatService->destroy($id)){
            return redirect()->back()->with('success','Succesfully Deleted');
        }
    }
}
