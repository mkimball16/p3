@extends('_master')

@section('title')
	Add a new book
@stop

@section('content')

<p class="tip">Add /[number] to the URL to specify how many random users to generate. Click the "Go Back" button to return to the homepage.</p>

	<form method="back" action="/">
    <button class="back">Go Back</button>
	</form>

	<form class="users" method="GET" action="user.php">
			<p>Number of users:<br />
			<select name="numberOfUsers">
					<option value="1">1</option>
					<option value="2">2</option>
			    	<option value="3">3</option>
					<option value="4">4</option>
			    	<option value="5">5</option>
			    	<option value="6">6</option>
					<option value="7">7</option>
			    	<option value="8">8</option>
			    	<option value="9">9</option>
			    	<option value="10">10</option>
			    <input type="submit" class="submit" name="submit">	
			</select></p>
	</form>		


	<h2> Random user names:</h2>
	<div class="results">
		<?php	echo implode('<p>', $names); ?>
	</div>

	
	
 @stop
