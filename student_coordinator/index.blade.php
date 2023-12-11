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
    <script src="https://cdn.sheetjs.com/xlsx-0.19.3/package/dist/xlsx.full.min.js"></script>
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
                        <div class="row">
                                <div class="col-10 text-white">
                                All Rooms Details
                                </div>
                                <div class="col-2">
                                <a href="{{ route('create') }}" class="btn btn-white text-black btn-sm "  style="background-color:#fff; border-radius:5px"title="Add New Student">
                                  Add Rooms
                                </a>
                                </div>
                            </div>
                            </div>
                        </div>

                     <!-------start of main content--->
                                <!-------A Table--->
                     <div class="outer-wrapper">
                        <div class="table-wrapper">
                        <table id="my-table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Room Number</th>
                                        <th>Hostel Name</th>
                                        <th>Appartment Number</th>
                                        <th>Floor</th>
                                        <th>Room Side</th>
                                        <th>Seater</th>
                                        <th>Room Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($rooms as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->room_id }}</td>
                                        <td>{{ $item->hostel_name }}</td>
                                        <td>{{ $item->appartment_no }}</td>
                                        <td>{{ $item->floor}}</td>
                                        <td>{{ $item->room_side }}</td>
                                        <td>{{ $item->seater }}</td>
                                        <td>{{ $item->room_status }}</td>

                                        <td>

                                        <a href="{{ route('student_coordinator.edit',$item->id)}}" title="Edit rooms"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ route('student_coordinator.destroy', $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn bg-danger btn-sm text-white" title="Delete Student" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

</div>
</div>
                           <div class="row">
                           <div class="col-6">
                            <button class="btn btn-primary" id="btn-export">Export as XLSX</button>
                            </div>
                                <div class="col-6">
                                <button class="btn btn-danger" id="btnExport" value="Export to Pdf" onclick="Export()">Export as pdf</button>

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
    <script>
const exportButton = document.getElementById('btn-export');
const table = document.getElementById('my-table');
exportButton.addEventListener('click', () => {
  /* Create worksheet from HTML DOM TABLE */
  const wb = XLSX.utils.table_to_book(table, {sheet: 'sheet-1'});
  /* Export to file (start a download) */
  XLSX.writeFile(wb, 'Rooms-Details.xlsx');
});
        </script>
        <script type="text/javascript">
        function Export() {
            html2canvas(document.getElementById('my-table'), {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("Room Details.pdf");
                }
            });
        }
    </script>
    @include('student_coordinator.script')

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script src="https://kit.fontawesome.com/dcdb05824e.js" crossorigin="anonymous"></script>
    <script scr="student_coordinator/assests/css/script.js">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



</body>

</html>

