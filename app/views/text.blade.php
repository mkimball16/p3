@extends('_master')

@section('title')
Generate Lorem Ipsum Text

@stop

@section('content')

<p class="tip">Use the field below to specify how many paragraphs of lorem ipsum text to generate. 
Click the "Submit" button and your wish will be granted! Click the "Home" button to return to the homepage.</p>


	<form method="back" action="/">
    <button class="back">Home</button>
	</form>
	<div class="container">
	<img class="genie" src='/images/genie.png' alt='genie'>
		<form class="text" method='POST'>	
			<label for="paragraphs">How many paragraphs would you like?</label><br />
				@if(isset($result))			
					<input maxlength="2" name="numParagraphs" type="text" 
					value={{$result['numberOfParagraphs']}} id="paragraphs"> <br />(Maximum: 99)
				@else
					<input maxlength="2" name="numParagraphs" type="text" 
					value="0" id="paragraphs"> <br />(Maximum: 99)

				@endif	

			<br><br>

			<input class="submit" type="submit" value="Submit">    
    	</form>

	</div>
<h2>Your wish is my command!</h2>	
<h3>Lorem Ipsum Paragraph Results:</h3>

	<div class="paragraph-results"> 

		@if(isset($result))
				@foreach($result['paragraphs'] as $paragraph)
					<p>
						{{$paragraph}}
					</p>
				@endforeach
		@endif
	</div>
@stop