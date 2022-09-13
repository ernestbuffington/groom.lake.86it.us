/* global an602 */

(function($) { // Avoid conflicts with other libraries

'use strict';

$('#tz_date').change(function() {
	an602.timezoneSwitchDate(false);
});

$('#tz_select_date_suggest').click(function(){
	an602.timezonePreselectSelect(true);
});

$(function () {
	an602.timezoneEnableDateSelection();
	an602.timezonePreselectSelect($('#tz_select_date_suggest').attr('timezone-preselect') === 'true');
});

})(jQuery); // Avoid conflicts with other libraries
