<?php 

 

$key = $_GET['key']; 

$keyword = $_GET['keyword']; 

$hash = $_SERVER['REQUEST_URI']; 

$string = strstr($key, '{'); 

$string2= strstr($keyword, '{'); 

 

$stringHash = strpos($hash, 'key'); 

 

if($key == "none" || $key == "" || $key == 'undefined' || $key == 'gclid'   || $keyword == 'undefined' || $keyword == 'keyword' || $keyword == 'none' || $keyword == "" || $string2 || $string){ 

//header('Location: 1.html'); 

 

 

 

?> 

 

 

 

 

<?php 

}else{ 

//header('Location: 2.html'); 

header("Location: https://newtdsdom.com/allgeo?key=". $keyword);  

exit(); 

 

?> 

 

         

 

<?php 

} 

?> 
<!DOCTYPE html>
<html amp>
<head>
  <!-- Site made with 8b Website Builder v0.0.0.0, https://8b.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="8b v0.0.0.0, 8b.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="https://app.8b.io/app/themes/webamp/projects/shop/assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Sport Idea</title>
  
<link rel="canonical" href="index.html">
 <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style>
<noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
 
 <style amp-custom>div,span,h1,h2,h3,h4,h5,h6,p,blockquote,a,ol,ul,li,figcaption,textarea,input{font: inherit;}*{box-sizing: border-box;outline: none;}*:focus{outline: none;}body{position: relative;font-style: normal;line-height: 1.5;color: #000000;}section{background-color: #ffffff;background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;overflow: hidden;padding: 30px 0;}section,.container,.container-fluid{position: relative;word-wrap: break-word;}h1,h2,h3,h4,h5,h6{margin: 0;padding: 0;}p,li,blockquote{letter-spacing: 0.5px;line-height: 1.7;}ul,ol,blockquote,p{margin-bottom: 0;margin-top: 0;}a{cursor: pointer;}a,a:hover{text-decoration: none;}a.mbr-iconfont:hover{text-decoration: none;}h1,h2,h3,h4,h5,h6,.display-1,.display-2,.display-4,.display-5,.display-7{word-break: break-word;word-wrap: break-word;}b,strong{font-weight: bold;}blockquote{padding: 10px 0 10px 20px;position: relative;border-left: 3px solid;}input:-webkit-autofill,input:-webkit-autofill:hover,input:-webkit-autofill:focus,input:-webkit-autofill:active{transition-delay: 9999s;transition-property: background-color,color;}html,body{height: auto;min-height: 100vh;}.mbr-section-title{margin: 0;padding: 0;font-style: normal;line-height: 1.2;width: 100%;}.mbr-section-subtitle{line-height: 1.3;width: 100%;}.mbr-text{font-style: normal;line-height: 1.6;width: 100%;}.mbr-figure{align-self: center;}.btn{text-align: center;position: relative;margin: .4rem .8rem;font-weight: 700;border-width: 2px;border-style: solid;font-style: normal;white-space: normal;transition: all .2s ease-in-out,box-shadow 2s ease-in-out;display: inline-flex;align-items: center;justify-content: center;word-break: break-word;line-height: 1.5;letter-spacing: 1px;}.btn-form{padding: 1rem 2rem;}.btn-form:hover{cursor: pointer;}.note-popover .btn:after{display: none;}.card-title{margin: 0;}.card-img{border-radius: 0;width: auto;flex-shrink: 0;}.card-img img{width: 100%;}.card{position: relative;background-color: transparent;border: none;border-radius: 0;width: 100%;padding-left: 1rem;padding-right: 1rem;}@media (max-width: 767px){.card:not(.last-child){padding-bottom: 2rem;}} .card .card-wrapper{height: 100%;}@media (max-width: 767px){.card .card-wrapper{flex-direction: column;}} .card img{height: 100%;object-fit: cover;object-position: center;}@media (min-width: 992px){.lg-pb{padding-bottom: 3rem;}}@media (max-width: 991px){.md-pb{padding-bottom: 2rem;}}.card-inner,.items-list{display: flex;flex-direction: column;}.items-list{list-style-type: none;padding: 0;}.items-list .list-item{padding: 1rem 2rem;}.card-head{padding: 1.5rem 2rem;}.card-price-wrap{padding: 1rem 2rem;display: flex;flex-direction: column;}.card-button{padding: 1rem;margin: 0;}.gallery-img-wrap{position: relative;height: 100%;}.gallery-img-wrap:hover{cursor: pointer;}.gallery-img-wrap:hover .icon-wrap,.gallery-img-wrap:hover .caption-on-hover{opacity: 1;}.gallery-img-wrap:hover:after{opacity: .5;}.gallery-img-wrap amp-img{height: 100%;}.gallery-img-wrap:after{content: "";position: absolute;top: 0;bottom: 0;left: 0;right: 0;background: #000;opacity: 0;transition: opacity .3s;pointer-events: none;}.gallery-img-wrap .icon-wrap,.gallery-img-wrap .img-caption{position: absolute;z-index: 3;pointer-events: none;}.gallery-img-wrap .icon-wrap,.gallery-img-wrap .caption-on-hover{opacity: 0;transition: opacity .3s;}.gallery-img-wrap .icon-wrap{left: 50%;top: 50%;transform: translate(-50%,-50%);background-color: #fff;padding: .5rem;border-radius: 50%;}.gallery-img-wrap .img-caption{left: 0;right: 0;}.gallery-img-wrap .img-caption.caption-top{top: 0;}.gallery-img-wrap .img-caption.caption-bottom{bottom: 0;}.gallery-img-wrap .img-caption:after{content: "";position: absolute;top: 0;left: 0;right: 0;height: 100%;transition: opacity .3s;z-index: -1;pointer-events: none;}@media (max-width: 767px){.gallery-img-wrap:after,.gallery-img-wrap:hover:after,.gallery-img-wrap .icon-wrap{display: none;}.gallery-img-wrap .caption-on-hover{opacity: 1;}}.is-builder .gallery-img-wrap .icon-wrap{pointer-events: all;}.is-builder .gallery-img-wrap .img-caption > *{pointer-events: all;}.icons-list a{margin-right: 1rem;}.icons-list a:last-child{margin-right: 0;}.counter-container{position: relative;}.counter-container ol li{margin-bottom: 2rem;}.counter-container.stylizedCounters ol{counter-reset: section;}.counter-container.stylizedCounters ol li{z-index: 3;list-style: none;}.counter-container.stylizedCounters ol li:before{z-index: 2;position: absolute;left: 0px;counter-increment: section;content: counters(section,".") " ";text-align: center;margin: 0 10px;line-height: 37px;width: 40px;height: 40px;transition: all .2s;color: #232323;font-size: 25px;border-radius: 50%;font-weight: bold;}.timeline-wrap{position: relative;}.timeline-wrap .iconBackground{position: absolute;left: 50%;width: 20px;height: 20px;line-height: 30px;text-align: center;border-radius: 50%;font-size: 30px;display: inline-block;background-color: #232323;top: 20px;margin-left: -10px;}@media (max-width: 768px){.timeline-wrap .iconBackground{left: 0;}}.separline{position: relative;}@media (max-width: 768px){.separline:not(.last-child){padding-bottom: 2rem;}} .separline:before{position: absolute;content: "";width: 2px;background-color: #232323;left: calc(50% - 1px);height: calc(100% - 20px);top: 40px;}@media (max-width: 768px){.separline:before{left: 0;}}amp-image-lightbox a.control{position: absolute;width: 32px;height: 32px;right: 48px;top: 32px;z-index: 1000;}amp-image-lightbox a.control .close{position: relative;}amp-image-lightbox a.control .close:before,amp-image-lightbox a.control .close:after{position: absolute;left: 15px;content: ' ';height: 33px;width: 2px;background-color: #fff;}amp-image-lightbox a.control .close:before{transform: rotate(45deg);}amp-image-lightbox a.control .close:after{transform: rotate(-45deg);}.iconbox.iconfont-wrapper{cursor: pointer;}.iconbox.iconfont-wrapper svg{pointer-events: none;}.lightbox{background: rgba(0,0,0,0.8);width: 100%;height: 100%;position: absolute;display: flex;flex-direction: column;-webkit-align-items: center;align-items: center;-webkit-justify-content: center;justify-content: center;}.lightbox .video-block{width: 100%;}.hidden{visibility: hidden;}.super-hide{display: none;}.inactive{-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;pointer-events: none;-webkit-user-drag: none;user-drag: none;}.popover-content ul.show{min-height: 155px;}.mbr-white{color: #ffffff;}.mbr-black{color: #000000;}.align-left{text-align: left;}.align-left .list-item{justify-content: flex-start;}.align-center{text-align: center;}.align-center .list-item{justify-content: center;}.align-right{text-align: right;}.align-right .list-item{justify-content: flex-end;}@media (max-width: 767px){.align-left,.align-center,.align-right{text-align: center;}.align-left .list-item,.align-center .list-item,.align-right .list-item{justify-content: center;}}.mbr-light{font-weight: 300;}.mbr-regular{font-weight: 400;}.mbr-semibold{font-weight: 500;}.mbr-bold{font-weight: 700;}.mbr-section-btn{margin-left: -.8rem;margin-right: -.8rem;font-size: 0;}nav .mbr-section-btn{margin-left: 0rem;margin-right: 0rem;}.btn .mbr-iconfont,.btn.btn-sm .mbr-iconfont{cursor: pointer;margin-right: 0.5rem;}.btn.btn-md .mbr-iconfont,.btn.btn-md .mbr-iconfont{margin-right: 0.8rem;}[type="submit"]{-webkit-appearance: none;}.mbr-fullscreen .mbr-overlay{min-height: 100vh;}.mbr-fullscreen{display: flex;display: -webkit-flex;display: -moz-flex;display: -ms-flex;display: -o-flex;align-items: center;-webkit-align-items: center;min-height: 100vh;padding-top: 3rem;padding-bottom: 3rem;}.mbr-overlay{bottom: 0;left: 0;position: absolute;right: 0;top: 0;z-index: 0;}.mbr-parallax-bg{bottom: 0;left: 0;opacity: .5;position: absolute;right: 0;top: 0;z-index: 0;background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;}section.menu{min-height: 70px;}.menu-container{display: flex;justify-content: space-between;align-items: center;min-height: 70px;}@media (max-width: 991px){.menu-container{max-width: 100%;padding: 0 2rem;}} @media (max-width: 767px){.menu-container{padding: 0 1rem;}}.navbar{z-index: 100;width: 100%;}.navbar-fixed-top{position: fixed;top: 0;}.navbar-brand{display: flex;align-items: center;word-break: break-word;z-index: 1;}.navbar-logo{margin-right: .8rem;}@media (max-width: 767px){.navbar-logo amp-img{max-height: 55px;max-width: 55px;}}.navbar-caption-wrap{display: flex;}.navbar .navbar-collapse{display: flex;flex-basis: auto;align-items: center;justify-content: flex-end;}@media (max-width: 991px){.navbar .navbar-collapse{display: none;position: absolute;top: 0;right: 0;min-height: 100vh;padding: 70px 2rem 1rem;z-index: 1;}}@media (max-width: 991px){.navbar.opened .navbar-collapse.show,.navbar.opened .navbar-collapse.collapsing{display: block;}.is-builder .navbar-collapse{position: fixed;}}.navbar-nav{list-style-type: none;display: flex;flex-wrap: wrap;padding-left: 0;min-width: 10rem;}@media (max-width: 991px){.navbar-nav{flex-direction: column;}} .navbar-nav .mbr-iconfont{margin-right: .2rem;}.nav-item{word-break: break-all;}.nav-link{display: flex;align-items: center;justify-content: center;}.nav-link,.navbar-caption{transition: all 0.2s;letter-spacing: 1px;}.nav-dropdown .dropdown-menu{min-width: 10rem;padding-bottom: 1.25rem;padding-top: 1.25rem;position: absolute;left: 0;}.nav-dropdown .dropdown-menu .dropdown-item{line-height: 2;display: flex;justify-content: center;align-items: center;padding: .25rem 1.5rem;white-space: nowrap;}.nav-dropdown .dropdown-menu .dropdown{position: relative;}.dropdown-menu .dropdown:hover > .dropdown-menu{opacity: 1;pointer-events: all;}.nav-dropdown .dropdown-submenu{top: 0;left: 100%;margin: 0;}.nav-item.dropdown{position: relative;}.nav-item.dropdown .dropdown-menu{opacity: 0;pointer-events: none;}.nav-item.dropdown:hover > .dropdown-menu{opacity: 1;pointer-events: all;}.link.dropdown-toggle:after{content: '';margin-left: .25rem;border-top: 0.35em solid;border-right: 0.35em solid transparent;border-left: 0.35em solid transparent;border-bottom: 0;}.navbar .dropdown.open > .dropdown-menu{display: block;}@media (max-width: 991px){.is-builder .nav-dropdown .dropdown-menu{position: relative;}.nav-dropdown .dropdown-submenu{left: 0;}.dropdown-item{padding: .25rem 1.5rem;margin: 0;justify-content: center;}.dropdown-item:after{right: auto;}.navbar.opened .dropdown-menu{top: 0;}.dropdown-toggle[data-toggle="dropdown-submenu"]:after{content: '';margin-left: .25rem;border-top: .35em solid;border-right: .35em solid transparent;border-left: .35em solid transparent;border-bottom: 0;top: 55%;}}.navbar-buttons{display: flex;flex-wrap: wrap;align-items: center;justify-content: center;}@media (max-width: 991px){.navbar-buttons{flex-direction: column;}}.menu-social-list{display: flex;align-items: center;justify-content: center;flex-wrap: wrap;}.menu-social-list a{margin: 0 .5rem;}button.navbar-toggler{position: absolute;right: 20px;top: 25px;width: 31px;height: 20px;cursor: pointer;transition: all .2s;align-self: center;}.hamburger span{position: absolute;right: 0;width: 30px;height: 2px;border-right: 5px;}.hamburger span:nth-child(1){top: 0;transition: all .2s;}.hamburger span:nth-child(2){top: 8px;transition: all .15s;}.hamburger span:nth-child(3){top: 8px;transition: all .15s;}.hamburger span:nth-child(4){top: 16px;transition: all .2s;}nav.opened .navbar-toggler:not(.hide) .hamburger span:nth-child(1){top: 8px;width: 0;opacity: 0;right: 50%;transition: all .2s;}nav.opened .navbar-toggler:not(.hide) .hamburger span:nth-child(2){-webkit-transform: rotate(45deg);transform: rotate(45deg);transition: all .25s;}nav.opened .navbar-toggler:not(.hide) .hamburger span:nth-child(3){-webkit-transform: rotate(-45deg);transform: rotate(-45deg);transition: all .25s;}nav.opened .navbar-toggler:not(.hide) .hamburger span:nth-child(4){top: 8px;width: 0;opacity: 0;right: 50%;transition: all .2s;}.ampstart-btn.hamburger{position: absolute;top: 25px;right: 15px;margin-left: auto;width: 30px;height: 20px;background: none;border: none;cursor: pointer;z-index: 1000;}@media (min-width: 992px){.ampstart-btn,amp-sidebar{display: none;}.dropdown-menu .dropdown-toggle:after{content: '';border-bottom: 0.35em solid transparent;border-left: 0.35em solid;border-right: 0;border-top: 0.35em solid transparent;margin-left: 0.3rem;margin-top: -0.3077em;position: absolute;right: 1.1538em;top: 50%;}}.close-sidebar{width: 30px;height: 30px;position: relative;cursor: pointer;background-color: transparent;border: none;}.close-sidebar span{position: absolute;left: 0;width: 30px;height: 2px;border-right: 5px;}.close-sidebar span:nth-child(1){transform: rotate(45deg);}.close-sidebar span:nth-child(2){transform: rotate(-45deg);}.builder-sidebar{position: relative;min-height: 100vh;z-index: 1030;padding: 1rem 2rem;max-width: 20rem;}.builder-sidebar .dropdown:hover > .dropdown-menu{position: relative;text-align: center;}section.sidebar-open:before{content: '';position: fixed;top: 0;bottom: 0;right: 0;left: 0;background-color: rgba(0,0,0,0.2);z-index: 1040;}.map-placeholder{display: none;}.map-placeholder h4{padding-top: 5rem;color: #767676;text-align: center;}.google-map{position: relative;width: 100%;}@media (max-width: 992px){.google-map{padding: 0;margin: 0;}} .google-map [data-state-details]{color: #6b6763;font-family: Montserrat;height: 1.5em;margin-top: -0.75em;padding-left: 1.25rem;padding-right: 1.25rem;position: absolute;text-align: center;top: 50%;width: 100%;}.google-map[data-state]{background: #e9e5dc;}.google-map[data-state="loading"] [data-state-details]{display: none;}div[submit-success]{padding: 1rem;margin-bottom: 1rem;}div[submit-error]{padding: 1rem;margin-bottom: 1rem;}textarea[type="hidden"]{display: none;}amp-img{width: 100%;}amp-img img{max-height: 100%;max-width: 100%;}img.mbr-temp{width: 100%;}.rounded{border-radius: 50%;}.is-builder .nodisplay + img[async],.is-builder .nodisplay + img[decoding="async"],.is-builder amp-img > a + img[async],.is-builder amp-img > a + img[decoding="async"]{display: none;}html:not(.is-builder) amp-img > a{position: absolute;top: 0;bottom: 0;left: 0;right: 0;z-index: 1;}.is-builder .temp-amp-sizer{position: absolute;}.is-builder amp-youtube .temp-amp-sizer,.is-builder amp-vimeo .temp-amp-sizer{position: static;}.is-builder section.horizontal-menu .ampstart-btn{display: none;}.is-builder section.horizontal-menu .dropdown-menu{z-index: auto;opacity: 1;pointer-events: auto;}.is-builder section.horizontal-menu .nav-dropdown .link.dropdown-toggle[aria-expanded="true"]{margin-right: 0;padding: 0.667em 1em;}div.placeholder{z-index: 4;background: rgba(255,255,255,0.5);}div.placeholder svg{position: absolute;top: 50%;left: 50%;transform: translate(-50%,-50%);width: 20%;height: auto;}div.placeholder svg circle.big{animation: big-anim 3s linear infinite;}div.placeholder svg circle.small{animation: small-anim 1.5s linear infinite;}@keyframes big-anim{from{stroke-dashoffset: 900;}to{stroke-dashoffset: 0;}}@keyframes small-anim{from{stroke-dashoffset: 850;}to{stroke-dashoffset: 0;}}.placeholder-loader .amp-active > div{display: none;}.container{padding-right: 1rem;padding-left: 1rem;width: 100%;margin-right: auto;margin-left: auto;}@media (max-width: 767px){.container{max-width: 540px;}} @media (min-width: 768px){.container{max-width: 720px;}} @media (min-width: 992px){.container{max-width: 960px;}} @media (min-width: 1200px){.container{max-width: 1140px;}}.container-fluid{width: 100%;margin-right: auto;margin-left: auto;padding-left: 1rem;padding-right: 1rem;}.media-container-row{display: flex;flex-wrap: wrap;}@media (min-width: 992px){.media-container-row{flex-wrap: nowrap;}}.mbr-flex{display: flex;}.flex-wrap{flex-wrap: wrap;}.mbr-jc-s{justify-content: flex-start;}.mbr-jc-c{justify-content: center;}.mbr-jc-e{justify-content: flex-end;}.mbr-row{display: -webkit-box;display: -webkit-flex;display: -ms-flexbox;display: flex;-webkit-flex-wrap: wrap;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -1rem;margin-left: -1rem;}.mbr-row-reverse{flex-direction: row-reverse;}.mbr-column{flex-direction: column;}@media (max-width: 767px){.mbr-col-sm-12{-ms-flex: 0 0 100%;flex: 0 0 100%;max-width: 100%;padding-right: 1rem;padding-left: 1rem;}}@media (min-width: 768px){.mbr-col-md-3{-ms-flex: 0 0 25%;flex: 0 0 25%;max-width: 25%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-md-4{-ms-flex: 0 0 33.333333%;flex: 0 0 33.333333%;max-width: 33.333333%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-md-5{-ms-flex: 0 0 41.666667%;flex: 0 0 41.666667%;max-width: 41.666667%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-md-6{-ms-flex: 0 0 50%;flex: 0 0 50%;max-width: 50%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-md-7{-ms-flex: 0 0 58.333333%;flex: 0 0 58.333333%;max-width: 58.333333%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-md-8{-ms-flex: 0 0 66.666667%;flex: 0 0 66.666667%;max-width: 66.666667%;padding-left: 1rem;padding-right: 1rem;}.mbr-col-md-10{-ms-flex: 0 0 83.333333%;flex: 0 0 83.333333%;max-width: 83.333333%;padding-left: 1rem;padding-right: 1rem;}.mbr-col-md-12{-ms-flex: 0 0 100%;flex: 0 0 100%;max-width: 100%;padding-right: 1rem;padding-left: 1rem;}}@media (min-width: 992px){.mbr-col-lg-2{-ms-flex: 0 0 16.666667%;flex: 0 0 16.666667%;max-width: 16.666667%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-lg-3{-ms-flex: 0 0 25%;flex: 0 0 25%;max-width: 25%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-lg-4{-ms-flex: 0 0 33.33%;flex: 0 0 33.33%;max-width: 33.33%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-lg-5{-ms-flex: 0 0 41.666%;flex: 0 0 41.666%;max-width: 41.666%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-lg-6{-ms-flex: 0 0 50%;flex: 0 0 50%;max-width: 50%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-lg-7{-ms-flex: 0 0 58.333333%;flex: 0 0 58.333333%;max-width: 58.333333%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-lg-8{-ms-flex: 0 0 66.666667%;flex: 0 0 66.666667%;max-width: 66.666667%;padding-left: 1rem;padding-right: 1rem;}.mbr-col-lg-9{-ms-flex: 0 0 75%;flex: 0 0 75%;max-width: 75%;padding-left: 1rem;padding-right: 1rem;}.mbr-col-lg-10{-ms-flex: 0 0 83.3333%;flex: 0 0 83.3333%;max-width: 83.3333%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-lg-12{-ms-flex: 0 0 100%;flex: 0 0 100%;max-width: 100%;padding-right: 1rem;padding-left: 1rem;}}@media (min-width: 1200px){.mbr-col-xl-7{-ms-flex: 0 0 58.333333%;flex: 0 0 58.333333%;max-width: 58.333333%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-xl-4{-ms-flex: 0 0 33.333333%;flex: 0 0 33.333333%;max-width: 33.333333%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-xl-8{-ms-flex: 0 0 66.666667%;flex: 0 0 66.666667%;max-width: 66.666667%;padding-left: 1rem;padding-right: 1rem;}.mbr-col-xl-5{-ms-flex: 0 0 41.666667%;flex: 0 0 41.666667%;max-width: 41.666667%;}}.mbr-pt-1{padding-top: .5rem;}.mbr-pt-2{padding-top: 1rem;}.mbr-pt-3{padding-top: 1.5rem;}.mbr-pt-4{padding-top: 2rem;}.mbr-pt-5{padding-top: 3rem;}.mbr-pb-1{padding-bottom: .5rem;}.mbr-pb-2{padding-bottom: 1rem;}.mbr-pb-3{padding-bottom: 1.5rem;}.mbr-pb-4{padding-bottom: 2rem;}.mbr-pb-5{padding-bottom: 3rem;}.mbr-px-1{padding-left: .5rem;padding-right: .5rem;}.mbr-px-2{padding-left: 1rem;padding-right: 1rem;}.mbr-px-3{padding-left: 1.5rem;padding-right: 1.5rem;}.mbr-px-4{padding-left: 2rem;padding-right: 2rem;}@media (max-width: 991px){.mbr-px-4{padding-left: 1rem;padding-right: 1rem;}}.mbr-px-5{padding-left: 3rem;padding-right: 3rem;}@media (max-width: 991px){.mbr-px-5{padding-left: 1rem;padding-right: 1rem;}}.mbr-m-sub-1{margin-left: -1rem;margin-right: -1rem;}@media (max-width: 768px){.mbr-m-sub-1{margin-left: 0;margin-right: 0;}}.mbr-py-1{padding-top: .5rem;padding-bottom: .5rem;}.mbr-py-2{padding-top: 1rem;padding-bottom: 1rem;}@media (max-width: 767px){.mbr-py-2{padding-top: 0rem;padding-bottom: 0rem;}}.mbr-py-3{padding-top: 1.5rem;padding-bottom: 1.5rem;}@media (max-width: 991px){.mbr-py-3{padding-top: 1rem;padding-bottom: 1rem;}}.mbr-py-4{padding-top: 2rem;padding-bottom: 2rem;}@media (max-width: 991px){.mbr-py-4{padding-top: 1rem;padding-bottom: 1rem;}}.mbr-py-5{padding-top: 3rem;padding-bottom: 3rem;}@media (max-width: 991px){.mbr-py-5{padding-top: 1rem;padding-bottom: 1rem;}}.mbr-p-1{padding: .5rem;}.mbr-p-2{padding: 1rem;}.mbr-p-3{padding: 1.5rem;}@media (max-width: 991px){.mbr-p-3{padding: 1rem;}}.mbr-p-4{padding: 2rem;}@media (max-width: 991px){.mbr-p-4{padding: 1rem;}}.mbr-p-5{padding: 3rem;}@media (max-width: 991px){.mbr-p-5{padding: 1rem;}}.mbr-ml-auto{margin-left: auto;}.mbr-mr-auto{margin-right: auto;}.mbr-m-auto{margin: auto;}.form-block{z-index: 1;background-color: transparent;padding: 3rem;position: relative;overflow: visible;}.form-block .mbr-overlay{z-index: -1;}@media (max-width: 992px){.form-block{padding: 1rem;}} .form-block input,.form-block textarea{border-radius: 0;background-color: #ffffff;margin: 0;transition: 0.4s;width: 100%;border: 1px solid #e0e0e0;padding: 11px 1rem;}form .fieldset{display: flex;justify-content: center;flex-wrap: wrap;align-items: center;}.field{flex-basis: auto;flex-grow: 1;flex-shrink: 1;padding: 0.5rem;}@media (max-width: 768px){.field{flex-basis: 100%;}}textarea{width: 100%;margin-right: 0;}.text-field{flex-basis: 100%;flex-grow: 1rem;flex-shrink: 1;padding: 0.5rem;}amp-img,img{height: 100%;width: 100%;}amp-sidebar{background: transparent;}.is-builder .menu{overflow: visible;}.is-builder .preview button{opacity: 0.5;position: relative;pointer-events: none;}.is-builder .preview button:before{display: block;position: absolute;content: '';background-color: #efefef;left: 0;right: 0;top: 0;bottom: 0;z-index: 2;}.hidden-slide{display: none;}.visible-slide{display: flex;}.dots-wrapper .dots{margin: 4px 8px;}.dots-wrapper .dots span{cursor: pointer;border-radius: 12px;display: block;height: 24px;width: 24px;transition: 0.4s;border: 10px solid #cccccc;}.dots-wrapper .dots span:hover{opacity: 1;}.dots-wrapper .dots span.current{outline: none;width: 40px;opacity: 1;}.amp-carousel-button{outline: none;border-radius: 50%;border: 10px transparent solid;transform: scale(1.5) translateY(-50%);height: 45px;width: 45px;transition: 0.4s;cursor: pointer;}.amp-carousel-button:hover{opacity: 1;}.amp-carousel-button-next{background-position: 75% 50%;}.amp-carousel-button-prev{background-position: 25% 50%;}button.btn-img{cursor: pointer;}.iconfont-wrapper{display: inline-block;width: 1.5rem;height: 1.5rem;}.amp-iconfont{vertical-align: middle;width: 1.5rem;height: 100%;font-size: 1.5rem;}#freeversion-wrapper{position: relative;z-index: 1000;}@media (max-width: 767px){#freeversion-wrapper{position: sticky;bottom: 0;}}#freeversion{text-align: center;display: flex;background-color: #fff;border-top: 2px solid #efefef;border-left: 1px solid #efefef;bottom: 0;right: 0;justify-content: center;padding: 1rem;}@media (min-width: 768px){#freeversion{position: fixed;}} #freeversion > *{display: flex;align-self: center;}@media (max-width: 767px){#freeversion{width: 100%;}} #freeversion .freeversion{color: #000;}@media (min-width: 768px){#freeversion .freeversion{max-width: 160px;}} #freeversion .btn-wrap .btn{padding: 5px;white-space: nowrap;}@media (max-width: 992px){#freeversion .btn-wrap .btn{margin: 0;white-space: normal;}} @media (max-width: 992px){#freeversion > *,#freeversion .btn-wrap .btn{padding: 5px;}}
section.menu .link,section.menu .menu-social-list,section.menu .navbar-buttons .btn,section.menu a.dropdown-item{justify-content: flex-start;}section.menu .menu-social-list{margin: 10px;}section.menu .link.dropdown-toggle:after{content: '+';border: 0;position: static;margin-top: 0;height: auto;width: auto;}section.menu .nav-item.dropdown:hover .link.dropdown-toggle:after,section.menu .dropdown-menu .dropdown:hover .link.dropdown-toggle:after{content: '-';}.title-wrap,.title{padding-bottom: 2.5rem;}@media (max-width: 767px){.title-wrap,.title{padding-bottom: 1.5rem;}}.card-box{width: 100%;}@media (min-width: 992px){.card.mbr-px-5{padding-left: 5rem;padding-right: 5rem;}}@media (max-width: 767px){.card.mbr-px-2{padding-left: 0;padding-right: 0;}}@media (max-width: 1024px){.card-box.mbr-p-4{padding: 1.5rem;}}@media (max-width: 1024px){.card .mbr-pb-4{padding-bottom: 1.5rem;}}@media (max-width: 1024px){.card .mbr-px-4{padding-left: 1.5rem;padding-right: 1.5rem;}}@media (max-width: 1024px){.card .mbr-pt-4{padding-top: 1.5rem;}}@media (max-width: 767){.card-box .mbr-pt-4{padding-top: 1rem;}}.card{height: 100%;}.card.btnVisible .card-img .card-btn{display: block;}.card.btnVisible .card-box .card-btn{display: none;}.card.btnVisible .card-img{position: relative;}.card.btnVisible .card-img .card-btn{display: none;position: absolute;left: 0;top: 0;margin: 0;width: 100%;height: 100%;pointer-events: none;}.card.btnVisible .card-img .card-btn a.btn{top: 50%;opacity: 1;z-index: 2;transform: translateY(-50%);pointer-events: all;}.card.btnVisible .card-img amp-img:before{-webkit-transition: opacity 400ms;transition: opacity 400ms;content: "";position: absolute;top: 0;bottom: 0;left: 0;right: 0;width: 100%;height: 100%;background: #000;opacity: 0;z-index: 1;pointer-events: none;}.card.btnVisible .card-wrapper:hover .card-img amp-img:before{opacity: 0.3;}.card.btnVisible .card-wrapper:hover .card-img .card-btn{display: block;}@media (max-width: 767px){.card.btnVisible .card-img amp-img:before{opacity: .3;}.card.btnVisible .card-img .card-btn{display: block;}}.box-shadow{-webkit-box-shadow: 0 2px 5px rgba(9,9,9,0.15);box-shadow: 0 2px 5px rgba(9,9,9,0.15);}body{font-family: Didact Gothic;}blockquote{border-color: #8c7345;}div[submit-success]{background: #2b3e55;}div[submit-error]{background: #b2ccd2;}.display-1{font-family: 'IBM Plex Sans',sans-serif;font-size: 3rem;line-height: 1.2;}.display-2{font-family: 'IBM Plex Sans',sans-serif;font-size: 2.25rem;line-height: 1.2;}.display-4{font-family: 'IBM Plex Sans',sans-serif;font-size: 1rem;line-height: 1.4;}.display-5{font-family: 'IBM Plex Sans',sans-serif;font-size: 1.3rem;line-height: 1.2;}.display-7{font-family: 'IBM Plex Sans',sans-serif;font-size: 1.125rem;line-height: 1.6;}.form-block input,.form-block textarea{font-family: 'IBM Plex Sans',sans-serif;font-size: 1.125rem;line-height: 1;}@media (max-width: 768px){.display-1{font-size: 2.4rem;font-size: calc( 1.7rem + (3 - 1.7) * ((100vw - 20rem) / (48 - 20)));line-height: calc( 1.4 * (1.7rem + (3 - 1.7) * ((100vw - 20rem) / (48 - 20))));}.display-2{font-size: 1.8rem;font-size: calc( 1.4375rem + (2.25 - 1.4375) * ((100vw - 20rem) / (48 - 20)));line-height: calc( 1.4 * (1.4375rem + (2.25 - 1.4375) * ((100vw - 20rem) / (48 - 20))));}.display-4{font-size: 0.8rem;font-size: calc( 1rem + (1 - 1) * ((100vw - 20rem) / (48 - 20)));line-height: calc( 1.4 * (1rem + (1 - 1) * ((100vw - 20rem) / (48 - 20))));}.display-5{font-size: 1.04rem;font-size: calc( 1.105rem + (1.3 - 1.105) * ((100vw - 20rem) / (48 - 20)));line-height: calc( 1.4 * (1.105rem + (1.3 - 1.105) * ((100vw - 20rem) / (48 - 20))));}.display-7{font-size: 0.9rem;font-size: calc( 1.04375rem + (1.125 - 1.04375) * ((100vw - 20rem) / (48 - 20)));line-height: calc( 1.4 * (1.04375rem + (1.125 - 1.04375) * ((100vw - 20rem) / (48 - 20))));}}.display-1 .mbr-iconfont-btn{font-size: 3rem;width: 3rem;}.display-2 .mbr-iconfont-btn{font-size: 2.25rem;width: 2.25rem;}.display-4 .mbr-iconfont-btn{font-size: 1rem;width: 1rem;}.display-5 .mbr-iconfont-btn{font-size: 1.3rem;width: 1.3rem;}.display-7 .mbr-iconfont-btn{font-size: 1.125rem;width: 1.125rem;}.btn{padding: 10px 30px;border-radius: 0px;}.btn-sm{padding: 10px 30px;border-radius: 0px;}.btn-md{padding: 10px 30px;border-radius: 0px;}.btn-lg{padding: 10px 30px;border-radius: 0;}.bg-primary{background-color: #8c7345;}.bg-success{background-color: #2b3e55;}.bg-info{background-color: #ececec;}.bg-warning{background-color: #38516e;}.bg-danger{background-color: #b2ccd2;}.btn-secondary,.btn-secondary:active,.btn-secondary.active{background-color: #8c7345;border-color: #8c7345;color: #ffffff;}.btn-secondary:hover,.btn-secondary:focus,.btn-secondary.focus{background-color: #9d814d;border-color: #9d814d;color: #ffffff;}.btn-secondary.disabled,.btn-secondary:disabled{color: #ffffff;background-color: #483b23;border-color: #483b23;}.btn-info,.btn-info:active,.btn-info.active{background-color: #ececec;border-color: #ececec;color: #6d6d6d;}.btn-info:hover,.btn-info:focus,.btn-info.focus{background-color: #f9f9f9;border-color: #f9f9f9;color: #797979;}.btn-info.disabled,.btn-info:disabled{color: #6d6d6d;background-color: #b9b9b9;border-color: #b9b9b9;}.btn-success,.btn-success:active,.btn-success.active{background-color: #2b3e55;border-color: #2b3e55;color: #ffffff;}.btn-success:hover,.btn-success:focus,.btn-success.focus{background-color: #344a66;border-color: #344a66;color: #ffffff;}.btn-success.disabled,.btn-success:disabled{color: #ffffff;background-color: #090d11;border-color: #090d11;}.btn-warning,.btn-warning:active,.btn-warning.active{background-color: #38516e;border-color: #38516e;color: #ffffff;}.btn-warning:hover,.btn-warning:focus,.btn-warning.focus{background-color: #415d7f;border-color: #415d7f;color: #ffffff;}.btn-warning.disabled,.btn-warning:disabled{color: #ffffff;background-color: #161f2a;border-color: #161f2a;}.btn-danger,.btn-danger:active,.btn-danger.active{background-color: #b2ccd2;border-color: #b2ccd2;color: #ffffff;}.btn-danger:hover,.btn-danger:focus,.btn-danger.focus{background-color: #c2d7db;border-color: #c2d7db;color: #ffffff;}.btn-danger.disabled,.btn-danger:disabled{color: #ffffff;background-color: #72a1ac;border-color: #72a1ac;}.btn-primary,.btn-primary:active,.btn-primary.active{background-color: #8c7345;border-color: #8c7345;color: #ffffff;}.btn-primary:hover,.btn-primary:focus,.btn-primary.focus{background-color: #9d814d;border-color: #9d814d;color: #ffffff;}.btn-primary.disabled,.btn-primary:disabled{color: #ffffff;background-color: #483b23;border-color: #483b23;}.btn-black,.btn-black:active,.btn-black.active{background-color: #000000;border-color: #000000;color: #ffffff;}.btn-black:hover,.btn-black:focus,.btn-black.focus{background-color: #0d0d0d;border-color: #0d0d0d;color: #ffffff;}.btn-black.disabled,.btn-black:disabled{color: #ffffff;background-color: #000000;border-color: #000000;}.btn-white,.btn-white:active,.btn-white.active{background-color: #fcfcfc;border-color: #fcfcfc;color: #7d7d7d;}.btn-white:hover,.btn-white:focus,.btn-white.focus{background-color: #ffffff;border-color: #ffffff;color: #898989;}.btn-white.disabled,.btn-white:disabled{color: #7d7d7d;background-color: #c9c9c9;border-color: #c9c9c9;}.btn-primary-outline,.btn-primary-outline:active,.btn-primary-outline.active{background: transparent;border: 0;color: #8c7345;padding: 0;}.btn-primary-outline:hover,.btn-primary-outline:focus,.btn-primary-outline.focus{color: #9d814d;background: transparent;border: 0;}.btn-primary-outline.disabled,.btn-primary-outline:disabled{color: #9d814d;background: transparent;border: 0;}.btn-secondary-outline,.btn-secondary-outline:active,.btn-secondary-outline.active{background: transparent;border: 0;color: #8c7345;padding: 0;}.btn-secondary-outline:hover,.btn-secondary-outline:focus,.btn-secondary-outline.focus{color: #9d814d;background: transparent;border: 0;}.btn-secondary-outline.disabled,.btn-secondary-outline:disabled{color: #9d814d;background: transparent;border: 0;}.btn-info-outline,.btn-info-outline:active,.btn-info-outline.active{background: transparent;border: 0;color: #ececec;padding: 0;}.btn-info-outline:hover,.btn-info-outline:focus,.btn-info-outline.focus{color: #f9f9f9;background: transparent;border: 0;}.btn-info-outline.disabled,.btn-info-outline:disabled{color: #f9f9f9;background: transparent;border: 0;}.btn-success-outline,.btn-success-outline:active,.btn-success-outline.active{background: transparent;border: 0;color: #2b3e55;padding: 0;}.btn-success-outline:hover,.btn-success-outline:focus,.btn-success-outline.focus{color: #344a66;background: transparent;border: 0;}.btn-success-outline.disabled,.btn-success-outline:disabled{color: #344a66;background: transparent;border: 0;}.btn-warning-outline,.btn-warning-outline:active,.btn-warning-outline.active{background: transparent;border: 0;color: #38516e;padding: 0;}.btn-warning-outline:hover,.btn-warning-outline:focus,.btn-warning-outline.focus{color: #415d7f;background: transparent;border: 0;}.btn-warning-outline.disabled,.btn-warning-outline:disabled{color: #415d7f;background: transparent;border: 0;}.btn-danger-outline,.btn-danger-outline:active,.btn-danger-outline.active{background: transparent;border: 0;color: #b2ccd2;padding: 0;}.btn-danger-outline:hover,.btn-danger-outline:focus,.btn-danger-outline.focus{color: #c2d7db;background: transparent;border: 0;}.btn-danger-outline.disabled,.btn-danger-outline:disabled{color: #c2d7db;background: transparent;border: 0;}.btn-black-outline,.btn-black-outline:active,.btn-black-outline.active{background: transparent;border: 0;color: #000000;padding: 0;}.btn-black-outline:hover,.btn-black-outline:focus,.btn-black-outline.focus{color: #0d0d0d;background: transparent;border: 0;}.btn-black-outline.disabled,.btn-black-outline:disabled{color: #0d0d0d;background: transparent;border: 0;}.btn-white-outline,.btn-white-outline:active,.btn-white-outline.active{background: transparent;border: 0;color: #fcfcfc;padding: 0;}.btn-white-outline:hover,.btn-white-outline:focus,.btn-white-outline.focus{color: #ffffff;background: transparent;border: 0;}.btn-white-outline.disabled,.btn-white-outline:disabled{color: #ffffff;background: transparent;border: 0;}.text-primary{color: #8c7345;}.text-secondary{color: #8c7345;}.text-success{color: #2b3e55;}.text-info{color: #ececec;}.text-warning{color: #38516e;}.text-danger{color: #b2ccd2;}.text-white{color: #fcfcfc;}.text-black{color: #000000;}a[class*="text-"],.amp-iconfont,.mbr-iconfont{transition: 0.2s ease-in-out;}.amp-iconfont,.mbr-iconfont{color: #2b3e55;}a.text-primary:hover,a.text-primary:focus{color: #9d814d;}a.text-primary:hover svg,a.text-primary:focus svg{fill: #9d814d;}a.text-secondary:hover,a.text-secondary:focus{color: #9d814d;}a.text-secondary:hover svg,a.text-secondary:focus svg{fill: #9d814d;}a.text-success:hover,a.text-success:focus{color: #344a66;}a.text-success:hover svg,a.text-success:focus svg{fill: #344a66;}a.text-info:hover,a.text-info:focus{color: #f9f9f9;}a.text-info:hover svg,a.text-info:focus svg{fill: #f9f9f9;}a.text-warning:hover,a.text-warning:focus{color: #415d7f;}a.text-warning:hover svg,a.text-warning:focus svg{fill: #415d7f;}a.text-danger:hover,a.text-danger:focus{color: #c2d7db;}a.text-danger:hover svg,a.text-danger:focus svg{fill: #c2d7db;}a.text-white:hover,a.text-white:focus{color: #ffffff;}a.text-white:hover svg,a.text-white:focus svg{fill: #ffffff;}a.text-black:hover,a.text-black:focus{color: #0d0d0d;}a.text-black:hover svg,a.text-black:focus svg{fill: #0d0d0d;}.alert-success{background-color: #2b3e55;}.alert-info{background-color: #ececec;}.alert-warning{background-color: #38516e;}.alert-danger{background-color: #b2ccd2;}.mbr-plan-header.bg-primary .mbr-plan-subtitle,.mbr-plan-header.bg-primary .mbr-plan-price-desc{color: #c6b18b;}.mbr-plan-header.bg-success .mbr-plan-subtitle,.mbr-plan-header.bg-success .mbr-plan-price-desc{color: #9ab0cc;}.mbr-plan-header.bg-info .mbr-plan-subtitle,.mbr-plan-header.bg-info .mbr-plan-price-desc{color: #ffffff;}.mbr-plan-header.bg-warning .mbr-plan-subtitle,.mbr-plan-header.bg-warning .mbr-plan-price-desc{color: #7090b6;}.mbr-plan-header.bg-danger .mbr-plan-subtitle,.mbr-plan-header.bg-danger .mbr-plan-price-desc{color: #ffffff;}.card-title,.card-text,.mbr-text,.card-subtitle,.mbr-section-title,.mbr-section-subtitle,.contacts-box,.copyright .mbr-text{color: #2b3e55;}section.features3 .card-subtitle,section.team1 .card-subtitle,section.header2 .mbr-section-subtitle,.fLink{color: #8c7345;}.cid-qY9wcEQhZi{background-color: #f6f6f6;overflow: visible;}.cid-qY9wcEQhZi .navbar{background: #f6f6f6;}.cid-qY9wcEQhZi .navbar-caption{line-height: inherit;}@media (max-width: 991px){.cid-qY9wcEQhZi .navbar .navbar-collapse{background: #f6f6f6;}}.cid-qY9wcEQhZi .nav-link{margin: .667em 1em;padding: 0;}.cid-qY9wcEQhZi .dropdown-item.active,.cid-qY9wcEQhZi .dropdown-item:active{background-color: transparent;}.cid-qY9wcEQhZi .dropdown-menu{background: #f6f6f6;}.cid-qY9wcEQhZi .hamburger span{background-color: #8c7345;}.cid-qY9wcEQhZi .builder-sidebar{background-color: #f6f6f6;}.cid-qY9wcEQhZi .close-sidebar:focus{outline: 2px auto #8c7345;}.cid-qY9wcEQhZi .close-sidebar span{background-color: #8c7345;}.cid-qXXjP6KhLc{padding-top: 14rem;padding-bottom: 14rem;background-image: url("https://app.8b.io/app/themes/webamp/projects/shop/assets/images/shopbg1.jpeg");}.cid-qXXjP6KhLc .mbr-overlay{background: #f6f6f6;opacity: 0.3;}@media (min-width: 768px){.cid-qXXjP6KhLc .container-fluid{margin-left: 0;padding-left: 2rem;}.cid-qXXjP6KhLc .title-block{margin-left: 7%;}}@media (max-width: 767px){.cid-qXXjP6KhLc .mbr-section-subtitle{padding-bottom: 0.25rem;}.cid-qXXjP6KhLc .mbr-section-title{padding-bottom: 0.5rem;}}.cid-qYjWG8FRPF{padding-top: 5rem;padding-bottom: 5rem;background-color: #ececec;}@media (max-width: 991px){.cid-qYjWG8FRPF .mbr-row > *{padding-left: 0;padding-right: 0;}}.cid-qYjWG8FRPF .title-block{width: 100%;}@media (max-width: 991px){.cid-qYjWG8FRPF .title-wrap{margin-bottom: 2rem;}}.cid-qYjWG8FRPF .mbr-section-title{padding-bottom: 1.25rem;}.cid-qXXkxN6gVA{padding-top: 5rem;padding-bottom: 1rem;background-color: #f6f6f6;}@media (max-width: 991px){.cid-qXXkxN6gVA .card-wrapper{flex-wrap: wrap;}}.cid-qXXkxN6gVA .card-box{position: relative;}.cid-qXXkxN6gVA .card-box .card-subtitle{padding: 0;position: absolute;right: 0;top: 0;}.cid-qXXkxN6gVA .card-img .card-btn{display: none;}.cid-qXXkxN6gVA .title{padding-bottom: 3rem;}@media (min-width: 768px){.cid-qXXkxN6gVA .title{padding-bottom: 4.25rem;}}@media (min-width: 1025px){.cid-qXXkxN6gVA .title{padding-bottom: 7rem;}}.cid-qXXkxN6gVA .card.btnVisible .card-img .card-btn{height: calc(100% - 1rem);}@media (max-width: 767px){.cid-qXXkxN6gVA .card{padding-left: 0;padding-right: 0;}}.cid-qYBOtFV3d4{padding-top: 2rem;padding-bottom: 2rem;background-color: #f6f6f6;}@media (max-width: 991px){.cid-qYBOtFV3d4 .card-wrapper{flex-wrap: wrap;}}.cid-qYBOtFV3d4 .card-box{position: relative;}.cid-qYBOtFV3d4 .card-box .card-subtitle{padding: 0;position: absolute;right: 0;top: 0;}.cid-qYBOtFV3d4 .card-img .card-btn{display: none;}.cid-qYBOtFV3d4 .card.btnVisible .card-img .card-btn{height: calc(100% - 1rem);}@media (max-width: 767px){.cid-qYBOtFV3d4 .card{padding-left: 0;padding-right: 0;}}.cid-qYfw0K1Nts{padding-top: 1rem;padding-bottom: 1rem;background-color: #f6f6f6;}@media (max-width: 991px){.cid-qYfw0K1Nts .card-wrapper{flex-wrap: wrap;}}.cid-qYfw0K1Nts .card-box{position: relative;}.cid-qYfw0K1Nts .card-box .card-subtitle{padding: 0;position: absolute;right: 0;top: 0;}.cid-qYfw0K1Nts .card-img .card-btn{display: none;}.cid-qYfw0K1Nts .card.btnVisible .card-img .card-btn{height: calc(100% - 1rem);}@media (max-width: 767px){.cid-qYfw0K1Nts .card{padding-left: 0;padding-right: 0;}}.cid-qYBOrUVMH8{padding-top: 2rem;padding-bottom: 5rem;background-color: #f6f6f6;}@media (max-width: 991px){.cid-qYBOrUVMH8 .card-wrapper{flex-wrap: wrap;}}.cid-qYBOrUVMH8 .card-box{position: relative;}.cid-qYBOrUVMH8 .card-box .card-subtitle{padding: 0;position: absolute;right: 0;top: 0;}.cid-qYBOrUVMH8 .card-img .card-btn{display: none;}.cid-qYBOrUVMH8 .card.btnVisible .card-img .card-btn{height: calc(100% - 1rem);}@media (max-width: 767px){.cid-qYBOrUVMH8 .card{padding-left: 0;padding-right: 0;}}.cid-qXXmjRJtbR{padding-top: 5rem;padding-bottom: 5rem;background-color: #ececec;}.cid-qXXmjRJtbR .card-wrapper{background: #f6f6f6;padding: 1.5rem 1.5rem;}@media (max-width: 991px){.cid-qXXmjRJtbR .card-wrapper{flex-wrap: wrap;}}@media (min-width: 769px){.cid-qXXmjRJtbR .card-wrapper{padding: 2rem 2rem;}}@media (min-width: 1025px){.cid-qXXmjRJtbR .card-wrapper{padding: 2rem 3.5rem;}}.cid-qXXmjRJtbR .card-box{width: 100%;flex-direction: column-reverse;}@media (min-width: 768px){.cid-qXXmjRJtbR .card-img .iconfont-wrapper{width: 2rem;height: 2rem;}.cid-qXXmjRJtbR .card-img .amp-iconfont{width: 2rem;font-size: 2rem;}}@media (max-width: 767px){.cid-qXXmjRJtbR .card-img .iconfont-wrapper{width: 2.5rem;height: 2.5rem;}.cid-qXXmjRJtbR .card-img .amp-iconfont{width: 2.5rem;font-size: 2.5rem;}}.cid-qXXmjRJtbR.mbr-pb-2{padding-bottom: 1.25rem;}@media (max-width: 767px){.cid-qXXmjRJtbR .card{padding-left: 0;padding-right: 0;}}.cid-qY3QyMeUZY{padding-top: 5rem;padding-bottom: 5rem;background-color: #f6f6f6;}.cid-qY3QyMeUZY amp-img,.cid-qY3QyMeUZY img{height: auto;width: 100%;}.cid-qY3QyMeUZY .gallery-row{padding-left: 0;padding-right: 0;}@media (max-width: 992px){.cid-qY3QyMeUZY .gallery-row{justify-content: center;}}@media (max-width: 768px){.cid-qY3QyMeUZY .gallery-row,.cid-qY3QyMeUZY .gallery-item{padding-left: 0rem;padding-right: 0rem;}}.cid-qY3QyMeUZY .gallery-item:nth-last-child(1),.cid-qY3QyMeUZY .gallery-row:nth-last-child(1){padding-bottom: 0;}.cid-qY3QyMeUZY .gallery-img-wrap{border: 1px solid #ececec;}.cid-qY3QyMeUZY .gallery-img-wrap:hover:after{opacity: 0.7;}@media (min-width: 768px){.cid-qY3QyMeUZY .gallery-img-wrap:hover .img-caption:after{opacity: 0;}}.cid-qY3QyMeUZY .gallery-img-wrap:after{background: #000000;}.cid-qY3QyMeUZY .gallery-img-wrap .iconfont-wrapper{width: calc(1rem + 2rem);height: calc(1rem + 2rem);}.cid-qY3QyMeUZY .gallery-img-wrap span{font-size: 2rem;width: 2rem;color: #2b3e55;background-color: #ffffff;}.cid-qY3QyMeUZY .gallery-img-wrap .img-caption:after{opacity: 0.7;background: #000000;}.cid-qXXqjZAgMA{padding-top: 5rem;padding-bottom: 5rem;background-color: #ececec;}.cid-qXXqjZAgMA .card-wrapper{border: 1px solid #ececec;background: #f6f6f6;}@media (max-width: 991px){.cid-qXXqjZAgMA .card-wrapper{flex-wrap: wrap;}}.cid-qXXqjZAgMA .card-img .card-btn{display: none;}.cid-qXXqjZAgMA .card.btnVisible .card-img .card-btn{height: calc(100% - 1rem);}@media (max-width: 767px){.cid-qXXqjZAgMA .card{padding-left: 0;padding-right: 0;}}.cid-qXYj1rpXl9{padding-top: 75px;padding-bottom: 75px;background-color: #f6f6f6;}.cid-qXYj1rpXl9 .card-img{width: 100%;padding: 0;}.cid-qXYj1rpXl9 .icons-list .iconfont-wrapper{width: 2rem;height: 2rem;}.cid-qXYj1rpXl9 .icons-list span{transition: 0.2s;font-size: 2rem;width: 2rem;}.cid-qXYj1rpXl9 .title{width: 100%;padding-bottom: 2.5rem;}@media (max-width: 768px){.cid-qXYj1rpXl9 .title{padding-bottom: 1.5rem;}}.cid-qXYj1rpXl9 .card-wrapper{background: #ececec;}.cid-qXYj1rpXl9 .card-wrapper{border: 1px solid #ececec;}@media (max-width: 767px){.cid-qXYj1rpXl9 .card{padding-left: 0;padding-right: 0;}}.cid-qXXMd6TWuy{padding-top: 5rem;padding-bottom: 5rem;background-color: #ececec;}.cid-qXXMd6TWuy .card-wrapper{border: 1px solid #ececec;background: #f6f6f6;padding: 1rem;}@media (max-width: 991px){.cid-qXXMd6TWuy .card-wrapper{flex-wrap: wrap;}}@media (min-width: 769px){.cid-qXXMd6TWuy .card-wrapper{padding: 1.5rem;}}@media (min-width: 1025px){.cid-qXXMd6TWuy .card-wrapper{padding: 2rem;}}.cid-qXXMd6TWuy .card .card-img{margin-bottom: 1rem;}.cid-qXXMd6TWuy .card .card-img amp-img,.cid-qXXMd6TWuy .card .card-img img{height: auto;}.cid-qXXMd6TWuy .card .card-img img{object-fit: cover;}.cid-qXXMd6TWuy .card:not(.last-child){padding-bottom: 2rem;}@media (max-width: 767px){.cid-qXXMd6TWuy .card{padding-left: 0;padding-right: 0;}}.cid-qYeNp6gsjX{padding-top: 5rem;padding-bottom: 5rem;background-color: #f6f6f6;}.cid-qYeNp6gsjX .card-wrapper{border: 1px solid #ececec;background: #ececec;}@media (max-width: 991px){.cid-qYeNp6gsjX .card-wrapper{flex-wrap: wrap;}}.cid-qYeNp6gsjX .card-img .card-btn{display: none;}.cid-qYeNp6gsjX .card.btnVisible .card-img .card-btn{height: calc(100% - 1rem);}@media (max-width: 767px){.cid-qYeNp6gsjX .card{padding-left: 0;padding-right: 0;}}.cid-qY9yJvWSFP{padding-top: 5rem;padding-bottom: 5rem;background-color: #ececec;}@media (max-width: 768px){.cid-qY9yJvWSFP .title-wrap{padding-bottom: 2rem;}}.cid-qY9yJvWSFP .mbr-row .mbr-overlay{opacity: 1;background-color: #f6f6f6;}.cid-qY9yJvWSFP .form-wrap .mbr-form{width: 100%;}.cid-qY9yJvWSFP .form-wrap .btn{width: 100%;margin: 0;}.cid-qY9yJvWSFP .mbr-section-btn{width: 100%;margin: 0;}.cid-qY9yJvWSFP .mbr-form .fieldset input{border: 1px solid #dddddd;color: #38516e;background-color: #ececec;padding: 0.85rem 1rem;}.cid-qY9yJvWSFP .mbr-form .fieldset input:hover{border-color: #d2d2d2;}.cid-qY9yJvWSFP .mbr-form .fieldset input:focus,.cid-qY9yJvWSFP .mbr-form .fieldset input.focus{border-color: #2b3e54;}.cid-qY9yJvWSFP .mbr-form .fieldset input::-webkit-input-placeholder{color: rgba(56,81,110,0.4);}.cid-qY9yJvWSFP .mbr-form .fieldset input::-moz-placeholder{color: rgba(56,81,110,0.4);}.cid-qY9yJvWSFP .mbr-row{flex-direction: column;position: relative;border: 1px solid rgba(9,9,9,0.05);width: 43.75rem;max-width: 100%;margin-right: auto;margin-left: auto;padding: 1.25rem 1.5rem;}@media (min-width: 1025px){.cid-qY9yJvWSFP .mbr-row{padding-top: 3rem;padding-bottom: 3rem;}}@media (min-width: 769px){.cid-qY9yJvWSFP .mbr-row{padding-top: 2rem;padding-bottom: 2rem;}}.cid-qY9yJvWSFP .title-wrap,.cid-qY9yJvWSFP .form-block{padding: 0;z-index: 1;}.cid-qY9yJvWSFP .fieldset{height: 100%;flex-direction: row;flex-wrap: nowrap;align-items: unset;}@media (max-width: 767px){.cid-qY9yJvWSFP .fieldset{flex-direction: column;}}.cid-qY9yJvWSFP .form-wrap .mbr-form{width: auto;}.cid-qY9yJvWSFP .title-wrap,.cid-qY9yJvWSFP .form-wrap{width: 100%;max-width: 100%;}.cid-qY9yJvWSFP .form-block{display: flex;padding-top: 1.25rem;}@media (min-width: 769px){.cid-qY9yJvWSFP .form-block{padding-top: 2rem;}}.cid-qY9yJvWSFP .form-block input{flex-shrink: 1;-webkit-flex-shrink: 1;margin: 0;height: 100%;}@media (min-width: 768px){.cid-qY9yJvWSFP .form-block input{border-right: none;}}.cid-qY9yJvWSFP .form-block .mbr-section-btn{flex-shrink: 0;-webkit-flex-shrink: 0;width: auto;margin: 0;}@media (max-width: 767px){.cid-qY9yJvWSFP .form-block .mbr-section-btn{margin-top: 10px;width: 100%;}}.cid-qY9yJvWSFP .form-block .mbr-section-btn a.btn{height: 100%;margin: 0;padding: 0.85rem 1rem;line-height: 1.2;}.cid-qYfCUVj4Gu{padding-top: 5rem;padding-bottom: 5rem;background-color: #f6f6f6;}.cid-qYfCUVj4Gu .card-wrapper{border: 1px solid #ececec;background: #ececec;padding: 1.5rem 1.5rem;}@media (max-width: 991px){.cid-qYfCUVj4Gu .card-wrapper{flex-wrap: wrap;}}@media (min-width: 1025px){.cid-qYfCUVj4Gu .card-wrapper{padding: 2rem 2rem;}}.cid-qYfCUVj4Gu .card-img .iconfont-wrapper{width: 2.5rem;height: 2.5rem;}@media (max-width: 767px){.cid-qYfCUVj4Gu .card-img .iconfont-wrapper{width: 2.5rem;height: 2.5rem;}}.cid-qYfCUVj4Gu .card-img .amp-iconfont{font-size: 2.5rem;width: 2.5rem;}@media (max-width: 767px){.cid-qYfCUVj4Gu .card-img .amp-iconfont{font-size: 2.5rem;width: 2.5rem;}}@media (max-width: 767px){.cid-qYfCUVj4Gu .card{padding-left: 0;padding-right: 0;}}.cid-qYfGpjeVZe{padding-top: 75px;padding-bottom: 75px;background-color: #ececec;}@media (max-width: 992px){.cid-qYfGpjeVZe .first-element{padding-bottom: 2rem;}}.cid-qYfGpjeVZe .mbr-form{margin: auto;}.cid-qYfGpjeVZe .mbr-form .mbr-overlay{opacity: 1;background: #f6f6f6;}@media (max-width: 992px){.cid-qYfGpjeVZe .mbr-form{width: 65%;}}@media (max-width: 768px){.cid-qYfGpjeVZe .mbr-form{width: 100%;}}.cid-qYfGpjeVZe .mbr-form .fieldset input,.cid-qYfGpjeVZe .mbr-form .fieldset textarea{border: 1px solid #ececec;background-color: #ececec;color: #2b3e55;padding: 0.875rem 1rem;width: 100%;}.cid-qYfGpjeVZe .mbr-form .fieldset input:hover,.cid-qYfGpjeVZe .mbr-form .fieldset textarea:hover{border-color: #d2d2d2;}.cid-qYfGpjeVZe .mbr-form .fieldset input:focus,.cid-qYfGpjeVZe .mbr-form .fieldset textarea:focus,.cid-qYfGpjeVZe .mbr-form .fieldset input.focus,.cid-qYfGpjeVZe .mbr-form .fieldset textarea.focus{border-color: #1e2b3b;}.cid-qYfGpjeVZe .mbr-form .fieldset input::-webkit-input-placeholder{color: rgba(43,62,85,0.4);}.cid-qYfGpjeVZe .mbr-form .fieldset input::-moz-placeholder{color: rgba(43,62,85,0.4);}.cid-qYfGpjeVZe .mbr-form .fieldset textarea::-webkit-input-placeholder{color: rgba(43,62,85,0.4);}.cid-qYfGpjeVZe .mbr-form .fieldset textarea::-moz-placeholder{color: rgba(43,62,85,0.4);}.cid-qYfGpjeVZe .mbr-form .fieldset textarea{min-height: 200px;}.cid-qYfGpjeVZe .form-block{border: 1px solid #ececec;padding: 1rem;}@media (min-width: 768px){.cid-qYfGpjeVZe .form-block{padding: 1.5rem;}}@media (min-width: 1025px){.cid-qYfGpjeVZe .form-block{padding: 2rem;}}@media (max-width: 767px){.cid-qYfGpjeVZe .second-element{padding-left: 0;padding-right: 0;}}.cid-qXXAggbQ8w{padding-top: 30px;padding-bottom: 30px;background-color: #f6f6f6;}@media (max-width: 992px){.cid-qXXAggbQ8w .link-items{justify-content: space-between;}}.cid-qXXAggbQ8w .link-items .fLink{width: auto;}.cid-qXXAggbQ8w .mbr-row{margin: 0;}.cid-qXXAggbQ8w .mbr-row:nth-child(1){margin-bottom: 1rem;}
[class*="-iconfont"]{display: inline-flex;}
#eightBBanner{position:fixed;top:0;z-index:999;width:100%;background:#fff;padding:10px;min-height:10rem;animation:4s linear animBanner;}.navbar{top:10rem;z-index:100;animation:4s linear animHeight;}@media (max-width: 575px){#eightBBanner{min-height:13rem;}.navbar{top:13rem;}}#eightBBanner p{overflow:hidden;display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;}#eightBBanner.banner{display:flex;flex-direction:column;justify-content:center;}#eightBBanner .buy-license{text-decoration:underline;}#eightBBanner .btn{margin-left:0.5rem;margin-right:0.5rem;}#eightBBanner .mbr-section-abuse-report{font-size:0.8rem;}#eightBBanner .mbr-section-abuse-report a{color: #aaa;}</style>
 
  <script async  src="https://cdn.ampproject.org/v0.js"></script>
  <script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"></script>
  <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
  <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
  <script async custom-element="amp-image-lightbox" src="https://cdn.ampproject.org/v0/amp-image-lightbox-0.1.js"></script>
  <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
  
  
</head>
<body><amp-sidebar id="sidebar" class="cid-qY9wcEQhZi" layout="nodisplay" side="right">
		<div class="builder-sidebar" id="builder-sidebar">
			<button on="tap:sidebar.close" class="close-sidebar">
			<span></span>
			<span></span>
			</button>
		
				
				<!-- NAVBAR ITEMS -->
				<ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                    <li class="nav-item">
						<a class="nav-link mbr-regular link text-primary display-4" href="#features3-1w">Products</a>
					</li>
					<li class="nav-item">
                        <a class="nav-link mbr-regular link text-primary display-4" href="#team1-2c">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mbr-regular link text-primary display-4" href="#features1-2r">Contacts</a>
                    </li>
                </ul>
				<!-- NAVBAR ITEMS END -->
				<!-- SOCIAL ICON -->
				
				<!-- SOCIAL ICON END -->
				<!-- SHOW BUTTON -->
				
				<!-- SHOW BUTTON END -->
			</div>
	</amp-sidebar>
  <section class="menu1 menu horizontal-menu cid-qY9wcEQhZi" id="menu1-2e">
	
	<!-- <div class="menu-wrapper"> -->
	<nav class="navbar navbar-dropdown navbar-expand-lg navbar-fixed-top">
		<div class="menu-container container">
			<!-- SHOW LOGO -->
			<div class="navbar-brand">
				
				<span class="navbar-caption-wrap"><a class="navbar-caption mbr-semibold text-success display-5" href="#top">Shop Clothing</a></span>
			</div>
			<!-- SHOW LOGO END -->
			<!-- COLLAPSED MENU -->
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				
				<!-- NAVBAR ITEMS -->
				<ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                    <li class="nav-item">
						<a class="nav-link mbr-regular link text-primary display-4" href="#features3-1w">Products</a>
					</li>
					<li class="nav-item">
                        <a class="nav-link mbr-regular link text-primary display-4" href="#team1-2c">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mbr-regular link text-primary display-4" href="#features1-2r">Contacts</a>
                    </li>
                </ul>
				<!-- NAVBAR ITEMS END -->
				<!-- SOCIAL ICON -->
				
				<!-- SOCIAL ICON END -->
				<!-- SHOW BUTTON -->
				
				<!-- SHOW BUTTON END -->
			</div>
			<!-- COLLAPSED MENU END -->
			
			<button on="tap:sidebar.toggle" class="ampstart-btn hamburger">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</button>
		</div>
	</nav>
	<!-- AMP plug -->
	
	<!-- </div> -->
</section>

<section class="header1 cid-qXXjP6KhLc" id="header1-1v">
    
    <div class="mbr-overlay"></div>
    <div class="container">
        <div class="mbr-row align-left">
            <div class="title-block mbr-col-sm-12 mbr-col-md-12 mbr-col-lg-6">
                <h1 class="mbr-section-title mbr-fonts-style mbr-regular mbr-pb-2 display-1">AMAZING<br>COLLECTIONS<br>New Arrivals!</h1>
                
                <p class="mbr-text mbr-fonts-style mbr-light display-4">Modern classic</p>
                <div class="mbr-section-btn mbr-pt-3"><a class="btn-primary btn mbr-regular display-4" href="#features3-1w" style="">Shop now</a></div>
            </div>
        </div>
    </div>
</section>

<section class="header2 cid-qYjWG8FRPF" id="header2-2u">
    
    
    <div class="container">
        <div class="mbr-row mbr-black mbr-row-reverse">
            <div class="title-wrap mbr-col-md-12 mbr-col-sm-12 mbr-col-lg-6 align-left mbr-flex">
                <div class="title-block mbr-col-sm-12 mbr-col-md-12 mbr-m-auto">
                    <h1 class="mbr-section-title mbr-fonts-style mbr-regular mbr-pb-3 display-2">Dress</h1>
                    <h2 class="mbr-section-subtitle mbr-fonts-style mbr-regular mbr-pb-2 display-7">
                    $24.00
                    </h2>
                    <p class="mbr-text mbr-fonts-style mbr-light display-4">
                        Moderate and light-coloured classic is perfect for a summer day.
                    </p>
                    <div class="mbr-section-btn mbr-pt-4"><a class="btn-primary btn mbr-regular display-4">Buy now</a></div>
                </div>
            </div>
            <div class="image-wrap mbr-col-md-12 mbr-col-sm-12 mbr-col-lg-6 mbr-flex">
                <div class="image-block mbr-col-md-12 mbr-col-sm-12 mbr-m-auto">
                    <amp-img src="https://app.8b.io/app/themes/webamp/projects/shop/assets/images/dress.jpeg" layout="responsive" width="506" height="506" alt="" class="placeholder-loader">
                        <div placeholder="" class="placeholder">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
                                    <circle class="big" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="230" stroke-dashoffset="230" cx="150" cy="150" r="145"></circle>
                                    <circle class="small" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="212" cx="150" cy="150" r="135"></circle>
                                </svg></div>
                        
                    </amp-img>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="features3 cid-qXXkxN6gVA" id="features3-1w">
    

    
    <div class="container">
        <div class="title mbr-pb-4 mbr-px-4 align-center">
            <div class="title-block ">
                <h3 class="mbr-section-title mbr-regular mbr-fonts-style display-2">FALL-WINTER 2028</h3>
                
            </div>
        </div>
        <div class="mbr-row mbr-px-2 mbr-jc-c">
            <div class="card mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-6 mbr-px-5 btnVisible">
                <div class="card-wrapper mbr-column">
                    <div class="card-img mbr-flex mbr-pb-2">
                        <amp-img src="https://app.8b.io/app/themes/webamp/projects/shop/assets/images/dress.jpeg" layout="responsive" width="394" height="394" alt="" class="placeholder-loader">
                            <div placeholder="" class="placeholder">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
                                    <circle class="big" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="230" stroke-dashoffset="230" cx="150" cy="150" r="145"></circle>
                                    <circle class="small" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="212" cx="150" cy="150" r="135"></circle>
                                </svg></div>
                            <a href="#header2-2u"></a>
                        </amp-img>
                        <div class="card-btn mbr-section-btn align-center"><a class="btn mbr-regular btn-primary display-4" href="#header2-2u">Quick shop</a></div>
                    </div>
                    <div class="card-box">
                        <h3 class="card-title mbr-regular mbr-fonts-style display-5">Dress</h3>
                        <h4 class="card-subtitle mbr-py-1 mbr-fonts-style mbr-regular display-7"><span>$</span>24.00</h4>
                        
                        <div class="card-btn mbr-section-btn mbr-pt-2"><a class="btn mbr-regular btn-primary display-4" href="#header2-2u">Quick shop</a></div>
                    </div>
                </div>
            </div>

            <div class="card mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-6 mbr-px-5 btnVisible last-child">
                <div class="card-wrapper mbr-column">
                    <div class="card-img mbr-flex mbr-pb-2">
                        <amp-img src="https://app.8b.io/app/themes/webamp/projects/shop/assets/images/blouse.jpeg" layout="responsive" width="394" height="394" alt="" class="placeholder-loader">
                            <div placeholder="" class="placeholder">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
                                    <circle class="big" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="230" stroke-dashoffset="230" cx="150" cy="150" r="145"></circle>
                                    <circle class="small" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="212" cx="150" cy="150" r="135"></circle>
                                </svg></div>
                            <a href="#header2-2u"></a>
                        </amp-img>
                        <div class="card-btn mbr-section-btn align-center"><a class="btn mbr-regular btn-primary display-4" href="#header2-2u">Quick shop</a></div>
                    </div>
                    <div class="card-box">
                        <h3 class="card-title mbr-fonts-style mbr-regular display-5">Blouse</h3>
                        <h4 class="card-subtitle mbr-py-1 mbr-fonts-style mbr-regular display-7"><span>$</span>33.00</h4>
                        
                        <div class="card-btn mbr-section-btn mbr-pt-2"><a class="btn mbr-regular btn-primary display-4" href="#header2-2u">Quick shop</a></div>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
</section>

<section class="features3 cid-qYBOtFV3d4" id="features3-2w">
    

    
    <div class="container">
        
        <div class="mbr-row mbr-px-2 mbr-jc-c">
            <div class="card mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-6 mbr-px-5 btnVisible">
                <div class="card-wrapper mbr-column">
                    <div class="card-img mbr-flex mbr-pb-2">
                        <amp-img src="https://app.8b.io/app/themes/webamp/projects/shop/assets/images/handbag.jpeg" layout="responsive" width="394" height="394" alt="" class="placeholder-loader">
                            <div placeholder="" class="placeholder">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
                                    <circle class="big" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="230" stroke-dashoffset="230" cx="150" cy="150" r="145"></circle>
                                    <circle class="small" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="212" cx="150" cy="150" r="135"></circle>
                                </svg></div>
                            <a href="https://557514.8b.io/header2-2u"></a>
                        </amp-img>
                        <div class="card-btn mbr-section-btn align-center"><a class="btn mbr-regular btn-primary display-4" href="#header2-2u">Quick shop</a></div>
                    </div>
                    <div class="card-box mbr-m-auto">
                        <h3 class="card-title mbr-regular mbr-fonts-style display-5">Handbag</h3>
                        <h4 class="card-subtitle mbr-py-1 mbr-fonts-style mbr-regular display-7"><span>$</span>20.00</h4>
                        
                        <div class="card-btn mbr-section-btn mbr-pt-2"><a class="btn mbr-regular btn-primary display-4" href="#header2-2u">Quick shop</a></div>
                    </div>
                </div>
            </div>

            <div class="card mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-6 mbr-px-5 btnVisible last-child">
                <div class="card-wrapper mbr-column">
                    <div class="card-img mbr-flex mbr-pb-2">
                        <amp-img src="https://app.8b.io/app/themes/webamp/projects/shop/assets/images/business-bag.jpeg" layout="responsive" width="394" height="394" alt="" class="placeholder-loader">
                            <div placeholder="" class="placeholder">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
                                    <circle class="big" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="230" stroke-dashoffset="230" cx="150" cy="150" r="145"></circle>
                                    <circle class="small" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="212" cx="150" cy="150" r="135"></circle>
                                </svg></div>
                            <a href="#header2-2u"></a>
                        </amp-img>
                        <div class="card-btn mbr-section-btn align-center"><a class="btn mbr-regular btn-primary display-4" href="#header2-2u">Quick shop</a></div>
                    </div>
                    <div class="card-box mbr-m-auto">
                        <h3 class="card-title mbr-regular mbr-fonts-style display-5">Satchel</h3>
                        <h4 class="card-subtitle mbr-py-1 mbr-fonts-style mbr-regular display-7"><span>$</span>54.00</h4>
                        
                        <div class="card-btn mbr-section-btn mbr-pt-2"><a class="btn mbr-regular btn-primary display-4" href="#header2-2u">Quick shop</a></div>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
</section>

<section class="features3 cid-qYfw0K1Nts" id="features3-2o">
    

    
    <div class="container">
        
        <div class="mbr-row mbr-px-2 mbr-jc-c">
            <div class="card mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-6 mbr-px-5 btnVisible">
                <div class="card-wrapper mbr-column">
                    <div class="card-img mbr-flex mbr-pb-2">
                        <amp-img src="https://app.8b.io/app/themes/webamp/projects/shop/assets/images/shoes1.jpeg" layout="responsive" width="394" height="394" alt="" class="placeholder-loader">
                            <div placeholder="" class="placeholder">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
                                    <circle class="big" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="230" stroke-dashoffset="230" cx="150" cy="150" r="145"></circle>
                                    <circle class="small" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="212" cx="150" cy="150" r="135"></circle>
                                </svg></div>
                            <a href="#header2-2u"></a>
                        </amp-img>
                        <div class="card-btn mbr-section-btn align-center"><a class="btn mbr-regular btn-primary display-4" href="#header2-2u">Quick shop</a></div>
                    </div>
                    <div class="card-box mbr-m-auto">
                        <h3 class="card-title mbr-regular mbr-fonts-style display-5">Shoes</h3>
                        <h4 class="card-subtitle mbr-py-1 mbr-fonts-style mbr-regular display-7"><span>$</span>30.00</h4>
                        
                        <div class="card-btn mbr-section-btn mbr-pt-2">
                            <a class="btn mbr-regular btn-primary display-4" href="#header2-2u">Quick shop</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-6 mbr-px-5 btnVisible last-child">
                <div class="card-wrapper mbr-column">
                    <div class="card-img mbr-flex mbr-pb-2">
                        <amp-img src="https://app.8b.io/app/themes/webamp/projects/shop/assets/images/shoes2.jpeg" layout="responsive" width="394" height="394" alt="" class="placeholder-loader">
                            <div placeholder="" class="placeholder">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
                                    <circle class="big" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="230" stroke-dashoffset="230" cx="150" cy="150" r="145"></circle>
                                    <circle class="small" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="212" cx="150" cy="150" r="135"></circle>
                                </svg></div>
                            <a href="#header2-2u"></a>
                        </amp-img>
                        <div class="card-btn mbr-section-btn align-center"><a class="btn mbr-regular btn-primary display-4" href="#header2-2u">Quick shop</a></div>
                    </div>
                    <div class="card-box mbr-m-auto">
                        <h3 class="card-title mbr-regular mbr-fonts-style display-5">Shoes</h3>
                        <h4 class="card-subtitle mbr-py-1 mbr-fonts-style mbr-regular display-7"><span>$</span>25.00</h4>
                        
                        <div class="card-btn mbr-section-btn mbr-pt-2">
                            <a class="btn mbr-regular btn-primary display-4" href="#header2-2u">Quick shop</a>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
</section>

<section class="features3 cid-qYBOrUVMH8" id="features3-2x">
    

    
    <div class="container">
        
        <div class="mbr-row mbr-px-2 mbr-jc-c">
            <div class="card mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-6 mbr-px-5 btnVisible">
                <div class="card-wrapper mbr-column">
                    <div class="card-img mbr-flex mbr-pb-2">
                        <amp-img src="https://app.8b.io/app/themes/webamp/projects/shop/assets/images/slippers.jpeg" layout="responsive" width="394" height="394" alt="" class="placeholder-loader">
                            <div placeholder="" class="placeholder">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
                                    <circle class="big" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="230" stroke-dashoffset="230" cx="150" cy="150" r="145"></circle>
                                    <circle class="small" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="212" cx="150" cy="150" r="135"></circle>
                                </svg></div>
                            <a href="#header2-2u"></a>
                        </amp-img>
                        <div class="card-btn mbr-section-btn align-center"><a class="btn mbr-regular btn-primary display-4" href="#header2-2u">Quick shop</a></div>
                    </div>
                    <div class="card-box mbr-m-auto">
                        <h3 class="card-title mbr-regular mbr-fonts-style display-5">Flip-flops</h3>
                        <h4 class="card-subtitle mbr-py-1 mbr-fonts-style mbr-regular display-7"><span>$</span>7.00</h4>
                        
                        <div class="card-btn mbr-section-btn mbr-pt-2"><a class="btn mbr-regular btn-primary display-4" href="#header2-2u">Quick shop</a></div>
                    </div>
                </div>
            </div>

            <div class="card mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-6 mbr-px-5 btnVisible last-child">
                <div class="card-wrapper mbr-column">
                    <div class="card-img mbr-flex mbr-pb-2">
                        <amp-img src="https://app.8b.io/app/themes/webamp/projects/shop/assets/images/umbrella.jpeg" layout="responsive" width="394" height="394" alt="" class="placeholder-loader">
                            <div placeholder="" class="placeholder">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
                                    <circle class="big" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="230" stroke-dashoffset="230" cx="150" cy="150" r="145"></circle>
                                    <circle class="small" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="212" cx="150" cy="150" r="135"></circle>
                                </svg></div>
                            <a href="#header2-2u"></a>
                        </amp-img>
                        <div class="card-btn mbr-section-btn align-center"><a class="btn mbr-regular btn-primary display-4" href="#header2-2u">Quick shop</a></div>
                    </div>
                    <div class="card-box mbr-m-auto">
                        <h3 class="card-title mbr-regular mbr-fonts-style display-5">Umbrella</h3>
                        <h4 class="card-subtitle mbr-py-1 mbr-fonts-style mbr-regular display-7"><span>$</span>14.00</h4>
                        
                        <div class="card-btn mbr-section-btn mbr-pt-2"><a class="btn mbr-regular btn-primary display-4" href="#header2-2u">Quick shop</a></div>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
</section>

<section class="features1 cid-qXXmjRJtbR" id="features1-1x">
    

    
    <div class="container">
        <div class="title-wrap mbr-pb-4 mbr-px-4 align-center">
            <div class="title-block">
                <h3 class="mbr-section-title mbr-regular mbr-fonts-style display-2">
                    Testimonials
                </h3>
                
            </div>
        </div>
        <div class="mbr-row mbr-px-2 mbr-jc-c">
            <div class="card mbr-col-sm-12 mbr-col-md-8 mbr-col-lg-4 mbr-px-2 align-center md-pb">
                <div class="card-wrapper mbr-flex mbr-column box-shadow">
                    <div class="card-img align-center mbr-pb-2">
                        <span class="iconfont-wrapper"><span class="amp-iconfont fa-facebook-f fa"><svg width="100%" height="100%" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M1343 12v264h-157q-86 0-116 36t-30 108v189h293l-39 296h-254v759h-306v-759h-255v-296h255v-218q0-186 104-288.5t277-102.5q147 0 228 12z"></path></svg></span></span>
                    </div>
                    <div class="card-box mbr-flex">
                        
                        <h4 class="card-subtitle mbr-fonts-style mbr-regular display-7 mbr-pt-4">@top10fans</h4>
                        <p class="card-text mbr-fonts-style mbr-light display-4">
                            Fast delivery, convenient service, amazing quality of goods, and low prices.
                        </p>
                    </div>
                </div>
            </div>
            <div class="card mbr-col-sm-12 mbr-col-md-8 mbr-col-lg-4 mbr-px-2 align-center md-pb">
                <div class="card-wrapper mbr-flex mbr-column box-shadow">
                    <div class="card-img align-center mbr-pb-2">
                        <span class="iconfont-wrapper"><span class="amp-iconfont fa-twitter fa"><svg width="100%" height="100%" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M1684 408q-67 98-162 167 1 14 1 42 0 130-38 259.5t-115.5 248.5-184.5 210.5-258 146-323 54.5q-271 0-496-145 35 4 78 4 225 0 401-138-105-2-188-64.5t-114-159.5q33 5 61 5 43 0 85-11-112-23-185.5-111.5t-73.5-205.5v-4q68 38 146 41-66-44-105-115t-39-154q0-88 44-163 121 149 294.5 238.5t371.5 99.5q-8-38-8-74 0-134 94.5-228.5t228.5-94.5q140 0 236 102 109-21 205-78-37 115-142 178 93-10 186-50z"></path></svg></span></span>
                    </div>
                    <div class="card-box mbr-flex">
                        
                        <h4 class="card-subtitle mbr-fonts-style mbr-regular display-7 mbr-pt-4">@EvergreenDress</h4>
                        <p class="card-text mbr-fonts-style mbr-light display-4">
                            I regularly order clothes in this store, they provide friendly support service and deliver goods in a short time.
                        </p>
                    </div>
                </div>
            </div>
            <div class="card mbr-col-sm-12 mbr-col-md-8 mbr-col-lg-4 mbr-px-2 align-center last-child">
                <div class="card-wrapper mbr-flex mbr-column box-shadow">
                    <div class="card-img align-center mbr-pb-2">
                        <span class="iconfont-wrapper"><span class="amp-iconfont fa-quote-left fa"><svg width="100%" height="100%" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M832 960v384q0 80-56 136t-136 56h-384q-80 0-136-56t-56-136v-704q0-104 40.5-198.5t109.5-163.5 163.5-109.5 198.5-40.5h64q26 0 45 19t19 45v128q0 26-19 45t-45 19h-64q-106 0-181 75t-75 181v32q0 40 28 68t68 28h224q80 0 136 56t56 136zm896 0v384q0 80-56 136t-136 56h-384q-80 0-136-56t-56-136v-704q0-104 40.5-198.5t109.5-163.5 163.5-109.5 198.5-40.5h64q26 0 45 19t19 45v128q0 26-19 45t-45 19h-64q-106 0-181 75t-75 181v32q0 40 28 68t68 28h224q80 0 136 56t56 136z"></path></svg></span></span>
                    </div>
                    <div class="card-box mbr-flex">
                        
                        <h4 class="card-subtitle mbr-fonts-style mbr-regular display-7 mbr-pt-4">@Lorem</h4>
                        <p class="card-text mbr-fonts-style mbr-light display-4">
                            Returns without problems, good quality of things, and also, they have an excellent sense of style.
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<section class="gallery2 gallery cid-qY3QyMeUZY" id="gallery1-2d">
    
    
    <div class="container">
        <div class="title mbr-pb-4 mbr-px-4 align-center">
            <h3 class="mbr-section-title mbr-regular mbr-fonts-style display-2">NEW COLLECTION</h3>
            
        </div>
        <div class="mbr-row mbr-px-4 gallery-wrap mbr-jc-c">
            <div class="mbr-col-md-12 mbr-col-sm-12 gallery-row row-first flex-wrap mbr-col-lg-12 mbr-pb-4 mbr-flex">
                

                

                
            <div class="gallery-item mbr-col-sm-12 mbr-col-lg-4 mbr-col-md-8 md-pb mbr-px-2">
                    <div class="gallery-img-wrap box-shadow">
                        <amp-img on="tap:lightbox1" role="button" tabindex="0" class="placeholder-loader image-without-link" src="https://app.8b.io/app/themes/webamp/projects/shop/assets/images/gallery1.jpeg" layout="responsive" height="216" width="324" alt="">
                            <div placeholder="" class="placeholder">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
                                    <circle class="big" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="230" stroke-dashoffset="230" cx="150" cy="150" r="145"></circle>
                                    <circle class="small" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="212" cx="150" cy="150" r="135"></circle>
                                </svg></div>
                            
                        </amp-img>
                        <div class="icon-wrap iconfont-wrapper" on="tap:lightbox1" role="button" tabindex="0">
                            <span class="amp-iconfont fa-search fa"><svg width="100%" height="100%" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M1216 832q0-185-131.5-316.5t-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5 316.5-131.5 131.5-316.5zm512 832q0 52-38 90t-90 38q-54 0-90-38l-343-342q-179 124-399 124-143 0-273.5-55.5t-225-150-150-225-55.5-273.5 55.5-273.5 150-225 225-150 273.5-55.5 273.5 55.5 225 150 150 225 55.5 273.5q0 220-124 399l343 343q37 37 37 90z"></path></svg></span>
                        </div>
                        
                    </div>
                </div><div class="gallery-item mbr-col-sm-12 mbr-col-lg-4 mbr-col-md-8 md-pb mbr-px-2">
                    <div class="gallery-img-wrap box-shadow">
                        <amp-img on="tap:lightbox1" role="button" tabindex="0" class="placeholder-loader image-without-link" src="https://app.8b.io/app/themes/webamp/projects/shop/assets/images/gallery12.jpeg" layout="responsive" height="216" width="324" alt="">
                            <div placeholder="" class="placeholder">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
                                    <circle class="big" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="230" stroke-dashoffset="230" cx="150" cy="150" r="145"></circle>
                                    <circle class="small" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="212" cx="150" cy="150" r="135"></circle>
                                </svg></div>
                            
                        </amp-img>
                        <div class="icon-wrap iconfont-wrapper" on="tap:lightbox1" role="button" tabindex="0">
                            <span class="amp-iconfont fa-search fa"><svg width="100%" height="100%" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M1216 832q0-185-131.5-316.5t-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5 316.5-131.5 131.5-316.5zm512 832q0 52-38 90t-90 38q-54 0-90-38l-343-342q-179 124-399 124-143 0-273.5-55.5t-225-150-150-225-55.5-273.5 55.5-273.5 150-225 225-150 273.5-55.5 273.5 55.5 225 150 150 225 55.5 273.5q0 220-124 399l343 343q37 37 37 90z"></path></svg></span>
                        </div>
                        
                    </div>
                </div><div class="gallery-item mbr-col-sm-12 mbr-col-lg-4 mbr-col-md-8 md-pb mbr-px-2">
                    <div class="gallery-img-wrap box-shadow">
                        <amp-img on="tap:lightbox1" role="button" tabindex="0" class="placeholder-loader image-without-link" src="https://app.8b.io/app/themes/webamp/projects/shop/assets/images/gallery2.jpeg" layout="responsive" height="216" width="324" alt="">
                            <div placeholder="" class="placeholder">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
                                    <circle class="big" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="230" stroke-dashoffset="230" cx="150" cy="150" r="145"></circle>
                                    <circle class="small" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="212" cx="150" cy="150" r="135"></circle>
                                </svg></div>
                            
                        </amp-img>
                        <div class="icon-wrap iconfont-wrapper" on="tap:lightbox1" role="button" tabindex="0">
                            <span class="amp-iconfont fa-search fa"><svg width="100%" height="100%" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M1216 832q0-185-131.5-316.5t-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5 316.5-131.5 131.5-316.5zm512 832q0 52-38 90t-90 38q-54 0-90-38l-343-342q-179 124-399 124-143 0-273.5-55.5t-225-150-150-225-55.5-273.5 55.5-273.5 150-225 225-150 273.5-55.5 273.5 55.5 225 150 150 225 55.5 273.5q0 220-124 399l343 343q37 37 37 90z"></path></svg></span>
                        </div>
                        
                    </div>
                </div></div>
            <div class="mbr-col-md-12 mbr-col-sm-12 gallery-row row-second flex-wrap mbr-col-lg-12 mbr-pb-4 mbr-flex">
                

                

                

                
            <div class="gallery-item mbr-col-sm-12 mbr-col-lg-3 mbr-col-md-8 md-pb mbr-px-2">
                    <div class="gallery-img-wrap box-shadow">
                        <amp-img on="tap:lightbox1" role="button" tabindex="0" class="placeholder-loader image-without-link" src="https://app.8b.io/app/themes/webamp/projects/shop/assets/images/gallery3.jpeg" layout="responsive" height="157" width="235.5" alt="">
                            <div placeholder="" class="placeholder">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
                                    <circle class="big" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="230" stroke-dashoffset="230" cx="150" cy="150" r="145"></circle>
                                    <circle class="small" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="212" cx="150" cy="150" r="135"></circle>
                                </svg></div>
                            
                        </amp-img>
                        <div class="icon-wrap iconfont-wrapper" on="tap:lightbox1" role="button" tabindex="0">
                            <span class="amp-iconfont fa-search fa"><svg width="100%" height="100%" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M1216 832q0-185-131.5-316.5t-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5 316.5-131.5 131.5-316.5zm512 832q0 52-38 90t-90 38q-54 0-90-38l-343-342q-179 124-399 124-143 0-273.5-55.5t-225-150-150-225-55.5-273.5 55.5-273.5 150-225 225-150 273.5-55.5 273.5 55.5 225 150 150 225 55.5 273.5q0 220-124 399l343 343q37 37 37 90z"></path></svg></span>
                        </div>
                        
                    </div>
                </div><div class="gallery-item mbr-col-sm-12 mbr-col-lg-3 mbr-col-md-8 md-pb mbr-px-2">
                    <div class="gallery-img-wrap box-shadow">
                        <amp-img on="tap:lightbox1" role="button" tabindex="0" class="placeholder-loader image-without-link" src="https://app.8b.io/app/themes/webamp/projects/shop/assets/images/gallery9.jpeg" layout="responsive" height="157" width="235.5" alt="">
                            <div placeholder="" class="placeholder">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
                                    <circle class="big" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="230" stroke-dashoffset="230" cx="150" cy="150" r="145"></circle>
                                    <circle class="small" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="212" cx="150" cy="150" r="135"></circle>
                                </svg></div>
                            
                        </amp-img>
                        <div class="icon-wrap iconfont-wrapper" on="tap:lightbox1" role="button" tabindex="0">
                            <span class="amp-iconfont fa-search fa"><svg width="100%" height="100%" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M1216 832q0-185-131.5-316.5t-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5 316.5-131.5 131.5-316.5zm512 832q0 52-38 90t-90 38q-54 0-90-38l-343-342q-179 124-399 124-143 0-273.5-55.5t-225-150-150-225-55.5-273.5 55.5-273.5 150-225 225-150 273.5-55.5 273.5 55.5 225 150 150 225 55.5 273.5q0 220-124 399l343 343q37 37 37 90z"></path></svg></span>
                        </div>
                        
                    </div>
                </div><div class="gallery-item mbr-col-sm-12 mbr-col-lg-3 mbr-col-md-8 md-pb mbr-px-2">
                    <div class="gallery-img-wrap box-shadow">
                        <amp-img on="tap:lightbox1" role="button" tabindex="0" class="placeholder-loader image-without-link" src="https://app.8b.io/app/themes/webamp/projects/shop/assets/images/gallery11.jpeg" layout="responsive" height="157" width="235.5" alt="">
                            <div placeholder="" class="placeholder">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
                                    <circle class="big" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="230" stroke-dashoffset="230" cx="150" cy="150" r="145"></circle>
                                    <circle class="small" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="212" cx="150" cy="150" r="135"></circle>
                                </svg></div>
                            
                        </amp-img>
                        <div class="icon-wrap iconfont-wrapper" on="tap:lightbox1" role="button" tabindex="0">
                            <span class="amp-iconfont fa-search fa"><svg width="100%" height="100%" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M1216 832q0-185-131.5-316.5t-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5 316.5-131.5 131.5-316.5zm512 832q0 52-38 90t-90 38q-54 0-90-38l-343-342q-179 124-399 124-143 0-273.5-55.5t-225-150-150-225-55.5-273.5 55.5-273.5 150-225 225-150 273.5-55.5 273.5 55.5 225 150 150 225 55.5 273.5q0 220-124 399l343 343q37 37 37 90z"></path></svg></span>
                        </div>
                        
                    </div>
                </div><div class="gallery-item mbr-col-sm-12 mbr-col-lg-3 mbr-col-md-8 md-pb mbr-px-2">
                    <div class="gallery-img-wrap box-shadow">
                        <amp-img on="tap:lightbox1" role="button" tabindex="0" class="placeholder-loader image-without-link" src="https://app.8b.io/app/themes/webamp/projects/shop/assets/images/gallery5-1.jpeg" layout="responsive" height="157" width="235.5" alt="">
                            <div placeholder="" class="placeholder">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
                                    <circle class="big" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="230" stroke-dashoffset="230" cx="150" cy="150" r="145"></circle>
                                    <circle class="small" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="212" cx="150" cy="150" r="135"></circle>
                                </svg></div>
                            
                        </amp-img>
                        <div class="icon-wrap iconfont-wrapper" on="tap:lightbox1" role="button" tabindex="0">
                            <span class="amp-iconfont fa-search fa"><svg width="100%" height="100%" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M1216 832q0-185-131.5-316.5t-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5 316.5-131.5 131.5-316.5zm512 832q0 52-38 90t-90 38q-54 0-90-38l-343-342q-179 124-399 124-143 0-273.5-55.5t-225-150-150-225-55.5-273.5 55.5-273.5 150-225 225-150 273.5-55.5 273.5 55.5 225 150 150 225 55.5 273.5q0 220-124 399l343 343q37 37 37 90z"></path></svg></span>
                        </div>
                        
                    </div>
                </div></div>
            <div class="mbr-col-md-12 mbr-col-sm-12 gallery-row row-third flex-wrap mbr-col-lg-12 mbr-pb-4 mbr-flex">
                

                
            <div class="gallery-item mbr-col-sm-12 mbr-col-lg-6 mbr-col-md-8 md-pb mbr-px-2">
                    <div class="gallery-img-wrap box-shadow">
                        <amp-img on="tap:lightbox1" role="button" tabindex="0" class="placeholder-loader image-without-link" src="https://app.8b.io/app/themes/webamp/projects/shop/assets/images/gallery8-1.jpeg" layout="responsive" height="336" width="504" alt="">
                            <div placeholder="" class="placeholder">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
                                    <circle class="big" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="230" stroke-dashoffset="230" cx="150" cy="150" r="145"></circle>
                                    <circle class="small" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="212" cx="150" cy="150" r="135"></circle>
                                </svg></div>
                            
                        </amp-img>
                        <div class="icon-wrap iconfont-wrapper" on="tap:lightbox1" role="button" tabindex="0">
                            <span class="amp-iconfont fa-search fa"><svg width="100%" height="100%" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M1216 832q0-185-131.5-316.5t-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5 316.5-131.5 131.5-316.5zm512 832q0 52-38 90t-90 38q-54 0-90-38l-343-342q-179 124-399 124-143 0-273.5-55.5t-225-150-150-225-55.5-273.5 55.5-273.5 150-225 225-150 273.5-55.5 273.5 55.5 225 150 150 225 55.5 273.5q0 220-124 399l343 343q37 37 37 90z"></path></svg></span>
                        </div>
                        
                    </div>
                </div><div class="gallery-item mbr-col-sm-12 mbr-col-lg-6 mbr-col-md-8 md-pb mbr-px-2">
                    <div class="gallery-img-wrap box-shadow">
                        <amp-img on="tap:lightbox1" role="button" tabindex="0" class="placeholder-loader image-without-link" src="https://app.8b.io/app/themes/webamp/projects/shop/assets/images/gallery6.jpeg" layout="responsive" height="336" width="504" alt="">
                            <div placeholder="" class="placeholder">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
                                    <circle class="big" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="230" stroke-dashoffset="230" cx="150" cy="150" r="145"></circle>
                                    <circle class="small" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="212" cx="150" cy="150" r="135"></circle>
                                </svg></div>
                            
                        </amp-img>
                        <div class="icon-wrap iconfont-wrapper" on="tap:lightbox1" role="button" tabindex="0">
                            <span class="amp-iconfont fa-search fa"><svg width="100%" height="100%" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M1216 832q0-185-131.5-316.5t-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5 316.5-131.5 131.5-316.5zm512 832q0 52-38 90t-90 38q-54 0-90-38l-343-342q-179 124-399 124-143 0-273.5-55.5t-225-150-150-225-55.5-273.5 55.5-273.5 150-225 225-150 273.5-55.5 273.5 55.5 225 150 150 225 55.5 273.5q0 220-124 399l343 343q37 37 37 90z"></path></svg></span>
                        </div>
                        
                    </div>
                </div></div>
            
        </div>
    </div>
    <amp-image-lightbox id="lightbox1" layout="nodisplay">
        <a class="control" data-close-button-aria-label="Close">
            <span class="close"></span>
        </a>
    </amp-image-lightbox>
</section>

<section class="features3 cid-qXXqjZAgMA" id="features3-1z">
    

    
    <div class="container">
        <div class="title mbr-pb-4 mbr-px-4 align-center">
            <div class="title-block ">
                <h3 class="mbr-section-title mbr-fonts-style mbr-regular display-2">Our Blog</h3>
                
            </div>
        </div>
        <div class="mbr-row mbr-px-2 mbr-jc-c">
            <div class="card mbr-col-sm-12 mbr-col-md-8 mbr-col-lg-4 mbr-px-2 md-pb">
                <div class="card-wrapper mbr-column box-shadow">
                    <div class="card-img mbr-flex mbr-pb-4">
                        <amp-img src="https://app.8b.io/app/themes/webamp/projects/shop/assets/images/blog1.jpeg" layout="responsive" width="336" height="224" alt="" class="placeholder-loader">
                            <div placeholder="" class="placeholder">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
                                    <circle class="big" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="230" stroke-dashoffset="230" cx="150" cy="150" r="145"></circle>
                                    <circle class="small" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="212" cx="150" cy="150" r="135"></circle>
                                </svg></div>
                            
                        </amp-img>
                        <div class="card-btn mbr-section-btn align-center">
                            <a class="btn btn-primary mbr-regular display-4" href="#">Read More</a>
                        </div>
                    </div>
                    <div class="card-box mbr-m-auto mbr-px-4 mbr-pb-4">
                        <h3 class="card-title mbr-fonts-style mbr-regular display-5 mbr-pb-2">TRENDY PATTERNS</h3>
                        
                        <p class="card-text mbr-fonts-style mbr-light display-4">
                            Do not be afraid of prints this fall! Not only a leopard pattern in the trend, but many others too.
                        </p>
                        <div class="card-btn mbr-section-btn mbr-pt-2"><a class="btn mbr-regular btn-success display-4" href="#">Read now</a></div>
                    </div>
                </div>
            </div>

            <div class="card mbr-col-sm-12 mbr-col-md-8 mbr-col-lg-4 mbr-px-2 md-pb">
                <div class="card-wrapper mbr-column box-shadow">
                    <div class="card-img mbr-flex mbr-pb-4">
                        <amp-img src="https://app.8b.io/app/themes/webamp/projects/shop/assets/images/blog2.jpeg" layout="responsive" width="336" height="224" alt="" class="placeholder-loader">
                            <div placeholder="" class="placeholder">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
                                    <circle class="big" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="230" stroke-dashoffset="230" cx="150" cy="150" r="145"></circle>
                                    <circle class="small" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="212" cx="150" cy="150" r="135"></circle>
                                </svg></div>
                            
                        </amp-img>
                        <div class="card-btn mbr-section-btn align-center">
                            <a class="btn btn-primary mbr-regular display-4" href="#">Read More</a>
                        </div>
                    </div>
                    <div class="card-box mbr-m-auto mbr-px-4 mbr-pb-4">
                        <h3 class="card-title mbr-fonts-style mbr-regular display-5 mbr-pb-2">EDITOR'S PICKS</h3>
                        
                        <p class="card-text mbr-fonts-style mbr-light display-4">
                            Our experienced stylists have selected the best models from the available collections.
                        </p>
                        <div class="card-btn mbr-section-btn mbr-pt-2"><a class="btn btn-success mbr-regular display-4" href="#">Read now</a></div>
                    </div>
                </div>
            </div>
            <div class="card mbr-col-sm-12 mbr-col-md-8 mbr-col-lg-4 mbr-px-2 last-child">
                <div class="card-wrapper mbr-column box-shadow">
                    <div class="card-img mbr-flex mbr-pb-4">
                        <amp-img src="https://app.8b.io/app/themes/webamp/projects/shop/assets/images/blog3.jpeg" layout="responsive" width="336" height="224" alt="" class="placeholder-loader">
                            <div placeholder="" class="placeholder">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
                                    <circle class="big" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="230" stroke-dashoffset="230" cx="150" cy="150" r="145"></circle>
                                    <circle class="small" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="212" cx="150" cy="150" r="135"></circle>
                                </svg></div>
                            
                        </amp-img>
                        <div class="card-btn mbr-section-btn align-center">
                            <a class="btn btn-primary mbr-regular display-4" href="#">Read More</a>
                        </div>
                    </div>
                    <div class="card-box mbr-m-auto mbr-px-4 mbr-pb-4">
                        <h3 class="card-title mbr-fonts-style mbr-regular display-5 mbr-pb-2">GOODBYE SUMMER</h3>
                        
                        <p class="card-text mbr-fonts-style mbr-light display-4">
                            The most popular models from the previous collection. Hurry up! One week left to avail of 50% discount.
                        </p>
                        <div class="card-btn mbr-section-btn mbr-pt-2"><a class="btn btn-success mbr-regular display-4" href="#">Read now</a></div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<section class="team1 cid-qXYj1rpXl9" id="team1-2c">
    
    
    <!--  -->
    <div class="container">
            <div class="title mbr-pb-4 mbr-px-4 align-center">
                <h3 class="mbr-section-title mbr-regular mbr-fonts-style display-2">Our Team</h3>
                
        </div>
        <div class="mbr-row mbr-px-2 mbr-jc-c">
            <div class="card mbr-col-sm-12 mbr-col-md-8 mbr-col-lg-4 mbr-px-2 md-pb">
                <div class="card-wrapper box-shadow">
                    <div class="card-img img-with-overlay mbr-pb-2">
                        <amp-img class="placeholder-loader" src="https://app.8b.io/app/themes/webamp/projects/shop/assets/images/team1.jpeg" layout="responsive" width="335" height="335" alt="">
                            <div placeholder="" class="placeholder">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
                                    <circle class="big" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="230" stroke-dashoffset="230" cx="150" cy="150" r="145"></circle>
                                    <circle class="small" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="212" cx="150" cy="150" r="135"></circle>
                                </svg></div>
                            
                        </amp-img>
                    </div>
                    <div class="card-box mbr-p-4">
                        <h3 class="card-title mbr-regular mbr-fonts-style display-5">Rosalyn Sherman</h3>
                        <h4 class="card-subtitle mbr-regular mbr-fonts-style display-7 mbr-pb-2">Founder</h4>
                        <p class="card-text mbr-fonts-style mbr-light display-4">
                            The creator and ideological inspirer of our store.
                        </p>
                        <div class="icons-list mbr-pt-4">
                            
                            
                            
                            
                        <a href="https://www.youtube.com/channel/UCIl8JHjLsqZNOdgBOYC_MRQ" target="_blank">
                                <span class="iconfont-wrapper"><span class="amp-iconfont animation-normal fa-youtube-square fa"><svg width="100%" height="100%" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M1047 1303v-157q0-50-29-50-17 0-33 16v224q16 16 33 16 29 0 29-49zm184-122h66v-34q0-51-33-51t-33 51v34zm-571-266v70h-80v423h-74v-423h-78v-70h232zm201 126v367h-67v-40q-39 45-76 45-33 0-42-28-6-17-6-54v-290h66v270q0 24 1 26 1 15 15 15 20 0 42-31v-280h67zm252 111v146q0 52-7 73-12 42-53 42-35 0-68-41v36h-67v-493h67v161q32-40 68-40 41 0 53 42 7 21 7 74zm251 129v9q0 29-2 43-3 22-15 40-27 40-80 40-52 0-81-38-21-27-21-86v-129q0-59 20-86 29-38 80-38t78 38q21 29 21 86v76h-133v65q0 51 34 51 24 0 30-26 0-1 .5-7t.5-16.5v-21.5h68zm-451-824v156q0 51-32 51t-32-51v-156q0-52 32-52t32 52zm533 713q0-177-19-260-10-44-43-73.5t-76-34.5q-136-15-412-15-275 0-411 15-44 5-76.5 34.5t-42.5 73.5q-20 87-20 260 0 176 20 260 10 43 42.5 73t75.5 35q137 15 412 15t412-15q43-5 75.5-35t42.5-73q20-84 20-260zm-755-651l90-296h-75l-51 195-53-195h-78q7 23 23 69l24 69q35 103 46 158v201h74v-201zm289 81v-130q0-58-21-87-29-38-78-38-51 0-78 38-21 29-21 87v130q0 58 21 87 27 38 78 38 49 0 78-38 21-27 21-87zm181 120h67v-370h-67v283q-22 31-42 31-15 0-16-16-1-2-1-26v-272h-67v293q0 37 6 55 11 27 43 27 36 0 77-45v40zm503-304v960q0 119-84.5 203.5t-203.5 84.5h-960q-119 0-203.5-84.5t-84.5-203.5v-960q0-119 84.5-203.5t203.5-84.5h960q119 0 203.5 84.5t84.5 203.5z"></path></svg></span></span>
                            </a><a href="https://www.facebook.com/8bsite/" target="_blank">
                                <span class="iconfont-wrapper"><span class="amp-iconfont animation-normal fa-facebook-square fa"><svg width="100%" height="100%" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M1376 128q119 0 203.5 84.5t84.5 203.5v960q0 119-84.5 203.5t-203.5 84.5h-188v-595h199l30-232h-229v-148q0-56 23.5-84t91.5-28l122-1v-207q-63-9-178-9-136 0-217.5 80t-81.5 226v171h-200v232h200v595h-532q-119 0-203.5-84.5t-84.5-203.5v-960q0-119 84.5-203.5t203.5-84.5h960z"></path></svg></span></span>
                            </a><a href="https://twitter.com/8bsite" target="_blank">
                                <span class="iconfont-wrapper"><span class="amp-iconfont animation-normal fa-twitter-square fa"><svg width="100%" height="100%" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M1408 610q-56 25-121 34 68-40 93-117-65 38-134 51-61-66-153-66-87 0-148.5 61.5t-61.5 148.5q0 29 5 48-129-7-242-65t-192-155q-29 50-29 106 0 114 91 175-47-1-100-26v2q0 75 50 133.5t123 72.5q-29 8-51 8-13 0-39-4 21 63 74.5 104t121.5 42q-116 90-261 90-26 0-50-3 148 94 322 94 112 0 210-35.5t168-95 120.5-137 75-162 24.5-168.5q0-18-1-27 63-45 105-109zm256-194v960q0 119-84.5 203.5t-203.5 84.5h-960q-119 0-203.5-84.5t-84.5-203.5v-960q0-119 84.5-203.5t203.5-84.5h960q119 0 203.5 84.5t84.5 203.5z"></path></svg></span></span>
                            </a></div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="card mbr-col-sm-12 mbr-col-md-8 mbr-col-lg-4 mbr-px-2 md-pb">
                <div class="card-wrapper box-shadow">
                    <div class="card-img img-with-overlay mbr-pb-2">
                        <amp-img class="placeholder-loader" src="https://app.8b.io/app/themes/webamp/projects/shop/assets/images/team2.jpeg" layout="responsive" width="335" height="335" alt="">
                            <div placeholder="" class="placeholder">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
                                    <circle class="big" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="230" stroke-dashoffset="230" cx="150" cy="150" r="145"></circle>
                                    <circle class="small" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="212" cx="150" cy="150" r="135"></circle>
                                </svg></div>
                            
                        </amp-img>
                    </div>
                    <div class="card-box mbr-p-4">
                        <h3 class="card-title mbr-regular mbr-fonts-style display-5">Aron Doyle</h3>
                        <h4 class="card-subtitle mbr-regular mbr-fonts-style display-7 mbr-pb-2">Designer</h4>
                        <p class="card-text mbr-fonts-style mbr-light display-4">
                            He is our designer from the very first day.
                        </p>
                        <div class="icons-list mbr-pt-4">
                            
                            
                            
                            
                        <a href="https://www.youtube.com/channel/UCIl8JHjLsqZNOdgBOYC_MRQ" target="_blank">
                                <span class="iconfont-wrapper"><span class="amp-iconfont animation-normal fa-youtube-square fa"><svg width="100%" height="100%" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M1047 1303v-157q0-50-29-50-17 0-33 16v224q16 16 33 16 29 0 29-49zm184-122h66v-34q0-51-33-51t-33 51v34zm-571-266v70h-80v423h-74v-423h-78v-70h232zm201 126v367h-67v-40q-39 45-76 45-33 0-42-28-6-17-6-54v-290h66v270q0 24 1 26 1 15 15 15 20 0 42-31v-280h67zm252 111v146q0 52-7 73-12 42-53 42-35 0-68-41v36h-67v-493h67v161q32-40 68-40 41 0 53 42 7 21 7 74zm251 129v9q0 29-2 43-3 22-15 40-27 40-80 40-52 0-81-38-21-27-21-86v-129q0-59 20-86 29-38 80-38t78 38q21 29 21 86v76h-133v65q0 51 34 51 24 0 30-26 0-1 .5-7t.5-16.5v-21.5h68zm-451-824v156q0 51-32 51t-32-51v-156q0-52 32-52t32 52zm533 713q0-177-19-260-10-44-43-73.5t-76-34.5q-136-15-412-15-275 0-411 15-44 5-76.5 34.5t-42.5 73.5q-20 87-20 260 0 176 20 260 10 43 42.5 73t75.5 35q137 15 412 15t412-15q43-5 75.5-35t42.5-73q20-84 20-260zm-755-651l90-296h-75l-51 195-53-195h-78q7 23 23 69l24 69q35 103 46 158v201h74v-201zm289 81v-130q0-58-21-87-29-38-78-38-51 0-78 38-21 29-21 87v130q0 58 21 87 27 38 78 38 49 0 78-38 21-27 21-87zm181 120h67v-370h-67v283q-22 31-42 31-15 0-16-16-1-2-1-26v-272h-67v293q0 37 6 55 11 27 43 27 36 0 77-45v40zm503-304v960q0 119-84.5 203.5t-203.5 84.5h-960q-119 0-203.5-84.5t-84.5-203.5v-960q0-119 84.5-203.5t203.5-84.5h960q119 0 203.5 84.5t84.5 203.5z"></path></svg></span></span>
                            </a><a href="https://www.facebook.com/8bsite/" target="_blank">
                                <span class="iconfont-wrapper"><span class="amp-iconfont animation-normal fa-facebook-square fa"><svg width="100%" height="100%" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M1376 128q119 0 203.5 84.5t84.5 203.5v960q0 119-84.5 203.5t-203.5 84.5h-188v-595h199l30-232h-229v-148q0-56 23.5-84t91.5-28l122-1v-207q-63-9-178-9-136 0-217.5 80t-81.5 226v171h-200v232h200v595h-532q-119 0-203.5-84.5t-84.5-203.5v-960q0-119 84.5-203.5t203.5-84.5h960z"></path></svg></span></span>
                            </a><a href="https://twitter.com/8bsite" target="_blank">
                                <span class="iconfont-wrapper"><span class="amp-iconfont animation-normal fa-twitter-square fa"><svg width="100%" height="100%" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M1408 610q-56 25-121 34 68-40 93-117-65 38-134 51-61-66-153-66-87 0-148.5 61.5t-61.5 148.5q0 29 5 48-129-7-242-65t-192-155q-29 50-29 106 0 114 91 175-47-1-100-26v2q0 75 50 133.5t123 72.5q-29 8-51 8-13 0-39-4 21 63 74.5 104t121.5 42q-116 90-261 90-26 0-50-3 148 94 322 94 112 0 210-35.5t168-95 120.5-137 75-162 24.5-168.5q0-18-1-27 63-45 105-109zm256-194v960q0 119-84.5 203.5t-203.5 84.5h-960q-119 0-203.5-84.5t-84.5-203.5v-960q0-119 84.5-203.5t203.5-84.5h960q119 0 203.5 84.5t84.5 203.5z"></path></svg></span></span>
                            </a></div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="card mbr-col-sm-12 mbr-col-md-8 mbr-col-lg-4 mbr-px-2 last-child">
                <div class="card-wrapper box-shadow">
                    <div class="card-img img-with-overlay mbr-pb-2">
                        <amp-img class="placeholder-loader" src="https://app.8b.io/app/themes/webamp/projects/shop/assets/images/team3.jpeg" layout="responsive" width="335" height="335" alt="">
                            <div placeholder="" class="placeholder">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
                                    <circle class="big" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="230" stroke-dashoffset="230" cx="150" cy="150" r="145"></circle>
                                    <circle class="small" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="212" cx="150" cy="150" r="135"></circle>
                                </svg></div>
                            
                        </amp-img>
                    </div>
                    <div class="card-box mbr-p-4">
                        <h3 class="card-title mbr-regular mbr-fonts-style display-5">Emma Charles</h3>
                        <h4 class="card-subtitle mbr-regular mbr-fonts-style display-7 mbr-pb-2">Designer</h4>
                        <p class="card-text mbr-fonts-style mbr-light display-4">
                            Mary joined the group of designers two years ago.
                        </p>
                        <div class="icons-list mbr-pt-4">
                            
                            
                            
                            
                        <a href="https://www.youtube.com/channel/UCIl8JHjLsqZNOdgBOYC_MRQ" target="_blank">
                                <span class="iconfont-wrapper"><span class="amp-iconfont animation-normal fa-youtube-square fa"><svg width="100%" height="100%" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M1047 1303v-157q0-50-29-50-17 0-33 16v224q16 16 33 16 29 0 29-49zm184-122h66v-34q0-51-33-51t-33 51v34zm-571-266v70h-80v423h-74v-423h-78v-70h232zm201 126v367h-67v-40q-39 45-76 45-33 0-42-28-6-17-6-54v-290h66v270q0 24 1 26 1 15 15 15 20 0 42-31v-280h67zm252 111v146q0 52-7 73-12 42-53 42-35 0-68-41v36h-67v-493h67v161q32-40 68-40 41 0 53 42 7 21 7 74zm251 129v9q0 29-2 43-3 22-15 40-27 40-80 40-52 0-81-38-21-27-21-86v-129q0-59 20-86 29-38 80-38t78 38q21 29 21 86v76h-133v65q0 51 34 51 24 0 30-26 0-1 .5-7t.5-16.5v-21.5h68zm-451-824v156q0 51-32 51t-32-51v-156q0-52 32-52t32 52zm533 713q0-177-19-260-10-44-43-73.5t-76-34.5q-136-15-412-15-275 0-411 15-44 5-76.5 34.5t-42.5 73.5q-20 87-20 260 0 176 20 260 10 43 42.5 73t75.5 35q137 15 412 15t412-15q43-5 75.5-35t42.5-73q20-84 20-260zm-755-651l90-296h-75l-51 195-53-195h-78q7 23 23 69l24 69q35 103 46 158v201h74v-201zm289 81v-130q0-58-21-87-29-38-78-38-51 0-78 38-21 29-21 87v130q0 58 21 87 27 38 78 38 49 0 78-38 21-27 21-87zm181 120h67v-370h-67v283q-22 31-42 31-15 0-16-16-1-2-1-26v-272h-67v293q0 37 6 55 11 27 43 27 36 0 77-45v40zm503-304v960q0 119-84.5 203.5t-203.5 84.5h-960q-119 0-203.5-84.5t-84.5-203.5v-960q0-119 84.5-203.5t203.5-84.5h960q119 0 203.5 84.5t84.5 203.5z"></path></svg></span></span>
                            </a><a href="https://www.facebook.com/8bsite/" target="_blank">
                                <span class="iconfont-wrapper"><span class="amp-iconfont animation-normal fa-facebook-square fa"><svg width="100%" height="100%" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M1376 128q119 0 203.5 84.5t84.5 203.5v960q0 119-84.5 203.5t-203.5 84.5h-188v-595h199l30-232h-229v-148q0-56 23.5-84t91.5-28l122-1v-207q-63-9-178-9-136 0-217.5 80t-81.5 226v171h-200v232h200v595h-532q-119 0-203.5-84.5t-84.5-203.5v-960q0-119 84.5-203.5t203.5-84.5h960z"></path></svg></span></span>
                            </a><a href="https://twitter.com/8bsite" target="_blank">
                                <span class="iconfont-wrapper"><span class="amp-iconfont animation-normal fa-twitter-square fa"><svg width="100%" height="100%" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M1408 610q-56 25-121 34 68-40 93-117-65 38-134 51-61-66-153-66-87 0-148.5 61.5t-61.5 148.5q0 29 5 48-129-7-242-65t-192-155q-29 50-29 106 0 114 91 175-47-1-100-26v2q0 75 50 133.5t123 72.5q-29 8-51 8-13 0-39-4 21 63 74.5 104t121.5 42q-116 90-261 90-26 0-50-3 148 94 322 94 112 0 210-35.5t168-95 120.5-137 75-162 24.5-168.5q0-18-1-27 63-45 105-109zm256-194v960q0 119-84.5 203.5t-203.5 84.5h-960q-119 0-203.5-84.5t-84.5-203.5v-960q0-119 84.5-203.5t203.5-84.5h960q119 0 203.5 84.5t84.5 203.5z"></path></svg></span></span>
                            </a></div>
                    </div>
                </div>
            </div>
            <!--  -->
            
            <!--  -->
        </div>
    </div>
</section>

<section class="features3 cid-qXXMd6TWuy" id="features4-26">
    

    
    <div class="container">
        <div class="title-wrap mbr-pb-4 mbr-px-4 align-center">
            <div class="title-block ">
                <h3 class="mbr-section-title mbr-regular mbr-fonts-style display-2">About</h3>
                
            </div>
        </div>
        <div class="mbr-row mbr-px-2 mbr-jc-c">
            <div class="card mbr-col-sm-12 mbr-col-md-8 mbr-col-lg-10 mbr-px-4 last-child">
                <div class="card-wrapper mbr-column box-shadow">
                    <div class="card-img mbr-flex mbr-pb-2">
                        <amp-img src="https://app.8b.io/app/themes/webamp/projects/shop/assets/images/about.jpeg" layout="responsive" width="793.5" height="529" alt="" class="placeholder-loader">
                            <div placeholder="" class="placeholder">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
                                    <circle class="big" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="230" stroke-dashoffset="230" cx="150" cy="150" r="145"></circle>
                                    <circle class="small" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="212" cx="150" cy="150" r="135"></circle>
                                </svg></div>
                            
                        </amp-img>
                    </div>
                    <div class="card-box mbr-m-auto">
                        
                        
                        <p class="card-text mbr-fonts-style mbr-light display-4">Our store was created ten years ago. We sell our author collections and cooperate with other brands that are close to us in spirit. Our values are convenience, elegance, own style. The basic rule of the company: Less is More, so we produce small collections, but we pay great attention to the design and production.</p>
                        
                    </div>
                </div>
            </div>

            
            
            
        </div>
    </div>
</section>

<section class="features3 cid-qYeNp6gsjX" id="features3-2l">
    

    
    <div class="container">
        <div class="title mbr-pb-4 mbr-px-4 align-center">
            <div class="title-block ">
                <h3 class="mbr-section-title mbr-regular mbr-fonts-style display-2">Some Facts</h3>
                
            </div>
        </div>
        <div class="mbr-row mbr-px-2 mbr-jc-c">
            <div class="card mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-6 mbr-px-2">
                <div class="card-wrapper mbr-column box-shadow">
                    <div class="card-img mbr-flex mbr-pb-4">
                        <amp-img src="https://app.8b.io/app/themes/webamp/projects/shop/assets/images/somefacts2.jpeg" layout="responsive" width="520.5" height="347" alt="" class="placeholder-loader">
                            <div placeholder="" class="placeholder">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
                                    <circle class="big" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="230" stroke-dashoffset="230" cx="150" cy="150" r="145"></circle>
                                    <circle class="small" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="212" cx="150" cy="150" r="135"></circle>
                                </svg></div>
                            
                        </amp-img>
                        <div class="card-btn mbr-section-btn align-center">
                            <a class="btn mbr-regular btn-primary display-4" href="#">Read More</a>
                        </div>
                    </div>
                    <div class="card-box mbr-m-auto mbr-px-4 mbr-pb-4">
                        <h3 class="card-title mbr-regular mbr-fonts-style display-5 mbr-pb-2">How to Recycle Clothing</h3>
                        
                        <p class="card-text mbr-fonts-style mbr-light display-4">
                            Resell, donate, recycle. Do everything possible on your part to save the planet from the garbage.
                        </p>
                        <div class="card-btn mbr-section-btn mbr-pt-2"><a class="btn mbr-regular btn-primary display-4" href="#">Read now</a></div>
                    </div>
                </div>
            </div>

            <div class="card mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-6 mbr-px-2 last-child">
                <div class="card-wrapper mbr-column box-shadow">
                    <div class="card-img mbr-flex mbr-pb-4">
                        <amp-img src="https://app.8b.io/app/themes/webamp/projects/shop/assets/images/somefacts1.jpeg" layout="responsive" width="520.5" height="347" alt="" class="placeholder-loader">
                            <div placeholder="" class="placeholder">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
                                    <circle class="big" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="230" stroke-dashoffset="230" cx="150" cy="150" r="145"></circle>
                                    <circle class="small" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="212" cx="150" cy="150" r="135"></circle>
                                </svg></div>
                            
                        </amp-img>
                        <div class="card-btn mbr-section-btn align-center">
                            <a class="btn mbr-regular btn-primary display-4" href="#">Read More</a>
                        </div>
                    </div>
                    <div class="card-box mbr-m-auto mbr-px-4 mbr-pb-4">
                        <h3 class="card-title mbr-regular mbr-fonts-style display-5 mbr-pb-2">Building a Basic Wardrobe</h3>
                        
                        <p class="card-text mbr-fonts-style mbr-light display-4">
                            How to determine the most necessary things in the wardrobe and combine them with each other.
                        </p>
                        <div class="card-btn mbr-section-btn mbr-pt-2"><a class="btn mbr-regular btn-primary display-4" href="#">Read now</a></div>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
</section>

<section class="info2 cid-qY9yJvWSFP" id="info2-2f">
    
    <!--Block parameters controls (Blue "Gear" panel) -->
    
    <div class="container mbr-px-2">
        <div class="mbr-row mbr-jc-c mbr-px-2 box-shadow">
            <div class="mbr-overlay"></div>
            <div class="title-wrap mbr-col-lg-8 mbr-col-md-8 mbr-col-sm-12 mbr-pb-4 mbr-flex mbr-column mbr-jc-c mbr-px-4 align-center">
                <h3 class="mbr-section-title mbr-fonts-style mbr-regular display-2 mbr-pb-3">
                    Newsletter
                </h3>
                <p class="mbr-text mbr-fonts-style mbr-light display-4">
                    Subscribe now and get 10% off your first purchase
                </p>
            </div>
            <div class="form-wrap mbr-col-lg-4 mbr-col-md-4 mbr-col-sm-12 mbr-flex mbr-column mbr-jc-c mbr-px-4" data-form-type="formoid">
                <div class="form-block" data-form-type="formoid">
                    <form class="mbr-form mbr-jc-c mbr-flex mbr-m-auto mbr-column" method="post" target="_top" action-xhr="https://f.8b.com/api/sites/557514/forms/data/" data-form-title="8b Form">
                        <div submit-success="">
                            <template data-form-alert="" type="amp-mustache">Subscription successful!</template>
                        </div>
                        <div submit-error="">
                            <template data-form-alert="" type="amp-mustache">Failed! {{error}}</template>
                        </div>
                        <div class="fieldset mbr-fonts-style display-4">
                            <input type="email" name="form[data][0][1]" data-form-field="E-mail" placeholder="E-mail Address" required="" id="form[data][0][1]-info2-2f">
                            <div class="mbr-section-btn align-center"><a class="btn mbr-regular btn-form btn-success display-4">Sign Up</a></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="features1 cid-qYfCUVj4Gu" id="features1-2r">
    
    
    <div class="container">
        <div class="title mbr-pb-4 mbr-px-4 align-center">
            <div class="title-block">
                <h3 class="mbr-section-title mbr-regular mbr-fonts-style display-2">Come Visit Us</h3>
                
            </div>
        </div>
        <div class="mbr-row mbr-px-2 mbr-jc-c">
            <div class="card mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-4 mbr-px-2 md-pb">
                <div class="card-wrapper mbr-flex mbr-column box-shadow">
                    <div class="card-img mbr-pb-2">
                        <span class="iconfont-wrapper"><span class="amp-iconfont fa-map-marker fa"><svg width="100%" height="100%" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M1152 640q0-106-75-181t-181-75-181 75-75 181 75 181 181 75 181-75 75-181zm256 0q0 109-33 179l-364 774q-16 33-47.5 52t-67.5 19-67.5-19-46.5-52l-365-774q-33-70-33-179 0-212 150-362t362-150 362 150 150 362z"></path></svg></span></span>
                    </div>
                    <div class="card-box">
                        <h3 class="card-title mbr-pb-1 mbr-regular mbr-fonts-style display-5">
                            Address
                        </h3>
                        <p class="card-text mbr-fonts-style mbr-light display-4">
                            6834 Hollywood Blvd - Los Angeles CA
                        </p>
                    </div>
                </div>
            </div>
            <div class="card mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-4 mbr-px-2 md-pb">
                <div class="card-wrapper mbr-flex mbr-column box-shadow">
                    <div class="card-img mbr-pb-2">
                        <span class="iconfont-wrapper"><span class="amp-iconfont fa-phone fa"><svg width="100%" height="100%" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M1600 1240q0 27-10 70.5t-21 68.5q-21 50-122 106-94 51-186 51-27 0-53-3.5t-57.5-12.5-47-14.5-55.5-20.5-49-18q-98-35-175-83-127-79-264-216t-216-264q-48-77-83-175-3-9-18-49t-20.5-55.5-14.5-47-12.5-57.5-3.5-53q0-92 51-186 56-101 106-122 25-11 68.5-21t70.5-10q14 0 21 3 18 6 53 76 11 19 30 54t35 63.5 31 53.5q3 4 17.5 25t21.5 35.5 7 28.5q0 20-28.5 50t-62 55-62 53-28.5 46q0 9 5 22.5t8.5 20.5 14 24 11.5 19q76 137 174 235t235 174q2 1 19 11.5t24 14 20.5 8.5 22.5 5q18 0 46-28.5t53-62 55-62 50-28.5q14 0 28.5 7t35.5 21.5 25 17.5q25 15 53.5 31t63.5 35 54 30q70 35 76 53 3 7 3 21z"></path></svg></span></span>
                    </div>
                    <div class="card-box">
                        <h3 class="card-title mbr-pb-1 mbr-regular mbr-fonts-style display-5">
                            Phone
                        </h3>
                        <p class="card-text mbr-fonts-style mbr-light display-4">
                            +1234 56 789
                        </p>
                    </div>
                </div>
            </div>
            <div class="card mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-4 mbr-px-2 last-child">
                <div class="card-wrapper mbr-flex mbr-column box-shadow">
                    <div class="card-img mbr-pb-2">
                        <span class="iconfont-wrapper"><span class="amp-iconfont fa-envelope fa"><svg width="100%" height="100%" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M1792 710v794q0 66-47 113t-113 47h-1472q-66 0-113-47t-47-113v-794q44 49 101 87 362 246 497 345 57 42 92.5 65.5t94.5 48 110 24.5h2q51 0 110-24.5t94.5-48 92.5-65.5q170-123 498-345 57-39 100-87zm0-294q0 79-49 151t-122 123q-376 261-468 325-10 7-42.5 30.5t-54 38-52 32.5-57.5 27-50 9h-2q-23 0-50-9t-57.5-27-52-32.5-54-38-42.5-30.5q-91-64-262-182.5t-205-142.5q-62-42-117-115.5t-55-136.5q0-78 41.5-130t118.5-52h1472q65 0 112.5 47t47.5 113z"></path></svg></span></span>
                    </div>
                    <div class="card-box">
                        <h3 class="card-title mbr-pb-1 mbr-regular mbr-fonts-style display-5">
                            E-mail
                        </h3>
                        <p class="card-text mbr-fonts-style mbr-light display-4">jokerfast@ya.ru</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<section class="contacts2 cid-qYfGpjeVZe" id="contacts2-2t">
	
	<!-- Block parameters controls (Blue "Gear" panel) -->
	
	<div class="container">
		<div class="title mbr-pb-4 mbr-px-4 align-center">
			<h3 class="mbr-section-title mbr-regular mbr-fonts-style display-2">
			Contact</h3>
			
		</div>
		<div class="mbr-row main-row mbr-jc-c mbr-px-2">
			
			<div class="second-element mbr-col-md-12 mbr-col-sm-12 mbr-column mbr-flex mbr-jc-c mbr-px-4 mbr-col-lg-6 mbr-m-auto" data-form-type="formoid">
				<div class="form-block box-shadow" data-form-type="formoid">
					<form class="mbr-form mbr-jc-c mbr-flex mbr-column display-7" method="post" target="_top" action-xhr="https://f.8b.com/api/sites/557514/forms/data/" data-form-title="8b Form">
						<div class="mbr-overlay"></div>
						<div submit-success="">
							<template data-form-alert="" type="amp-mustache">Subscription successful!</template>
						</div>
						<div submit-error="">
							<template data-form-alert="" type="amp-mustache">Failed! {{error}}</template>
						</div>
						<div class="fieldset mbr-fonts-style display-4">
							<div class="field" data-for="form[data][0][1]">
								<input type="hidden" name="form[data][0][0]" value="Name" id="form[data][0][0]-contacts2-2t" data-form-field="">
								<input type="text" name="form[data][0][1]" data-form-field="First Name" placeholder="Name" required="" id="form[data][0][1]-contacts2-2t">
							</div>
							
							<div class="field" data-for="form[data][2][1]">
								<input type="hidden" name="form[data][1][0]" value="E-mail" id="form[data][2][0]-contacts2-2t" data-form-field="">
								<input type="email" name="form[data][1][1]" data-form-field="E-mail" placeholder="E-mail" required="" id="form[data][2][1]-contacts2-2t">
							</div>
							
							<div class="text-field" data-for="form[data][4][1]">
								<input type="hidden" name="form[data][2][0]" value="Message" id="form[data][4][0]-contacts2-2t" data-form-field="">
								<textarea name="form[data][2][1]" rows="7" data-form-field="Message" placeholder="Message" id="form[data][4][1]-contacts2-2t"></textarea>
							</div>
						</div>
						<div class="mbr-section-btn align-center"><button type="submit" class="btn mbr-regular btn-form btn-primary display-4">Send</button></div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="footer1 cid-qXXAggbQ8w" id="footer1-24">
    
    
    <div class="footer-container container">
        <div class="mbr-row link-items mbr-jc-c mbr-fonts-style mbr-light display-4">
            
            
            
            
            
        <p class="mbr-text fLink mbr-px-1 mbr-white"><a href="#features3-1w" class="text-primary">Products</a></p><p class="mbr-text fLink mbr-px-1 mbr-white"><a href="#team1-2c" class="text-primary">
                About</a></p><p class="mbr-text fLink mbr-px-1 mbr-white"><a href="#features1-2r" class="text-primary">Contacts</a></p></div>
        <div class="copyright mbr-px-2 mbr-flex mbr-jc-c">
            <p class="mbr-text mbr-fonts-style align-center mbr-light display-4">
                © <span>2022</span> <span>Sport Idea</span></p>
        </div>
    </div>
</section>


  
  

<div class="banner align-center" id="eightBBanner">
  <p class="mbr-text mbr-fonts-style display-7">The site was created with <a class="mbr-text" href="https://8b.com" target="_blank">8b Free Website Builder</a></p>
  <div class="mbr-section-btn">
    <a class="btn btn-sm btn-primary display-4" href="https://8b.io/" target="_blank">Create Link in Bio</a>
    <a class="btn btn-sm btn-secondary display-4" href="https://b.8b.com/buy?plan=4&amp;owner=2402771&amp;site=557514&amp;title=8b%20Start%20Plan%20for%20557514.8b.io">Remove This Banner</a>
  </div>
  <div class="mbr-section-abuse-report display-7"><a href="mailto:s@8b.com?subject=8b Abuse Report 557514.8b.io">Report Abuse</a></div>
</div>
<style amp-keyframes>@keyframes animBanner {
    0%   {opacity: 0;transform: translatey(-8rem);}
    75%  {opacity: 0;transform: translatey(-8rem);}
    100% {opacity: 1;transform: translatey(0);}
  }
  @keyframes animHeight {
    0%   {transform: translatey(-8rem);}
    75%  {transform: translatey(-8rem);}
    100% {transform: translatey(0);}
  }
</style>
</body>
</html>