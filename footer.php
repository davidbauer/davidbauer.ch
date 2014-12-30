<footer id="footer">
		<div class="content">
		<div class="g g1 gl mobile-hide"></div>
		<div class="g g4 centered">
		
			<p><a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" /></a><br />All content on this site, excluding images, is licensed under a Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License.</p>
			<p>Grab it, remix it.</p>
			<p>Made by David Bauer with &hearts; and limited coding skills</p>
		</div>
		</div>
		<div class="clear"></div>
	
</footer>

</div> <!-- /container -->



<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
		 http://chromium.org/developers/how-tos/chrome-frame-getting-started -->
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write("<script src='<?php bloginfo('template_url'); ?>/_/js/jquery-1.10.2.min.js'>\x3C/script>")</script>

<script type="application/javascript" src="<?php bloginfo('template_url'); ?>/functions.js"></script>
<script type="application/javascript" src="<?php bloginfo('template_url'); ?>/functions.php"></script>

<!-- External scripts: Twitter, Kippt, Leaflet, Stamen, Embed.ly-->

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

<script defer type="text/javascript" src="<?php bloginfo('template_url'); ?>/_/kippt/js/icanhaz.min.js"></script>
<script defer type="text/javascript" src="<?php bloginfo('template_url'); ?>/_/kippt/js/main.js"></script>

