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
                  <p class="card-title">Blog Category Details</p>
                  <a class="btn btn-primary mt-2 mt-xl-0" href="{{route('users.register')}}">Add new</a>
                  <div class="table-responsive">
                    <table id="recent-purchases-listing" class="table">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Full Name</th>
                          <th>User Name</th>
                          <th>Gender</th>
                          <th>Email</th>
                          <th>Contact</th>
                          <th>Address</th>
                          <th>Website</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($blogUserService as $blogUserService)
                        <tr>
                          <td>{{$blogUserService->id}}</td>
                          <td>{{$blogUserService->full_name}}</td>
                          <td>{{$blogUserService->display_name}}</td>
                          <td>{{$blogUserService->gender}}</td>
                          <td>{{$blogUserService->email}}</td>
                          <td>{{$blogUserService->contact}}</td>
                          <td>{{$blogUserService->address}}</td>
                          <td>{{$blogUserService->website}}</td>
                          <td>{{$blogUserService->status}}</td>
                          <td>
                            <a class = "btn btn-outline-primary" href="{{route('users.edit',$blogUserService->id)}}">Edit</a>  
                            <br>
                            <form action="{{route('users.delete', $blogUserService->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-outline-danger"onclick ="confirm('Are You sure to Delete?')">Delete</button>
                            </form>
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