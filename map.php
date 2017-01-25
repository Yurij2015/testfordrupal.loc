<div id="floating-panel">
    <input id="address" type="textbox" value="Рівне, Україна">
    <input id="submit" type="button" value="Geocode">
</div>
<div id="map" class="col-lg-8"></div>
<script>
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 17,
            center: {lat: 50.619998, lng: 26.2502425}
        });
        var geocoder = new google.maps.Geocoder();

        document.getElementById('submit').addEventListener('click', function () {
            geocodeAddress(geocoder, map);
        });
    }

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3m_g1ABa0FH2VXSCoFjsm3EgFwl4xkV4&signed_in=true&callback=initMap"
        async defer></script>
