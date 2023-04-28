@extends('layout/layout-common')

@section('space-work')

@include('layout.header')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card  mt-5">
                <div class="card-header">{{ __('Login to Your Account') }}</div>

                <div class="card-body">

                  @if ($errors->any())
                    @foreach ($errors->all() as $error )
                      <p style="color: red">{{$error}}</p>
                    @endforeach
                  @endif
                
                  @if (Session::has('error'))
                  <p style="color:red;">{{Session::get('error')}}</p>
                @endif
                
                    <form action="{{ route('userLogin') }}" method="POST" class="mt-4 ml-3" >
                    @csrf
                
                
                    <input type="email" name="email" placeholder="Enter Email" class="form-control-lg w-100">
                    <br><br>
                    <input type="password" name="password" placeholder="Enter Password" class="mt-3 form-control-lg w-100">
                    <br><br>
                    <input type="submit" value="Login" class="btn btn-info mt-3 form-control-lg w-100"><br><br>
                
                    <a href="/forget-password" class=" text-darkmt-2">Forget Your Password?</a><br><br>
                    <h5>Don't have an account?<a href="/register" class="ml-3 text-blue">Register</a> </h5>
                    </form>
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


