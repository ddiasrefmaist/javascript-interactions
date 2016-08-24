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