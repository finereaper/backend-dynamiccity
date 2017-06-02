/**
 * Created by Jack Black on 5/1/2017.
 */
var map;
var iconStandard = '../public/images/icon.png';
var iconHover = '../public/images/icon2.png';
var autocomplete;
var places;

// All code below here is for google maps so be careful when editing
map = new google.maps.Map(document.getElementById('maps'), {
    zoom: 14,
    center: {lat: 51.3703748, lng: 6.1724031},
    disableDefaultUI: true,
});


$(document).ready(function () {
    $.getJSON("/panden", function (data) {
        $.each(data, function (key, val) {
            $.getJSON("/panden/foto/" + val["idPand"], function (fotodata) {
                var content = '<img src="../public/images/' + fotodata + '" class="img-Responsive">' +
                    '<div id="contentBox">' +
                    '<h4 id="title">' + val["straat"] + '</h4>' +
                    '<div id="contentLeft">' +
                    '<h5>Postcode</h5>' +
                    '<p>' + val["postcode"] + '</p>' +
                    '<h5>Stad</h5>' +
                    '<p>' + val["stad"] + '</p>' +
                    '<h5>Oppervlakte</h5>' +
                    '<p>' + val["oppervlakte"] + 'M<sup>2</sup></p>' +
                    '</div>' +
                    '<div id="contentRight">' +
                    '<h5>Aantalplekken</h5>' +
                    '<p>' + val["aantalPlekken"] + '</p>' +
                    '<h5>Prijs</h5>' +
                    '<p>&euro;' + val["prijs"] + '</p>' +
                    '<a id="pandInfo" href="">Meer Info</a>' +
                    '</div>' +
                    '</div>' +
                    '<div class="pandBox">' +
                    '<div class="pandInterested"><img class="interested" src="../public/images/interested.png"></div>' +
                    '</div>';

                var infowindow = new google.maps.InfoWindow({content: content});
                var latlng = new google.maps.LatLng(val['Latitude'], val['Longitude'])
                var marker = new google.maps.Marker({
                    position: latlng,
                    map: map,
                    icon: iconStandard
                });

                // opens the infobox when a marker gets clicked
                marker.addListener('click', function () {
                    infowindow.open(map, marker);
                });

                // changes the infobox
                google.maps.event.addListener(infowindow, 'domready', function () {
                    var iwOuter = $('.gm-style-iw');
                    var iwBackground = iwOuter.prev();
                    var iwCloseBtn = iwOuter.next();
                    console.log(iwBackground.children(':nth-child(2)'))
                    iwBackground.children(':nth-child(2)').css({'display' : 'none'});
                    iwBackground.children(':nth-child(4)').css({'display' : 'none'});
                    iwBackground.children(':nth-child(3)').find('div').children().css({
                        'box-shadow': 'rgba(178, 178, 178, 0.6) 0px 1px 6px',
                        'z-index': '1'
                    });
                    iwCloseBtn.css({
                        opacity: '1', // by default the close button has an opacity of 0.7
                        right: '65px', top: '20px'// button repositioning
                    });
                });

                //changes marker on hover
                google.maps.event.addListener(marker, 'mouseover', function () {
                    marker.setIcon(iconHover);
                });
                google.maps.event.addListener(marker, 'mouseout', function () {
                    marker.setIcon(iconStandard);
                })

               /* //Autocomplete and pans to location
                autocomplete = new google.maps.places.Autocomplete((
                    document.getElementById('search')), {
                    types: ['(cities)'],
                    componentRestrictions: {country: 'nl'}
                });
                places = new google.maps.places.PlacesService(map);
                autocomplete.addListener('place_changed', onPlaceChanged);
                function onPlaceChanged() {
                    var place = autocomplete.getPlace();
                    if (place.geometry) {
                        map.panTo(place.geometry.location);
                        map.setZoom(14);
                    } else {
                        document.getElementById('autocomplete').placeholder = 'Enter a city';
                    }
                }
*/
                //onhover when effects in infobox
                marker.addListener('click', function () {
                    $('.favorite').mouseover(function () {
                        $(this).attr("src", "../public/images/favoriteHover.png")
                    })
                    $('.favorite').mouseout(function () {
                        $(this).attr("src", "../public/images/favorite.png")
                    })
                    $('.interested').mouseover(function () {
                        $(this).attr("src", "../public/images/interestedHover.png")
                    })
                    $('.interested').mouseout(function () {
                        $(this).attr("src", "../public/images/interested.png")
                    })

                    $('.favorite').click(function () {
                        $('.favorite').unbind('mouseover');
                        $('.favorite').unbind('mouseout');
                        $.get('pand/' + val["idPand"] + '/favoriet')
                        $(this).attr("src", "../public/images/favoriteHover.png")
                    })

                    $('.interested').click(function () {
                        $('.interested').unbind('mouseover');
                        $('.interested').unbind('mouseout');
                        $.get('pand/' + val["idPand"] + '/like')
                        $(this).attr("src", "../public/images/interestedHover.png")
                    })
                    console.log($('#pandInfo'));
                    // Code for info link
                    $('#pandInfo').click(function (e) {
                        e.preventDefault();
                        window.location = 'pand/' + val["idPand"] + '/info';
                        return false;
                    });
                })
            })
        })
    });
});

