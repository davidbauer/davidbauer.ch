<footer class="wrapper" id="footer">
		<div class="content">
		<div class="g g1 gl mobile-hide"></div>
		<div class="g g4 centered">
		
			<p><a rel="license" href="https://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" /></a><br />All content on this site, excluding images, is licensed under a Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License.</p>
			<p>Grab it, remix it.</p>
			<p>Made by David Bauer with &hearts; and limited coding skills</p>
		</div>
		</div>
		<div class="clear"></div>
	
</footer>

</div> <!-- /container -->

<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write("<script src='<?php echo esc_url( get_template_directory_uri() ); ?>/_/js/jquery-1.10.2.min.js'>\x3C/script>")</script>

<script type="application/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/functions.js"></script>
<script type="application/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/functions.php"></script>

<!-- External scripts: Eliminated them all!-->


<!-- <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/_/js/leaflet/leaflet.js"></script> -->

<!-- <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/_/js/stamen.js"></script> -->


<!-- create the leaflet map 			
<script type="text/javascript">
// create a map in the "map" div, set the view to a given place and zoom
var map = L.map('map').setView([50,15], 4);
var layer = new L.StamenTileLayer("watercolor");

// add an OpenStreetMap tile layer
L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

map.addLayer(layer);
map.scrollWheelZoom.disable();

var myIcon = L.icon({
    iconUrl: 'https://www.davidbauer.ch/wp-content/themes/db14/_/img/dot.png',
    iconRetinaUrl: 'https://www.davidbauer.ch/wp-content/themes/db14/_/img/dot.png',
    iconSize: [30, 30]
});

// add a marker in the given location, attach some popup content to it and open the popup
// http://www.latlong.net/
//L.marker([51.5,-0.10], {icon: myIcon}).addTo(map) // london
 L.marker([43.1,12.37], {icon: myIcon}).addTo(map) // perugia
// L.marker([41.3,2.1], {icon: myIcon}).addTo(map) // barca
// L.marker([52.50,13.42], {icon: myIcon}).addTo(map) // berlin
L.marker([47.5,7.59], {icon: myIcon}).addTo(map) // basel
// L.marker([48.21,16.37], {icon: myIcon}).addTo(map) // vienna
// L.marker([60.17,24.94], {icon: myIcon}).addTo(map) // helsinki
// L.marker([59.44,24.75], {icon: myIcon}).addTo(map) // tallinn
L.marker([47.37,8.54], {icon: myIcon}).addTo(map) // zurich
// L.marker([53.55,9.99], {icon: myIcon}).addTo(map) // hamburg
//L.marker([63.43,10.40], {icon: myIcon}).addTo(map) // trondheim
//L.marker([52.37,4.90], {icon: myIcon}).addTo(map) // amsterdam

</script>
-->

<?php wp_footer(); ?>
</body>
</html>