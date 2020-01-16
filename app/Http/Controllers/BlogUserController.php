<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\BlogUserService;

class BlogUserController extends Controller
{

    protected $blogUserService;

    public function __construct(BlogUserService $blogUserService){
        $this->blogUserService = $blogUserService;
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogUserService = $this->blogUserService->get();
        return view('blogusers.index',compact('blogUserService'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('blogusers.register');
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
            'first_name'=>'required',
            'last_name'=>'required',
            'display_name'=>'required',
            'email'=>'required'
        ]);

        if($this->blogUserService->store($request->all())){
            return redirect()->route('users.index')->with('success','Successfully Created');
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
        $blogUserService = $this->blogUserService->getById($id);
        return view('blogusers.edit',compact('blogUserService'));
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
            'first_name'=>'required',
            'last_name'=>'required',
            'display_name'=>'required',
            'email'=>'required'
        ]);

        if($this->blogUserService->update($request->all(),$id)){
            return redirect()->route('users.index')->with('success','Successfully Updated');
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
        if($this->blogUserService->destroy($id)){
            return redirect()->back()->with('success','Succesfully Deleted');
        }
    }
}
