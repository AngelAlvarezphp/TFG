window.initMap = function() {
    let mapDiv = document.getElementById("map");
    let center = new google.maps.LatLng(37.97693232177627, -1.1295237985234117);
    let options = {
      center,
      zoom: 17,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      mapTypeControl: true,
    };
  if (mapDiv) {
    let map = new google.maps.Map(mapDiv, options);
    let marker = new google.maps.Marker({
      position: { lat: 37.97748875640045, lng: -1.1311673374727191},
      map: map,
      title: "El Carmen"
    });
    new google.maps.Marker({ 
      position: { lat: 37.97637588715209, lng: -1.1295237985234117},
      map: map,
      title: "Esperanza"
      ,
    });
  }
   
  }


  