window.fbAsyncInit = function() {
    FB.init({
      appId      : '1766851593532710',
      xfbml      : true,
      version    : 'v2.7'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

  // function shareLink(){
  //   FB.api('me/feed','post', 
  //     (link:'http://http://refcomunicacao.com.br/cliente/ded/testeland/'),
  //   mobile_iframe: true,
  //     function(response) {
  //   });

  FB.ui({
  method: 'feed',
  mobile_iframe: true,
  link: 'http://refcomunicacao.com.br/cliente/ded/testeland/',
  caption: 'An example caption',
}, function(response){});


  }