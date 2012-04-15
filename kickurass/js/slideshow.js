
$(document).ready(function() {
$('.main').cycle({
fx: 'shuffle', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
speed:  'slow', 
timeout: 0, 
next:   '#next', 
prev:   '#prev'
});
});
