@extends('layouts.master')
@section('title','Keshab Bhadel')

@section('content')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Customer Details</p>
                  <a class="btn btn-primary mt-2 mt-xl-0" href="{{route('customers.register')}}">Add new</a>
                  <div class="table-responsive">
                    <table id="recent-purchases-listing" class="table">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>First Name</th>
                          <th>Middle Name</th>
                          <th>Last Name</th>
                          <th>Email</th>
                          <th>Contact</th>
                          <th>Address</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($customers as $customer)
                        <tr>
                          <td>{{$customer->id}}</td>
                          <td>{{$customer->first_name}}</td>
                          <td>{{$customer->middle_name}}</td>
                          <td>{{$customer->last_name}}</td>
                          <td>{{$customer->email}}</td>
                          <td>{{$customer->address}}</td>
                          <td>{{$customer->contact}}</td>
                          <td><a href="">Edit</a>&nbsp;&nbsp;
                          <a href="">Delete</a></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection