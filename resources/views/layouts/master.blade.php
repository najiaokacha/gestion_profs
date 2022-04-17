<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <script src="{{url('js/bootstrap.bundle.min.js')}}" ></script>
                  <!-- END Bootstrap -->

                  <!-- additional  CSS  -->
    <link rel="stylesheet" href="{{url('css/style.css')}}">
</head>
<body >
<div class="container-fluid p-0">
    <img src = "{{url('img/l11.png')}}" style="width: 100%;" >
</div>
             <!-- End Header -->

            <!--   Navbar -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">About Us</a>
                        </li>
                        
                                <li class="nav-item">
                          <a class="nav-link" href="#">Archives</a>
                        </li>
                                <li class="nav-item">
                          <a class="nav-link" href="#">Courses</a>
                        </li>
                                <li class="nav-item">
                          <a class="nav-link" href="#">Projects</a>
                        </li>
                                        <li class="nav-item">
                          <a class="nav-link" href="#">News</a>
                        </li>
                        
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Formations
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Web Developpement</a></li>
                            <li><a class="dropdown-item" href="#">Mobile Developpement</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Desktop Developpement</a></li>
                            <li><a class="dropdown-item" href="#">Data Sciences</a></li>
                            
                          </ul>
                        </li>
                                    <li class="nav-item">
                          <a class="nav-link" href="#">Contact Us</a>
                        </li>
                      </ul>
                      <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                      </form>
                    </div>
                  </div> 
              </nav>
            <!--  End Navbar-->


    
@yield('content')


<script src="{{asset('assets/js/Jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>