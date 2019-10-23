// Browser detection for when you get desparate. A measure of last resort.
// http://rog.ie/post/9089341529/html5boilerplatejs

// var b = document.documentElement;
// b.setAttribute('data-useragent',  navigator.userAgent);
// b.setAttribute('data-platform', navigator.platform);

// sample CSS: html[data-useragent*='Chrome/13.0'] { ... }


// remap jQuery to $
(function($){

/* trigger when page is ready */
$(document).ready(function (){


// smooth scrolling animation
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        document.location.hash=this.hash;
        
        return false;
      }
    }
  });
});
	

loadPortfolio();

});

function loadPortfolio() {
  $.getJSON( "https://www.davidbauer.ch/wp-content/themes/db14/portfolio.json", function( data ) {
  var items = [];
  for (i=0;i < data.length;i++) {
	  items.push(data[i]);
	}  
  
  browse(items);
  
  // switch between portfolio modes
  $('.browse').click(function(){
	  browse(items);
  });
  $('.showcase').click(function(){
	  showcase(items);
  });
  
});
}

/*
function rotate(items) {
	var i = 2;
	setInterval(function(){
			x = i%items.length;
			c = ".pf" + i%items.length%2;
			$(c).fadeOut(1000, function(){
				$(c).fadeIn(1000).html("<a href='" + items[x].url + "'><img src='" + items[x].img + "' title='" + items[x].title + "' alt='" + items[x].title + "'></a>");
			});
			i++;
	},5000);
}
*/

function browse(items) {
	// show all items in smaller grid
	$('#teasers').html("");
	for (i=0; i<items.length;i++) {
		smallimage = items[i].img.replace(".png","-s.png");
		if (i%6 == 0) {teaser = "<div class='clear'></div><article class='g g1 pf1 gl'><a href='" + items[i].url + "'><img src='" + smallimage + "' title='" + items[i].title + "' alt='" + items[i].title + "'></a></article>";}
		else if (i%2 == 0) {teaser = "<article class='g g1 pf1'><a href='" + items[i].url + "'><img src='" + smallimage + "' title='" + items[i].title + "' alt='" + items[i].title + "'></a></article>";}
		else {teaser = "<article class='g g1 pf2'><a href='" + items[i].url + "'><img src='" + smallimage + "' title='" + items[i].title + "' alt='" + items[i].title + "'></a></article>";}
		$('#teasers').append(teaser);	
	}	
}

function showcase(items) {
	$('#teasers').html("");
	$('#teasers').html("<article class='g g3 gl pf0'></article><article class='g g3 pf1'></article>");
	loadPortfolio();
}

 $(function() {
	$('.selector').click (function(e) {
		e.preventDefault();
		var selection = $(this).attr('data-info');
		var $sel = 'a.' + selection;
		$('.selector').removeClass('selected');
		$(this).addClass('selected');
		$('ul.icons li a').removeClass('glow');
		$('ul.icons li').find($sel).addClass('glow');
	});
  });



})(window.jQuery);