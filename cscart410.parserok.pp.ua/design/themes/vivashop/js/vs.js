var $buoop = {c:2}; 
function $buo_f(){ 
 var e = document.createElement("script"); 
 e.src = "//browser-update.org/update.min.js"; 
 document.body.appendChild(e);
};
try {document.addEventListener("DOMContentLoaded", $buo_f,false)}
catch(e){window.attachEvent("onload", $buo_f)}

/* Modernizr 2.8.2 (Custom Build) | MIT & BSD
 * Build: http://modernizr.com/download/#-cssanimations-csstransforms-csstransforms3d-touch-shiv-cssclasses-teststyles-testprop-testallprops-prefixes-domprefixes-load
 */
;window.Modernizr=function(a,b,c){function z(a){j.cssText=a}function A(a,b){return z(m.join(a+";")+(b||""))}function B(a,b){return typeof a===b}function C(a,b){return!!~(""+a).indexOf(b)}function D(a,b){for(var d in a){var e=a[d];if(!C(e,"-")&&j[e]!==c)return b=="pfx"?e:!0}return!1}function E(a,b,d){for(var e in a){var f=b[a[e]];if(f!==c)return d===!1?a[e]:B(f,"function")?f.bind(d||b):f}return!1}function F(a,b,c){var d=a.charAt(0).toUpperCase()+a.slice(1),e=(a+" "+o.join(d+" ")+d).split(" ");return B(b,"string")||B(b,"undefined")?D(e,b):(e=(a+" "+p.join(d+" ")+d).split(" "),E(e,b,c))}var d="2.8.2",e={},f=!0,g=b.documentElement,h="modernizr",i=b.createElement(h),j=i.style,k,l={}.toString,m=" -webkit- -moz- -o- -ms- ".split(" "),n="Webkit Moz O ms",o=n.split(" "),p=n.toLowerCase().split(" "),q={},r={},s={},t=[],u=t.slice,v,w=function(a,c,d,e){var f,i,j,k,l=b.createElement("div"),m=b.body,n=m||b.createElement("body");if(parseInt(d,10))while(d--)j=b.createElement("div"),j.id=e?e[d]:h+(d+1),l.appendChild(j);return f=["&#173;",'<style id="s',h,'">',a,"</style>"].join(""),l.id=h,(m?l:n).innerHTML+=f,n.appendChild(l),m||(n.style.background="",n.style.overflow="hidden",k=g.style.overflow,g.style.overflow="hidden",g.appendChild(n)),i=c(l,a),m?l.parentNode.removeChild(l):(n.parentNode.removeChild(n),g.style.overflow=k),!!i},x={}.hasOwnProperty,y;!B(x,"undefined")&&!B(x.call,"undefined")?y=function(a,b){return x.call(a,b)}:y=function(a,b){return b in a&&B(a.constructor.prototype[b],"undefined")},Function.prototype.bind||(Function.prototype.bind=function(b){var c=this;if(typeof c!="function")throw new TypeError;var d=u.call(arguments,1),e=function(){if(this instanceof e){var a=function(){};a.prototype=c.prototype;var f=new a,g=c.apply(f,d.concat(u.call(arguments)));return Object(g)===g?g:f}return c.apply(b,d.concat(u.call(arguments)))};return e}),q.touch=function(){var c;return"ontouchstart"in a||a.DocumentTouch&&b instanceof DocumentTouch?c=!0:w(["@media (",m.join("touch-enabled),("),h,")","{#modernizr{top:9px;position:absolute}}"].join(""),function(a){c=a.offsetTop===9}),c},q.cssanimations=function(){return F("animationName")},q.csstransforms=function(){return!!F("transform")},q.csstransforms3d=function(){var a=!!F("perspective");return a&&"webkitPerspective"in g.style&&w("@media (transform-3d),(-webkit-transform-3d){#modernizr{left:9px;position:absolute;height:3px;}}",function(b,c){a=b.offsetLeft===9&&b.offsetHeight===3}),a};for(var G in q)y(q,G)&&(v=G.toLowerCase(),e[v]=q[G](),t.push((e[v]?"":"no-")+v));return e.addTest=function(a,b){if(typeof a=="object")for(var d in a)y(a,d)&&e.addTest(d,a[d]);else{a=a.toLowerCase();if(e[a]!==c)return e;b=typeof b=="function"?b():b,typeof f!="undefined"&&f&&(g.className+=" "+(b?"":"no-")+a),e[a]=b}return e},z(""),i=k=null,function(a,b){function l(a,b){var c=a.createElement("p"),d=a.getElementsByTagName("head")[0]||a.documentElement;return c.innerHTML="x<style>"+b+"</style>",d.insertBefore(c.lastChild,d.firstChild)}function m(){var a=s.elements;return typeof a=="string"?a.split(" "):a}function n(a){var b=j[a[h]];return b||(b={},i++,a[h]=i,j[i]=b),b}function o(a,c,d){c||(c=b);if(k)return c.createElement(a);d||(d=n(c));var g;return d.cache[a]?g=d.cache[a].cloneNode():f.test(a)?g=(d.cache[a]=d.createElem(a)).cloneNode():g=d.createElem(a),g.canHaveChildren&&!e.test(a)&&!g.tagUrn?d.frag.appendChild(g):g}function p(a,c){a||(a=b);if(k)return a.createDocumentFragment();c=c||n(a);var d=c.frag.cloneNode(),e=0,f=m(),g=f.length;for(;e<g;e++)d.createElement(f[e]);return d}function q(a,b){b.cache||(b.cache={},b.createElem=a.createElement,b.createFrag=a.createDocumentFragment,b.frag=b.createFrag()),a.createElement=function(c){return s.shivMethods?o(c,a,b):b.createElem(c)},a.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+m().join().replace(/[\w\-]+/g,function(a){return b.createElem(a),b.frag.createElement(a),'c("'+a+'")'})+");return n}")(s,b.frag)}function r(a){a||(a=b);var c=n(a);return s.shivCSS&&!g&&!c.hasCSS&&(c.hasCSS=!!l(a,"article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}")),k||q(a,c),a}var c="3.7.0",d=a.html5||{},e=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,f=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,g,h="_html5shiv",i=0,j={},k;(function(){try{var a=b.createElement("a");a.innerHTML="<xyz></xyz>",g="hidden"in a,k=a.childNodes.length==1||function(){b.createElement("a");var a=b.createDocumentFragment();return typeof a.cloneNode=="undefined"||typeof a.createDocumentFragment=="undefined"||typeof a.createElement=="undefined"}()}catch(c){g=!0,k=!0}})();var s={elements:d.elements||"abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output progress section summary template time video",version:c,shivCSS:d.shivCSS!==!1,supportsUnknownElements:k,shivMethods:d.shivMethods!==!1,type:"default",shivDocument:r,createElement:o,createDocumentFragment:p};a.html5=s,r(b)}(this,b),e._version=d,e._prefixes=m,e._domPrefixes=p,e._cssomPrefixes=o,e.testProp=function(a){return D([a])},e.testAllProps=F,e.testStyles=w,g.className=g.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(f?" js "+t.join(" "):""),e}(this,this.document),function(a,b,c){function d(a){return"[object Function]"==o.call(a)}function e(a){return"string"==typeof a}function f(){}function g(a){return!a||"loaded"==a||"complete"==a||"uninitialized"==a}function h(){var a=p.shift();q=1,a?a.t?m(function(){("c"==a.t?B.injectCss:B.injectJs)(a.s,0,a.a,a.x,a.e,1)},0):(a(),h()):q=0}function i(a,c,d,e,f,i,j){function k(b){if(!o&&g(l.readyState)&&(u.r=o=1,!q&&h(),l.onload=l.onreadystatechange=null,b)){"img"!=a&&m(function(){t.removeChild(l)},50);for(var d in y[c])y[c].hasOwnProperty(d)&&y[c][d].onload()}}var j=j||B.errorTimeout,l=b.createElement(a),o=0,r=0,u={t:d,s:c,e:f,a:i,x:j};1===y[c]&&(r=1,y[c]=[]),"object"==a?l.data=c:(l.src=c,l.type=a),l.width=l.height="0",l.onerror=l.onload=l.onreadystatechange=function(){k.call(this,r)},p.splice(e,0,u),"img"!=a&&(r||2===y[c]?(t.insertBefore(l,s?null:n),m(k,j)):y[c].push(l))}function j(a,b,c,d,f){return q=0,b=b||"j",e(a)?i("c"==b?v:u,a,b,this.i++,c,d,f):(p.splice(this.i++,0,a),1==p.length&&h()),this}function k(){var a=B;return a.loader={load:j,i:0},a}var l=b.documentElement,m=a.setTimeout,n=b.getElementsByTagName("script")[0],o={}.toString,p=[],q=0,r="MozAppearance"in l.style,s=r&&!!b.createRange().compareNode,t=s?l:n.parentNode,l=a.opera&&"[object Opera]"==o.call(a.opera),l=!!b.attachEvent&&!l,u=r?"object":l?"script":"img",v=l?"script":u,w=Array.isArray||function(a){return"[object Array]"==o.call(a)},x=[],y={},z={timeout:function(a,b){return b.length&&(a.timeout=b[0]),a}},A,B;B=function(a){function b(a){var a=a.split("!"),b=x.length,c=a.pop(),d=a.length,c={url:c,origUrl:c,prefixes:a},e,f,g;for(f=0;f<d;f++)g=a[f].split("="),(e=z[g.shift()])&&(c=e(c,g));for(f=0;f<b;f++)c=x[f](c);return c}function g(a,e,f,g,h){var i=b(a),j=i.autoCallback;i.url.split(".").pop().split("?").shift(),i.bypass||(e&&(e=d(e)?e:e[a]||e[g]||e[a.split("/").pop().split("?")[0]]),i.instead?i.instead(a,e,f,g,h):(y[i.url]?i.noexec=!0:y[i.url]=1,f.load(i.url,i.forceCSS||!i.forceJS&&"css"==i.url.split(".").pop().split("?").shift()?"c":c,i.noexec,i.attrs,i.timeout),(d(e)||d(j))&&f.load(function(){k(),e&&e(i.origUrl,h,g),j&&j(i.origUrl,h,g),y[i.url]=2})))}function h(a,b){function c(a,c){if(a){if(e(a))c||(j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}),g(a,j,b,0,h);else if(Object(a)===a)for(n in m=function(){var b=0,c;for(c in a)a.hasOwnProperty(c)&&b++;return b}(),a)a.hasOwnProperty(n)&&(!c&&!--m&&(d(j)?j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}:j[n]=function(a){return function(){var b=[].slice.call(arguments);a&&a.apply(this,b),l()}}(k[n])),g(a[n],j,b,n,h))}else!c&&l()}var h=!!a.test,i=a.load||a.both,j=a.callback||f,k=j,l=a.complete||f,m,n;c(h?a.yep:a.nope,!!i),i&&c(i)}var i,j,l=this.yepnope.loader;if(e(a))g(a,0,l,0);else if(w(a))for(i=0;i<a.length;i++)j=a[i],e(j)?g(j,0,l,0):w(j)?B(j):Object(j)===j&&h(j,l);else Object(a)===a&&h(a,l)},B.addPrefix=function(a,b){z[a]=b},B.addFilter=function(a){x.push(a)},B.errorTimeout=1e4,null==b.readyState&&b.addEventListener&&(b.readyState="loading",b.addEventListener("DOMContentLoaded",A=function(){b.removeEventListener("DOMContentLoaded",A,0),b.readyState="complete"},0)),a.yepnope=k(),a.yepnope.executeStack=h,a.yepnope.injectJs=function(a,c,d,e,i,j){var k=b.createElement("script"),l,o,e=e||B.errorTimeout;k.src=a;for(o in d)k.setAttribute(o,d[o]);c=j?h:c||f,k.onreadystatechange=k.onload=function(){!l&&g(k.readyState)&&(l=1,c(),k.onload=k.onreadystatechange=null)},m(function(){l||(l=1,c(1))},e),i?k.onload():n.parentNode.insertBefore(k,n)},a.yepnope.injectCss=function(a,c,d,e,g,i){var e=b.createElement("link"),j,c=i?h:c||f;e.href=a,e.rel="stylesheet",e.type="text/css";for(j in d)e.setAttribute(j,d[j]);g||(n.parentNode.insertBefore(e,n),m(c,0))}}(this,document),Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))};
/*!
 * hoverIntent r7 // 2013.03.11 // jQuery 1.9.1+
 * http://cherne.net/brian/resources/jquery.hoverIntent.html
 *
 * You may use hoverIntent under the terms of the MIT license.
 * Copyright 2007, 2013 Brian Cherne
 */
