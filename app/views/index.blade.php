<?php $state = DB::table('state')->get() ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset = 'UTF-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" media="screen" href="css/styles.css" />
	{{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js') }}
	{{ HTML::script('https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places') }}
	{{ HTML::script('js/map.js') }}
</head>
<body>
	<header>
		<div id="drawer"></div>
		<div id="title-wrapper">
			<div id="title">Title</div>
			<div id="subtitle"> &nbsp >&nbsp Subtitle</div>
		</div>
	</header>
	<div id="state-directory">
		<div class="thumbnail-container">
			@for ($i = 0; $i < sizeof($state); $i++)
			<div class="thumbnail-states">
				<div id="{{$state[$i]->page}}" class="state-name">{{$state[$i]->state_name}}</div>
				<div class="state-flag img {{$state[$i]->page}}"></div>
			</div>
			@endfor
		</div>
	</div>
	<div id="outside-map-canvas" style="position:fixed; top:0">
		<div id="map-canvas" style="width:100%; height:100%" >
		</div>
	</div>
	
</body>
</html>