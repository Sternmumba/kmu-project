@extends('accepted_applicants.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">View Assigned Rooms Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Student Number : {{ $assigned_rooms->student_id }}</h5>
        <p class="card-text">Room Number: {{ $assigned_rooms->room_id}}</p>
        <p class="card-text">Full Name: {{ $assigned_rooms->first_name}} {{ $assigned_rooms->surname}}</p>
        <p class="card-text">Y.O.S: {{ $assigned_rooms->year_of_study}}</p>
        <p class="card-text"> Accademic Year: {{ $assigned_rooms->academic_year}}</p>
        <p class="card-text"> Intake: {{ $assigned_rooms->intake }}</p>
        <p class="card-text"> Health Problem: {{ $assigned_rooms->medical_condition }}</p>
  </div>
    </hr>
  </div>
</div>