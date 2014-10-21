@extends('_master')

@section('title')


@stop

@section('content')

<p class="tip">User the field below to specify how many paragraphs of lorem ipsum text to generate. Click the "Go Back" button to return to the homepage.</p>


	<form method="back" action="/">
    <button class="back">Go Back</button>
	</form>
	<div class="container">
		<form method='POST'>	
			<label for="paragraphs">Paragraphs</label>
				@if(isset($result))			
					<input maxlength="2" name="numParagraphs" type="text" value={{$result['numberOfParagraphs']}} id="paragraphs"> (Maximum: 99)
				@else
					<input maxlength="2" name="numParagraphs" type="text" value="0" id="paragraphs"> (Maximum: 99)

				@endif	

			<br><br>

			<input class="submit" type="submit" value="Submit">    
    	</form>

	</div>

	<div class="paragraphs-results"> 

		@if(isset($result))
				@foreach($result['paragraphsStr'] as $paragraph)
					<p>
						{{$paragraph}}
					</p>
				@endforeach
		@endif
	</div>
@stop