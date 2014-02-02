<footer>
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

<!-- this is where we put our custom functions -->
<!-- don't forget to concatenate and minify if needed -->
<script type="application/javascript" src="<?php bloginfo('template_url'); ?>/functions.js"></script>
<script type="application/javascript" src="<?php bloginfo('template_url'); ?>/functions.php"></script>

<!-- External scripts: Twitter, Kippt-->

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

<script defer type="text/javascript" src="<?php bloginfo('template_url'); ?>/_/kippt/js/icanhaz.min.js"></script>
<script defer type="text/javascript" src="<?php bloginfo('template_url'); ?>/_/kippt/js/main.js"></script>

<script id="clips_list" type="text/html">
    {{#objects}}
        <li><a href="{{url}}" target="_blank">{{title}}</a></li>
    {{/objects}}
</script>

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