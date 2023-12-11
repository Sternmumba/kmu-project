
<!DOCTYPE html>
<html lang="en">
<head>
  @include('student.header')
</head>
<body>      
    
  </div> <!-- .page-section -->
  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Apply Room</h1>
      <form class="main-form" action="/studentDashboard" method="POST">
        @csrf
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="first_name" class="form-control" placeholder="First name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" name="student_number"  class="form-control" placeholder="student number">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" name="date"  class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" name="previous_room" class="form-control" placeholder="Previous Room">
          </div>
          
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="100ms">
            <input type="text" name="phone_number" class="form-control" placeholder=" Phone Number..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="100ms">
            <select name="year_of_study" name="year_of_study"  id="year_of_study" class="custom-select" placeholder="--select--">
            <option>--Select Year Of Study--</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            </select>
        </div>
        <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="100ms">
            <select name="program" id="program" class="custom-select" placeholder="--select--">
            <option>--Select Program--</option>
            <option value="ict">ICT with edu</option>
            <option value="animal">Animal Science</option>
            <option value="agriculture">Sustainable Agriculture</option>
            <option value="fisheries">Fisheries</option>
            <option value="cyber">Cyber Security</option>
            </select>
         </div>
         <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="health_condition" id="health_condition" class="custom-select" placeholder="student number">
               <option>--Do you have health_condition? Yes/No-- </option>
            <option value="No">NO</option>
              <option value="YES">YES</option>
              
            </select>
          </div>


          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="100ms">
            <select name="academic_status"  class="custom-select" placeholder="--select--">
            <option>--Select Status--</option>
            <option value="ict">Full-TIME</option>
            <option value="animal">PART-TIME</option>
            </select>
         </div>


        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Application</button>
      </form>
    </div>
  </div> <!-- .page-section -->

 



@include('student.script')
</body>
</html>