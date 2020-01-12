<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\CustomersService;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $customerServices;

     public function __construct(CustomersService $customerServices){
        $this->customerServices = $customerServices;
     }

    public function index()
    {
        $customers=$this->customerServices->get();
        return view('customer.index',compact('customers')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
       
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email',
            'contact'=>'required',
            'address'=>'required'
        ]);

        if($this->customerServices->store($request->all())){
            return redirect()->route('customers.index')->with('success','Successfully Created');
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
        $customer =$this->customerServices->getById($id);
        return view('customer.edit',compact('customer'));
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
            'email'=>'required|email',
            'contact'=>'required',
            'address'=>'required'
        ]);

        if($this->customerServices->update($request->all(),$id)){
            return redirect()->route('customers.index')->with('success','Successfully Updated');
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
        if($this->customerServices->destroy($id)){
            return redirect()->back()->with('success','Succesfully Deleted');
        }
    }
}
