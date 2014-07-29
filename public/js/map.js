var polygons = [];
var informations = [];
var infoWindow = new google.maps.InfoWindow();

$(document).ready(function() {

	//Map Options
	var mapOptions = {
		center: new google.maps.LatLng(4.140634,109.6181485),
		streetViewControl: false,
		panControl: false,
		zoomControl: false,
		mapTypeControl: false,
		zoom: 6
	};

	//Map object
	var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

	$('.thumbnail-states').click(function(e) {

		var state = $(this).children(".state-name").attr('id');

		//Get default location of current state
		$.ajax({
			url:"/request/latlng/"+state,
			dataType:"json",
			async:false,
			success:function(result)
			{
				var newLatLng = new google.maps.LatLng(result['lat'],result['lng']);
				map.panTo(newLatLng);
				map.setZoom(9);
		}});
		
		//Get all dm in current state
		$.ajax({
			url:"/request/dm/"+state,
			dataType:"json",
			async:true,
			success:function(result)
			{
				var previousId = result[0].parliament_id;
				var fillColor = '#00FF00';

				//Every DM
				for (var i = 0; i < result.length; i++) {
					var coordinates = result[i].dm_coordinates;
					var paths = [];

					//DM's coordinates path;
					for (var j = 0; j < coordinates.length; j++) {
						var latlng = new google.maps.LatLng(coordinates[j].lat, coordinates[j].lng);
						paths.push(latlng);
					}

					if(previousId != result[i].parliament_id){
						fillColor = '#' + (function co(lor){   return (lor += [0,1,2,3,4,5,6,7,8,9,'a','b','c','d','e','f'][Math.floor(Math.random()*16)])
						  && (lor.length == 6) ?  lor : co(lor); })('');
						  previousId = result[i].parliament_id;
					}

					var polygon = new google.maps.Polygon({
						paths: paths,
						strokeColor: '#999999',
						strokeOpacity: 0.8,
						strokeWeight: 2,
						fillColor: fillColor,
						fillOpacity: 0.35
					});

					var information = [result[i].location, result[i].dun_location, result[i].parliament_id];

					polygon.setMap(map);
					polygons.push(polygon);
					informations.push(information);
					bindInfoWindow(polygons[i], informations[i], map);
				}
		}});
	});
});

function bindInfoWindow(polygon, information, map)
{
	//Info window container
	var html = $("<div> " +
					"<div style='width: 200px; height: 100px;' >"+
						"<b>P"+ information[2] +"</b>" +
						"<br/>" +
						"<b>"+ information[0] +"</b>" +
						"<br/>" +
						"<b>"+ information[1] +"</b>" +
						"<div class='table' >"+
						"</div>"+
					"</div>" +
				"</div>");

	//Marker onClick event
	google.maps.event.addListener(polygon, 'click', function(event) {
		// map.panTo(marker.getPosition());	//move map to marker position
		infoWindow.setContent(html.html());	//set the info
		infoWindow.setPosition(event.latLng);
		infoWindow.open(map);		//open the info
	});
}