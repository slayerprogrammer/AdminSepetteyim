$(document).ready(function() { 
 
var id = '#dialog';
 
var maskHeight = $(document).height();
var maskWidth = $(window).width();
 
$('#maske').css({'width':maskWidth,'height':maskHeight});
 
$('#maske').fadeIn(500); 
$('#maske').fadeTo("slow",0.9); 
 
var winH = $(window).height();
var winW = $(window).width();
 
$(id).css('top',  winH/2-$(id).height()/2);
$(id).css('left', winW/2-$(id).width()/2);
 
$(id).fadeIn(2000);  
 
$('.window .close').click(function (e) {
e.preventDefault();
 
$('#maske').hide();
$('.window').hide();
}); 
 
$('#maske').click(function () {
$(this).hide();
$('.window').hide();
}); 
 
});