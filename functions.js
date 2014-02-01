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

$(function(){
  $('header').data('size','big');
});

$(window).scroll(function(){
  if($(document).scrollTop() > 0)
{
    if($('header').data('size') == 'big')
    {
        $('header').data('size','small');
        $('header').stop().animate({
            height:'70px'
        },400);
        $('header p').stop().fadeOut(400);
        $('.logo').data('size','small');
        $('.logo').stop().animate({
            'max-width':'150px'
        },400);
    }
}
else
  {
    if($('header').data('size') == 'small')
      {
        $('header').data('size','big');
        $('header').stop().animate({
            height:'120px'
        },400);
        $('header p').stop().fadeIn(400);
        $('.logo').data('size','big');
        $('.logo').stop().animate({
            'max-width':'300px'
        },400);
      }  
  }
});

// smooth scrolling animation
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 500);
        return false;
      }
    }
  });
});
	

loadPortfolio();

});


function loadPortfolio() {
  $.getJSON( "http://www.davidbauer.ch/wp-content/themes/db14/portfolio.json", function( data ) {
  var items = [];
  for (i=0;i < data.length;i++) {
	  items.push(data[i]);
	}
  // push first two items to page
  $('.pf0').html("<a href='" + items[0].url + "'><img src='" + items[0].img + "' title='" + items[0].title + "' alt='" + items[0].title + "'></a>");
  $('.pf1').html("<a href='" + items[1].url + "'><img src='" + items[1].img + "' title='" + items[1].title + "' alt='" + items[1].title + "'></a>");	  
  
  rotate(items);
  
  // switch between portfolio modes
  $('.browse').click(function(){
	  browse(items);
  });
  $('.showcase').click(function(){
	  showcase(items);
  });
  
});
}

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

function browse(items) {
	// show all items in smaller grid
	$('#teasers').html("");
	for (i=0; i<items.length;i++) {
		if (i%6 == 0) {teaser = "<div class='clear'><article class='g g1 gl'><a href='" + items[i].url + "'><img src='" + items[i].img + "' title='" + items[i].title + "' alt='" + items[i].title + "'></a></article>";}
		else {teaser = "</div><article class='g g1'><a href='" + items[i].url + "'><img src='" + items[i].img + "' title='" + items[i].title + "' alt='" + items[i].title + "'></a></article>";}
		$('#teasers').fadeIn(500).append(teaser);	
	}	
}

function showcase(items) {
	$('#teasers').html("");
	$('#teasers').html("<article class='g g3 gl pf0'></article><article class='g g3 pf1'></article>");
	loadPortfolio();
}


/* optional triggers

$(window).load(function() {
	
});

$(window).resize(function() {
	
});

*/


})(window.jQuery);