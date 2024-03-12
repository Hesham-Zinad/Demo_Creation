<!DOCTYPE html>
<!-- Coding by CodingLab || www.codinglabweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Zi-Customer Support Portal</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <!-- Unicons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  </head>
  <body>
    <!-- Header -->
    <header class="header">
      <nav class="nav">
        <a href="#" class="nav_logo">Zi-Customer Support Portal</a>

        <ul class="nav_items">
        @if(session()->has('message'))
				<div class="nav_logo">
					{{ session()->get('message') }}
				</div>
				@endif
        </ul>

        <button class="button" id="form-open">Login</button>
      </nav>
    </header>

    <!-- Home -->
    <section class="home">
      <div class="form_container">

        <i class="uil uil-times form_close"></i>
        <!-- Login From -->
        <div class="form login_form">
        {!! Form::open(['method' => 'POST', 'route' => ['handle_login']]) !!}   
        {{ csrf_field() }} 
            <h2>Login</h2>
            <div class="input_box">
              <input type="email" placeholder="Enter your email" name="email" required />
              <i class="uil uil-envelope-alt email"></i>
            </div>
            <div class="input_box">
              <input type="password" placeholder="Enter your password" name="password" required />
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div>
            <button class="button">Login Now</button>
        {!! Form::close() !!}
            </div>
      </div>
    </section>

    <script src="{{asset('assets/js/script.js')}}"></script>
  </body>
</html>