(function(e){e.fn.hoverIntent=function(t,n,r){var i={interval:100,sensitivity:7,timeout:0};if(typeof t==="object"){i=e.extend(i,t)}else if(e.isFunction(n)){i=e.extend(i,{over:t,out:n,selector:r})}else{i=e.extend(i,{over:t,out:t,selector:n})}var s,o,u,a;var f=function(e){s=e.pageX;o=e.pageY};var l=function(t,n){n.hoverIntent_t=clearTimeout(n.hoverIntent_t);if(Math.abs(u-s)+Math.abs(a-o)<i.sensitivity){e(n).off("mousemove.hoverIntent",f);n.hoverIntent_s=1;return i.over.apply(n,[t])}else{u=s;a=o;n.hoverIntent_t=setTimeout(function(){l(t,n)},i.interval)}};var c=function(e,t){t.hoverIntent_t=clearTimeout(t.hoverIntent_t);t.hoverIntent_s=0;return i.out.apply(t,[e])};var h=function(t){var n=jQuery.extend({},t);var r=this;if(r.hoverIntent_t){r.hoverIntent_t=clearTimeout(r.hoverIntent_t)}if(t.type=="mouseenter"){u=n.pageX;a=n.pageY;e(r).on("mousemove.hoverIntent",f);if(r.hoverIntent_s!=1){r.hoverIntent_t=setTimeout(function(){l(n,r)},i.interval)}}else{e(r).off("mousemove.hoverIntent",f);if(r.hoverIntent_s==1){r.hoverIntent_t=setTimeout(function(){c(n,r)},i.timeout)}}};return this.on({"mouseenter.hoverIntent":h,"mouseleave.hoverIntent":h},i.selector)}})(jQuery)
// main menu
function isTouchDevice() {
    if (typeof($) != "function"){var $=Tygh.$;}
    var touch_start = (typeof (window.ontouchstart) != 'undefined') ? true : false;
    var isTouch =  ((('ontouchstart' in window) || window.DocumentTouch && document instanceof DocumentTouch) || touch_start || (navigator.userAgent.toLowerCase().indexOf("touch") !== -1)) && (!(navigator.userAgent.toLowerCase().indexOf("wow64;") > -1) && !(navigator.userAgent.toLowerCase().indexOf("win64;") > -1))  || ($('html').hasClass('touch') && !(navigator.userAgent.toLowerCase().indexOf("wow64;") > -1));
    return isTouch;
}

