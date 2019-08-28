@extends('layouts.user')
@section('content')
<button id='addBtn' class="btn btn-outline-primary btn-custom-outline-primary btn-custom">
  Add Contact 
</button>	
<div id="addContact">
<form  method="POST" action="{{ route('store') }}">
@csrf

<!-- <div class="form-group row"> -->
<label for="name" class="col-md-4 col-form-label ">{{ __('Contact Name') }}</label>

<div class="col-md-4">
<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="" placeholder="Please enter name" required autocomplete="name" autofocus>

@error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>

<label for="number" class="col-md-4 col-form-label" >
{{__("Number")}}
</label>
<div class="col-md-4">
<input type="number" name="number" class=" form-control @error('number') is-invalid @enderror" id="number" value="" placeholder="Please enter number" required>
@error('number')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>  
<br>
<div class="form-group ">
<div class="col-md-4 ">
    <button type="submit" class="btn btn-primary">
        {{ __('Save Contact') }}
    </button>
</div>
</div>



</form>
</div>

<div class="container">
	<table class="table">
		<thead>
			<tr>
				<td></td>	
				<td>Contact</td>
				<td>Number</td>
				<td></td>	
				<td></td>
			</tr>
		</thead>
		<tbody>
			@foreach($contacts as $contact)
			<tr id="{{$contact->id}}">
				<td></td>
				<td>{{$contact->name}}</td>
				<td>{{$contact->number}}</td>	
				<td>
					<a href="#">
						<button id='edit' class="btn btn-outline-primary btn-custom-outline-primary btn-custom" onclick="editUser(this)">
						Edit Contact
						</button>	
					</a>
				</td>
				<td>
					<a href="#">
						<button class="btn btn-outline-danger btn-custom-outline-danger btn-custom">
						Delete User
						</button>	
					</a>
				</td>
			</tr>
			@endforeach	

		</tbody>

	</table>

</div>

 <!-- <example-component :contact={{$contacts}}></example-component> -->


<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript">
	$("#addContact").hide()	
	$(document).ready(function(){
		$("#addBtn").click( function(){
		// console.log("yes")
		$("#addContact").show()
		
	})

	})

	function editUser(btn){
var id_var = $(this).closest('tr').prop('id');
	
		console.log(id_var)

	}

	
</script>



@endsection