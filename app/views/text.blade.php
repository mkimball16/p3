@extends('_master')

@section('title')
	<?php echo count($paragraphs) . ' Paragraphs';?> 

@stop

@section('content')

<p class="tip">Add /[number] to the URL to specify how many paragraphs of lorem ipsum text to generate. Click the "Go Back" button to return to the homepage.</p>
	


	<form method="back" action="/">
    <button class="submit">Go Back</button>
	</form>

	<h2> Paragraphs of lorem ipsum text:</h2>
		
	<?php echo implode('<p>', $paragraphs); ?>
@stop