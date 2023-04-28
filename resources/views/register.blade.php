@extends('layout/layout-common')


@section('space-work')

@include('layout.header')


<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card mt-5">
              <div class="card-header">{{ __('Register') }}</div>

              <div class="card-body">

                @if ($errors->any())
                @foreach ($errors->all() as $error )
                  <p style="color: red">{{$error}}</p>
                @endforeach
                
              @endif

              <form action="{{ route('studentRegister') }}" method="POST">
                @csrf
            
            
                <input type="text" name="name" placeholder="Enter Name" class="form-control-lg w-100">
                <br><br>
                <input type="email" name="email" placeholder="Enter Email" class="form-control-lg w-100">
                <br><br>
                <input type="password" name="password" placeholder="Enter Password" class=" form-control-lg w-100">
                <br><br>
                <input type="password" name="password_confirmation" placeholder="Enter confirm Password" class="mt-3 form-control-lg w-100">
                <br><br>
                <input type="submit" value="Register" class="btn btn-info w-100"><br><br>
                <h5>Already have an account?<a href="/login" class="ml-3 text-blue">Login</a> </h5>
            
            
                </form>

                  @if (Session::has('success'))
                  <p style="color:green;">{{Session::get('success')}}</p>
                @endif
              </div>
          </div>
      </div>
  </div>
</div>

<br>
<br>
<footer>
  @include('layout.footer')
</footer>

@endsection


