
<!DOCTYPE html>
<html lang="en">
<head>
  @include('student.header')
</head>
<body>      
    
  </div> <!-- .page-section -->
  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">View Inventory</h1>
      <table class="table caption-top">
  
  <thead>
    <tr>
    <th scope="col">ID</th>
      <th scope="col">Student ID</th>
      <th scope="col">mattress_code</th>
      <th scope="col">curtains</th>
      <th scope="col">room_keys</th>
      <th scope="col">bed code</th>
      <th scope="col">room lock</th>
      <th scope="col">stove</th>
      <th scope="col">fridge</th>
      <th scope="col">waste bin</th>
    </tr>
  </thead>
  <tbody>
    
      
      <tr>
    
          <td>{{ $item->id }}</td>
          <td>{{ $item->student_id }}</td>
          <td>{{ $item->mattress_code }}</td>
          <td>{{ $item-curtains }}</td>
          <td>{{ $item->room_keys }}</td>
          <td>{{ $item->bed_code }}</td>
          <td>{{ $item->room_lock }}</td>
          <td>{{ $item->stove }}</td>
          <td>{{ $item->fridge }}</td>
          <td>{{ $item->waste_bin }}</td>
    
      </tr>
    <tr>
      
      
     
  </tbody>
</table>
    </div>
  </div> <!-- .page-section -->

 



@include('student.script')
</body>
</html>




