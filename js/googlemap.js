var map;
var geocoder;
var level;
var icons = ['tankicon.png','tankicon.png','tank50.jpg'];
function initMap() {
    var rit = {lat: 17.063576, lng: 74.281733};
    map = new google.maps.Map(document.getElementById('map'), {
		zoom: 18,
        center: rit,
		gestureHandling: 'cooperative'
    });
	
	var tdata = JSON.parse(document.getElementById('data').innerHTML);
	geocoder = new google.maps.Geocoder();
	
	codeAddress(tdata);
	
	plotTMarkers(tdata);
	
	function plotTMarkers(tdata){
		var infowind = new google.maps.InfoWindow;
		Array.prototype.forEach.call(tdata,function(data){
			i=0;
		if(data.curLevel==50)
			i=1;
		
		var content = document.createElement('div',style="width:250px;");
		var head = document.createElement('h2');
		head.textContent = data.name + ' tank';
		content.appendChild(head);
		var body1 = document.createElement('body1');
		body1.textContent = 'Water Level is: '+data.curLevel;
		content.appendChild(body1);
		
		var marker = new google.maps.Marker({
		position: new google.maps.LatLng(data.latitude, data.longitude),
		map:map,
		icon: icons[i]
		});
		marker.addListener('mouseover',function(){
			infowind.setContent(content);
			infowind.open(map,marker);
		});
		});
	}
}

function codeAddress(tdata){
	Array.prototype.forEach.call(tdata,function(data){
		var address = data.sr + ' ' + data.address; 
	geocoder.geocode({'address':address},function(results,status){
		if(status=='OK'){
			map.setCenter(results[0].geometry.location);
			var points = {};
			points.sr = data.sr;
			points.latitude = map.getCenter().lat();
			points.longitude = map.getCenter().lng();
			updateLatLng(points);
			//alert(map.getCenter());
		}else{
			alert('Geocode unsuccessful: ' + status)
		}
		
		});
	});
}

function updateLatLng(points){
	$.ajax({
		url: "action.php",
		method: "post",
		data: points,
		success: function(res){
			console.log(res)
		}
	})
	console.log(points);
}