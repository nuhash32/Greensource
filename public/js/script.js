const restaurants = [
    {
      title: "Vola Complex",
      location: {lat: 23.832953697793435, lng: 90.41514962911606},
      content: `Private Property, Select other location!!`,
    },
    {
      title: "Grace 21 SMARAT",
      location: {lat: 23.835802168548668, lng: 90.41731417179108},
      content: `Private Property, Select other location!!`
    },
    {
     title: "New House Of Seur's",
      location: {lat: 23.835301666589903, lng: 90.41535347700119},
      content: `Private Property, Select other location!!`
    },
    {
      title: "RankRoute",
      location: {lat: 23.834663769136906, lng: 90.41666239500046},
      content: `Private Property, Select other location!!`
    },
 
    {
      title: "Boys' Hostel, Dhaka International University",
      location: {lat: 23.834033228955736, lng: 90.41516304016113},
      content: `Private Property, Select other location!!`
    },
    {
      title: "Ansar Dormitory",
      location: {lat: 23.83365294059412, lng: 90.4146534204483},
      content: `Private Property, Select other location!!`
    },
    {
      title: "MSF",
      location: {lat: 23.83352781321199, lng: 90.41615009307861},
      content: `Private Property, Select other location!!`
    },
    {
      title: "Fatema enterprise",
      location: {lat: 23.832931616380435, lng: 90.41704595088959},
      content: `Private Property, Select other location!!`
    },
    {
      title: "RAHMAN's CASTLE",
      location: {lat: 23.83240166134062, lng: 90.41595697402954},
      content: `Private Property, Select other location!!`
    },
    {
      title: "Surprise Creations",
      location: {lat: 23.832232369691038, lng: 90.41729807853699},
      content: `Private Property, Select other location!!`
    },
   
   
  ]
  
  let map, infowindow;
  function initMap() {
      const nikunja= {lat: 23.833263131483516 , lng: 90.41697188357406};
      map = new google.maps.Map(document.getElementById('map'), {
          center:  nikunja,
          zoom: 15,
          styles: [
              {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
              {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
              {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
              {
                featureType: 'administrative.locality',
                elementType: 'labels.text.fill',
                stylers: [{color: '#d59563'}]
              },
              {
                featureType: 'poi',
                elementType: 'labels.text.fill',
                stylers: [{color: '#d59563'}]
              },
              {
                featureType: 'poi.park',
                elementType: 'geometry',
                stylers: [{color: '#263c3f'}]
              },
              {
                featureType: 'poi.park',
                elementType: 'labels.text.fill',
                stylers: [{color: '#6b9a76'}]
              },
              {
                featureType: 'road',
                elementType: 'geometry',
                stylers: [{color: '#38414e'}]
              },
              {
                featureType: 'road',
                elementType: 'geometry.stroke',
                stylers: [{color: '#212a37'}]
              },
              {
                featureType: 'road',
                elementType: 'labels.text.fill',
                stylers: [{color: '#9ca5b3'}]
              },
              {
                featureType: 'road.highway',
                elementType: 'geometry',
                stylers: [{color: '#746855'}]
              },
              {
                featureType: 'road.highway',
                elementType: 'geometry.stroke',
                stylers: [{color: '#1f2835'}]
              },
              {
                featureType: 'road.highway',
                elementType: 'labels.text.fill',
                stylers: [{color: '#f3d19c'}]
              },
              {
                featureType: 'transit',
                elementType: 'geometry',
                stylers: [{color: '#2f3948'}]
              },
              {
                featureType: 'transit.station',
                elementType: 'labels.text.fill',
                stylers: [{color: '#d59563'}]
              },
              {
                featureType: 'water',
                elementType: 'geometry',
                stylers: [{color: '#17263c'}]
              },
              {
                featureType: 'water',
                elementType: 'labels.text.fill',
                stylers: [{color: '#515c6d'}]
              },
              {
                featureType: 'water',
                elementType: 'labels.text.stroke',
                stylers: [{color: '#17263c'}]
              }
            ]
  
      })
  
      createMarkers();
  
  }
  
  function createMarkers() {
    const uluru = { lat: 23.833263131483516, lng:90.41697188357406};
    let marker = new google.maps.Marker({
        position: uluru,
        map: map,
        draggable: true
    });
    
    google.maps.event.addListener(marker,'position_changed',
    function (){
      
        let lat = marker.position.lat()
        let lng = marker.position.lng()
        $('#lat').val(lat)
        $('#lng').val(lng)
    })

google.maps.event.addListener(map,'click',
function (event){
    pos = event.latLng
    marker.setPosition(pos)
})
    for(let i = 0; i < restaurants.length; i++) {
      let marker = new google.maps.Marker({
        position: restaurants[i].location, 
        map: map,
        icon:'http://maps.google.com/mapfiles/ms/icons/green-dot.png',
        animation: google.maps.Animation.DROP,
        title: restaurants[i].title,
        content: restaurants[i].content
      });
  
      infowindow = new google.maps.InfoWindow({});
  
      marker.addListener('click', function() {
        populateInfoWindow(marker, infowindow);
        setBounce(marker);
        infowindow.open(map, marker);
      })
    }
  }
  
  function setBounce(marker) {
    marker.setAnimation(google.maps.Animation.BOUNCE);
    setTimeout((function() {
      marker.setAnimation(null);
    }).bind(marker), 1400);
  }
  
  function populateInfoWindow(marker, info) {
    if(info.marker != marker) {
      info.setContent('');
      info.setContent(marker.content);
    }
  }