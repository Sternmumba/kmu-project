
<!DOCTYPE html>
<html lang="en">
<head>
  @include('student.header')
</head>
<body>      
    
  </div> <!-- .page-section -->
  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">View assgned room</h1>
      <div class="card-body">



<div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>ID</th>
                            <td field-key='id'>{{ $student->id }}</td>
                        </tr>
                        <tr>
                            <th>Student ID</th>
                            <td field-key='student_id'>{{ $student->student_id }}</td>
                        </tr>
                        <tr>
                            <th>Student Name</th>
                            <td field-key='student_name'>{{ $student->student_name }}</td>
                        </tr>
                        <tr>
                            <th>Room ID</th>
                            <td field-key='room_id'>{{ $student->room_id }}</td>
                        </tr>
                       
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('student.viewAssignedRoom') }}" class="btn btn-default"></a>
        </div>
    </div>

</div>
  </div> <!-- .page-section -->


@include('student.script')
</body>
</html>




