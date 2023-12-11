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
    <link href="student_coordinator/assests/css/style.css" rel="stylesheet">


</head>

<body style="width:100%">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('hall_warden.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class=" content-wrapper">

            <!-- Main Content -->
            <x-app-layout>

         <!-- partial -->
         <div class="main-panel" >
          <div class="content-wrapper">
            <!---form--->

        <div class="row" style="margin:25px;">
            <div class="col-12">
                <div class="card "  style="background-color:#ffffff; ">
                    <div class="card-header bg-info">
                        <div class="row">
                          <div class="col-6 text-white">
                            Shift Rooms
                            </div>
                            <div class="col-6">
                                <div class="form float-end">
                                <i class="fa fa-search"></i>
                                <input type="text" id="searchInput" onkeyup="searchFunction()" class="form-control form-input" placeholder="Search here">
                            </div>
                        </div>
                            </div>
                        </div>
                    <!-------A Table--->
                    <div class="outer-wrapper">
                        <div class="table-wrapper">
                        <table  id="searchTable">
                        <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>SIN#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Room Id</th>
                                        <th>Y.O.S</th>
                                        <th>Health Problem</th>
                                        <th>Gender</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tbody>
                                    <tr>
                                    <td>1</td>
                                    <td>19146996</td>
                                    <td>Cobet</td>
                                    <td>Nswana</td>
                                    <td>W101A1</td>
                                    <td>4</td>
                                    <td>No</td>
                                    <td>Male</td>
                                    <td>
                                    <a href="#" title="Edit rooms"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Shift</button></a>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td>1</td>
                                    <td>19112345</td>
                                    <td>Cobet</td>
                                    <td>Nswana</td>
                                    <td>W101A1</td>
                                    <td>4</td>
                                    <td>No</td>
                                    <td>Male</td>
                                    <td>
                                    <a href="#" title="Edit rooms"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Shift</button></a>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td >1</td>
                                    <td>19148858</td>
                                    <td>Cobet</td>
                                    <td>Nswana</td>
                                    <td>W101A1</td>
                                    <td>4</td>
                                    <td>No</td>
                                    <td>Male</td>
                                    <td>
                                    <a href="#" title="Edit rooms"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Shift</button></a>
                                    </td>
                                    </tr>
                                </tbody>
                                </tbody>
                        </table>
</div>
</div>


                     <!------End Table---->
                </div>
            </div>
        </div>
        <!-- main-panel ends -->
      </div>
</div>
<!-- End of Main Content -->
            </x-app-layout>
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <script>

function searchFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("searchInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("searchTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      }
      else {
        tr[i].style.display = "none";
      }
    }
  }
}
       </script>
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

