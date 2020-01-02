@extends('layouts.master')
@section('title','Keshab Bhadel')

@section('content')
 <!-- partial -->
 <div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add New Customer</h4>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputFirstname1">Full Name</label>
                      <br>
                      <input type="text" class="form-control col-md-3 d-inline" id="exampleInputFirstname1" placeholder="First Name">
                   
                      <input type="text" class="form-control col-md-3 d-inline" id="exampleInputMiddlename1" placeholder="Middle Name">
                    
                      <input type="lastname" class="form-control col-md-3 d-inline" id="exampleInputLastname" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputcontact1">Contact</label>
                      <input type="text" class="form-control" id="exampleInputcontact1" placeholder="Contact">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputAddress1">Address</label>
                      <input type="text" class="form-control" id="exampleInputAddress1" placeholder="Address">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
        </div>
@endsection