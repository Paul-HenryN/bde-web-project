@extends('templates.standalone')

@section('styles')
<link rel="stylesheet" href="{{asset('css/signup.css')}}">
@endsection

@section('content')
<section class="test vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">

        <!-- <div class="px-5 ms-xl-4">
          <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
        </div> -->

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5 mb-5">

          <form method="POST" enctype="multipart/form-data" id="register-form">
            @csrf

            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
              <h1 class="">Register</h1>
            </div>

            <div class="divider d-flex align-items-center my-4"></div>

            <div class="row">
              <!-- Validation Errors -->
              <x-auth-validation-errors class="mb-4" :errors="$errors" style="color : red; font-weight : bold"/>
            </div>

            <div class="form-group mb-3">
              <div class="form-outline">
                <label class="form-label" for="name">First name</label>
                <input type="name" name="firstname" id="name" class="form-control" required>
              </div>

              <div class="form-outline">
                <label class="form-label" for="lastname">Last name</label>
                <input type="lastname" name="lastname" id="lastname" class="form-control " required>
              </div>
            </div>

            <div class="form-outline mb-3">
              <label class="form-label" for="form2Example18">E-mail address</label>
              <input type="email" name="email" id="email" class="form-control " required>
            </div>

            <div class="form-outline mb-3">
              <label class="form-label" for="password">Password</label>
              <input type="password" name="password" id="password" class="form-control " required/>
            </div>

            <div class="form-outline mb-3">
              <label class="form-label" for="password_confirmation">Confirm your password</label>
              <input type="password" name="password_confirmation" id="password_confirmation" class="form-control " required/>
            </div>

            <div class="form-outline mb-3">
              <label class="form-label" for="password_confirm">Location</label>
              <select class="form-select" name="location" id="location">
                <option value="Douala">CESI Douala</option>
                <option value="Rouen">CESI Rouen</option>
                <option value="Paris">CESI Paris</option>
                <option value="Montpellier">CESI Montpellier</option>
              </select>
            </div>


            <div class="mb-4">
              <label for="avatar" class="form-label">Avatar</label>
              <input type="file" class="form-control" name="avatar" id="avatar" accept=".jpg,.png,.gif" required>
            </div>

            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="conditions" required/>
              <label class="form-check-label" for="conditions">
                I'have read and accepted the <a href="">Terms and privacy policy.</a>
              </label>
            </div>

            <!-- Checkbox -->
            <div class="form-check mb-4">
              <input class="form-check-input me-2" type="checkbox" value="" id="newsletter" required/>
              <label class="form-check-label" for="newsletter">
                Receive update via e-mail about new events.
              </label>
            </div>

            <div class="pt-1 mb-3">
              <button id="submit-btn" type="submit" class="btn btn-primary btn-lg">Sign up</button>
            </div>

            <p class="fw-bold">Already registered ? <a href="/login" class="link-info">Login into your account</a></p>

          </form>

        </div>

      </div>
      <div class="col-sm-6 px-0 d-none d-md-block">
        <img src="{{asset('images/summary.jpg')}}" alt="Ucac-icam site" class="hero w-100" style="object-fit: cover; object-position: left;">
      </div>
    </div>
  </div>
</section>
@endsection

@section('scripts')
  <script src="{{ asset('js/register.js') }}"></script>
@endsection