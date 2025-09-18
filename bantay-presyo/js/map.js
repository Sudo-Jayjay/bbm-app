//AIzaSyCEvh-pjdwmx1NiPX_8uKZFBSAqKu-BZEI
    
function initMap() {
	var lat = 14.535067;
	var long = 120.982155;
	var description = "Testing";

	console.log(`Latitude: ${lat}`);
	console.log(`Longtitude: ${long}`);

	const location = { lat: parseFloat(lat), lng: parseFloat(long) };
	const map = new google.maps.Map(document.getElementById("map"), {
		zoom: 15,
		center: location,
	});

	new google.maps.Marker({
		position: location,
		map: map,
		icon: '',
		title: description,
	});
}
window.initMap = initMap;


  

