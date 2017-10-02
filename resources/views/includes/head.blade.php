<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Uptown Neighborhood Wine Bistro in New Orleans, LA, two blocks from the St Charles Streetcar.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Chaise Delachaise | Globally Inspired Wine // Bistro</title>
        <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"/>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="author" href="humans.txt">
        
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAF1SbJdm06YaCb9b-gtvyGJw_bdIJHIGY"></script>
        <script type="text/javascript">
            google.maps.event.addDomListener(window, 'load', init);
            function init() {
                var c = new google.maps.LatLng(29.9418838, -90.1320499);
                var mapOptions = {
                    zoom: 16,
                    center: c,
                    styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
                };
                var mapElement = document.getElementById('map');
                var map = new google.maps.Map(mapElement, mapOptions);
                var marker = new google.maps.Marker({
                    position: c,
                    map: map,
                    title: 'Snazzy!'
                });
                google.maps.event.addDomListener(window,'resize', function() {
                    map.setCenter(c);                    
                })
            }
        </script>
    </head>