<script id="clips_list" type="text/html">
    {{#objects}}
        <li><a href="{{url}}" target="_blank">{{title}}</a></li>
    {{/objects}}
</script>

<script defer type="text/javascript" src="<?php bloginfo('template_url'); ?>/_/kippt/js/main.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/_/js/headroom.min.js"></script>
<script type=text/javascript>
	// grab an element
	var elem = document.querySelector("header");
	// construct an instance of Headroom, passing the element
	var headroom = new Headroom(elem, {
		  "offset": 100,
		  "tolerance": {
		    "up": 0,
		    "down": 0
		  }
		});
	// initialise
	headroom.init(); 
</script>


<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/_/js/bigfoot/bigfoot.js"></script>
<script type="text/javascript">
    $.bigfoot();
</script>


<script src="<?php bloginfo('template_url'); ?>/_/js/leaflet/leaflet.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/_/js/stamen.js"></script>

<script>!function(a){var b="embedly-platform",c="script";if(!a.getElementById(b)){var d=a.createElement(c);d.id=b,d.src=("https:"===document.location.protocol?"https":"http")+"://cdn.embedly.com/widgets/platform.js";var e=document.getElementsByTagName(c)[0];e.parentNode.insertBefore(d,e)}}(document);</script>

<!-- Mailchimp -->
<script type="text/javascript">
			var fnames = new Array();var ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';
			try {
			    var jqueryLoaded=jQuery;
			    jqueryLoaded=true;
			} catch(err) {
			    var jqueryLoaded=false;
			}
			var head= document.getElementsByTagName('head')[0];
			if (!jqueryLoaded) {
			    var script = document.createElement('script');
			    script.type = 'text/javascript';
			    script.src = 'http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js';
			    head.appendChild(script);
			    if (script.readyState && script.onload!==null){
			        script.onreadystatechange= function () {
			              if (this.readyState == 'complete') mce_preload_check();
			        }    
			    }
			}
			var script = document.createElement('script');
			script.type = 'text/javascript';
			script.src = 'http://downloads.mailchimp.com/js/jquery.form-n-validate.js';
			head.appendChild(script);
			var err_style = '';
			try{
			    err_style = mc_custom_error_style;
			} catch(e){
			    err_style = 'margin: 1em 0 0 0; padding: 1em 0.5em 0.5em 0.5em; background: ERROR_BGCOLOR none repeat scroll 0% 0%; font-weight: bold; float: left; z-index: 1; width: 80%; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial; color: ERROR_COLOR;';
			}
			var head= document.getElementsByTagName('head')[0];
			var style= document.createElement('style');
			style.type= 'text/css';
			if (style.styleSheet) {
			  style.styleSheet.cssText = '.mce_inline_error {' + err_style + '}';
			} else {
			  style.appendChild(document.createTextNode('.mce_inline_error {' + err_style + '}'));
			}
			head.appendChild(style);
			setTimeout('mce_preload_check();', 250);
			
			var mce_preload_checks = 0;
			function mce_preload_check(){
			    if (mce_preload_checks>40) return;
			    mce_preload_checks++;
			    try {
			        var jqueryLoaded=jQuery;
			    } catch(err) {
			        setTimeout('mce_preload_check();', 250);
			        return;
			    }
			    try {
			        var validatorLoaded=jQuery("#fake-form").validate({});
			    } catch(err) {
			        setTimeout('mce_preload_check();', 250);
			        return;
			    }
			    mce_init_form();
			}
			function mce_init_form(){
			    jQuery(document).ready( function($) {
			      var options = { errorClass: 'mce_inline_error', errorElement: 'div', onkeyup: function(){}, onfocusout:function(){}, onblur:function(){}  };
			      var mce_validator = $("#mc-embedded-subscribe-form").validate(options);
			      $("#mc-embedded-subscribe-form").unbind('submit');//remove the validator so we can get into beforeSubmit on the ajaxform, which then calls the validator
			      options = { url: 'http://davidbauer.us2.list-manage.com/subscribe/post-json?u=a37fb2cb8c141270ee0dd9c10&id=32913f2c60&c=?', type: 'GET', dataType: 'json', contentType: "application/json; charset=utf-8",
			                    beforeSubmit: function(){
			                        $('#mce_tmp_error_msg').remove();
			                        $('.datefield','#mc_embed_signup').each(
			                            function(){
			                                var txt = 'filled';
			                                var fields = new Array();
			                                var i = 0;
			                                $(':text', this).each(
			                                    function(){
			                                        fields[i] = this;
			                                        i++;
			                                    });
			                                $(':hidden', this).each(
			                                    function(){
			                                        if (fields.length == 2) fields[2] = {'value':1970};//trick birthdays into having years
			                                    	if ( fields[0].value=='MM' && fields[1].value=='DD' && fields[2].value=='YYYY' ){
			                                    		this.value = '';
												    } else if ( fields[0].value=='' && fields[1].value=='' && fields[2].value=='' ){
			                                    		this.value = '';
												    } else {
				                                        this.value = fields[0].value+'/'+fields[1].value+'/'+fields[2].value;
				                                    }
			                                    });
			                            });
			                        return mce_validator.form();
			                    }, 
			                    success: mce_success_cb
			                };
			      $('#mc-embedded-subscribe-form').ajaxForm(options);      
			      
			    });
			}
			function mce_success_cb(resp){
			    $('#mce-success-response').hide();
			    $('#mce-error-response').hide();
			    if (resp.result=="success"){
			        $('#mce-'+resp.result+'-response').show();
			        $('#mce-'+resp.result+'-response').html(resp.msg);
			        $('#mc-embedded-subscribe-form').each(function(){
			            this.reset();
			    	});
			    } else {
			        var index = -1;
			        var msg;
			        try {
			            var parts = resp.msg.split(' - ',2);
			            if (parts[1]==undefined){
			                msg = resp.msg;
			            } else {
			                i = parseInt(parts[0]);
			                if (i.toString() == parts[0]){
			                    index = parts[0];
			                    msg = parts[1];
			                } else {
			                    index = -1;
			                    msg = resp.msg;
			                }
			            }
			        } catch(e){
			            index = -1;
			            msg = resp.msg;
			        }
			        try{
			            if (index== -1){
			                $('#mce-'+resp.result+'-response').show();
			                $('#mce-'+resp.result+'-response').html(msg);            
			            } else {
			                err_id = 'mce_tmp_error_msg';
			                html = '<div id="'+err_id+'" style="'+err_style+'"> '+msg+'</div>';
			                
			                var input_id = '#mc_embed_signup';
			                var f = $(input_id);
			                if (ftypes[index]=='address'){
			                    input_id = '#mce-'+fnames[index]+'-addr1';
			                    f = $(input_id).parent().parent().get(0);
			                } else if (ftypes[index]=='date'){
			                    input_id = '#mce-'+fnames[index]+'-month';
			                    f = $(input_id).parent().parent().get(0);
			                } else {
			                    input_id = '#mce-'+fnames[index];
			                    f = $().parent(input_id).get(0);
			                }
			                if (f){
			                    $(f).append(html);
			                    $(input_id).focus();
			                } else {
			                    $('#mce-'+resp.result+'-response').show();
			                    $('#mce-'+resp.result+'-response').html(msg);
			                }
			            }
			        } catch(e){
			            $('#mce-'+resp.result+'-response').show();
			            $('#mce-'+resp.result+'-response').html(msg);
			        }
			    }
			}
			
			</script>

<!-- create the leaflet map -->			
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
    iconUrl: 'http://www.davidbauer.ch/wp-content/themes/db14/_/img/dot.png',
    iconRetinaUrl: 'http://www.davidbauer.ch/wp-content/themes/db14/_/img/dot.png',
    iconSize: [30, 30]
});

// add a marker in the given location, attach some popup content to it and open the popup
// http://www.latlong.net/
// L.marker([51.5,-0.10], {icon: myIcon}).addTo(map) // london
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


<!-- Asynchronous google analytics -->	 
<script>

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-18717219-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<?php wp_footer(); ?>
</body>
</html>