$( window ).load(function() {
    $("#responsive_map").gMap({
         maptype: google.maps.MapTypeId.ROADMAP,
         zoom: 15,
         markers: [{
             latitude: 44.41461,
             longitude: 12.1329613,
             html: "Vista&nbsp;Tecnologie&nbsp;s.r.l.<br />Via&nbsp;del&nbspFringuello&nbsp;22<br />Ravenna<br /><a class=\"btn btn-default\" href=\"https://maps.google.com/maps?daddr=Via+del+Fringuello,+22,+48124+Ravenna+RA,+Italia\">Naviga</a>", 
             popup: true,
             flat: true,
             icon: {
                 image: "img/tunnel.png",
                 iconsize: [30, 48],
                 iconanchor: [15, 30],
                 shadow: "img/icon-shadow.png",
                 shadowsize: [32, 37],
                 shadowanchor: null}
                }
            ],
         panControl: true,
         zoomControl: true,
         mapTypeControl: true,
         scaleControl: true,
         streetViewControl: true,
         scrollwheel: false,
         styles: [ { "stylers": [ { "hue": "#EC008C" }, { "gamma": 0 } ] } ],
         onComplete: function() {
             var gmap = $("#responsive_map").data('gmap').gmap;
             window.onresize = function(){
                 google.maps.event.trigger(gmap, 'resize');
                 $("#responsive_map").gMap('fixAfterResize');
             };
        }
    });
});