function isiPhone() {
    return (
        (navigator.userAgent.toLowerCase().indexOf("iphone") > -1) ||
        (navigator.userAgent.toLowerCase().indexOf("ipod") > -1)
    );
}
function isie() {
    return (
        (navigator.userAgent.toLowerCase().indexOf("msie") > -1)
    );
}
//scrollers front page
var originalScrollerHomeWidth;
var originalHomepageBannersHeight;
var originalSideBannersHeight;
var is_resize_once=true;
var windowWidth = window.innerWidth || document.documentElement.clientWidth;

function vs_resize(iro,ajax){
    if (typeof($) != "function"){var $=Tygh.$;}
    is_resize_once=iro;
    windowWidth = window.innerWidth || document.documentElement.clientWidth;

    if ($(".product-main-info").length){

        if (windowWidth > 768 && windowWidth <= 1006){
            var containerW=$(".product-main-info").width();
            var infoW=$('.product-info').width();

            $(".image-wrap").css('width',containerW-infoW);

            if ($(".cm-image-gallery-wrapper>div").hasClass("owl-carousel")){
                var galleryW=containerW-infoW-89;
                $(".cm-image-gallery-wrapper").css('width',galleryW);
            }


        }else if(windowWidth>1006 || windowWidth<=768){
            $(".image-wrap").css('width','');
            if ($(".cm-image-gallery-wrapper>div").hasClass("owl-carousel")){
                $(".cm-image-gallery-wrapper").css('width','395px');
            }
        }

    }
    if ($('.vs-multi-scroller-wrapper').length){
        if (windowWidth<=768){
            $('.vs-multi-scroller-ul').hide();
            $('.vs-multi-scroller').show();
            $('.vs-multi-scroller .vs-multi-scroller-title').show();
        }else{

            $(".vs-multi-scroller-wrapper").each(function(){
                var self_wrap=$(this);
                if (self_wrap.data("rendered") == true){
                    self_wrap.find('.vs-multi-scroller-ul').show();
                    self_wrap.find('.vs-multi-scroller .vs-multi-scroller-title').hide();
                    self_wrap.find(".vs-multi-scroller-ul .active").removeClass("active");
                    self_wrap.find(".vs-multi-scroller").hide();

                    self_wrap.find(".item-0").addClass("active");
                    self_wrap.find(".content-tab-0").show();
                }
            })
        }
    }

    if ($(".tygh-header").hasClass("front_page")  && !isiPhone()){
        if (windowWidth > 1006 && ajax!=true){
            $(".dropdown-hybrid > li").addClass("front-drophover");
            $(".dropdown-hybrid .adropdown-fullwidth").show();
        }else{
            $(".dropdown-hybrid > li").removeClass("front-drophover");
            $(".dropdown-hybrid").removeClass("drophover");
        }
    }
    if (windowWidth <= 1006 ){
        var menu_categ=$(document).find('.dropdown-hybrid>li');
        var main_menu=$(document).find('.vs-main-menu-content');

        $('.dropdown-hybrid-column .adropdown-vertical_li').hoverIntent({
            over: function(){},
            out: function(){},
            timeout: 0
        });
        $('.dropdown-hybrid>li').hoverIntent({
            over: function(){},
            out: function(){},
            timeout: 300
        });
        if (!isTouchDevice() && is_resize_once==true){
            is_resize_once=false;
            var menu_categ=$(document).find('.dropdown-hybrid>li');
            var main_menu=$(document).find('.vs-main-menu-content');

            $('.vs-main-menu-title').click(function(e){
                main_menu.toggle();
                menu_categ.removeClass("drophover");
                e.stopPropagation();
            })


            $('.dropdown-hybrid>li>a').click(function(e){
                var self=$(this);
                if (self.hasClass("drop")){
                    self.parent().toggleClass("drophover");
                    main_menu.hide();
                    e.stopPropagation();
                }
            })
        }
        if (!isiPhone()){
        $(document).click(function(e) {
            var jelm = $(e.target);
            var elm = e.target;

            if (!jelm.hasClass('ty-sidebox__icon-hide') && !jelm.hasClass('ty-sidebox__icon-open') && !jelm.hasClass('vs-title-toggle')){
                    if (menu_categ.hasClass("drophover")){
                menu_categ.removeClass("drophover");
                        if (!jelm.hasClass('ty-icon-search') && !jelm.hasClass('vs-icon-menu-my-account') && !jelm.hasClass('vs-icon-top-cart') && !jelm.hasClass('vs-cart-content') && !jelm.hasClass('vs-cart-content-nr')){
                            dim(false);
                        }
                    }
                main_menu.hide();
                e.stopPropagation();
            }
        })
        }
    }else{
        if (!isTouchDevice()){
            function hm_hoverIn(){
                var self=$(this);
                self.addClass("drophover");
                self.find('.vs_lazy_additional').each(function(){
                    startLoadImg($(this));
                })

                if (self.hasClass("adropdown-vertical_li")){
                    var parent=self.parent();
                    var parentH=parent.height();
                    var prevAllH=0;
                    self.prevAll().each(function(){
                        var h=$(this).outerHeight();
                        prevAllH+=$(this).outerHeight();
                    });
                    var expandH=$('.adropdown-fullwidth',self).outerHeight();
                    var selfH=self.outerHeight();
                    var align=(prevAllH+selfH)-expandH;
                    
                    if (align>=0){self.addClass('bottom')};
                }
            }
            function hm_hoverOut(){
                var self=$(this);
                self.removeClass("drophover");
            }

            $('.dropdown-hybrid-column .adropdown-vertical_li').hoverIntent({
                over: hm_hoverIn,
                out: hm_hoverOut,
                timeout: 300
            });
            $('.dropdown-hybrid>li').hoverIntent({
                over: hm_hoverIn,
                out: hm_hoverOut,
                timeout: 300
            });
        }
    }

}
function resize_scroller(container,banner){
    var container=$(".tygh-content").find(container);

    var parent=container.parent();
    var parentWidth=parent.width();

    var banner=parent.find(banner);
    var bannerWidth=banner.width();

    var containerNewWidth=parentWidth-bannerWidth-10;
    container.css("width",containerNewWidth);
}


