
<!DOCTYPE html>
<html lang="en">
<head>
  @include('student.header')
</head>
<body>      
    
  </div> <!-- .page-section -->
  <div class="page-section">
    <div class="container">

      <h1 class="text-center wow fadeInUp">Report Room Queries to Hall Warden </h1>
      <form class="main-form" action="{{('queries')}}" method="POST">
        @csrf
        <div class="row mt-5 ">
      
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
          <p><label for="student_id">Student Number:</label></p>
            <input type="text" name="student_id" class="form-control" placeholder="Enter Student number here">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
          <p><label for="room_number">Room Number:</label></p>
            <input type="text" name="room_number"  class="form-control" placeholder="Enter Room number here">
          </div>
           
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="100ms">
          <p><label for="room_issue">Room related Queries:</label></p>
            <select name="room_issue"  id="room_issue" class="custom-select" placeholder="--select Room Issues--">
            <option>--select Room Related Issues--</option>
            <option value="stove issue">stove issue</option>
            <option value="fridge issue">fridge issue</option>
            <option value="door issue">door issue</option>
            <option value="tap issue">tap issue</option>
            <option value="sink issue">sink issue</option>
            <option value="light issue">light issue</option>
            </select>
            </div>
            <div class="col-12 col-sm-6 py-2 wow fadeInLight" data-wow-delay="100ms">
            <p><label for="other_issue">Other Queries:</label></p>
             <textarea name="other_issue" rows="4" cols="36.9" placeholder="Type Other Queries here "></textarea>
            
        </div>
        
      
        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Report </button>

      </form>
    </div>
  </div> <!-- .page-section -->

 



@include('student.script')
  
</body>
</html>