$(function() {
	$('#buy').on('click', function() {
		ga('send', 'event', 'button', 'click', 'Shop Button (main navigation on top)', {'page': window.location.href });
	});
	$('.btn-buy').on('click', function() {
		ga('send', 'event', 'button', 'click', 'Buy Button (bottom of the page / footer section)', {'page': window.location.href });
	});

	$('.icon-roll').textillate({
	  selector: '.ico-roll',
	  loop: true,
	  minDisplayTime: 3000,
	  initialDelay: 0,
	  autoStart: true,
	  inEffects: [ 'zoomIn' ],
	  outEffects: [ 'zoomOut' ],
	  in: {
	    effect: 'zoomIn',
	    delayScale: 1,
	    delay: 0,
	    sync: false,
	    shuffle: false,
	    reverse: false,
	    callback: function () {}
	  },
	  out: {
	    effect: 'zoomOut',
	    delayScale: 1,
	    delay: 0,
	    sync: false,
	    shuffle: false,
	    reverse: false,
	    callback: function () {}
	  },
	  type: 'word'
	});
});

function valueAnimation(start, stop, element, append_text) 
{
	$({value: start}).delay(1000).animate({value: stop}, {
		duration: 2000,
    		easing:'easeOutCirc',
    		step: function() {
    			$(element).text(parseInt(this.value) + append_text);
    		}
  	});
}

function heightAnimation(start, stop, element) 
{
	$({value: start}).delay(1000).animate({value: stop}, {
		duration: 2000,
		easing:'easeOutCirc',
		step: function() {
   			$(element).css({ height: parseInt(this.value) + "px" });
		}
	});
}