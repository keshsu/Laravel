<?php

namespace App\Services;

// use Illuminate\Http\Request;

use App\Customer;
class CustomersService 
{
    public function __construct(Customer $customer){
        $this->customer  = $customer;
    }   

    public function getById($id){
        return $this->customer->where('id','=',$id)->first();
        // $this->customer->find($id);
    }

    public function get(){
        return $this->customer->get();
    }
    
    public function store(array $request){
       try{
           //mass assignment always tale array not object
           return $this->customer->create($request);
       }
       catch(Exception $e){
            throw $e;
       }
        
    }
    
    public function update($data,$id){
        try{
            $customer = $this->getById($id);

            $updatedCustomer = $customer->update($data);

            return $updatedCustomer;
        }
        catch(Exception $e){
            throw $e;
        }
    }

    public function destroy($id){
        try{
            $customer = $this->getById($id);
            return $customer->delete();
        }
        catch(Exception $e){
            throw $e;
        }
    }
    
}