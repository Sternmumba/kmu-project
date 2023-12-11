<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>KMU accommodation system</title>
<link rel="stylesheet" href="student/assets/css/maicons.css">
<link rel="stylesheet" href="student/assets/css/bootstrap.css">
<link rel="stylesheet" href="student/assets/vendor/owl-carousel/css/owl.carousel.css">
<link rel="stylesheet" href="student/assets/vendor/animate/animate.css">
<link rel="stylesheet" href="student/assets/css/theme.css">

<nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">KMU</span>Acommodation System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">   
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('application')}}">Room Application</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3"href="{{route('viewAssignedRoom')}}">View Assigned Room</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3"href="{{route('viewInventory')}}">View Inventory</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('reportQuery')}}">Report Query</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('logout')}}">logout</a>
            </li>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>