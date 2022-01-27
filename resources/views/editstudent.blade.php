@extends('layouts.app')
@section('content')

			
	<div class="container" >
		<div class="row justify-content-center">
			<div class="col-md-5">
				<div class="card" style="background-color:#d1dbff;">
			
					<label class="col-form-label row justify-content-center "> Firstname </label>       
					<input type="text" name="firstname" class="form-control"> </input><br>
					<label class="col-form-label row justify-content-center"> Middlename: </label>   
					<input type="text" name="middlename"  class="form-control"> </input> <br>
					<label class="col-form-label row justify-content-center"> Lastname: </label>       
					<input type="text" name="lastname"  class="form-control"> </input> <br>

					
					
					<label class="col-form-label row justify-content-center"> 
					Gender :
					</label>
					<div class="col-md-5">
						<input type="radio"  name="male"/> Male <br>
						<input type="radio" name="female"/> Female <br>
						<input type="radio" name="other"/> Other
					</div>
					<br>
					

					<label class="col-form-label row justify-content-center"> 
					Phone :
					</label>
					
					<input type="text"  class="form-control" name="phone" size="10"> </input> <br> <br>
				</div>
			</div>
		</div>
	</div>


@endsection