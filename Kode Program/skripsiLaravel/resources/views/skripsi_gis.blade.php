<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('assets/unpar.png') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhYyZ2JtjG4Qo9x4aUHEkp00D2iQSNJmc&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>Perangkat | Skripsi</title>
    <link href="{{ asset('css/skripsi_mainstyle.css') }}" rel="stylesheet" type="text/css" >
    
</head>
<style>
    body{
        background-image: url("assets/under_maintenance.jpg") ;
        background-size: 100%;
        padding-left: 99px;
        padding-right: 108px;
        background-repeat: no-repeat;
    }

    #map {
            height: 300px;
            /* The height is 400 pixels */
            width: 100%;
            /* The width is the width of the web page */

            border-radius: 20px;
            }
            
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
      margin-top:20px;
    }

    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

</style>
<body>
    @include('skripsi_header')
    <!--The div element for the map -->
    <div id="map"></div>
    
    <table style="width:1000px;">
      <tr style="background-color: rgba(0, 0, 0, 0.5)">
        <th>Nama Node</th>
        <th>Waktu</th>
        <th>Status</th>
        <th>Koordinat Lintang</th>
        <th>Koordinat Bujur</th>
        
        
      </tr>
      @foreach ($nodes1 as $node1)
      <tr>
        <td>{{$node1->nama_node}}</th>
        <td>{{$node1->waktu_node}}</td>
        <td>{{$node1->status_node}}</td>
        <td id="n1_lnt">{{$node1->koor_lintang}}</td>
        <td id="n1_bjr">{{$node1->koor_bujur}}</td>
      </tr>
      @endforeach
      @foreach ($nodes2 as $node2)
      <tr>
        <td>{{$node2->nama_node}}</th>
        <td>{{$node2->waktu_node}}</td>
        <td>{{$node2->status_node}}</td>
        <td id="n2_lnt">{{$node2->koor_lintang}}</td>
        <td id="n2_bjr">{{$node2->koor_bujur}}</td>
      </tr>
      @endforeach
      @foreach ($nodes3 as $node3)
      <tr>
        <td>{{$node3->nama_node}}</th>
        <td>{{$node3->waktu_node}}</td>
        <td>{{$node3->status_node}}</td>
        <td id="n3_lnt">{{$node3->koor_lintang}}</td>
        <td id="n3_bjr">{{$node3->koor_bujur}}</td>
      </tr>
      @endforeach
      @foreach ($nodes4 as $node4)
      <tr>
        <td>{{$node4->nama_node}}</th>
        <td>{{$node4->waktu_node}}</td>
        <td>{{$node4->status_node}}</td>
        <td id="n4_lnt">{{$node4->koor_lintang}}</td>
        <td id="n4_bjr">{{$node4->koor_bujur}}</td>
      </tr>
      @endforeach
  
    </table>
    
    
    
    <script>
        
        var linN1 = parseFloat(document.getElementById('n1_lnt').textContent);
        var bjrN1 = parseFloat(document.getElementById('n1_bjr').textContent);
        
        var linN2 = parseFloat(document.getElementById('n2_lnt').textContent);
        var bjrN2 = parseFloat(document.getElementById('n2_bjr').textContent);
        
        var linN3 = parseFloat(document.getElementById('n3_lnt').textContent);
        var bjrN3 = parseFloat(document.getElementById('n3_bjr').textContent);
        
        var linN4 = parseFloat(document.getElementById('n4_lnt').textContent);
        var bjrN4 = parseFloat(document.getElementById('n4_bjr').textContent);
        
        

        function initMap() {
          function attachPolygonInfoWindow(polygon,nami) {
            var infoWindow = new google.maps.InfoWindow();
            google.maps.event.addListener(polygon, 'mouseover', function (e) {
                infoWindow.setContent(nami);
            this.setOptions({fillColor: "#ff6600"});
                var latLng = e.latLng;
                infoWindow.setPosition(latLng);
                infoWindow.open(map);});
            
            google.maps.event.addListener(polygon, 'mouseout', function (e) {
                this.setOptions({fillColor: "#FF0000"});
            infoWindow.close(map);});
            
            google.maps.event.addListener(polygon, 'click', function() {
            window.location = polygon.href; 
            });
        }
		
        var customStyled = [{
        featureType: "all",
        elementType: "labels",
        stylers: [
          { visibility: "off" }
        ]
        }];
            var directionsDisplay = new google.maps.DirectionsRenderer;
            var directionsService = new google.maps.DirectionsService;
            map = new google.maps.Map(document.getElementById('map'), {
              zoom: 28,
          maxZoom: 19,
          minZoom: 16,
              center: {lat: -6.940446, lng: 107.651649},
          //gestureHandling: 'none'
            });
        map.set('styles',customStyled);


        var Node1 = new google.maps.Polygon({
              paths: [
                {lat: -6.940446+0.000040, lng: 107.651649+0.000030},
                {lat: -6.940446, lng: 107.651649},
                {lat: -6.940446, lng: 107.651649+0.000030},
                {lat: -6.940446, lng: 107.651649+0.000040},
                {lat: -6.940446+0.000040, lng: 107.651649+0.000050}],
              strokeColor: '#000000',
              strokeOpacity: 0.8,
              strokeWeight: 3,
              fillColor: '#FF0000',
              fillOpacity: 0.7,
          href :'/sensing'
            });attachPolygonInfoWindow(Node1,"Node1");
            Node1.setMap(map);

            var Node2 = new google.maps.Polygon({
              paths: [
                {lat: linN2+0.000040, lng: bjrN2+0.000030},
                {lat: linN2, lng: bjrN2},
                {lat: linN2, lng: bjrN2+0.000030},
                {lat: linN2, lng: bjrN2+0.000040},
                {lat: linN2+0.000040, lng: bjrN2+0.000050}],
              strokeColor: '#000000',
              strokeOpacity: 0.8,
              strokeWeight: 3,
              fillColor: '#FF0000',
              fillOpacity: 0.7,
          href :'/sensing'
            });attachPolygonInfoWindow(Node1,"Node1");
            Node1.setMap(map);

            var Node3 = new google.maps.Polygon({
              paths: [
                {lng:linN3,lat : bjrN3},
                {lng:linN3,lat : bjrN3},
                {lng : linN3,lat : bjrN3},
                {lng : linN3,lat : bjrN3},
                {lng: linN3,lat : bjrN3}],
              strokeColor: '#000000',
              strokeOpacity: 0.8,
              strokeWeight: 3,
              fillColor: '#FF0000',
              fillOpacity: 0.7,
          href :'/sensing'
            });attachPolygonInfoWindow(Node1,"Node1");
            Node1.setMap(map);

            var Node4 = new google.maps.Polygon({
              paths: [
                {lng:linN4,lat : bjrN4},
                {lng:linN4,lat : bjrN4},
                {lng : linN4,lat : bjrN4},
                {lng : linN4,lat : bjrN4},
                {lng: linN4,lat : bjrN4}],
              strokeColor: '#000000',
              strokeOpacity: 0.8,
              strokeWeight: 3,
              fillColor: '#FF0000',
              fillOpacity: 0.7,
          href :'/sensing'
            });attachPolygonInfoWindow(Node1,"Node1");
            Node1.setMap(map);

      }
      
      

        
        
        
    </script>
</body>
</html>
