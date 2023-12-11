@extends('view_applicants.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Update Student</div>
  <div class="card-body">
       
  <form action="{{ route('view_applicants.edit', $applications->id) }}" method="POST">
        {!! csrf_field() !!}
        @method("PUT")
        <input type="hidden" name="id" id="id" value="{{$applications->id}}" id="id" />
        <label>Room#</label></br>
        <input type="text" name="room_id" id="name" value="{{$applications->room_id}}" class="form-control" ></br>
        <label>Firs Name</label></br>
        <input type="text" name="first_name" id="address" value="{{$applications->first_name}}" class="form-control" readonly></br>
        <label>Last Name</label></br>
        <input type="text" name="surname" id="address" value="{{$applications->surname}}" class="form-control" readonly></br>
        <label>SIN#</label></br>
        <input type="text" name="student_id" id="student_id" value="{{$applications->student_id}}" class="form-control" ></br>
        <label>programme</label></br>
        <input type="text" name="programme" id="programme" value="{{$applications->programme}}" class="form-control" readonly></br>
        <label>Year Of Study</label></br>
        <input type="text" name="year_of_study" id="mobile" value="{{$applications->year_of_study}}" class="form-control" readonly></br>
        
        <label>Accademic Year</label></br>
        <input type="text" name="accademic_year" id="mobile" value="{{$applications->accademic_year}}" class="form-control" readonly></br>
        <label>Health Problem</label></br>
        <input type="text" name="medical_condtion" id="mobile" value="{{$applications->medical_condition}}" class="form-control" readonly></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop