@extends('accepted_applicants.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Student Details</div>
  <div class="card-body">
       
  <form action="{{ route('view_applicants.edit', $assigned_rooms->id) }}" method="POST">
        {!! csrf_field() !!}
        @method("PUT")
        <input type="hidden" name="id" id="id" value="{{$assigned_rooms->id}}" id="id" />
        <label>Room#</label></br>
        <input type="text" name="room_id" id="room_id" value="{{$assigned_rooms->room_id}}" class="form-control" ></br>
        <label>Firs Name</label></br>
        <input type="text" name="first_name" id="first_name" value="{{$assigned_rooms->first_name}}" class="form-control" readonly></br>
        <label>Last Name</label></br>
        <input type="text" name="surname" id="surname" value="{{$assigned_rooms->surname}}" class="form-control" readonly></br>
        <label>SIN#</label></br>
        <input type="text" name="student_id" id="student_id" value="{{$assigned_rooms->student_id}}" class="form-control" ></br>
        <label>programme</label></br>
        <input type="text" name="programme" id="programme" value="{{$assigned_rooms->programme}}" class="form-control" readonly></br>
        <label>Year Of Study</label></br>
        <input type="text" name="year_of_study" id="year_of_study" value="{{$assigned_rooms->year_of_study}}" class="form-control" readonly></br>
        
        <label>Accademic Year</label></br>
        <input type="text" name="accademic_year" id="academic_year" value="{{$assigned_rooms->accademic_year}}" class="form-control" readonly></br>
        <label>Health Problem</label></br>
        <input type="text" name="medical_condtion" id="medical_condition" value="{{$assigned_rooms->medical_condition}}" class="form-control" readonly></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop