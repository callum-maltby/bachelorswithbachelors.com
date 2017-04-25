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

});



//auto expand textarea
function adjust_textarea(h) {
    h.style.height = "20px";
    h.style.height = (h.scrollHeight)+"px";
}

/*
$(function() {

    var fastQuotes = $(".fastQuotes");
    var fastQuoteIndex = -1;

    function showNextFastQuote() {
        ++fastQuoteIndex;
		//quotes.eq(quoteIndex % quotes.length)
		fastQuotes.eq(fastQuoteIndex % fastQuotes.length)
            .fadeIn(400)
            .delay(900)
			.fadeOut(400, showNextFastQuote);
			
    }

    showNextFastQuote();

});
*/

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
