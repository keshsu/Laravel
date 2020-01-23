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
                  <p class="card-title">Blog Tag Details</p>
                  <a class="btn btn-primary mt-2 mt-xl-0" href="{{route('tags.register')}}">Add new</a>
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
                        @foreach($blogTagService as $blogTagService)
                        <tr>
                          <td>{{$blogTagService->id}}</td>
                          <td>{{$blogTagService->full_tag}}</td>
                          <td>{{$blogTagService->status}}</td>
                          <td>
                            <a class = "btn btn-outline-primary" href="{{route('tags.edit',$blogTagService->id)}}">Edit</a>  
                            <br>
                            <form action="{{route('tags.delete', $blogTagService->id) }}" method="POST">
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