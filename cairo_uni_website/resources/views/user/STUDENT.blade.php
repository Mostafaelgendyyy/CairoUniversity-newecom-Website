<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>FCAI COMMUNITY</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="WebPR/StyleSettings.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    table {
      width: 700px;
    }
    body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
    }
    h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;      
      font-size: 20px;
      color: #111;
    }
    .container {
      padding: 80px 120px;
    }
    .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
    }
    .person:hover {
      border-color: #f1f1f1;
    }
    .carousel-inner img {
      -webkit-filter: grayscale(90%);
      filter: grayscale(90%); /* make all photos black and white */ 
      width: 100%; /* Set width to 100% */
      margin: auto;
    }
    .carousel-caption h3 {
      color: #fff !important;
    }
    @media (max-width: 600px) {
      .carousel-caption {
        display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
      }
    }
    .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
    }
    .bg-1 h3 {color: #fff;}
    .bg-1 p {font-style: italic;}
    .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
    }
    .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }
    .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
    }
    .thumbnail p {
      margin-top: 15px;
      color: #555;
    }
    .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
    }
    .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
    }
    .modal-header, h4, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
    }
    .modal-header, .modal-body {
      padding: 40px 50px;
    }
    .nav-tabs li a {
      color: #777;
    }
    #googleMap {
      width: 100%;
      height: 400px;
      -webkit-filter: grayscale(100%);
      filter: grayscale(100%);
    }  
    .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
    }
    .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
    }
    .navbar-nav li a:hover {
      color: #fff !important;
    }
    .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
    }
    .navbar-default .navbar-toggle {
      border-color: transparent;
    }
    .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
    }
    .dropdown-menu li a {
      color: #000 !important;
    }
    .dropdown-menu li a:hover {
      background-color: red !important;
    }
    footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      padding: 32px;
    }
    footer a {
      color: #f5f5f5;
    }
    footer a:hover {
      color: #777;
      text-decoration: none;
    }  
    .form-control {
      border-radius: 0;
    }
    textarea {
      resize: none;
    }
    
    #footer {
  position:absolute;
    bottom:0;
    width:100%;
    height:60px;   /* Height of the footer */
    background:#6cf;
    min-width:1100px;
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">FCAI</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{url('/')}}">HOME</a></li>
        <li><a href="#CurrentCourses">Current Courses</a></li>
        <li><a href="#Grades">Grades</a></li>
        <li><a href="#contact">Enrollment</a></li>

        <li>
            @if (Route::has('login'))
            
                @auth
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="">{{Auth::user()->Fullname}}</a></li>
                      <li><a href="{{ route('profile.show') }}">Profile</a></li>
                      <!-----<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>-->
                        
                      <li><form method="POST" action="{{ url('logout') }}">
                        @csrf 
                    
                         <a href="{{ url('logout') }}" onclick="event.preventDefault();
                              this.closest('form').submit(); " role="button">
                              {{ __('Log Out') }}
                        </a>
                    
                     </form>
                  </li> 
                    </ul>
                  </li> 
                @else
                    <li><a href="{{ route('login') }}" >Log in</a></li>

                    @if (Route::has('register'))
                        <li><a href="{{ route('register') }}" >Register</a></li>
                    @endif
                @endauth
            
        @endif
        </li> 

        
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="WebPR/Imgs/im1.jpg" alt="New York" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Cairo University</h3>
          <p>Remember that studying can be challenging and take you out of your comfort zone.</p>
        </div>      
      </div>

      <div class="item">
        <img src="WebPR/Imgs/img2.png" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Computer Science</h3>
          <p>Best of Sciences</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="WebPR/Imgs/im3.jpg" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Students in Fcai</h3>
          <p>Graduates of 2012</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (Current Courses Section) -->
<div id="CurrentCourses" class="container text-center">
  <h3>Current Courses</h3>

  <br>

  <div class="row">
    @foreach($registeredcources as $registeredcources)
    <div class="col-sm-4">
      <a href="#demo" data-toggle="collapse">
        <p class="text-center"><strong>Crs#{{$registeredcources->id}}</strong></p><br>
  </a>
      <div id="demo" class="collapse">
        <p>{{$registeredcources->course_name}}</p>
        <p>Under SuperVision</p>
        <p>{{$registeredcources->course_instructor}}</p>
      </div>
    </div>
    @endforeach
  </div>
</div>

<!-- Container (TOUR Section) -->
<div id="Grades" class="bg-1">
  <div class="container">
    <h3 class="text-center">Grades</h3>
    <p class="text-center">Look to See your Courses Grades</p>
    <table class="table table-hover table-dark">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Course Name</th>
          <th scope="col">Midterm</th>
          <th scope="col">Team Work</th>
          <th scope="col">Final</th>
          <th scope="col">Total</th>
        </tr>
      </thead>
      <tbody>
        @foreach($currentcourses as $currentcourses)  
        <tr>
          <th scope="row">{{$currentcourses->id}}</th>
          <td>{{$currentcourses->Coursename}}</td>
          <td>{{$currentcourses->Midterm}}</td>
          <td>{{$currentcourses->Teamwork}}</td>
          <td>{{$currentcourses->Final}}</td>
          <td>{{$currentcourses->Total}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

<div id="contact" class="container">
  <h3 class="text-center">Available Courses</h3>

  <div class="row text-center">
  @if (Route::has('login'))
  @auth
    @foreach($coursesdetails as $coursedetails)    
        <div class="col-sm-4">
        <div class="thumbnail">
            <p><strong>{{$coursedetails->Course_name}}</strong></p>
            <p>Available Now</p>
            <form action="{{url('/enrollcourses',$coursedetails->id)}}" method="POST">
                @csrf
                <input type="hidden" name="userid" value="{{Auth::id()}}">
                <button class="btn" type="submit">Enroll</button>
            </form>
            {{-- <button class="btn" data-toggle="modal" data-target="#myModal">Enroll</button> --}}
        </div>
        </div>
        @endforeach
        @endauth
        @endif
  </div>       
    
</div>
 

<br>
<!-- Image of location/map -->
<img src="WebPR/Imgs/Map.png" class="img-responsive" width="100%" >
<!-- Footer -->
<footer class="text-center" style="width: 100%;">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Faculty of Computers and Artificial Intelligence - Cairo University<a href="https://my.fci-cu.edu.eg/index.php" data-toggle="tooltip" title="Visit ecom"><br> www.Fci-cu.edu.eg.</a></p> 
</footer>
<script src="WebPR/Script.js"></script>
</body>
</html>
