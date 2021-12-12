@extends('layout.main')
@section('content')


<section id="section" class="mt-5">



<div class="container mt-5" style="max-width: 500px; margin: 50px auto; text-align: left; font-family: sans-serif;">

        <!-- Success message -->
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif

        <form   action="/contact/post" method="get">

            <!-- CROSS Site Request Forgery Protection -->
            @csrf

            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>

            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" name="phone" id="phone">
            </div>

            <div class="form-group">
                <label>Subject</label>
                <input type="text" class="form-control" name="subject" id="subject">
            </div>

            <div class="form-group">
                <label>Message</label>
                <textarea class="form-control" name="message" id="message" rows="5"></textarea>
            </div>

            <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
        </form>
    </div>

    </section>








<footer class="text-center text-white fixed-bottom bg-secondary" >
  <!-- Grid container -->
  <div class="container pt-2">
    <!-- Section: Social media -->
    <section class="mb-5">
      <!-- Facebook -->
      <a
        class="btn btn-link btn-floating btn-lg text-white m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="white"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn btn-link btn-floating btn-lg text-white m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="white"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn btn-link btn-floating btn-lg text-white m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="white"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn btn-link btn-floating btn-lg text-white m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="white"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn btn-link btn-floating btn-lg text-white m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="white"
        ><i class="fab fa-linkedin"></i
      ></a>
      <!-- Github -->
      <a
        class="btn btn-link btn-floating btn-lg text-white m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="white"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->
</footer>
@endsection