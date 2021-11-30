@extends('layouts.app')
@section('content')
<div class="container">
    <form method="GET" action="{{ route('addstudent') }}">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Student Detail') }}</div>
				<table class="table-hover">
				  <thead>
					<tr>
					  <th scope="col">ID</th>
					  <th scope="col">Name</th>
					  <th scope="col">Email</th>
					  <th scope="col">School</th>
					  <th scope="col">Subjects</th>
					</tr>
				  </thead>
				  <tbody>
					@foreach($students as $key=>$student)
					
					@endforeach
					<tr>
					  <th scope="row">1</th>
					  <td>{{$student->email}}</td>
					  <td>Otto</td>
					  <td>@mdo</td>
					</tr>
				<!--	<tr>ID, Name, Email, Password, School, Subjects
					  <th scope="row">2</th>
					  <td>Jacob</td>
					  <td>Thornton</td>
					  <td>@fat</td>
					</tr>
					<tr>
					  <th scope="row">3</th>
					  <td>Larry</td>
					  <td>the Bird</td>
					  <td>@twitter</td>
					</tr> -->
				  </tbody>
				</table>
				</div>
				<br>
				
				<div class="col-md-8 offset-md-4">
				<input type="submit" value="ADD STUDENT" class="btn btn-primary">
				</div>
				
            </div>
        </div>
    </div>
</div>

@endsection