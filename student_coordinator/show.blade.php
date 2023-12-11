@extends('student_coordinator.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Rooms Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Room No : {{ $rooms->room_id }}</h5>
        <p class="card-text">Hostel Name : {{ $rooms->hostel_name }}</p>
        <p class="card-text">Appartment Number: {{ $rooms->appartment_no }}</p>
        <p class="card-text">Floor: {{ $rooms->floor }}</p>
        <p class="card-text"> Room Side: {{ $rooms->room_side }}</p>
        <p class="card-text"> Seater: {{ $rooms->seater }}</p>
        <p class="card-text"> Status: {{ $rooms->room_status }}</p>
  </div>
    </hr>
  </div>
</div>