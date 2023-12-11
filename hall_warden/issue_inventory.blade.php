<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hall Warden| KMU</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        @include('hall_warden.layout')

    <!-- Custom styles for this template-->
    <link href="student_coordinator/css/sb-admin-2.min.css" rel="stylesheet">


</head>

<body>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('hall_warden.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class=" content-wrapper d-flex flex-column">

            <!-- Main Content -->
            <x-app-layout>

        <div class="main-panel " >
        <div class="content-wrapper ">
            <!---form--->
<div class="card m-3 bg-white">
  <div class="card-body  p-3 m-3 ">
  <div class="card-header text-center bg-info text-white">
    Issue inventory
  </div>
  <div class="content-container">
             <div class="contents">
  <form action="{{url('issue_inventory')}}" method="POST">
  @csrf
  <div class="mb-2 text-black mt-3"><b>Personal Information</b></div>
  <div class=" row mt-3">
    <label class="col-sm-2 col-form-label text-black">Student Number</label>
    <div class="col-sm-4">
      <input type="text" class="shadow form-control bg-body rounded border-light" name="student_id" placeholder="e.g 19149260">
    </div>
  </div>
  <div class="mb-2 text-black mt-3 "><b>Issued Items </b></div>
  <div class="row mt-3">
  <div class="col">
  <label class="form-label text-black">Matress Code</label>
    <input type="text" class=" shadow form-control bg-body rounded border-light " name="mattress_code" placeholder="Matress Code">
  </div>
  <div class="col">
  <label class="form-label text-black ">Bed Code</label>
    <input type="text" class="shadow form-control bg-body rounded border-light" name="bed_code" placeholder="Bed Code" >
  </div>
</div>
<div class="mb-2 mt-3 text-muted" style="font-size:8px"><p>Tick issued for all issued items</p></div>
<div class="radio-container mt-1">
<div class=" row">
    <label class="col-sm-2 col-form-label text-black">Curtains</label>
    <div class="col-sm-6 mt-2">

    <input type="radio" value="yes" id="Yes" name="curtains">
    <label  class="text-black">Issued</label>

    <input type="radio" value="no"nid="No" name="curtains">
    <label class="text-black">Unissued</label>
    </div>
  </div>
  <div class="radio-container mt-1">
<div class=" row">
    <label class="col-sm-2 col-form-label text-black">Room Keys</label>
    <div class="col-sm-6 mt-2">

    <input type="radio" value="yes" id="" name="room_keys">
    <label  class="text-black">Issued</label>

    <input type="radio"value="no" id="" name="room_keys">
    <label class="text-black">Unissued</label>
    </div>
  </div>

  <div class="radio-container mt-1">
<div class=" row">
    <label class="col-sm-2 col-form-label text-black">Room lock</label>
    <div class="col-sm-6 mt-2">

    <input type="radio" value="yes" id="" name="room_lock">
    <label  class="text-black">Issued</label>

    <input type="radio"  value="no" id="" name="room_lock">
    <label class="text-black">Unissued</label>
    </div>
  </div>
  <div class="radio-container mt-1">
<div class=" row">
    <label class="col-sm-2 col-form-label text-black">Stove</label>
    <div class="col-sm-6 mt-2">

    <input type="radio" value="yes" id="" name="stove">
    <label  class="text-black">Issued</label>

    <input type="radio" value="no" id="" name="stove">
    <label class="text-black">Unissued</label>
    </div>
  </div>

  <div class="radio-container mt-1">
<div class=" row">
    <label class="col-sm-2 col-form-label text-black">Fridge</label>
    <div class="col-sm-6 mt-2">

    <input type="radio" value="yes" id="" name="fridge">
    <label  class="text-black">Issued</label>

    <input type="radio"value="no"  id="" name="fridge">
    <label class="text-black">Unissued</label>
    </div>
  </div>
  <div class="radio-container mt-1">
<div class=" row">
    <label class="col-sm-2 col-form-label text-black">Waste Bin</label>
    <div class="col-sm-6 mt-2">

    <input type="radio" value="yes" id="" name="waste_bin">
    <label  class="text-black">Issued</label>

    <input type="radio" value="no" id="" name="waste_bin">
    <label class="text-black">Unissued</label>
    </div>
  </div>

  <div class="row">
     <div class="col d-flex justify-content-end">
     <button class="btn bg-primary text-white" name="submit" type="submit">Assign</button>
     </div>
    </div>
<div>
</div>
</form>
  </div>
</div>
<!----form ends--->


          <!-- content-wrapper ends -->

        </div>
        <!-- main-panel ends -->
      </div>

<!-- End of Main Content -->
            </x-app-layout>
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->

    <!-- Bootstrap core JavaScript-->

    <script src="https://kit.fontawesome.com/dcdb05824e.js" crossorigin="anonymous"></script>
    <script scr="student_coordinator/assests/css/script.js">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

