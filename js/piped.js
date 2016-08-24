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

    //SET


    var wtf = $(".wrapperslider div").each(function(e) {
        if (e != 0)
            $(this).hide();
    });

    $(".next").click(function(){
        if ($(".wrapperslider div:visible").next().length != 0)
            $(".wrapperslider div:visible").next().show().prev().hide();
        else {
            $(".wrapperslider div:visible").hide();
            $(".wrapperslider div:first").show();
        }
        return false;
    });

    $(".prev").click(function(){
        if ($(".wrapperslider div:visible").prev().length != 0)
            $(".wrapperslider div:visible").prev().show().next().hide();
        else {
            $(".wrapperslider div:visible").hide();
            $(".wrapperslider div:last").show();
        }
        return false;
    });

    $('.wrapperslider').append('<div class="thumbnails"><ul class="thumbnail_ul"></ul></div>');


    $('.wrapperslider div img').each(function(){
      var src = $(this).attr('src');
      $('.thumbnail_ul').append('<li><img class="picture" alt="slider" src="'+src+'" data-image="'+src+'"></li>');
    });


    $('.picture').on('click', function(){
        var elm = $(this).data('image');
        console.log(elm);
        $(".wrapperslider div img").attr("src", elm);    
    });
$(window).resize(function() {
  var more = document.getElementById("js-navigation-more");
  if ($(more).length > 0) {
    var windowWidth = $(window).width();
    var moreLeftSideToPageLeftSide = $(more).offset().left;
    var moreLeftSideToPageRightSide = windowWidth - moreLeftSideToPageLeftSide;

    if (moreLeftSideToPageRightSide < 330) {
      $("#js-navigation-more .submenu .submenu").removeClass("fly-out-right");
      $("#js-navigation-more .submenu .submenu").addClass("fly-out-left");
    }

    if (moreLeftSideToPageRightSide > 330) {
      $("#js-navigation-more .submenu .submenu").removeClass("fly-out-left");
      $("#js-navigation-more .submenu .submenu").addClass("fly-out-right");
    }
  }
});

$(document).ready(function() {
  var menuToggle = $("#js-mobile-menu").unbind();
  $("#js-navigation-menu").removeClass("show");

  menuToggle.on("click", function(e) {
    e.preventDefault();
    $("#js-navigation-menu").slideToggle(function(){
      if($("#js-navigation-menu").is(":hidden")) {
        $("#js-navigation-menu").removeAttr("style");
      }
    });
  });
}); 

//# sourceMappingURL=piped.js.map