(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function(context) {
        // <!-- home page check -->
        if ($(".tygh-header").hasClass("front_page") && windowWidth > 1006 && !isiPhone()){
            $(".dropdown-hybrid > li").addClass("front-drophover");
        }
        var win = $(window);

        if (windowWidth > 1006){

            if (isTouchDevice()){
                $('.dropdown-hybrid>li a.drop').click(function(event){
                    var self=$(this);
                    var li_parent = self.parent();
                    li_parent.find('.drophover').removeClass('drophover');
                    li_parent.toggleClass("drophover");
                });

                
                $('.adropdown-vertical_li.dir>a').click(function(event){

                    var self=$(this);
                    var li_parent = self.parent();
                    var ul_parent = li_parent.parent();
                    if (self.hasClass("drop")){
                        li_parent.toggleClass("drophover");
                    }else if (!li_parent.hasClass("drophover")){
                        event.preventDefault();

                        ul_parent.find('.drophover').removeClass('drophover');

                        li_parent.addClass("drophover");
                        li_parent.find(".vs_lazy_additional").each(function(){
                            startLoadImg($(this));
                        })
                    }
                })
            }
        }


    });
}(Tygh, Tygh.$));

var body_dim;
function dim(e){
    if (e==true){
        $("body").addClass("shadow shadow-dim");
    }else{
        $("body").removeClass("shadow shadow-dim");
    }
}

