@extends('layout/layout-common')

@section('space-work')

@include('layout.header')


<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card mt-5">
              <div class="card-header">{{ __('Forget password') }}</div>

              <div class="card-body">

                @if ($errors->any())
                  @foreach ($errors->all() as $error )
                    <p style="color: red">{{$error}}</p>
                  @endforeach
                @endif

                @if (Session::has('error'))
                <p style="color:red;">{{Session::get('error')}}</p>
              @endif


                @if (Session::has('success'))
                <p style="color:green;">{{Session::get('success')}}</p>
              @endif

              <form action="{{ route('forgetPassword') }}" method="POST">
                @csrf
                <input type="email" name="email" placeholder="Enter Email" class="form-control-lg w-100">
                <br><br>
                <input type="submit" value="Forget password" class="btn btn-info mt-3 form-control-lg w-100">
                <h5 class="mt-3">Already have an account?<a href="/login" class="ml-3 text-blue">Login</a> </h5>
            
                </form>


              </div>
          </div>
      </div>
  </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    

<footer>
  @include('layout.footer')
</footer>

@endsection


