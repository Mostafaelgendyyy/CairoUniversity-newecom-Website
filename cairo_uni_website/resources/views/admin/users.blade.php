<!DOCTYPE html>
<html lang="en">

    <head>
     
        @include('admin.adminhead')
        <style>
            #customers {
              font-family: Arial, Helvetica, sans-serif;
              border-collapse: collapse;
              width: 100%;
            }
            
            #customers td, #customers th { 
              border: 1px solid #ddd;
              padding: 8px;
            }
            
            #customers tr:nth-child(even){background-color: #f2f2f2;}
            
            #customers tr:hover {background-color: #ddd;}
            
            #customers th {
              padding-top: 12px;
              padding-bottom: 12px;
              text-align: left;
              background-color: #04AA6D;
              color: white;
            }
            </style>
    </head>
<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="{{url('/adminhome')}}" target="_blank">
        <img src="admin/assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Admin Dashboard</span>
      </a>
        {{-- @include('admin.admintimer') --}}
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

        <table id="customers" style="margin-top: 8px">
          <tr>
            <th>FullName</th>
            <th>Email</th>
            <th>Phone number</th>
            <th>Address</th>
            <th>Date of birth</th>
            <th>National id</th>
            <th>GPA</th>
            <th>action</th>
            
            {{-- <th>action4</th> --}}
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->Phone_number}}</td>
            <td>{{$user->Address}}</td>
            <td>{{$user->Date_of_birth}}</td>
            <td>{{$user->National_id}}</td>
            <td>{{$user->GPA}}</td>
            <td>    
              @if($user->usertype == '1')
                <td> <p>Disabled</p> </td>
              
              @else
                  <td class="btn-btn-danger"><a href="{{url('/deleteuser',$user->id)}}">Delete</a></td>

              
              @endif
            </td>
        </tr>

        @endforeach
        
        </table>


      @include('admin.adminfooter')
    </div>
  </main>

  @include('admin.afterfooter')

  <!--   Core JS Files   -->
  @include('admin.adminjs')
</body>

</html>