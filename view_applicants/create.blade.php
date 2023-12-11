<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Student Coordinator| KMU</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        @include('view_applicants.layout')

    <!-- Custom styles for this template-->
    <link href="student_coordinator/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="student_coordinator/assests/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('student_coordinator.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class=" content-wrapper d-flex flex-column">

            <!-- Main Content -->
            <x-app-layout>
            @extends('student_coordinator.layout')
<div class="card" style="margin:20px;">
  <div class="card-header bg-info">Add New Student</div>
  <div class="card-body">

  <form action="{{route('student_coordinator.store') }}" method="POST">
        {!! csrf_field() !!}
  <div class="mb-2 text-black mt-3"><b>Student Details</b></div>
  <div class="row mt-3">
  <div class="col">
  <label class="form-label text-black">Room Number</label>
    <input type="text" name="room_id" id="room_id" class=" shadow-sm form-control bg-body rounded border-light " placeholder="e.g X203B1">
  </div>
  <div class="col">
  <label for="hostel_name">Hostel Name</label>
  <select name="hostel_name" class="shadow-sm form-control bg-body rounded border-light mt-2" id="hostel_name">
  <option></option>
    <option value="W">W Hostel</option>
    <option value="X">X Hostel</option>
    <option value="Y">Y Hostel</option>
    <option value="Z">Z Hostel</option>
  </select>
  </div>
</div>
 <div class="row mt-3">
  <div class="col">
  <label class="form-label text-black">Apartment Number</label>
    <input type="text" name="appartment_no" class=" shadow-sm form-control bg-body rounded border-light " placeholder="e.g 203">
  </div>
  <div class="col">
  <label for="hostel_name">Floor Number</label>
  <select name="floor" class="shadow-sm form-control bg-body rounded border-light mt-2" id="hostel_name">
  <option></option>
  <option value="1">First Floor</option>
    <option value="2">Second Floor</option>
    <option value="3">Third Floor</option>
    <option value="4">Fourth Floor</option>
  </select>
  </div>
</div>
<div class="row mt-3">
  <div class="col">
  <label for="hostel_name">Room Side</label>
  <select name="room_side" class="shadow-sm form-control bg-body rounded border-light mt-2" id="hostel_name">
  <option></option>
  <option value="A">Side A</option>
    <option value="B">Side B</option>
  </select>
  </div>
  <div class="col">
  <label for="hostel_name">Room Seater</label>
  <select name="seater" class="shadow-sm form-control bg-body rounded border-light mt-2" id="hostel_name">
  <option></option>
  <option value="1">Seater 1</option>
    <option value="2">Seater 2</option>
    <option value="3">Seater 3</option>
    <option value="4">Seater 4</option>
  </select>
  </div>
</div>
<div class="row mt-3">
<div class="col-12 col-sm-6 mb-3">
<div class="col">
<div class="form-check">
  <input class="form-check-input" name="room_status" type="checkbox" value="Available" >
  <label class="form-check-label">
    Available
  </label>
</div>
</div>
</div>
  <div class="row">
 <div class="col d-flex justify-content-end">
<button class="btn btn-success" type="submit">Save</button>
</div>
 </div>
</form>

  </div>
</div>
            <!-- End of Main Content -->


</x-app-layout>
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->

    <!-- Bootstrap core JavaScript-->
    @include('student_coordinator.script')
    <script src="https://kit.fontawesome.com/dcdb05824e.js" crossorigin="anonymous"></script>
<script scr="student_coordinator/assests/css/script.js">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</script>
</body>

</html>

