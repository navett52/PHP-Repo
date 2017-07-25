/**
 * Created by LibStaff on 9/28/2016.
 */
window.onload(matchWidth());

var greatestWidth = document.getElementById("bravo");   // Stores the greatest width

$(selector).each(function() {    // Select the elements you're comparing

    var theWidth = $(this).width();   // Grab the current width

    if( theWidth > greatestWidth) {   // If theWidth > the greatestWidth so far,
        greatestWidth = theWidth;     //    set greatestWidth to theWidth
    }
});

$(selector).width(greatestWidth);     // Update the elements you were comparing