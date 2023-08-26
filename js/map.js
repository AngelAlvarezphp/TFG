window.initMap = function() {
    let mapDiv = document.getElementById("map");
    let Monaco = new google.maps.LatLng(40.4165000, -3.7025600);
    let options = {
      center: Monaco,
      zoom: 17,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      mapTypeControl: true,
    };
  if (mapDiv) {
    let map = new google.maps.Map(mapDiv, options);
    let marker = new google.maps.Marker({
      position: { lat:40.4165000 , lng:-3.7025600},
      map: map,
      title: "veterinaria"
    });
  }
   
  }


  