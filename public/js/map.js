$(document).ready(function() {

	//Map Options
	var mapOptions = {
		center: new google.maps.LatLng(4.140634,109.6181485),
		streetViewControl: false,
		panControl: false,
		zoomControl: false,
		mapTypeControl: false,
		zoom: 7
	};

	//Map object
	var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

	//Current state
	var currentUrl = document.URL;
	var state = currentUrl.substr(currentUrl.lastIndexOf('/') + 1);

	//Get default location of current state
	$.ajax({
		url:"/request/latlng/"+state,
		dataType:"json",
		async:false,
		success:function(result)
		{
			var newLatLng = new google.maps.LatLng(result['lat'],result['lng']);
			map.panTo(newLatLng);
			map.setZoom(10);
	}});
	
	//Get all dm in current state
	$.ajax({
		url:"/request/dm/"+state,
		dataType:"json",
		async:false,
		success:function(result)
		{
			// console.log(result[0].dm_coordinates);
			for (var i = 0; i < result.length; i++) {
				var coordinates = result[i].dm_coordinates;
				var paths = [];
				for (var j = 0; j < coordinates.length; j++) {
					var latlng = new google.maps.LatLng(coordinates[j].lat, coordinates[j].lng);
					paths.push(latlng);
				};

				var polygon = new google.maps.Polygon({
					paths: paths,
					strokeColor: '#FF0000',
				    strokeOpacity: 0.8,
				    strokeWeight: 2,
				    fillColor: '#FF0000',
				    fillOpacity: 0.35
				});

				polygon.setMap(map);
			};

	}});

});




// function initialize() {
//   var mapOptions = {
//     zoom: 5,
//     center: new google.maps.LatLng(24.886436490787712, -70.2685546875),
//     mapTypeId: google.maps.MapTypeId.TERRAIN
//   };

//   var bermudaTriangle;

//   var map = new google.maps.Map(document.getElementById('map-canvas'),
//       mapOptions);

//   // Define the LatLng coordinates for the polygon's path.
//   var triangleCoords = [
//     // new google.maps.LatLng(25.774252, -80.190262),
//     new google.maps.LatLng(18.466465, -66.118292),
//     new google.maps.LatLng(32.321384, -64.75737),
//     new google.maps.LatLng(25.774252, -80.190262)
//   ];

//   console.log(triangleCoords);
//   // Construct the polygon.
//   bermudaTriangle = new google.maps.Polygon({
//     paths: triangleCoords,
//     strokeColor: '#FF0000',
//     strokeOpacity: 0.8,
//     strokeWeight: 2,
//     fillColor: '#FF0000',
//     fillOpacity: 0.35
//   });

//   bermudaTriangle.setMap(map);
// }

// google.maps.event.addDomListener(window, 'load', initialize);