@extends('templates.master')

@section('styles')
<link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection

@section('content')
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="{{asset('images/events.jpg')}}" class="img-fluid hero" alt="Hero image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form>
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <h1 class="">Login</h1>
          </div>

          <div class="divider d-flex align-items-center my-4"></div>

          <!-- Email input -->
          <div class="form-outline mb-3">
            <label for="email">E-mail address</label>
            <input type="email" id="email" class="form-control ">
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <label for="password">Password</label>
            <input type="password" id="password" class="form-control ">
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>
            <a href="#!" class="text-body">Forgot password?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="button" class="btn btn-primary btn-lg">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account ? <a href="/signup" class="link-info">Register</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>
@endsection