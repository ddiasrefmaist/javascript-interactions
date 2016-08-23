var wrapper = $('.wrapperslider');
var allSld =  $('.wrapperslider').children();
var sliOne = $('.wrapperslider>div:first-child');
var lastSli = $('.wrapperslider>div:last-child');
var totalItems = $('.wrapperslider').children().length;

$(allSld).hide();
$(sliOne).show();

alert( "Index: " + $(sliOne).index() );