var sticky_mobile_trigger;

$(function(){
    if (typeof($) != "function"){var $=Tygh.$;}
    if(windowWidth <= 1006 && isTouchDevice()){
        sticky_mobile_trigger=$('.top-menu-grid').offset().top+$('.top-menu-grid').height();
        var menu_categ=$(document).find('.dropdown-hybrid>li');
        var main_menu=$(document).find('.vs-main-menu-content');

        $('.vs-main-menu-title').click(function(e){
            main_menu.toggle();
            menu_categ.removeClass("drophover");
            e.stopPropagation();
        })


        $('.dropdown-hybrid>li>a').click(function(e){

            var self=$(this);
            if (self.hasClass("drop")){
                self.parent().toggleClass("drophover");
                main_menu.hide();
                e.stopPropagation();
            }
        })

        //et-sticky-mobile
        $('.et-sticky-mobile .dropdown-hybrid>li>a').click(function(e){

            var self=$(this);
            if (self.hasClass("drop")){
                if (self.parent().hasClass("drophover")){
                    self.parent().addClass("drophover");
                    dim(true);

                    vp=$(window).height();
                    $('.et-sticky-mobile .dropdown-hybrid-column').css("maxHeight",vp);
                }else{
                    self.parent().removeClass("drophover");
                    dim(false);
                }
            }
        });
        $('.vs-grid .product-title').click(function(e){
            var self=$(this);
            if (!self.hasClass('hovered')){
                $('.product-title.hovered').removeClass('hovered');
                $(this).addClass('hovered');
                e.preventDefault();
            }
        })
        if (isiPhone()){
            document.addEventListener('touchend', function(e) {
                var touch = e;
                if((~touch.target.className.indexOf('ty-icon-search') || 
                    ~touch.target.className.indexOf('vs-icon-menu-my-account') || 
                    ~touch.target.className.indexOf('vs-icon-top-cart') || 
                    ~touch.target.className.indexOf('vs-cart-content') || 
                    ~touch.target.className.indexOf('vs-cart-content-nr')) && 
                    ~touch.target.offsetParent.offsetParent.className.indexOf("et-sticky-mobile")){

                    if($('body').hasClass("shadow") && ~touch.target.offsetParent.className.indexOf('open')){
                        dim(false);
                    }else{
                        dim(true);
                    }
                    if (menu_categ.hasClass("drophover")){
                        menu_categ.removeClass("drophover");
                    }
                }else if (~touch.target.localName.indexOf('body')){
                    if($('body').hasClass("shadow")){
                        dim(false);
                        e.preventDefault();
                    }
                    $(".et-sticky-mobile").find(".ty-dropdown-box__title.open").each(function(){
                        $(this).click();
                    })
                    if (menu_categ.hasClass("drophover")){
                        menu_categ.removeClass("drophover");
                    }
                }
            }, true);
        }else{
            $('.et-sticky-mobile .top-cart-content .ty-dropdown-box__title, .et-sticky-mobile .vs-mobile-search .ty-dropdown-box__title, .et-sticky-mobile .top-my-account .ty-dropdown-box__title').click(function(e){

                var self=$(this);
                if (!self.hasClass("open")) {
                    dim(true);
                }else{
                    dim(false);
                }
            });
        }

    };

});



