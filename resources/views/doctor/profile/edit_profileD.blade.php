@extends('layout.profileD-layout')


@section('profile')


<div class="card">
  <div class="card-header">
      Profile
  </div>

  <div class="card-body" id="1a">
    <h5 class="card-title">Welcome to Your Profile</h5>
    <form action="{{route('updateProfileD')}}" id="edit_profile_form" method="POST">
        @csrf
        <div class="col-md-4">
          <div class="form-group">
            <label for="Name">Name*</label>
            <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control">
            @if ($errors->any('name'))
            <span class="text-danger">{{$errors->first('name')}}</span>
            @endif
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="Last Name">Email*</label>
            <input type="email" name="email" value="{{ Auth::user()->email }}" class="form-control">
            @if ($errors->any('email'))
            <span class="text-danger">{{$errors->first('email')}}</span>
            @endif
              </div>
          </div>
          
          <button type="submit" class="btn btn-primary updateButton">Update</button>
        </form>
      </div>
      
    </div>
      
      @endsection
      
      