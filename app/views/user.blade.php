@extends('_master')

@section('title')
	Add a new book
@stop

@section('content')

<p class="tip">User the field below to specify how many random users to generate. Click the "Go Back" button to return to the homepage.</p>

	<form method="back" action="/">
    <button class="back">Go Back</button>
	</form>

<div class="container">
	<form class="users" method='POST'>	
			<label for="users">How many users?</label>		


			@if(isset($result))			
				<input maxlength="2" name="users" type="text" value={{$result['numberOfUsers']}} id="users"> (Maximum: 99)
			@else
				<input maxlength="2" name="users" type="text" value="0" id="users"> (Maximum: 99)

			@endif	

			<br>
				Would you like to include any of the following fields?
			<br>
			@if(isset($result))	
				@if($result['isBdayRequired'])
					<input name="birthdate" type="checkbox" checked="checked">
				@else
					<input name="birthdate" type="checkbox">
				@endif
				<label for="birthdate">Birthdate</label>		<br>
				@if($result['isProfileRequired'])
					<input name="profile" type="checkbox" checked="checked">
				@else
					<input name="profile" type="checkbox">
				@endif
				<label for="profile">Profile</label>		<br>
				@if($result['isEmailRequired'])
					<input name="email" type="checkbox" checked="checked">
				@else
					<input name="email" type="checkbox">
				@endif
				<label for="email">Email</label>		<br>
				@if($result['isPhoneNumberRequired'])
					<input name="phoneNumber" type="checkbox" checked="checked">
				@else
					<input name="phoneNumber" type="checkbox">
				@endif
				<label for="phoneNumber">Phone Number</label>		<br>
			@else
				<input name="birthdate" type="checkbox">
				<label for="birthdate">Birthdate</label>		<br>
				<input name="profile" type="checkbox">
				<label for="profile">Profile</label>		<br>
				<input name="email" type="checkbox">
				<label for="email">Email</label>		<br>
				<input name="phoneNumber" type="checkbox">
				<label for="phoneNumber">Phone Number</label>		<br>
			@endif		
			<input class="submit" type="submit" value="Submit">    
    	</form>

	</div>
 
 <h3>Random User Results:</h3>

	<div class="resultscontainer"> 

		@if(isset($result))
				@for ($i = 1; $i <= $result['numberOfUsers']; $i++)
	     				<br> {{$result['faker']->name}} <br>
	     				@if($result['isBdayRequired'])
	     					{{$result['faker']->dateTimeThisCentury->format('m-d-Y')}} <br>
     					@endif
     					@if($result['isProfileRequired'])
	     					{{$result['faker']->text(350)}} <br>  
     					@endif
						@if($result['isEmailRequired'])
	     					{{$result['faker']->email}} <br>  
     					@endif
     					@if($result['isPhoneNumberRequired'])
	     					{{$result['faker']->phoneNumber}} <br>  
     					@endif
				@endfor
		@endif
	</div>

	
 @stop
