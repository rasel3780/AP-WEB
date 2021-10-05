@extends('layouts.app')
@section('content')
    <form action="{{route('customer.login')}}" class="col-md-6" method="post">
        {{csrf_field()}}
        
        <div class="col-md-4 form-group">
            <span>Name</span>
            <input type="text" name="name" value="{{old('name')}}" class="form-control">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Phone Number</span>
            <input type="text" name="pnumber" value="{{old('pnumber')}}"class="form-control">
            @error('pnumber')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
  
        <input type="submit" class="btn btn-success" value="Login" >
    </form>
@endsection