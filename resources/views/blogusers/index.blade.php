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
                  <a class="btn btn-primary mt-2 mt-xl-0" href="{{route('blogcategories.register')}}">Add new</a>
                  <div class="table-responsive">
                    <table id="recent-purchases-listing" class="table">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Name</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($blogCategory as $blogCategory)
                        <tr>
                          <td>{{$blogCategory->id}}</td>
                          <td>{{$blogCategory->name}}</td>
                          <td>{{$blogCategory->status}}</td>
                          <td>
                            <a class = "btn btn-outline-primary" href="{{route('blogcategories.edit',$blogCategory->id)}}">Edit</a>  
                            <br>
                            <form action="{{route('blogcategories.delete', $blogCategory->id) }}" method="POST">
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