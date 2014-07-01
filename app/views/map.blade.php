<!DOCTYPE html>
<html>
<head>
	<title>State</title>
	{{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js') }}
	{{ HTML::script('https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places') }}
	{{ HTML::script('js/map.js') }}
	<style>
		html, body, #map-canvas {
			width: 100%;
			height: 100%;
			margin: 0px;
        	padding: 0px
		}
	</style>
</head>

<body>
	<div id="map-canvas"></div>
</body>
</html>