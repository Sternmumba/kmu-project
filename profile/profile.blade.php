<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('warden.style')
  </head>
  <body style="background-color:rgb(211, 211, 211)">
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('warden.sidebar')
      <!-- partial -->
      @include('warden.header')
        <!-- partial -->
        <div class="main-panel " >
          <div class="content-wrapper "style="background-color:rgb(211, 211, 211); width:950px">
            <!---form--->
<div class="card" style="background-color:#ffffff">
  <div class="card-body  p-3 ">
  <div class="card-header text-center"style="background-color:#198754">
    Update Profile
  </div>
  <form>
  <div class="mb-2 text-black mt-3"><b>Change Personal Info</b></div>
  <div class="row mt-3">
  <div class="col">
  <label class="form-label text-black">First Name</label>
    <input type="text" class=" shadow form-control bg-body rounded border-light " placeholder="First name" aria-label="First name">
  </div>
  <div class="col">
  <label class="form-label text-black ">Last Name</label>
    <input type="text" class="shadow form-control bg-body rounded border-light" placeholder="Last name" aria-label="Last name">
  </div>
</div>
<div class="mb-3">
  <label class="form-label text-black mt-2">Email address</label>
  <input type="email" class="shadow form-control bg-body rounded border-light" placeholder="email@example.com">
</div>
<div class="row">
                      <div class="col-12 col-sm-6 mb-3">
                        <div class="mb-2 text-black"><b>Change Password</b></div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group text-black">
                              <label>Current Password</label>
                              <input class="shadow form-control bg-body rounded border-light" type="password" placeholder="••••••">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group text-black">
                              <label>New Password</label>
                              <input class="shadow form-control bg-body rounded border-light" type="password" placeholder="••••••">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group text-black">
                              <label>Confirm <span class="d-none d-xl-inline text-black">Password</span></label>
                              <input class="shadow form-control bg-body rounded border-light" type="password" placeholder="••••••"></div>
                          </div>
                        </div>
                      </div>
</div>
                      <div class="row">
                      <div class="col d-flex justify-content-end">
                        <button class="btn btn-primary" type="submit">Save Changes</button>
                      </div>
                    </div>
</form>
  </div>
</div>
<!----form ends--->


          <!-- content-wrapper ends -->

        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('warden.script')
  </body>
</html>
