<!DOCTYPE HTML>
<html lang="es">
    <head>
        <style type="text/css">.gm-style .gm-style-mtc label,.gm-style .gm-style-mtc div{font-weight:400}</style>
        <style type="text/css">.gm-style-pbc{transition:opacity ease-in-out;background-color:black;text-align:center}.gm-style-pbt{font-size:22px;color:white;font-family:Roboto,Arial,sans-serif;position:relative;margin:0;top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%)}</style>
        <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
        <style type="text/css">.gm-style .gm-style-cc span,.gm-style .gm-style-cc a,.gm-style .gm-style-mtc div{font-size:10px}</style><style type="text/css">@media print {  .gm-style .gmnoprint, .gmnoprint {    display:none  }}@media screen {  .gm-style .gmnoscreen, .gmnoscreen {    display:none  }}</style>
        <style type="text/css">.gm-style{font-family:Roboto,Arial,sans-serif;font-size:11px;font-weight:400;text-decoration:none}.gm-style img{max-width:none}</style>
        <title>Obtener coordenadas de google maps</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="Pragma" content="no-cache">
        <meta name="Author" content="Agencia Creativa Comunicación Multimedia S.L.L.">
        <meta name="Description" content="obtener coordenadas de google maps de un punto, buscas la dirección y pinchas sobre el mapa para obtener o conseguir las coordenadas">
        <meta name="keywords" content="obtener coordenadas, maps, google maps, yahoo maps, conseguir coordenadas">
        <meta name="Author" content="Agencia Creativa Comunicación Multimedia S.L.L.">
        <style type="text/css">
            label{
                width: 70px;float:left;
                padding-top: 3px;
            }
        </style>
        <script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript">
            //Declaramos las variables que vamos a user
            var lat = null;
            var lng = null;
            var map = null;
            var geocoder = null;
            var marker = null;

            jQuery(document).ready(function () {
                //obtenemos los valores en caso de tenerlos en un formulario ya guardado en la base de datos
                lat = jQuery('#lat').val();
                lng = jQuery('#long').val();
                //Asignamos al evento click del boton la funcion codeAddress
                jQuery('#pasar').click(function () {
                    codeAddress();
                    return false;
                });
                //Inicializamos la función de google maps una vez el DOM este cargado
                initialize();
            });

            function initialize() {

                geocoder = new google.maps.Geocoder();

                //Si hay valores creamos un objeto Latlng
                if (lat != '' && lng != '')
                {
                    var latLng = new google.maps.LatLng(lat, lng);
                } else
                {
                    var latLng = new google.maps.LatLng(17.267457485883735, -97.68050029758797);
                }
                //Definimos algunas opciones del mapa a crear
                var myOptions = {
                    center: latLng, //centro del mapa
                    zoom: 15, //zoom del mapa
                    mapTypeId: google.maps.MapTypeId.ROADMAP //tipo de mapa, carretera, híbrido,etc
                };
                //creamos el mapa con las opciones anteriores y le pasamos el elemento div
                map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

                //creamos el marcador en el mapa
                marker = new google.maps.Marker({
                    map: map, //el mapa creado en el paso anterior
                    position: latLng, //objeto con latitud y longitud
                    draggable: true //que el marcador se pueda arrastrar
                });

                //función que actualiza los input del formulario con las nuevas latitudes
                //Estos campos suelen ser hidden
                updatePosition(latLng);


            }

            //funcion que traduce la direccion en coordenadas
            function codeAddress() {

                //obtengo la direccion del formulario
                var address = document.getElementById("direccion").value;
                //hago la llamada al geodecoder
                geocoder.geocode({'address': address}, function (results, status) {

                    //si el estado de la llamado es OK
                    if (status == google.maps.GeocoderStatus.OK) {
                        //centro el mapa en las coordenadas obtenidas
                        map.setCenter(results[0].geometry.location);
                        //coloco el marcador en dichas coordenadas
                        marker.setPosition(results[0].geometry.location);
                        //actualizo el formulario      
                        updatePosition(results[0].geometry.location);

                        //Añado un listener para cuando el markador se termine de arrastrar
                        //actualize el formulario con las nuevas coordenadas
                        google.maps.event.addListener(marker, 'dragend', function () {
                            updatePosition(marker.getPosition());
                        });
                    } else {
                        //si no es OK devuelvo error
                        alert("No podemos encontrar la direcci&oacute;n, error: " + status);
                    }
                });
            }

            //funcion que simplemente actualiza los campos del formulario
            function updatePosition(latLng)
            {

                jQuery('#lat').val(latLng.lat());
                jQuery('#long').val(latLng.lng());

            }
        </script>
        <script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-1749329-1']);
            _gaq.push(['_trackPageview']);

            (function () {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();

        </script>

        <script type="text/javascript" charset="UTF-8" src="http://maps.google.com/maps-api-v3/api/js/24/8/intl/es_ALL/common.js"></script><script type="text/javascript" charset="UTF-8" src="http://maps.google.com/maps-api-v3/api/js/24/8/intl/es_ALL/util.js"></script><script type="text/javascript" charset="UTF-8" src="http://maps.google.com/maps-api-v3/api/js/24/8/intl/es_ALL/geocoder.js"></script><script type="text/javascript" charset="UTF-8" src="http://maps.google.com/maps-api-v3/api/js/24/8/intl/es_ALL/map.js"></script><script type="text/javascript" charset="UTF-8" src="http://maps.google.com/maps-api-v3/api/js/24/8/intl/es_ALL/marker.js"></script>
        <script type="text/javascript" charset="UTF-8" src="http://maps.google.com/maps-api-v3/api/js/24/8/intl/es_ALL/onion.js"></script><script type="text/javascript" charset="UTF-8" src="http://maps.google.com/maps-api-v3/api/js/24/8/intl/es_ALL/stats.js"></script><script type="text/javascript" charset="UTF-8" src="http://maps.google.com/maps-api-v3/api/js/24/8/intl/es_ALL/controls.js"></script></head>
    <body onload="load();" onunload="GUnload();">
        <h1 style="border: 1px solid #CCC;background-color: #EEE;color: #999;font-family: verdana;">OBTENER COORDENADAS DE UN PUNTO EN GOOGLE MAPS</h1>


        <form id="google" name="google" action="#">

            <p><label>Dirección: </label>
                <input style="width:400px" type="text" id="direccion" name="direccion" value="">
                <button id="pasar">Obtener coordenadas</button> 
            </p>


            <!-- div donde se dibuja el mapa-->
            <div id="map_canvas" style="width: 800px; height: 300px; position: relative; overflow: hidden; transform: translateZ(0px); background-color: rgb(229, 227, 223);"><div class="gm-style" style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0; cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 144, -82);"><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
                                        <div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 120px; top: 22px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 376px; top: 22px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -136px; top: 22px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 632px; top: 22px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 120px; top: 278px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 376px; top: 278px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -136px; top: 278px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 632px; top: 278px;"></div>
                                        <div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -392px; top: 22px;"></div>
                                        <div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -392px; top: 278px;"></div></div></div></div>
                            <div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 120px; top: 22px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 376px; top: 22px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: -136px; top: 22px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 632px; top: 22px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 120px; top: 278px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 376px; top: 278px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: -136px; top: 278px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 632px; top: 278px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: -392px; top: 22px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: -392px; top: 278px;"></div></div></div>
                                <div style="width: 22px; height: 40px; overflow: hidden; position: absolute; left: 196px; top: 120px; z-index: 160;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 22px; height: 40px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; opacity: 1;"></div></div><div style="position: absolute; z-index: 0; transform: translateZ(0px); left: -85px; top: -133px;">
                                <div style="overflow: hidden; width: 800px; height: 300px;"><img src="http://maps.googleapis.com/maps/api/js/StaticMapService.GetMapImage?1m2&amp;1i3835955&amp;2i7571301&amp;2e1&amp;3u16&amp;4m2&amp;1u800&amp;2u300&amp;5m5&amp;1e0&amp;5ses-ES&amp;6sus&amp;10b1&amp;12b1&amp;token=63281" style="width: 800px; height: 300px;"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="transform: translateZ(0px); position: absolute; left: 120px; top: 22px; transition: opacity 200ms ease-out;"><img src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i16!2i14985!3i29576!4i256!2m3!1e0!2sm!3i347014245!3m9!2ses-ES!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=125662" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="transform: translateZ(0px); position: absolute; left: 376px; top: 22px; transition: opacity 200ms ease-out;"><img src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i16!2i14986!3i29576!4i256!2m3!1e0!2sm!3i347014245!3m9!2ses-ES!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=85941" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="transform: translateZ(0px); position: absolute; left: -136px; top: 22px; transition: opacity 200ms ease-out;"><img src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i16!2i14984!3i29576!4i256!2m3!1e0!2sm!3i347014245!3m9!2ses-ES!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=34312" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="transform: translateZ(0px); position: absolute; left: 632px; top: 22px; transition: opacity 200ms ease-out;"><img src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i16!2i14987!3i29576!4i256!2m3!1e0!2sm!3i347014245!3m9!2ses-ES!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=46220" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="transform: translateZ(0px); position: absolute; left: 120px; top: 278px; transition: opacity 200ms ease-out;"><img src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i16!2i14985!3i29577!4i256!2m3!1e0!2sm!3i347000000!3m9!2ses-ES!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=121464" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="transform: translateZ(0px); position: absolute; left: 376px; top: 278px; transition: opacity 200ms ease-out;"><img src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i16!2i14986!3i29577!4i256!2m3!1e0!2sm!3i347000000!3m9!2ses-ES!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=81743" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="transform: translateZ(0px); position: absolute; left: -136px; top: 278px; transition: opacity 200ms ease-out;"><img src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i16!2i14984!3i29577!4i256!2m3!1e0!2sm!3i347000000!3m9!2ses-ES!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=30114" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="transform: translateZ(0px); position: absolute; left: 632px; top: 278px; transition: opacity 200ms ease-out;"><img src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i16!2i14987!3i29577!4i256!2m3!1e0!2sm!3i347014245!3m9!2ses-ES!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=82241" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="transform: translateZ(0px); position: absolute; left: -392px; top: 22px; transition: opacity 200ms ease-out;"><img src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i16!2i14983!3i29576!4i256!2m3!1e0!2sm!3i347014245!3m9!2ses-ES!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=74033" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="transform: translateZ(0px); position: absolute; left: -392px; top: 278px; transition: opacity 200ms ease-out;"><img src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i16!2i14983!3i29577!4i256!2m3!1e0!2sm!3i347000000!3m9!2ses-ES!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=69835" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 2; width: 100%; height: 100%; transition-duration: 0.3s; opacity: 0; display: none;" class="gm-style-pbc"><p class="gm-style-pbt">Para mover el mapa, utiliza dos dedos</p></div><div style="position: absolute; left: 0px; top: 0px; z-index: 3; width: 100%; height: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 4; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 144, -82);"><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"><div class="gmnoprint" style="width: 22px; height: 40px; overflow: hidden; position: absolute; opacity: 0.01; left: 196px; top: 120px; z-index: 160;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi.png" draggable="false" usemap="#gmimap6" style="position: absolute; left: 0px; top: 0px; width: 22px; height: 40px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; opacity: 1;"><map name="gmimap6" id="gmimap6"><area href="javascript:void(0)" log="miw" coords="8,0,5,1,4,2,3,3,2,4,2,5,1,6,1,7,0,8,0,14,1,15,1,16,2,17,2,18,3,19,3,20,4,21,5,22,5,23,6,24,7,25,7,27,8,28,8,29,9,30,9,33,10,34,10,40,11,40,11,34,12,33,12,30,13,29,13,28,14,27,14,25,15,24,16,23,16,22,17,21,18,20,18,19,19,18,19,17,20,16,20,15,21,14,21,8,20,7,20,6,19,5,19,4,18,3,17,2,16,1,14,1,13,0,8,0" shape="poly" title="" style="cursor: pointer;"></map></div></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" href="https://maps.google.com/maps?ll=17.262417,-97.682013&amp;z=16&amp;t=m&amp;hl=es-ES&amp;gl=US&amp;mapclient=apiv3" title="Haz clic aquí para visualizar esta zona en Google Maps" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 66px; height: 26px; cursor: pointer;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/google4.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div><div style="padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 250px; top: 60px; background-color: white;"><div style="padding: 0px 0px 10px; font-size: 16px;">Datos de mapas</div><div style="font-size: 13px;">Datos de mapas ©2016 Google, INEGI</div><div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 228px; bottom: 0px; width: 181px;"><div draggable="false" class="gm-style-cc" style="-webkit-user-select: none; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Datos de mapas</a><span>Datos de mapas ©2016 Google, INEGI</span></div></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Datos de mapas ©2016 Google, INEGI</div></div><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; -webkit-user-select: none; height: 14px; line-height: 14px; position: absolute; right: 142px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/es-ES_US/help/terms_maps.html" target="_blank" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Términos de uso</a></div></div><div style="width: 25px; height: 25px; overflow: hidden; display: none; margin: 10px 14px; position: absolute; top: 0px; right: 0px;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/sv5.png" draggable="false" class="gm-fullscreen-control" style="position: absolute; left: -52px; top: -86px; width: 164px; height: 112px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div draggable="false" class="gm-style-cc" style="-webkit-user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_new" title="Informar a Google acerca de errores en las imágenes o en el mapa de carreteras" href="https://www.google.com/maps/@17.2624166,-97.682013,16z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Informar de un error de Maps</a></div></div><div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" controlwidth="28" controlheight="93" style="margin: 10px; -webkit-user-select: none; position: absolute; bottom: 107px; right: 28px;"><div class="gmnoprint" controlwidth="28" controlheight="55" style="position: absolute; left: 0px; top: 38px;"><div draggable="false" style="-webkit-user-select: none; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; width: 28px; height: 55px; background-color: rgb(255, 255, 255);"><div title="Acerca la imagen" style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: 0px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div></div><div style="position: relative; overflow: hidden; width: 67%; height: 1px; left: 16%; top: 0px; background-color: rgb(230, 230, 230);"></div><div title="Aleja la imagen" style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: -15px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div></div></div></div><div class="gm-svpc" controlwidth="28" controlheight="28" style="box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-radius: 2px; width: 28px; height: 28px; cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default; position: absolute; left: 0px; top: 0px; background-color: rgb(255, 255, 255);"><div style="position: absolute; left: 1px; top: 1px;"></div><div style="position: absolute; left: 1px; top: 1px;"><div aria-label="Control del hombrecito naranja de Street View" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false" style="position: absolute; left: -147px; top: -26px; width: 215px; height: 835px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div aria-label="El hombrecito naranja está en la parte superior del mapa." style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false" style="position: absolute; left: -147px; top: -52px; width: 215px; height: 835px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div aria-label="Control del hombrecito naranja de Street View" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false" style="position: absolute; left: -147px; top: -78px; width: 215px; height: 835px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div><div class="gmnoprint" controlwidth="28" controlheight="0" style="display: none; position: absolute;"><div title="Girar el mapa 90 grados" style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; cursor: pointer; display: none; background-color: rgb(255, 255, 255);"><img src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png" draggable="false" style="position: absolute; left: -141px; top: 6px; width: 170px; height: 54px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div class="gm-tilt" style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; top: 0px; cursor: pointer; background-color: rgb(255, 255, 255);"><img src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png" draggable="false" style="position: absolute; left: -141px; top: -13px; width: 170px; height: 54px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div><div class="gmnoprint" style="margin: 10px; z-index: 0; position: absolute; cursor: pointer; left: 0px; top: 0px;"><div class="gm-style-mtc" style="float: left;"><div draggable="false" title="Muestra el callejero" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 8px; border-bottom-left-radius: 2px; border-top-left-radius: 2px; -webkit-background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; min-width: 27px; font-weight: 500; background-color: rgb(255, 255, 255); background-clip: padding-box;">Mapa</div><div style="z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; position: absolute; left: 0px; top: 28px; text-align: left; display: none; background-color: white;"><div draggable="false" title="Muestra el callejero con relieve" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap; background-color: rgb(255, 255, 255);"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle; background-color: rgb(255, 255, 255);"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img src="http://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Relieve</label></div></div></div><div class="gm-style-mtc" style="float: left;"><div draggable="false" title="Muestra las imágenes de satélite" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(86, 86, 86); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 8px; border-bottom-right-radius: 2px; border-top-right-radius: 2px; -webkit-background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-left-width: 0px; min-width: 35px; background-color: rgb(255, 255, 255); background-clip: padding-box;">Satélite</div><div style="z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; position: absolute; right: 0px; top: 29px; text-align: left; display: none; background-color: white;"><div draggable="false" title="Muestra las imágenes con los nombres de las calles" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap; background-color: rgb(255, 255, 255);"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle; background-color: rgb(255, 255, 255);"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;"><img src="http://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Etiquetas</label></div></div></div></div></div></div>
            <br>
            <!--campos ocultos donde guardamos los datos-->
            <p><label>Latitud: </label><input type="text" readonly="" name="lat" id="lat"></p>
            <p><label> Longitud:</label> <input type="text" readonly="" name="lng" id="long"></p>
        </form>







        <p style="border: 1px solid #CCC;background-color: #EEE;color: #999;font-family: verdana;margin-top: 40px"><a href="http://www.agenciacreativa.net" style="text-decoration: none;color: #000;text-align: center;" target="_blank">http://www.agenciacreativa.net</a></p>

        <p><a title="coches de ocasión y actualidad motor" href="http://www.motor.es/">coches de ocasión</a></p>
        <p><a href="http://www.canalanuncio.com/" title="anuncios gratis y anuncios clasificados en todo el mundo">Anuncios gratis</a></p>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 



    </body>
</html>