var $overlay = $('<div class="overlay"></div>');
var $images = $('<img>');

$overlay.append($images);

$('body').append($overlay);


//Capturar o evento de clique numa imagem
$('.gallery a').click(function(event) {
	event.preventDefault();
	var imageLocation = $(this).attr("href");

	$images.attr("src", imageLocation);

	$overlay.show();
});


$overlay.click(function() {
	$overlay.hide('slow');
});

	//Mostrar o Overlay
	
	//Atualizar o Overlay com a imagem em alta

//2.Adicionar o Overlay 
    //- Um background
    //- Uma imagem

//3.Ao clicar no bg fora fechar

var wrapper = $('.wrapperslider');
var allSld =  $('.wrapperslider').children();
var sliOne = $('.wrapperslider>div:first-child');
var lastSli = $('.wrapperslider>div:last-child');
var totalItems = $('.wrapperslider').children().length;

$(allSld).hide();
$(sliOne).show();

// alert( "Index: " + $(sliOne).index() );

//# sourceMappingURL=piped.js.map
