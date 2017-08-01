/**
 * Created by syamimi azizudin on 1/8/2017.
 */

function makeMap() {
    var map = new google.maps.Map(document.getElementById('the-map'), {
        center : new google.maps.LatLng(49.278094, -122.919883),
        zoom : 13,
        mapTypeId : google.maps.MapTypeId.ROADMAP,
        disableDefaultUI: true
    });
    var marker = new google.maps.Marker({
        position : new google.maps.LatLng(49.278094, -122.919883)
    });
    marker.setMap(map);
}
google.maps.event.addDomListener(window, 'load', makeMap);