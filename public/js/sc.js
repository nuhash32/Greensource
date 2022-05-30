var map;
var myLatLng;
$(document).ready(function() {
    geoLocationInit();
});
    function geoLocationInit() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(success, fail);
        } else {
            alert("Browser not supported");
        }
    }

    function success(position) {
        console.log(position);
        var latval = position.coords.latitude;
        var lngval = position.coords.longitude;
        myLatLng = new google.maps.LatLng(latval, lngval);
        createMap(myLatLng);
        // nearbySearch(myLatLng, "school");
        searchArea(latval,lngval);
    }

    function fail() {
        alert("it fails");
    }
    //Create Map
    function createMap(myLatLng) {
        map = new google.maps.Map(document.getElementById('map'), {
            center: myLatLng,
            zoom: 12
        });
        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map
        });
    }
    //Create marker
    function createMarker(latlng, icn, name) {
        var marker = new google.maps.Marker({
            position: latlng,
            map: map,
            icon: icn,
            title: name
        });
    }
   
    function searchArea(lat,lng){
        $.post('http://localhost/api/searchArea',{lat:lat,lng:lng},function(match){
            // console.log(match);
            $('#areasResult').html('');

            $.each(match,function(i,val){
                var glatval=val.lat;
                var glngval=val.lng;
                var gname=val.name;
                var GLatLng = new google.maps.LatLng(glatval, glngval);
                var gicn= 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',types='Apartment+building';
                createMarker(GLatLng,gicn,gname);
                var html='<h5><li>'+gname+'</li></h5>';
                $('#areasResult').append(html);
            });

              // $.each(match, function(i, val) {
              //   console.log(val.name);
              // });
        });
    }

    $('#searchArea').submit(function(e){
       e.preventDefault();
        var val=$('#locationSelect').val();
        $.post('http://localhost/api/getLocationCoords',{val:val},function(match){

            var myLatLng = new google.maps.LatLng(match[0],match[1]);
            createMap(myLatLng);
            searchArea(match[0],match[1]);
        });
    });
