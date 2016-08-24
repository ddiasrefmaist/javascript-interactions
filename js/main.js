//LIGHTBOX

// var W;
// function getDocHeight() {
//     var D = document;
//     W = Math.max(
//         Math.max(D.body.scrollHeight, D.documentElement.scrollHeight),
//         Math.max(D.body.offsetHeight, D.documentElement.offsetHeight),
//         Math.max(D.body.clientHeight, D.documentElement.clientHeight)
//     );

// }



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
