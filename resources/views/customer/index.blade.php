@extends('layouts.master')
@section('title','Keshab Bhadel')

@section('content')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
        @if(Session::has('success'))
        <div class = "alert alert-primary">
          <p>{!! session()->get('success')!!}</p>
        </div>
        @endif
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
                          <th>Full Name</th>
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
                          <td>{{$customer->full_name}}</td>
                          <td>{{$customer->email}}</td>
                          <td>{{$customer->address}}</td>
                          <td>{{$customer->contact}}</td>
                          <td>
                            <a class = "btn btn-outline-primary" href="{{route('customers.edit',$customer->id)}}">Edit</a>  
                            <br>
                            <form action="{{ route('customers.delete', $customer->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-outline-danger"onclick ="confirm('Are You sure to Delete?')">Delete</button>
                            </form>
                            <!-- <a href="{{route('customers.delete',$customer->id)}}" onclick ="confirm('Are You sure to Delete?')">Delete</a> -->
                          </td>
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