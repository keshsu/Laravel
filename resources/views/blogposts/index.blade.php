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
                  <p class="card-title">Blog Posts Details</p>
                  <a class="btn btn-primary mt-2 mt-xl-0" href="{{route('posts.register')}}">Add new</a>
                  <div class="table-responsive">
                    <table id="recent-purchases-listing" class="table">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Author Id</th>
                          <th>Title</th>
                          <th>File</th>
                          <th>Tags</th>
                          <th>Published</th>
                          <th>Featured</th>
                          <th>Comment</th>
                          <th>Views</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($blogPostService as $blogPostService)
                        <tr>
                          <td>{{$blogPostService->id}}</td>
                          <td>{{$blogPostService->author_id}}</td>
                          <td>{{$blogPostService->full_title}}</td>
                          <td>{{$blogPostService->file}}</td>
                          <td>{{$blogPostService->blog_tag}}</td>
                          <td>{{$blogPostService->date_published}}</td>
                          <td>{{$blogPostService->featured}}</td>
                          <td>{{$blogPostService->comment_enabled}}</td>
                          <td>{{$blogPostService->views}}</td>
                          <td>{{$blogPostService->status}}</td>
                          <td>
                            <a class = "btn btn-outline-primary" href="{{route('posts.edit',$blogPostService->id)}}">Edit</a>  
                            <br>
                            <form action="{{route('posts.delete', $blogPostService->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-outline-danger" onclick ="confirm('Are You sure to Delete?')">Delete</button>
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