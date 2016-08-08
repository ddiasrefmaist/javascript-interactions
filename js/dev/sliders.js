
$(document).ready(function(){
if (window.matchMedia('(max-width: 1000px)').matches)
    {
       
    }

    else {
        

   $(function() {
     var slider2_initialized = false;
     var slider3_initialized = false;
     var slider4_initialized = false;
     var slider5_initialized = false;
     var slider6_initialized = false;
     
     $( "#tabs" ).tabs({
         activate: function( event, ui ) {
            //console.log("ui = ");console.log(ui);
            var tab_id = $(ui.newPanel).attr('id');//alert(tab_id);
            
            if(tab_id == "tabs-2" && slider2_initialized == false)
            {    
                $('.bxslider2').bxSlider({
                    pagerCustom: '#bx-pagerc2',
                    autoControls: true,
                    TouchEnabled: true,
                }); 
                //update initialization flag to true
                slider2_initialized = true;
            }
            else if(tab_id == "tabs-3" && slider3_initialized == false)
            {    
                $('.bxslider3').bxSlider({
                         pagerCustom: '#bx-pagerc3',
                          autoControls: true,
                    TouchEnabled: true,
                }); 
                //update initialization flag to true
                slider3_initialized = true;
            }
            else if(tab_id == "tabs-4" && slider4_initialized == false)
            {    
                $('.bxslider4').bxSlider({
                         pagerCustom: '#bx-pagerc4',
                          autoControls: true,
                    TouchEnabled: true,
                }); 
                //update initialization flag to true
                slider4_initialized = true;
            }
            else if(tab_id == "tabs-5" && slider5_initialized == false)
            {    
                $('.bxslider5').bxSlider({
                         pagerCustom: '#bx-pagerc5',
                          autoControls: true,
                    TouchEnabled: true,
                }); 
                //update initialization flag to true
                slider5_initialized = true;
            }
            else if(tab_id == "tabs-6" && slider6_initialized == false)
            {    
                $('.bxslider6').bxSlider({
                         pagerCustom: '#bx-pagerc6',
                          autoControls: true,
                    TouchEnabled: true,
                }); 
                //update initialization flag to true
                slider6_initialized = true;
            }
         }
     });
     
$('.bxslider1').bxSlider({
          pagerCustom: '#bx-pagerc1',
          autoControls: true,
});     
});
   
    }

    return  false;
});

