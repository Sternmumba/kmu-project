@extends('view_applicants.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>All Applicants</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/redirects') }}" class="btn btn-success btn-sm" title="All Applicants">
                            Back
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Room#</th>
                                        <th>Full Name</th>
                                        <th>SIN#</th>
                                        <th>Y.O.S</th>
                                        <th>Health Problem</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($applications as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->room_id }}</td>
                                        <td>{{ $item->first_name }}{{ $item->middle_name }}{{ $item->surname }}</td>
                                        <td>{{ $item->student_id }}</td>
                                        <td>{{ $item->year_of_study }}</td>
                                        <td>{{ $item->medical_condition}}</td>
                                       
  
                                        <td>
                                        

<a href="{{ route('view_applicants.edit',$item->id)}}" title="Edit applications"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Assign</button></a>

<form method="POST" action="{{ route('view_applicants.destroy', $item->id) }}" accept-charset="UTF-8" style="display:inline">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
    <button type="submit" class="btn bg-danger text-white btn-sm" title="Delete Student" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
  
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection