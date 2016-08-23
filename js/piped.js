//LIGHTBOX

var $overlay = $('<div class="overlay"></div>');
var $images = $('<img>');

$overlay.append($images);

$('body').append($overlay);

$('.gallery a').click(function(event) {
	event.preventDefault();
	var imageLocation = $(this).attr("href");

	$images.attr("src", imageLocation);

	$overlay.show();
});


$overlay.click(function() {
	$overlay.hide('slow');
});

//FIM DO LIGHTBOX

var $select = $('<select></select>');

$('nav').append($select);

$('nav a').each(function() {
	var $anchor = $(this);
	var $option = $('<option></option>');
	$option.val($anchor.attr('href'));
	$option.text($anchor.text());
	$select.append($option);
});
var wrapper = $('.wrapperslider');
var allSld =  $('.wrapperslider').children();
var sliOne = $('.wrapperslider>div:first-child');
var lastSli = $('.wrapperslider>div:last-child');
var totalItems = $('.wrapperslider').children().length;

$(allSld).hide();
$(sliOne).show();

// alert( "Index: " + $(sliOne).index() );

//# sourceMappingURL=piped.js.map