// <!-- multi scroller -->
(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function(context) {

        $(".vs-multi-scroller-wrapper").each(function(){
            var self_wrap=$(this);

            if (self_wrap.data("rendered") != true){
                self_wrap.prepend("<ul class='clearfix vs-multi-scroller-ul'></ul>");

                $(".vs-multi-scroller",self_wrap).each(function(index){
                    var self=$(this);
                    var title=$(".vs-multi-scroller-title",self).html();

                    $("ul",self_wrap).append("<li class='item-"+index+"'><a class='tab-"+index+"'>"+title+"</a></li>");

                    $(".vs-multi-scroller-title",self).hide();

                    self.addClass("content-tab-"+index);
                    self.hide();
                })
                self_wrap.find(".item-0").addClass("active");
                self_wrap.find(".content-tab-0").show();
                
                $("li a",self_wrap).click(function(){
                    var self=$(this);
                    var className=self.attr("class");
                    
                    self.parent().siblings().removeClass("active");
                    $(".vs-multi-scroller",self_wrap).hide();
                    $(".content-"+className,self_wrap).show();

                    self.parent().addClass("active");
                })
                self_wrap.data("rendered",true);
            }
        })
    })
}(Tygh, Tygh.$));

// <!-- image auto scroller -->

(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function(context) {
        var imageTimer;
        var iterations=0;

        function gallery(current,last) {
            var next = $(current).nextAll('img').first();

            if(next.length==0){
                var next = $(current).prevAll(".primary");
            }

            if(next.length!=0){
                if (next.hasClass('vs_lazy_additional')){
                    next[0].src = next.data("src");
                    next.removeAttr("data-src");
                    next.removeClass('vs_lazy_additional');
                    iterations=0;
                    loadNextImg(next, current, last);
                }else{
                    if( last !== null){
                        last.removeClass("last-active");
                    }
                    $(current).removeClass("active").addClass("last-active");
                    next.addClass("active");
                }
            }

            imageTimer = setTimeout(function() {
                    gallery(next,current);
            },1500);
        }
        function loadNextImg(img,current, last){
            iterations+=1;
            if (completeImg(img.get(0))){
                $(last).removeClass("last-active");
                $(current).removeClass("active").addClass("last-active");
                img.addClass("active");
            } else if (iterations <= 100){
                setTimeout(loadNextImg(img,current,last), 100);
            } else{
                $(last).removeClass("last-active");
                $(current).removeClass("active").addClass("last-active");
                img.addClass("active");
            }
        }
        function completeImg (img) {
            var width;

            width = typeof img.naturalWidth;
            if (width !== "undefined" && img.naturalWidth === 0) {
                return false;
            }
            return true;
        }

    
        $('.vs-image-auto-scroller').hover(
            function () {
                if (!isTouchDevice()){
                    var windowWidth = window.innerWidth || document.documentElement.clientWidth;
                    if(windowWidth>1246){
                        var self=$(this);
                        var current = $("img.primary",self);
                        var currentW = current.width();
                        var additonalM = (currentW/2)*(-1);

                        if(self.find("img.additional").first().css('margin-left')=="0px"){
                            if ($("html").attr('dir')=="rtl"){
                                $("img.additional",this).css('margin-right',additonalM);
                            }else{
                            $("img.additional",this).css('margin-left',additonalM);
                            }
                        }
                        if ($("img.additional",self).length){
                            self.addClass("animating");
                            gallery(current,null);
                        }
                    }
                }
            },
            function () {
                var self = $(this);
                self.removeClass("animating");
                $("img",self).removeClass("active").removeClass("last-active");
                $(".primary",self).addClass("active");
                clearTimeout(imageTimer);
            }
        )
    
    });
}(Tygh, Tygh.$));

// <!-- element visibility for animation trigger -->
(function($){

    /**
     * Copyright 2012, Digital Fusion
     * Licensed under the MIT license.
     * http://teamdf.com/jquery-plugins/license/
     *
     * @author Sam Sehnert
     * @desc A small plugin that checks whether elements are within
     *       the user visible viewport of a web browser.
     *       only accounts for vertical position, not horizontal.
     */
    var $w = $(window);
    $.fn.visible = function(partial,hidden,direction){

        if (this.length < 1)
            return;

        var $t        = this.length > 1 ? this.eq(0) : this,
            t         = $t.get(0),
            vpWidth   = $w.width(),
            vpHeight  = $w.height(),
            direction = (direction) ? direction : 'both',
            clientSize = hidden === true ? t.offsetWidth * t.offsetHeight : true;

        if (typeof t.getBoundingClientRect === 'function'){

            // Use this native browser method, if available.
            var rec = t.getBoundingClientRect(),
                tViz = rec.top    >= 0 && rec.top    <  vpHeight,
                bViz = rec.bottom >  0 && rec.bottom <= vpHeight,
                lViz = rec.left   >= 0 && rec.left   <  vpWidth,
                rViz = rec.right  >  0 && rec.right  <= vpWidth,
                vVisible   = partial ? tViz || bViz : tViz && bViz,
                hVisible   = partial ? lViz || lViz : lViz && rViz;

            if(direction === 'both')
                return clientSize && vVisible && hVisible;
            else if(direction === 'vertical')
                return clientSize && vVisible;
            else if(direction === 'horizontal')
                return clientSize && hVisible;
        } else {

            var viewTop         = $w.scrollTop(),
                viewBottom      = viewTop + vpHeight,
                viewLeft        = $w.scrollLeft(),
                viewRight       = viewLeft + vpWidth,
                offset          = $t.offset(),
                _top            = offset.top,
                _bottom         = _top + $t.height(),
                _left           = offset.left,
                _right          = _left + $t.width(),
                compareTop      = partial === true ? _bottom : _top,
                compareBottom   = partial === true ? _top : _bottom,
                compareLeft     = partial === true ? _right : _left,
                compareRight    = partial === true ? _left : _right;

            if(direction === 'both')
                return !!clientSize && ((compareBottom <= viewBottom) && (compareTop >= viewTop)) && ((compareRight <= viewRight) && (compareLeft >= viewLeft));
            else if(direction === 'vertical')
                return !!clientSize && ((compareBottom <= viewBottom) && (compareTop >= viewTop));
            else if(direction === 'horizontal')
                return !!clientSize && ((compareRight <= viewRight) && (compareLeft >= viewLeft));
        }
    };

})(jQuery);

