@extends('layouts.master')
@section('title','Keshab Bhadel')

@section('content')
 <!-- partial -->
 <div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
        @if($errors->any())
              <div class= "alert alert-danger">
                <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
                </ul>
              </div>
            @endif
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add New Customer</h4>
                  <form class="forms-sample" method ="POST" action ="{{route('customers.edit',$customer->id)}}">
                    @csrf
                    @method('patch') <!-- Method Faking-->
                    @include('customer.form')
                  </form>
                </div>
              </div>
            </div>
        </div>
@endsection