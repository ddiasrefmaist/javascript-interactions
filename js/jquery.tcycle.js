!function(a){"use strict";a.fn.tcycle=function(){return this.each(function(){function p(){var e=b==g-1?0:b+1,h=c.width(),j=a(d[b]),k=a(d[e]);f?(j.fadeOut(i),k.fadeIn(i,n)):(j.animate({left:-h},i,function(){j.hide()}),k.css({left:h,display:"block"}).animate({left:0},i,n)),b=b==g-1?0:b+1}var b=0,c=a(this),d=c.children(),e=a.extend({speed:500,timeout:4e3},c.data()),f="scroll"!=e.fx,g=d.length,h=c.width(),i=e.speed,j=e.timeout,k={overflow:"hidden"},l="position",m="absolute",n=function(){setTimeout(p,j)},o=a.extend({position:m,top:0},f?{left:0}:{left:h},e.scss);"static"==c.css(l)&&(k[l]="relative"),c.prepend(a(d[0]).clone().css("visibility","hidden")).css(k),d.css(o),f?d.hide().eq(0).show():d.eq(0).css("left",0),setTimeout(p,j)})},a(function(){a(".tcycle").tcycle()})}(jQuery);