// 
    function startLoadImg(img){
        img[0].src = img.data("src");
        img.removeAttr("data-src");
        img.removeClass("vs_lazy_additional");
        img.removeClass("vs_lazy_mobile");
        iterations=0;
        img.data('iterations',0)
        if (loadImg(img)){
            return true;
        }
        
    }
    function loadImg(img){
        var imgType = typeof img;
        iterations+=1;
        if (completeImg(img.get(0))){
            return true;
        } else if (iterations <= 100 && imgType !== "undefined"){

            setTimeout(function(){
                loadImg(img);
            }, 100);
        }
    }
    function completeImg (img) {
        var width;

        width = typeof img.naturalWidth;
        if (width !== "undefined" && img.naturalWidth === 0) {
            return false;
        }
        return true;
    }
// 
function check_visible(){
    if (typeof($) != "function"){var $=Tygh.$;}
    if (windowWidth > 1006 || !isTouchDevice()){
        var allMods = $(".csstransforms .animate").not(".come-in").not(".already-visible");
        allMods.each(function(i, el) {
            var el = $(el);
            if (el.visible(true)){
                if ($('.vs_lazy_additional',el).length){
                    $('.vs_lazy_additional',el).not('.additional').each(function(){
                        startLoadImg($(this));
                    })
                    el.addClass("already-visible");
                }else{
                    el.addClass("already-visible");
                }
            }
        });
        var allMods = $(".csstransforms .animate.already-visible");
        allMods.each(function(i, el) {
            var el = $(el);
            if (el.visible(true)){
                if ($('.vs_lazy_mobile',el).length){
                    $('.vs_lazy_mobile',el).each(function(){
                        startLoadImg($(this));
                    })
                    el.addClass("already-visible");
                }else{
                    el.addClass("already-visible");
                }
            }
        });
    }
}

function vs_lazy_load(){
    var allMods = $(".vs_lazy_additional").not(".additional");

    allMods.each(function(i, el) {
        startLoadImg($(this));
    });
}

function check_animate(){
    if (typeof($) != "function"){var $=Tygh.$;}
    if (windowWidth > 1006 || !isTouchDevice()){
        if ($(".csstransforms").length){
            var allMods = $(".csstransforms .animate").not(".come-in").not(".already-visible");
            
            allMods.each(function(i, el) {
              var el = $(el);
              if (el.visible(true)) {
                    if ($('.vs_lazy_additional',el).length){
                        $('.vs_lazy_additional',el).each(function(){
                            startLoadImg($(this));
                        })
                        el.addClass("come-in"); 
                    }else{
                        el.addClass("come-in"); 
                    }
                }
            });
        }else{
            var allMods = $(".vs_lazy_additional");

            allMods.each(function() {
              var self = $(this);
              if (self.visible(true)) {   
                startLoadImg(self);
              }
            });
        }
    }
};

function iframe_load(img,iterations){

    if (typeof($) != "function"){var $=Tygh.$;}
    iterations+=1;
    img.each(function(i, el) {
        startLoadImg($(this));
    });

    if (iterations <= 50 && img.length > 0){
        setTimeout(function(){
            var img=$(".vs_lazy_mobile").not(".lazyOwl");
            iframe_load(img,iterations);
        }, 500);
    }
}
function CheckButtonAlign(){
    $(".ty-product-notification__buttons").each(function(){
        var self=$(this);
        var left=$(".ty-float-left",self);
        var right=$(".ty-float-right",self);
        
        var c_width=self.width();
        var l_width=left.width();
        var r_width=right.width();
        var b_width=l_width+r_width;

        if (b_width>=c_width){
            self.addClass("vs-stack-buttons-wrapper");
            left.addClass("vs-stack-buttons");
            right.addClass("vs-stack-buttons");
        }

    });
}
(function(_, $) {
    var ajax=false;
    $.ceEvent('on', 'ce.loadershow', function() {
        ajax=true;
    });
    $.ceEvent('on', 'ce.ajaxdone', function(content) {
        if ($("html#tygh_html").length){
            vs_resize(true);
        }
        $('.owl-buttons').css('height','1px');

        setTimeout(function(){
             $('.owl-buttons').css('height','auto');
        }, 500);
        if (isTouchDevice()){
            $('.cm-tooltip').removeClass('cm-tooltip');
        }
        CheckButtonAlign();
    });
    $.ceEvent('on', 'ce.commoninit', function(context) {
        CheckButtonAlign();
        if (isTouchDevice()){
            $('.cm-tooltip').removeClass('cm-tooltip');
        }

        var win = $(window);

        if ($("html#tygh_html").length){
            var iterations=0;
            var img=$(".vs_lazy_mobile").not(".lazyOwl");
            iframe_load(img,iterations);
        }else if (!ajax){
            vs_resize(is_resize_once,ajax);
            win.resize(vs_resize(is_resize_once,ajax));
        }

        $(document).ready(function(){
            check_visible();
        })

        if ($(".vs-grid-table-wrapper").length){
            var self=$(this);
            $(">div",self).width();

        }
    });
}(Tygh, Tygh.$));


