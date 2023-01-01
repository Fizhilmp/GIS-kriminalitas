<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
  
    <style>
        .map {
            height: 80px;
            width: 100%;
        }
        </style>
        
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.9.0/css/ol.css" > -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
     integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
     crossorigin=""/>
        <title>Project</title>
  </head>
  <body>
    <h2>Pekanbaru</h2>
    <div id="map" class="map"></div>
    <!-- PopUp pas klik -->
    <!-- <div class="ol=popup" id="popup">
        <a href="#" id="popup-closer" class="ol-popup-closer"></a>
        <div id="popup-content"></div>
    </div> -->
    <!-- <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.9.0/build/ol.js"></script> -->
     <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
     integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
     crossorigin=""></script>
     <script >
            var map = L.map('map', {
                center: [0.510440, 101.459244],
                zoom: 12
            });


        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([ 0.5002866, 101.456312]).addTo(map)
        .bindPopup('Status Jalan : Rawan </br> Nama Jalan : JL.Jati')
        .openPopup();

        L.marker([ 0.499130, 101.475461]).addTo(map)
        .bindPopup('Status Jalan : Sangat Rawan </br> Nama Jalan : JL.Kopi')
        .openPopup();

        L.marker([ 0.562271, 101.426378]).addTo(map)
        .bindPopup('Status Jalan : Rawan </br> Nama Jalan : JL.Berdikari')
        .openPopup();

        L.marker([ 0.567706, 101.426606]).addTo(map)
        .bindPopup('Status Jalan : Rawan </br> Nama Jalan : JL.Inti Sari')
        .openPopup();

        L.marker([ 0.564736, 101.442581]).addTo(map)
        .bindPopup('Status Jalan : Sangat Rawan </br> Nama Jalan : JL.Tawas Raya')
        .openPopup();

        L.marker([ 0.564736, 101.443179]).addTo(map)
        .bindPopup('Status Jalan : Rawan </br> Nama Jalan : Jl. Pari Induk')
        .openPopup();

        L.marker([ 0.564732, 101.442443]).addTo(map)
        .bindPopup('Status Jalan : Rawan </br> Nama Jalan : Jl. Gurami Raya')
        .openPopup();

        L.marker([ 0.565374, 101.442249]).addTo(map)
        .bindPopup('Status Jalan : Rawan </br> Nama Jalan : Jl. Bandeng 2')
        .openPopup();

        L.marker([ 0.565853, 101.440924]).addTo(map)
        .bindPopup('Status Jalan : Rawan </br> Nama Jalan : Jl. Udang 2')
        .openPopup();

        L.marker([ 0.564359, 101.441773]).addTo(map)
        .bindPopup('Status Jalan : Rawan </br> Nama Jalan : Jl. Mujair 5')
        .openPopup();

        L.marker([ 0.565176, 101.441616]).addTo(map)
        .bindPopup('Status Jalan : Sangat Rawan </br> Nama Jalan : Jl. Bandeng Raya')
        .openPopup();

        L.marker([ 0.564586, 101.443994]).addTo(map)
        .bindPopup('Status Jalan : Sangat Rawan </br> Nama Jalan : Jl. Pari 1')
        .openPopup();

        L.marker([ 0.564216, 101.443804]).addTo(map)
        .bindPopup('Status Jalan : Sangat Rawan </br> Nama Jalan : Jl. Mas Raya')
        .openPopup();

        L.marker([ 0.565266, 101.444366]).addTo(map)
        .bindPopup('Status Jalan : Sangat Rawan </br> Nama Jalan : Jl. Kurnia 3')
        .openPopup();

        L.marker([ 0.493765, 101.458976]).addTo(map)
        .bindPopup('Status Jalan : Sangat Rawan </br> Nama Jalan : JL.Mekar Sari')
        .openPopup();

        L.marker([ 0.492906, 101.459256]).addTo(map)
        .bindPopup('Status Jalan : Sangat Rawan </br> Nama Jalan : JL.Tiga Sari')
        .openPopup();

        L.marker([ 0.492970, 101.459158]).addTo(map)
        .bindPopup('Status Jalan : Rawan </br> Nama Jalan : JL.Rukit Sari')
        .openPopup();

        L.marker([ 0.492935, 101.459404]).addTo(map)
        .bindPopup('Status Jalan : Rawan </br> Nama Jalan : JL.Kembang Sari')
        .openPopup();

        L.marker([ 0.492773, 101.460693]).addTo(map)
        .bindPopup('Status Jalan : Rawan </br> Nama Jalan : JL.Kebun Sari')
        .openPopup();

        L.marker([ 0.491810, 101.459338]).addTo(map)
        .bindPopup('Status Jalan : Rawan </br> Nama Jalan : JL.Permata Sari')
        .openPopup();

        L.marker([ 0.494352, 101.457093]).addTo(map)
        .bindPopup('Status Jalan : Rawan </br> Nama Jalan : JL.Tj.Sari')
        .openPopup();

        L.marker([ 0.494690, 101.459436]).addTo(map)
        .bindPopup('Status Jalan : Rawan </br> Nama Jalan : JL.Legasari')
        .openPopup();

        L.marker([ 0.492626, 101.46023]).addTo(map)
        .bindPopup('Status Jalan : Rawan </br> Nama Jalan : JL.Pandan Sari')
        .openPopup();

        L.marker([ 0.493993, 101.457955]).addTo(map)
        .bindPopup('Status Jalan : Rawan </br> Nama Jalan : JL.Wonosari')
        .openPopup();

        L.marker([ 0.4755113, 101.480491]).addTo(map)
        .bindPopup('Status Jalan : Rawan </br> Nama Jalan : JL.Kesadaran')
        .openPopup();

        L.marker([ 0.4977008, 101.471383]).addTo(map)
        .bindPopup('Status Jalan : Rawan </br> Nama Jalan : JL.Firdaus')
        .openPopup();

        L.marker([ 0.490604, 101.463387]).addTo(map)
        .bindPopup('Status Jalan : Rawan </br> Nama Jalan : JL.Bunga Raya')
        .openPopup();

        L.marker([ 0.4969886, 101.459244]).addTo(map)
        .bindPopup('Status Jalan : Rawan </br> Nama Jalan : JL.Surabaya')
        .openPopup();

        L.marker([ 0.5031672, 101.456985]).addTo(map)
        .bindPopup('Status Jalan : Rawan </br> Nama Jalan : JL.Brigjen Katamso')
        .openPopup();

        L.marker([ 0.505650, 101.460469]).addTo(map)
        .bindPopup('Status Jalan : Rawan </br> Nama Jalan : JL.Sejahtera')
        .openPopup();

        L.marker([ 0.490288, 101.460721]).addTo(map)
        .bindPopup('Status Jalan : Rawan </br> Nama Jalan : JL.Emasari')
        .openPopup();

        L.marker([ 0.497615, 101.466813]).addTo(map)
        .bindPopup('Status Jalan : Sangat Rawan </br> Nama Jalan : JL.Tunas Jaya')
        .openPopup();

        L.marker([ 0.514594, 101.456869]).addTo(map)
        .bindPopup('Status Jalan : Rawan </br> Nama Jalan : JL.W.R.Supratman Ujung')
        .openPopup();

        L.marker([ 0.506114, 101.472837]).addTo(map)
        .bindPopup('Status Jalan : Rawan </br> Nama Jalan : JL.Kencana')
        .openPopup();

        L.marker([ 0.510002, 101.468525]).addTo(map)
        .bindPopup('Status Jalan : Rawan </br> Nama Jalan : JL.Lembah Raya')
        .openPopup();

        L.marker([ 0.513608, 101.466599]).addTo(map)
        .bindPopup('Status Jalan : Rawan </br> Nama Jalan : JL.Datuk Laksamana')
        .openPopup();

        L.marker([ 0.518101, 101.483875]).addTo(map)
        .bindPopup('Status Jalan : Rawan </br> Nama Jalan : JL.Hang Tuah Ujung')
        .openPopup();

        L.marker([ 0.509441, 101.458826]).addTo(map)
        .bindPopup('Status Jalan : Rawan </br> Nama Jalan : JL.Abdul Muis')
        .openPopup();

        L.marker([ 0.524972, 101.461371]).addTo(map)
        .bindPopup('Status Jalan : Rawan </br> Nama Jalan : JL.Hang Jebat')
        .openPopup();

        L.marker([ 0.517096, 101.463509]).addTo(map)
        .bindPopup('Status Jalan : Rawan </br> Nama Jalan : JL.M.Husni Thamrin VII')
        .openPopup();

        L.marker([ 0.513920, 101.463787]).addTo(map)
        .bindPopup('Status Jalan : Sangat Rawan </br> Nama Jalan : JL.Cemara')
        .openPopup();

        L.marker([ 0.510302, 101.455243]).addTo(map)
        .bindPopup('Status Jalan : Rawan </br> Nama Jalan : JL.Pattimura')
        .openPopup();

        L.marker([ 0.569043, 101.423467]).addTo(map)
        .bindPopup('Status Jalan : Rawan </br> Nama Jalan : JL.Umban Sari   ')
        .openPopup();

        L.marker([ 0.572956, 101.423216]).addTo(map)
        .bindPopup('Status Jalan : Rawan </br> Nama Jalan : JL.Patria Sari')
        .openPopup();

        L.marker([ 0.566114, 101.413152]).addTo(map)
        .bindPopup('Status Jalan : Sangat Rawan </br> Nama Jalan : JL.Kartika Indah')
        .openPopup();

        L.marker([ 0.566458, 101.413777]).addTo(map)
        .bindPopup('Status Jalan : Sangat Rawan </br> Nama Jalan : JL.Kartika Sari')
        .openPopup();

        L.marker([ 0.578502, 101.405903]).addTo(map)
        .bindPopup('Status Jalan : Sangat Rawan </br> Nama Jalan : JL.Palas Mekar')
        .openPopup();

        L.marker([ 0.476353, 101.380821]).addTo(map)
        .bindPopup('Status Jalan : Sangat Rawan </br> Nama Jalan : JL.Bina Widya')
        .openPopup();

        L.marker([ 0.579836, 101.406274]).addTo(map)
        .bindPopup('Status Jalan : Sangat Rawan </br> Nama Jalan : JL.Gurindam 12')
        .openPopup();

        L.marker([ 0.576721, 101.405156]).addTo(map)
        .bindPopup('Status Jalan : Rawan </br> Nama Jalan : JL.Sri Mersing')
        .openPopup();

        L.marker([ 0.579046, 101.412330]).addTo(map)
        .bindPopup('Status Jalan : Rawan </br> Nama Jalan : JL.Padat Karya')
        .openPopup();

        L.marker([ 0.575730, 101.402593]).addTo(map)
        .bindPopup('Status Jalan : Rawan </br> Nama Jalan : JL.Kota Baru')
        .openPopup();

        L.marker([ 0.451353, 101.377217]).addTo(map)
        .bindPopup('Status Jalan : Rawan </br> Nama Jalan : JL.Taman Karya')
        .openPopup();

        L.marker([ 0.450681, 101.391189]).addTo(map)
        .bindPopup('Status Jalan : Rawan </br> Nama Jalan : JL.Cipta Karya')
        .openPopup();

        L.marker([ 0.467586, 101.383325]).addTo(map)
        .bindPopup('Status Jalan : Rawan </br> Nama Jalan : JL.Balam Sakti')
        .openPopup();

        L.marker([ 0.477449, 101.375339]).addTo(map)
        .bindPopup('Status Jalan : Rawan </br> Nama Jalan : JL.Bangau Sakti')
        .openPopup();

        L.marker([ 0.468841, 101.372106]).addTo(map)
        .bindPopup('Status Jalan : Rawan </br> Nama Jalan : JL.Merpati Sakti')
        .openPopup();

        L.marker([ 0.452392, 101.448825]).addTo(map)
        .bindPopup('Status Jalan : Rawan </br> Nama Jalan : JL.Pahlawan Kerja')
        .openPopup();

        L.marker([ 0.483368, 101.506328]).addTo(map)
        .bindPopup('Status Jalan : Sangat Rawan </br> Nama Jalan : JL.Gading')
        .openPopup();

        L.marker([ 0.443198, 101.457283]).addTo(map)
        .bindPopup('Status Jalan : Sangat Rawan </br> Nama Jalan : JL.Karya')
        .openPopup();
    </script>
    </script>
  
    <!-- <script type="text/javascript"> -->
        // nampilin data kriminalitas
        var kriminalitas = new ol.layer.Vector({
            source: new ol.source.Vector({
                format: new ol.format.GeoJSON(),
                url: 'Data/kriminalitas.json'
            }),

            style: new ol.style.Style({
                image: new ol.style.Icon(({
                    anchor: [0.5, 46],
                    anchorXUnits: 'flaticon',
                    anchorYUnits: 'pixels',
                    src: 'Icon/maling.png'
                }))
            })
        });

        // layer jalan pekanbaru
        var jalan = new ol.layer.Vector({
            source: new ol.source.Vector({
                format: new ol.format.GeoJSON(),
                url: 'Data/jalan_pekanbaru.json'
            })
        });

        var map = new ol.map({
            target: 'map',
            layers: [
                new ol.layer.Tile({
                    source: new ol.source.OSM()
                }), jalan, kriminalitas //parameter
            ],
            view: new ol.View({
                center: ol.proj.fromLonLat([101.449082, 0.510659]),
                zoom: 13
            })
        });

      
        var container = document.getElementById('popup'),
        content_element = document.getElementById('popup-content'),
        closer = document.getElementById('popup-closer');

        closer.onclick = function() {
            overlay.setPosition(undefined);
            closer.blur();
            return false;
        };
        var overlay = new ol.Overlay({
            element: container,
            autoPan: true,
            offset: [0, -10]
        });
        map.addOverlay(overlay);
        var FullScreen = new ol.control.FullScreen();
        map.addControl(FullScreen);

        map.on('click', function(evt) {
            var feature = map.forEachFeatureAtPixel(evt.pixel,
                function(feature, layer) {
                    return feature;
                });
            if (feature) {
                var geometry = feature.getGeometry();
                var coord = geometry.getCoordinates();
                var content = '<h3>Nama Jalan : ' + feature.get('Nama_Jalan') + '</h3>';
                content += '<h3>Status Jalan : ' + feature.get('Status_Jalan') + '</h3>';
                content_element.innerHTML = content;
                overlay.setPosition(coord);
                console.info(feature.getProperties());
            }
        });
        </script>
  </body>
</html>
