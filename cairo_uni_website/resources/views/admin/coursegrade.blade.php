<!DOCTYPE html>
<html lang="en">
<head>
@include('admin.adminhead')
<style>
input[type=text],textarea{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=password]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}


label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  width: 140px;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

</style>
</head>
<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="{{url('/adminhome')}}" target="_blank">
        <img src="{{asset('admin/assets/img/logo-ct.png')}}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Admin Dashboard</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="{{url('/adminhome')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{url('/users')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Users</span>
          </a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link text-white " href="{{url('/addcources')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Add Courses</span>
          </a>
        </li>
      <li class="nav-item">
          <a class="nav-link text-white " href="{{url('/showcourses')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Show Courses</span>
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link text-white " href="{{url('/addcoursegrade')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">view_in_ar</i>
            </div>
            <span class="nav-link-text ms-1">Add Course Grades</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{url('/showcoursesgrades')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Show Courses Grades</span>
          </a>
        </li>

      </ul>
    </div>
    
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    @include('admin.adminnav')
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      

        @include('admin.afternav')


        <div class="container">
            <br>
            
            <form action="{{url('/savecoursegrade')}}" method="POST">
                @csrf

                <div class="row">
                  <div class="col-25">
                    <label for="">User name</label>
                  </div>
                  <div class="col-75">
                  <select name="userid" >
                    @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                  </select>
                  </div>
                </div>  
              <div class="row">
                <div class="col-25">
                  <label for="">Course name</label>
                </div>
                <div class="col-75">
                  <select name="Course_name" >
                    @foreach($courses as $course)
                    <option value="{{$course->Course_name}}">{{$course->Course_name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              
              <div class="row">
                <div class="col-25">
                  <label for="">Midterm</label>
                </div>
                <div class="col-75">
                  <input type="text" name="Midterm" placeholder="Enter Midterm grade" id="name" required>
                </div>
              </div>

              <div class="row">
                <div class="col-25">
                  <label for="">Teamwork</label>
                </div>
                <div class="col-75">
                  <input type="text" name="Teamwork" placeholder="Enter Teamwork grade" id="name" required>
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <label for="">Final</label>
                </div>
                <div class="col-75">
                  <input type="text" name="Final" placeholder="Enter Final grade " id="name" required>
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <label for="">Total</label>
                </div>
                <div class="col-75">
                  <input type="text" name="Total" placeholder="Enter Total grade " id="name" required>
                </div>
              </div>
              

              <div class="row">
                <input type="submit" value="Add Course Grade">
            </div>
            </form>
          </div>
          

      @include('admin.adminfooter')
    </div>
  </main>

  @include('admin.afterfooter')

  <!--   Core JS Files   -->
  @include('admin.adminjs')
</body>

</html>