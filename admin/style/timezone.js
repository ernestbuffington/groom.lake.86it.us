(function($) { // Avoid conflicts with other libraries

"use strict";

$('#tz_date').change(function() {
	an602.timezoneSwitchDate(false);
});

$(document).ready(
	an602.timezoneEnableDateSelection
);

})(jQuery); // Avoid conflicts with other libraries
