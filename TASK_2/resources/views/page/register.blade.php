@extends('layouts.layout')
  
@section('content')
    <form action="{{route('register.post')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        
        <div class="col-md-4 form-group">
            <span>Name</span>
            <input type="text" name="name" value="{{old('name')}}" class="form-control">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Student Id</span>
            <input type="text" name="s_id" value="{{old('s_id')}}"class="form-control">
            @error('s_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Password</span>
            <input type="text" name="password" value="{{old('password')}}" class="form-control">
            @error('password')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Date of Birth</span>
            <input type="date" name="dob" value="{{old('dob')}}" class="form-control">
        </div>
        <div class="col-md-4 form-group">
            <span>Email</span>
            <input type="text" name="email" value="{{old('email')}}" class="form-control">
        </div>
        
        <input type="submit" class="btn btn-success" value="Add" >
    </form>
@endsection