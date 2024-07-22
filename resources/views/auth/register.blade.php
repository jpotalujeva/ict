
@extends('welcome')
 
@section('title', 'Register')

@section('content')

<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="{{ route('register') }}" method="POST">
           @csrf
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3">Register</p>
          </div>

          <div class="divider">
          </div>
          <div data-mdb-input-init class="form-outline mb-4">
             <label class="form-label" for="form3Example3">Name</label>
            <input type="name" id="name" name="name" class="form-control form-control-lg"
              placeholder="Enter your name" />
           
          </div>

          <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Email address</label>
            <input type="email" id="email" name="email" class="form-control form-control-lg"
              placeholder="Enter email address" />
          
          </div>

          <div data-mdb-input-init class="form-outline mb-3">
            <label class="form-label" for="form3Example4">Password</label>
            <input id="password" name="password" type="password" class="form-control form-control-lg"
              placeholder="Enter password" />
            
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>


@stop