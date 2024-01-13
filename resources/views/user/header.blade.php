<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEADER</title>
  
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
          <div class="container">
            <a class="navbar-brand" href="{{url('/')}}"><span class="text-primary">E</span>-Plus</a>
    
    
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupport">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{'user.ourteam'}}">Our Team</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="doctors.html">Doctors</a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact</a>
                </li>

                <li class="nav-item">
                  <a class="btn btn-primary ml-lg-3" href="#appo">Book Appointment</a>
                </li>
               
                <!-- Login/Register -->
                @if(Route::has('login'))
    
                @auth
                      <li class="nav-item">
                          <a class="nav-link" style="background-color:green;color:white;" href="{{url('myappointment')}}">My Appointment</a>
                        </li>
                           <x-app-layout>
                           </x-app-layout>       
    
    
                @else
    
                <li class="nav-item">
                  <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
                </li>
    
                <li class="nav-item">
                  <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
                </li>
    
                @endauth
                
                @endif
    
              </ul>
            </div> <!-- .navbar-collapse -->
          </div> <!-- .container -->
        </nav>
      </header>
</body>
</html>