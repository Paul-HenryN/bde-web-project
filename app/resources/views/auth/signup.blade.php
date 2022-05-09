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

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form method="POST" style="width: 23rem;">
            @csrf

            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
              <h1 class="">Join us</h1>
            </div>

            <div class="divider d-flex align-items-center my-4"></div>

            <div class="form-group mb-3">
              <div class="form-outline">
                <label class="form-label" for="name">Fist name</label>
                <input type="name" name="name" id="name" class="form-control ">
              </div>

              <div class="form-outline">
                <label class="form-label" for="surname">Surname</label>
                <input type="surname" name="surname" id="surname" class="form-control ">
              </div>
            </div>


            <div class="form-outline mb-3">
              <label class="form-label" for="form2Example18">E-mail address</label>
              <input type="email" name="email" id="email" class="form-control ">
            </div>

            <div class="form-outline mb-3">
              <label class="form-label" for="password">Password</label>
              <input type="password" name="password" id="password" class="form-control " />
            </div>

            <div class="form-outline mb-3">
              <label class="form-label" for="password_confirm">Confirm your password</label>
              <input type="password" name="password_confirm" id="password_confirm" class="form-control " />
            </div>

            <div class="form-outline mb-3">
              <label class="form-label" for="password_confirm">Location</label>
              <select class="form-select" name="location" id="location">
                <option value="">CESI Douala</option>
                <option value="">CESI Rouen</option>
                <option value="">CESI Paris</option>
                <option value="">CESI Montpellier</option>
              </select>
            </div>


            <div class="mb-4">
              <label for="formFile" class="form-label">Avatar</label>
              <input class="form-control" type="file" name="avatar_url" id="formFile" accept=".jpg,.png,.gif">
            </div>

            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                I'have read and accepted the <a href="">Terms and privacy policy.</a>
              </label>
            </div>

            <!-- Checkbox -->
            <div class="form-check mb-4">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Receive update via e-mail about new events.
              </label>
            </div>

            <div class="pt-1 mb-3">
              <button type="submit" class="btn btn-primary btn-lg">Sign up</button>
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