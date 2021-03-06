@extends('layouts.app')
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<body>

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Student Detail') }}<a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#studentModal">Add Student</a></div>
				<table id="studentTable">
				  <thead>
					<tr>
					  <th scope="col">ID</th>
					  <th scope="col">Name</th>
					  <th scope="col">Email</th>
					  <th scope="col">School</th>
					  <th scope="col">Subjects</th>
					  <th scope="col">Actions</th>
					</tr>
				  </thead>
				  <tbody>
					@foreach($students as $key=>$student)
					
					<tr id="sid{{$student->id}}">
					  <th scope="row">{{$student->id}}</th>
					  <td>{{$student->name}}</td>
					  <td>{{$student->email}}</td>
					  <td>{{$student->password}}</td>
					    <td>{{$student->schoolid}}</td>
						<!--<td><a href="{{url('editstudent?').http_build_query(['name'=>$student->name]);}}">edit</a></td>-->
						<td><a href="{{url('')}}">edit</a></td>
						<td><a href="" onclick="deleteStudent({{$student->id}})">delete</a></td>
					</tr>
					@endforeach
			    </tbody>
				</table>
				</div>
				<br>
				
				<div class="col-md-8 offset-md-4">
				<!--<input type="submit" value="ADD STUDENT" class="btn btn-primary">-->
				</div>
				
            </div>
        </div>
    </div>


<!-- Modal -->
<div class="modal fade" id="studentModal" tabindex="0" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new student</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form id="studentForm">
	   @csrf
		
			<div class="form-group">
			<label for="id">ID</label>
			<input type="text" class="form-control" id="id"/>
			</div>
		
			<div class="form-group">
			<label for="firstname">First name </label>
			<input type="text" class="form-control" id="firstname"/>
			</div>
			
			<div class="form-group">
			<label for="email">Email </label>
			<input type="text" class="form-control" id="email"/>
			</div>
			
			<div class="form-group">
			<label for="password">Password </label>
			<input type="text" class="form-control" id="password"/>
			</div>
			
			<div class="form-group">
			<label for="schoolid">School id</label>
			<input type="text" class="form-control" id="schoolid"/>
			</div>
	   
			<button type="submit" class="btn btn-primary">Submit</button>
	   </form>
      </div>
    
    </div>
  </div>
</div>
<script>
$("#studentForm").submit(function(e){
		e.preventDefault();
		var id = $("#id").val();
		var firstname = $("#firstname").val();
		var email = $("#email").val();
		var password = $("#password").val();
		var schoolid = $("#schoolid").val();
		var _token = $("input[name=_token]").val();
		
		$.ajax({
			url:"{{route('student.add')}}",
			type:"POST",
			data:{
				id:id,
				firstname:firstname,
				email:email,
				password:password,
				schoolid:schoolid,
				_token:_token,
			},
			success:function(response)
			{
				if(response)
				{
					$("#studentTable tbody").prepend('<tr><td>'+response.id+'</td><td>'+response.firstname+'</td><td>'+response.email+'</td><td>'+response.password+'</td><td>'+response.schoolid+'</td></tr>');
					$("#studentForm")[0].reset();
					$("#studentModal").modal('hide');
				}
					
			}
			
		})
})
</script>


</body>
</html>
