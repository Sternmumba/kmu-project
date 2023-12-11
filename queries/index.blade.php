@extends('queries.layout')
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
    <linkhref="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Custom styles for this template-->
    <link href="student_coordinator/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">


        <!-- Sidebar -->
        @include('hall_warden.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <x-app-layout>
    <div class="row p-3">
<div class="col-md-12">
<div class="card">
<div class="card-header bg-info text-white">
Queries
</div>
<div class="card-body">
    <form action="{{ route('queries') }}" method="GET">
        <div class="row">
            <div class="col-4">
                <label>Filter By date</label>
                <input type="date" name="date" value="{{ Request::get('date') ?? date('Y-m-d') }}" class="form-control" />
            </div>
            <div class="col-4">
                <label>Filter By Status</label>
                <select name="status" class="form-select">
                    <option value="">Select the status</option>
                    <option value="in progress" {{ Request::get('status') == 'in progress' ? 'selected' : '' }}>In progress</option>
                    <option value="completed" {{ Request::get('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                    <option value="pending" {{ Request::get('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="cancelled" {{ Request::get('status') == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                </select>
            </div>
            <div class="col-4 mt-2">
                <br>
                <button type="submit" class="btn btn-primary">Filter</button>
            </div>
        </div>
    </form>
    <hr>

    <!-- Display the queried data -->
    @foreach($queries as $query)
        <div class="card">
            <div class="card-body">
                <!-- Display query information here -->
                <p>Date: {{ $query->created_at }}</p>
                <p>Status: {{ $query->query_status }}</p>
                <p>Other Issues: {{ $query->other_issue }}</p>
                <p>Room Issue: {{ $query->room_issue }}</p>
                <!-- Add other fields as needed -->
            </div>
        </div>
    @endforeach

    <!-- Pagination links -->
    {{ $queries->links() }}
</div>

</x-app-layout>
            <!-- End of Main Content -->



        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->

    <!-- Bootstrap core JavaScript-->

    <script src="https://kit.fontawesome.com/dcdb05824e.js" crossorigin="anonymous"></script>
</body>

</html>