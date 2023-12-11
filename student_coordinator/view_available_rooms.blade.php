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
        @include('student_coordinator.layout')

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
    <div class="container">
        <div class="row" style="margin:10px; ">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-info">
                        <div class="row">
                                <div class="col text-white">
                                <h2>Hostels</h2>
                                </div>
                            </div>
                        </div>

                     <!-------start of main content--->

                     <div class="container mt-4">
                     <div class="card">
                            <div class="card-body my-2">
                                <div class="list-group">
                                    @foreach($hostels as $item)
                                        <a href="{{ route('view_by_hostel', $item->hostel_name) }}" class="list-group-item list-group-item-action">{{$item->hostel_name}}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>


                     <!------End---->
                </div>
            </div>
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
</body>

</html>

