
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
        <h3 class="text-center wow fadeInUp">Personal Information</h3>
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="first_name" class="form-control" placeholder="First name">
            @error('first_name')
                                    <span class="text-danger" >{{$message}}</span>
                                    @enderror
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" name="student_id"  class="form-control" placeholder="Student Number">
            @error('student_id')
                                        <span class="text-danger" >{{$message}}</span>
                                    @enderror 
          </div>

          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="text" name="middle_name"  class="form-control" placeholder="Middle Name">
            @error('middle_name')
                                        <span class="text-danger" >{{$message}}</span>
                                    @enderror
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" name="student_nrc" class="form-control" placeholder="Enter NRC Number">
            @error('student_nrc')
                                    <span class="text-danger" >{{$message}}</span>
                                @enderror
          </div>

          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="text" name="surname"  class="form-control" placeholder="Surname">
           @error('surname')
                                        <span class="text-danger" >{{$message}}</span>
                                    @enderror
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" name="student_phone_no" class="form-control" placeholder="Phone Number">
            @error('student_phone_no')
                                    <span class="text-danger" >{{$message}}</span>
                                    @enderror
          </div>

          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="100ms">
            <select name="gender"  id="gender" class="custom-select" placeholder="Select Gender">
              <option>Select Gender</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="other">Other</option>
            </select>
            @error('gender')
                                        <span class="text-danger" >{{$message}}</span>
                                    @enderror
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="number" name="age" class="form-control" placeholder="Age">
            @error('age')
                                        <span class="text-danger" >{{$message}}</span>
                                    @enderror
          </div>

          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="100ms">
            <select name="marital_status"  id="marital_status" class="custom-select" placeholder="Marital Status">
              <option >Marital Status</option>
              <option value="Single">Single</option>
              <option value="Married">Married</option>
              <option value="Divorced">Divorced</option>
              <option value="Widowed">Widowed</option>
            </select>
            @error('marital_status')
                                    <span class="text-danger" >{{$message}}</span>
                                    @enderror
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="date" name="date_of_birth" class="form-control" placeholder="D.O.B">
            @error('date_of_birth')
                                        <span class="text-danger" >{{$message}}</span>
                                    @enderror
          </div>

          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="medical_condition" id="medical_condition" class="custom-select" placeholder="Medical Condition">
              <option>Do you have any Medical condition? Yes/No</option>
              <option value="No">NO</option>
              <option value="YES">YES</option>
            </select>
            @error('medical_condition')
                                        <span class="text-danger" >{{$message}}</span>
                                    @enderror
          </div>
        
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="100ms">
            <input type="text" name="student_email" class="form-control" placeholder="Email">
            @error('student_email')
                                    <span class="text-danger" >{{$message}}</span>
                                    @enderror
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="100ms">
            <input type="text" name="student_address" class="form-control" placeholder="Physical Address">
            @error('student_address')
                                    <span class="text-danger" >{{$message}}</span>
                                    @enderror
          </div>
        </div>
        <h3 class="text-center wow fadeInUp">Academic Information</h3>
          <div class="row mt-5 ">
            <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="100ms">
              <select name="year_of_study" id="year_of_study" class="custom-select" placeholder="Year Of Study">
              <option>Year Of Study</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              </select>
              @error('year_of_study')
                                        <span class="text-danger" >{{$message}}</span>
                                    @enderror
          </div>
        <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="100ms">
            <select name="programme" id="programme" class="custom-select" placeholder="Programme">
            <option>Programme</option>
            <option value="BSc in ICT with Education">ICT with Education</option>
            <option value="BSc in Animal Science">Animal Science</option>
            <option value="BSc in Sustainable Agriculture">Sustainable Agriculture</option>
            <option value="BSc in Fisheries and Aquaculture">Fisheries and Aquaculture</option>
            <option value="BSc in Cyber Security">Cyber Security</option>
            <option value="BSc in Agro Forestry">Agro Forestry</option>
            </select>
            @error('programme')
                                        <span class="text-danger" >{{$message}}</span>
                                    @enderror
         </div>


          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="100ms">
            <select name="registration_status"  class="custom-select" placeholder="Academic Status">
            <option >Academic Status</option>
            <option value="Full-Time">FULL-TIME</option>           
            <option value="Part-Time">PART-TIME</option>
            </select>
            @error('registration_status')
                                        <span class="text-danger" >{{$message}}</span>
                                    @enderror
         </div>

         <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="text" name="academic_year"  class="form-control" placeholder="Academic year">
            @error('academic_year')
                                        <span class="text-danger" >{{$message}}</span>
                                    @enderror
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" name="intake" class="form-control" placeholder="Intake">
            @error('intake')
                                        <span class="text-danger" >{{$message}}</span>
                                    @enderror
          </div>
        </div>

        <h3 class="text-center wow fadeInUp">Guardian details</h3>
          <div class="row mt-5 ">
            <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
              <input type="text" name="guardian_name" class="form-control" placeholder="Guardian Name">
              @error('guardian_name')
                                        <span class="text-danger" >{{$message}}</span>
                                    @enderror
            </div>
            <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
              <input type="text" name="guardian_nrc" class="form-control" placeholder="Guardian NRC">
              @error('guardian_nrc')
                                        <span class="text-danger" >{{$message}}</span>
                                    @enderror
            </div>

            <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
              <input type="text" name="guardian_relation" class="form-control" placeholder="Guardian Relation">
              @error('guardian_relation')
                                    <span class="text-danger" >{{$message}}</span>
                                @enderror
            </div>
            <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
              <input type="text" name="guardian_occupation" class="form-control" placeholder="Guardian Occupation">
              @error('guardian_occupation')
                                    <span class="text-danger" >{{$message}}</span>
                                @enderror
            </div>

            <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
              <input type="text" name="guardian_address" class="form-control" placeholder="Guardian Address">
              @error('guardian_address')
                                    <span class="text-danger" >{{$message}}</span>
                                @enderror
            </div>
            <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
              <input type="text" name="guardian_phone_no" class="form-control" placeholder="Guardian Phone Number">
              @error('guardian_phone_no')
                                        <span class="text-danger" >{{$message}}</span>
                                    @enderror
            </div>

            <div class="col-12 py-2 wow fadeInUp" data-wow-delay="100ms">
              <input type="text" name="guardian_email" class="form-control" placeholder="Guardian Email">
              @error('guardian_email')
                <span class="text-danger" >{{$message}}</span>
              @enderror
            </div>

        <button type="submit" name="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Application</button>
      </form>
    </div>
  </div> <!-- .page-section -->
@include('student.script')
</body>
</html>