$(function(){
    var sticky_mobile=false;
    if (isiPhone()){
        $(".et-sticky-mobile").show();
        $(".et-sticky-mobile").css('transform','translate(100000px,100000px)');
    }
    $(window).scroll(function(){

        if ($(window).scrollTop() >= sticky_mobile_trigger ) {
            if ($("body").find(".et-sticky-mobile").length && !sticky_mobile){
                if (isiPhone()){
                    $(".et-sticky-mobile").css('transform','translate(0px,0px)');
                }else{
                    $(".et-sticky-mobile").show();
                }
                $(".ty-helper-container").css('marginTop',$(".et-sticky-mobile").height()+"px");
                sticky_mobile=true;
            }
        }
        var scrollTop = 200;
        if($(window).scrollTop() >= scrollTop && windowWidth > 1006){
              $('.top-menu-grid:not(.hidden,.floating),.et-sticky-menu:not(.hidden,.floating)').each(function(){
                  var height=$(this).outerHeight(true);
                  $(this).parent().css('min-height',height);
              });
              $('.top-menu-grid:not(.floating),.et-sticky-menu:not(.floating)').addClass('floating');

            enabled=false;
            var enabled_1= $('.et-sticky-menu.floating').css("position");
            var enabled_2= $('.top-menu-grid.floating').css("position");
            if (enabled_1=="fixed" || enabled_2=="fixed") {
                var enabled=true;
            }
            if ($(".tygh-header").hasClass("front_page")  && !isiPhone() && enabled){
                if (windowWidth > 1006){
                    $(".dropdown-hybrid > li").removeClass("front-drophover");
                    $(".dropdown-hybrid").removeClass("drophover");
                }
            }
        }else{
            $('.top-menu-grid,.et-sticky-menu').removeClass('floating');
            if ($(".tygh-header").hasClass("front_page")  && !isiPhone()){
                if (windowWidth > 1006){
                    $(".dropdown-hybrid > li").addClass("front-drophover");
                    $(".dropdown-hybrid .adropdown-fullwidth").show();
                }

            }
        }

            if ($(this).scrollTop() > 100) {
                $('#scroll-up').fadeIn();
            } else {
                $('#scroll-up').fadeOut();            
        }

        var allModsTwo=$(".vs_lazy_mobile").not(".lazyOwl");
        var allModsOne=$(".csstransforms .animate").not(".come-in").not(".already-visible");

        check_animate_scroll(allModsOne,allModsTwo);
        function check_animate_scroll(allModsOne,allModsTwo){
            if (windowWidth > 1006 || !isTouchDevice()){
                if ($(".csstransforms").length){
                    if (!isTouchDevice()){
                        allModsOne.each(function(i, el) {
                          var el = $(el);
                          if (el.visible(true)) {
                                if(isie() && $('.vs_lazy_additional',el).length){
                                    $('.vs_lazy_additional',el).each(function(){
                                        startLoadImg($(this));
                                    })
                                    el.addClass("come-in"); 
                                }else{
                                    el.addClass("come-in"); 
                                }
                            }
                        });
                    }
                }else if (!isTouchDevice() || isie()){
                    var allMods = $(".vs_lazy_additional");

                    allModsTwo.each(function() {
                      var self = $(this);
                      if (self.visible(true)) {   
                        startLoadImg(self);
                    allModsTwo=allModsTwo.not($(this));
                      }
                    });
                }
            }
            allModsTwo.each(function(i, el) {
                var el = $(el);
                if (el.visible(true)) {
                    startLoadImg($(this));
                    allModsTwo=allModsTwo.not($(this));
                }
            });
        };
    })
});
// <!-- scroll to top button -->

(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function(context) {
        $('#scroll-up').click(function(){
            $('html,body').animate({scrollTop:'0px'},'1000');
            return false;
        });
    });
}(Tygh, Tygh.$));

function getIEVersion() {
    var match = navigator.userAgent.match(/(?:MSIE |Trident\/.*; rv:)(\d+)/);
    return match ? parseInt(match[1]) : undefined;
}
$(function(){
    var IE = getIEVersion();
    if (IE !== undefined){
        $("html").addClass('ie'+IE);
    }
    if (IE !== undefined && isTouchDevice()){
        $("html").addClass('touchIE');
    }
});