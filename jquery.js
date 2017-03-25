$(function() {

    var quotes = $(".quotes");
    var quoteIndex = -1;

    function showNextQuote() {
        ++quoteIndex;
		//quotes.eq(quoteIndex % quotes.length)
		quotes.eq(quoteIndex)
            .fadeIn(2000)
            .delay(2000)
			//if (quotesIndex < quotes.length) {
				.fadeOut(2000, showNextQuote);
			//}
			
			//if (quoteIndex === quotes.length) .stop(true)
			
    }

    showNextQuote();

})();

$(document).ready(function() {    $('#mybutton').delay(3000).fadeIn(2200);
  });

$(document).ready(function(){
	$('#page_effect').fadeIn(5000);
	$('#page_effect').fadeOut(5000);
});

(function() {
    var cnt = 0;
    var specials = $(".special_button");
    
    function next() {
        if (cnt < 5) {
            specials.fadeTo(2000, .1).fadeTo(2000, 1, next);
            ++cnt;
        }                    
    }
    
    next();
})();

$("#monologue_fade").fadeOut(function() {
  $(this).text("World").fadeIn();
});