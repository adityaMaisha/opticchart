<?php include("include/header.php") ?>

<style>
   .pad-top {

      padding-top: 70px;

      padding-bottom: 70px;

   }



   .main-display {

      width: 400px;

      height: 350px;

      position: relative;

      overflow: hidden;

   }



   .display-tv {

      position: absolute;
    width: 490px;
    height: 95%;
    z-index: 2;

   }



   .display-video {
      position: absolute;
    width: 63%;
    height: 67%;
    top: 23px;
    left: 85px;
    object-fit: cover;
    z-index: 1;
   }



   .padding-top-35 {

      padding-top: 35px !important;

   }



   .price-left {

      display: flex;

      align-items: center;

      justify-content: center;

      flex-direction: column;

   }



   .price-left i {

      font-size: 20rem;

   }



   .price-left p {

      font-size: 25px;

      text-transform: uppercase;

      font-weight: 600;

   }



   .cbp-item-wrapper a {

      box-shadow: 4px 4px 15px 6px #dadada;

      border-radius: 15px;

   }



   .bora {

      box-shadow: 0px 1px 12px 1px #dadada;

      padding: 30px 10px;

      border-radius: 15px;

   }

   .bora:hover {

      background-color: #51afb7;

      transition: all ease-in-out .3s;

   }

   .bora:hover .fontface-one,
   .bora:hover .fontface-one span,
   .bora:hover .fontface-two {

      color: #fff !important;

   }

   .bora:hover .buy-btn {

      background-color: #fff !important;

      color: #51afb7 !important;

   }

   .buy-btn {

      padding: 12px 32px !important;

      font-size: 15px;

      background-color: #51afb7;

      color: #fff;

      -webkit-border-radius: 50px;

      border-radius: 50px;

      font-family: 'Montserrat', sans-serif;

      -webkit-transition: color 300ms ease-in-out, -webkit-box-shadow 400ms ease-in-out !important;

      transition: color 300ms ease-in-out, -webkit-box-shadow 400ms ease-in-out !important;

      -o-transition: box-shadow 400ms ease-in-out, color 300ms ease-in-out !important;

      transition: box-shadow 400ms ease-in-out, color 300ms ease-in-out !important;

      transition: box-shadow 400ms ease-in-out, color 300ms ease-in-out, -webkit-box-shadow 400ms ease-in-out !important;

      display: inline-block;

      -webkit-box-shadow: none;

      box-shadow: none;
      text-align: center;

   }

   .buy-btn2 {
      padding: 12px 32px !important;

      font-size: 15px;

      background-color: #51afb7;

      color: #fff;

      -webkit-border-radius: 50px;

      border-radius: 50px;

      font-family: 'Montserrat', sans-serif;

      -webkit-transition: color 300ms ease-in-out, -webkit-box-shadow 400ms ease-in-out !important;

      transition: color 300ms ease-in-out, -webkit-box-shadow 400ms ease-in-out !important;

      -o-transition: box-shadow 400ms ease-in-out, color 300ms ease-in-out !important;

      transition: box-shadow 400ms ease-in-out, color 300ms ease-in-out !important;

      transition: box-shadow 400ms ease-in-out, color 300ms ease-in-out, -webkit-box-shadow 400ms ease-in-out !important;

      display: inline-block;

      -webkit-box-shadow: none;

      box-shadow: none;
      border: 1px solid #51afb7;
      text-align: center;
   }

   .buy-btn2:hover {
      border: 1px solid #51afb7;
   }

   .pr-20 {

      margin-right: 20px;

   }



   .text-instart {

      text-align: start;

   }

   .blog-detail-text {

      padding: 0 20px;

   }

   .minheight {

      min-height: 242px;

   }

   @media (max-width: 1200px){
      .display-video{
         width: 75%;
      }
   }



   @media (max-width: 990px) {

      .main-display {

         display: flex;

         justify-content: center;

      }

      .navbar-brand {

         padding: 0;

      }



      .navbar-brand .logo-after-scroll {

         width: 80px;

      }



      .navbar-toggler {

         font-size: 1.50rem;

      }



      .display-video {

         left: 25px;

      }



      .pad-bottom {

         padding-bottom: 35px;

      }



      .pad-0 {

         padding-bottom: 0;

      }

      .phone-width {

         flex-direction: column !important;

         padding: 10px !important;

      }

      .pr-20 {

         margin: 0;

         margin-bottom: 20px;

      }

      .blog-detail-text {

         padding: 0px;

      }

      .swiper-button-next,
      .swiper-button-prev {
         top: 30%;
      }

      .swiper-button-prev {
         left: 0;
         right: auto;
      }

      .swiper-button-next {
         right: 0;
         left: auto;
      }

      .pad-top {
         padding: 30px 0;
      }
      .display-tv {
      position: absolute;
      width: 100%;
      height: 70%;
      z-index: 2;
      top: 18%;
      }
      .display-video{
         width: 74%;
         left: 45px;
         height: 47%;
    top: 84px;
      }
   }

   @media (max-width: 786px) {
      .minheight {
         min-height: 150px;
      }
      .display-video{
         left: 65px;
      }
   }


   @media (max-width: 576px) {
      .display-tv {
        position: absolute;
        width: 350px;
        height: 85%;
        z-index: 2;
        top: 18%;
    }

      .main-display {

         width: 300px;

         height: 215px;

      }

      .display-video {

         left: 24px;
         width: 85%;
         height: 57%;
        top: 55px;

      }

      .tv-container {

         flex-direction: column;

      }

      .stick-tv {

         width: 250px;

      }

      .pad-top {
         padding: 30px 0;
      }

   }



   .buy-btn:hover,
   .button-setting:hover {

      background-color: #fff !important;

      color: #51afb7 !important;

   }


   .hover-button {

      width: 120px;
      height: 40px;
      border-radius: 50px;
      border: none;
      background-color: #51AFB7;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      cursor: pointer;

   }

   .slider-align {

      margin-bottom: 13vh;

   }

   .stick-tv {
      width: 250px;
   }

   /* .same_height {
      height: 597px;
      min-height: 400px;
   } */

   .foot_img {
      width: 100%;
      height: 100%;
      padding-top: 30px;
   }

   .brand-logo {
      padding-left: 15px;
   }
</style>

<!-- Main Slider Section -->

<section class="main-slider-section" id="home">

   <div id="rev_slider_346_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="beforeafterslider1" data-source="gallery" style="background:#252525;padding:0px;">

      <!-- START REVOLUTION SLIDER 5.4.3.3 fullscreen mode -->

      <div id="main-slider-four" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.3.3">

         <ul>

            <!-- SLIDE  -->

            <li data-index="rs-965" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="../../assets/images/night-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-beforeafter='{"moveto":"50%|50%|50%|50%","bgColor":"","bgType":"image","bgImage":"images/slide2.jpg","bgFit":"cover","bgPos":"center center","bgRepeat":"no-repeat","direction":"horizontal","easing":"Power2.easeInOut","delay":"500","time":"750","out":"fade","carousel":false}'>

               <!-- MAIN IMAGE -->

               <img src="images/slide1.png" alt="" data-bgposition="center center" data-kenburns="on" data-duration="5000" data-ease="Power4.easeOut" data-scalestart="150" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-blurstart="30" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="off" class="rev-slidebg" data-no-retina="">

               <!-- LAYERS -->



               <!-- LAYER NR. 3 -->

               <div class="tp-caption   tp-resizeme rs-parallaxlevel-3" id="slide-964-layer-28"

                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"

                  data-y="['middle','middle','middle','middle']" data-voffset="['-155','-120','-70','-130']"

                  data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"

                  data-beforeafter="before" data-responsive_offset="on"

                  data-frames='[{"delay":700,"speed":2000,"frame":"0","from":"x:-200px;y:bottom;rZ:90deg;sX:1;sY:1;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'

                  data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"

                  data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"

                  style="z-index: 7;"><img src="images/tv-1.png" alt=""

                     data-ww="['350px','350px','350px','200px']" data-hh="['250px','250px','250px','130px']"

                     width="1600" height="1600" data-no-retina=""> </div>



               <div class="tp-caption main-slider-text  fontface-one text-color-secondary  tp-resizeme  tp-blackshadow rs-parallaxlevel-5"

                  id="slide-994-layer-999" data-x="['center','center','center','center']"

                  data-hoffset="['-45','-45','-45','-35']" data-y="['middle','middle','middle','middle']"

                  data-voffset="['50','70','30','0']" data-width="none" data-height="none"

                  data-whitespace="nowrap" data-type="text" data-beforeafter="before" data-responsive_offset="on"

                  data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'

                  data-textalign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"

                  data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[50,50,50,50]"

                  style="z-index: 16; white-space: nowrap; font-size: 50px; line-height: 80px; font-weight: 700; color: #ffffff;">Effortless Eye <br> Care</div>



               <!-- LAYER NR. 6 -->

               <div class="tp-caption   tp-resizeme  tp-whiteshadow rs-parallaxlevel-5" id="slide-964-layer-1743"

                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"

                  data-y="['middle','middle','middle','middle']" data-voffset="['110','110','110','0']"

                  data-fontsize="['120','120','120','60']" data-lineheight="['120','120','120','60']"

                  data-letterspacing="['50','50','50','30']" data-width="none" data-height="none"

                  data-whitespace="nowrap" data-type="text" data-beforeafter="before" data-responsive_offset="on"

                  data-frames='[{"delay":500,"speed":2000,"frame":"0","from":"opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'

                  data-textalign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"

                  data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[50,50,50,50]"

                  data-blendmode="screen"

                  style="z-index: 10; white-space: nowrap; font-size: 120px; line-height: 120px; font-weight: 400; color: #000000; letter-spacing: 50px;font-family:Montserrat;text-transform:uppercase;">

               </div>



               <!-- LAYER NR. 7 -->

               <div class="tp-caption padding-top-10 main-slider-detail-text tp-resizeme rs-parallaxlevel-5"

                  id="slide-964-layer-48" data-x="['center','center','center','center']"

                  data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"

                  data-voffset="['180','210','210','150']" data-width="['960','960','960','320']"

                  data-height="none" data-whitespace="normal" data-type="text" data-beforeafter="before"

                  data-responsive_offset="on"

                  data-frames='[{"delay":600,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'

                  data-textalign="['center','center','center','center']" data-paddingtop="[5,5,5,5]"

                  data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[5,5,5,5]"

                  style="z-index: 11; min-width: 960px; max-width: 960px; white-space: normal; font-size: 13px; line-height: 20px; font-weight: 400; color: #ffffff; letter-spacing: 1px;font-family:Montserrat; padding-top: 10px;">

                  Revolutionary Eye Testing Software – <br> Accurate Results, Anytime, Anywhere

               </div>



               <!-- LAYER NR. 8 -->

               <div

                  class="tp-caption background-white button-setting button-setting-primary text-color-dark tp-resizeme rs-parallaxlevel-4"

                  id="slide-964-layer-46" data-x="['center','center','center','center']"

                  data-hoffset="['0','0','0','0']" data-y="['bottom','bottom','bottom','bottom']"

                  data-voffset="['90','70','70','70']" data-width="none" data-height="none"

                  data-whitespace="nowrap" data-type="text" data-beforeafter="before" data-responsive_offset="on"

                  data-frames='[{"delay":700,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgb(0,0,0);bg:rgb(255,255,255);"}]'

                  data-textalign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"

                  data-paddingright="[40,40,40,40]" data-paddingbottom="[0,0,0,0]"

                  data-paddingleft="[45,45,45,45]"

                  style="z-index: 12; white-space: nowrap; font-size: 17px;  font-weight: 400; color: #ffffff; letter-spacing: 1px;font-family:Montserrat;cursor:pointer;">

                  <a class="scroll" href="#about-company-section">Learn More</a>

               </div>



               <!-- LAYER NR. 10 -->

               <!-- <div class="tp-caption   tp-resizeme rs-parallaxlevel-4" id="slide-964-layer-42"

                  data-x="['center','center','center','center']" data-hoffset="['545','545','545','181']"

                  data-y="['middle','middle','middle','middle']" data-voffset="['-100','-100','-120','-178']"

                  data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"

                  data-beforeafter="after" data-responsive_offset="on"

                  data-frames='[{"delay":2100,"speed":2000,"frame":"0","from":"x:right;y:-500px;rZ:-180deg;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'

                  data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"

                  data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"

                  style="z-index: 14;"><img src="images/letter5.png" alt=""

                     data-ww="['375px','375px','375px','170px']" data-hh="['375px','375px','375px','170px']"

                     width="1500" height="1500" data-no-retina=""> </div> -->



               <!-- LAYER NR. 11 -->

               <div class="tp-caption   tp-resizeme rs-parallaxlevel-3" id="slide-964-layer-45"

                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"

                  data-y="['middle','middle','middle','middle']" data-voffset="['-155','-120','-70','-130']"

                  data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"

                  data-beforeafter="after" data-responsive_offset="on"

                  data-frames='[{"delay":2200,"speed":2000,"frame":"0","from":"x:-200px;y:bottom;rZ:90deg;sX:1;sY:1;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'

                  data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"

                  data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"

                  style="z-index: 15;"><img src="images/tv-2.png" alt=""

                     data-ww="['350px','350px','350px','200px']" data-hh="['250px','250px','250px','130px']"

                     width="1600" height="1600" data-no-retina=""> </div>







               <div

                  class="tp-caption main-slider-text  fontface-one text-color-white  tp-resizeme  tp-blackshadow rs-parallaxlevel-5"

                  id="slide-794-layer-999" data-x="['center','center','center','center']"

                  data-hoffset="['-45','-45','-45','-35']" data-y="['middle','middle','middle','middle']"

                 data-voffset="['50','70','30','0']" data-width="none" data-height="none"

                  data-whitespace="nowrap" data-type="text" data-beforeafter="after" data-responsive_offset="on"

                  data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'

                  data-textalign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"

                  data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[50,50,50,50]"

                  style="z-index: 16; white-space: nowrap; font-size: 50px; line-height: 80px; font-weight: 700;">Effortless Eye <br>

                  Care</div>

               <!-- LAYER NR. 13 -->

               <div class="tp-caption main-slider-detail-text  tp-resizeme rs-parallaxlevel-5"

                  id="slide-964-layer-49" data-x="['center','center','center','center']"

                  data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"

                  data-voffset="['180','210','210','150']" data-width="['960','960','960','320']"

                  data-height="none" data-whitespace="normal" data-type="text" data-beforeafter="after"

                  data-responsive_offset="on"

                  data-frames='[{"delay":600,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'

                  data-textalign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"

                  data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"

                  style="z-index: 11; min-width: 960px; max-width: 960px; white-space: normal; font-size: 13px; line-height: 20px; font-weight: 400; color: #fff; letter-spacing: 1px;font-family:Montserrat;">

                  Revolutionary Eye Testing Software – <br> Accurate Results, Anytime, Anywhere

               </div>



               <!-- LAYER NR. 14 -->

               <div

                  class="tp-caption button-setting background-primary button-setting-primary  tp-resizeme rs-parallaxlevel-4"

                  id="slide-964-layer-44" data-x="['center','center','center','center']"

                  data-hoffset="['0','0','0','0']" data-y="['bottom','bottom','bottom','bottom']"

                  data-voffset="['90','70','70','70']" data-width="none" data-height="none"

                  data-whitespace="nowrap" data-type="text" data-beforeafter="after" data-responsive_offset="on"

                  data-frames='[{"delay":2200,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgb(0,0,0);bg:rgb(255,255,255);"}]'

                  data-textalign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"

                  data-paddingright="[40,40,40,40]" data-paddingbottom="[0,0,0,0]"

                  data-paddingleft="[45,45,45,45]"

                  style="z-index: 18; white-space: nowrap; font-size: 17px;  font-weight: 400; color: #fff; letter-spacing: 1px;font-family:Montserrat;cursor:pointer;">

                  <a href="#about-company-section" class="scroll">Learn More</a>

               </div>

            </li>



            <!-- +++++++++++NEW SLIDE++++++++++++++ -->

            <li data-index="rs-966" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="../../assets/images/night-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-beforeafter='{"moveto":"50%|50%|50%|50%","bgColor":"","bgType":"image","bgImage":"images/slide4.jpg","bgFit":"cover","bgPos":"center center","bgRepeat":"no-repeat","direction":"horizontal","easing":"Power2.easeInOut","delay":"500","time":"750","out":"fade","carousel":false}'>

               <!-- MAIN IMAGE -->

               <img src="images/slide3.png" alt="" data-bgposition="center center" data-kenburns="on" data-duration="5000" data-ease="Power4.easeOut" data-scalestart="150" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-blurstart="30" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="off" class="rev-slidebg" data-no-retina="">

               <!-- LAYERS -->



               <!-- LAYER NR. 3 -->

               <div class="tp-caption   tp-resizeme rs-parallaxlevel-3" id="slide-964-layer-28"

                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"

                  data-y="['center','center','middle','middle']" data-voffset="['10','-70','-70','-0']"

                  data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"

                  data-beforeafter="before" data-responsive_offset="on"

                  data-frames='[{"delay":700,"speed":2000,"frame":"0","from":"x:-200px;y:bottom;rZ:90deg;sX:1;sY:1;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'

                  data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"

                  data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"

                  style="z-index: 7;"><img src="images/tvv.png" alt=""

                    data-ww="['450px','450px','450px','250px']" data-hh="['300px','300px','300px','150px']"

                     width="1600" height="1600" data-no-retina=""> </div>



               <!-- <div class="tp-caption main-slider-text padding-top-35 fontface-one text-color-secondary  tp-resizeme  tp-blackshadow rs-parallaxlevel-5"

                  id="slide-994-layer-999" data-x="['center','center','center','center']"

                  data-hoffset="['-45','-45','-45','-35']" data-y="['middle','middle','middle','middle']"

                  data-voffset="['90','110','110','50']" data-width="none" data-height="none"

                  data-whitespace="nowrap" data-type="text" data-beforeafter="before" data-responsive_offset="on"

                  data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'

                  data-textalign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"

                  data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[50,50,50,50]"

                  style="z-index: 16; white-space: nowrap; font-size: 50px; line-height: 80px; font-weight: 700; color: #000;">

                  Smart Vision <br> Testing</div> -->



               <!-- LAYER NR. 6 -->

               <div class="tp-caption   tp-resizeme  tp-whiteshadow rs-parallaxlevel-5" id="slide-964-layer-1743"

                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"

                  data-y="['middle','middle','middle','middle']" data-voffset="['110','110','110','0']"

                  data-fontsize="['120','120','120','60']" data-lineheight="['120','120','120','60']"

                  data-letterspacing="['50','50','50','30']" data-width="none" data-height="none"

                  data-whitespace="nowrap" data-type="text" data-beforeafter="before" data-responsive_offset="on"

                  data-frames='[{"delay":500,"speed":2000,"frame":"0","from":"opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'

                  data-textalign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"

                  data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[50,50,50,50]"

                  data-blendmode="screen"

                  style="z-index: 10; white-space: nowrap; font-size: 120px; line-height: 120px; font-weight: 400; color: #000000; letter-spacing: 50px;font-family:Montserrat;text-transform:uppercase;">

               </div>



               <!-- LAYER NR. 7 -->

               <!-- <div class="tp-caption padding-top-10 main-slider-detail-text tp-resizeme rs-parallaxlevel-5"

                  id="slide-964-layer-48" data-x="['center','center','center','center']"

                  data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"

                  data-voffset="['180','210','210','150']" data-width="['960','960','960','320']"

                  data-height="none" data-whitespace="normal" data-type="text" data-beforeafter="before"

                  data-responsive_offset="on"

                  data-frames='[{"delay":600,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'

                  data-textalign="['center','center','center','center']" data-paddingtop="[5,5,5,5]"

                  data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[5,5,5,5]"

                  style="z-index: 11; min-width: 960px; max-width: 960px; white-space: normal; font-size: 13px; line-height: 20px; font-weight: 400; color: #000; letter-spacing: 1px;font-family:Montserrat; padding-top: 10px;">

                  Advanced Visual Acuity System for Modern Eye Care Needs

               </div> -->



               <!-- LAYER NR. 8 -->

               <!-- <div

                  class="tp-caption background-secondary button-setting button-setting-primary text-color-white tp-resizeme rs-parallaxlevel-4"

                  id="slide-964-layer-46" data-x="['center','center','center','center']"

                  data-hoffset="['0','0','0','0']" data-y="['bottom','bottom','bottom','bottom']"

                  data-voffset="['90','70','70','70']" data-width="none" data-height="none"

                  data-whitespace="nowrap" data-type="text" data-beforeafter="before" data-responsive_offset="on"

                  data-frames='[{"delay":700,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgb(0,0,0);bg:rgb(255,255,255);"}]'

                  data-textalign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"

                  data-paddingright="[40,40,40,40]" data-paddingbottom="[0,0,0,0]"

                  data-paddingleft="[45,45,45,45]"

                  style="z-index: 12; white-space: nowrap; font-size: 17px;  font-weight: 400; color: #ffffff; letter-spacing: 1px;font-family:Montserrat;cursor:pointer;">

                  <a class="scroll" href="#about-company-section">Learn More</a>

               </div> -->



               <!-- LAYER NR. 10 -->

               <!-- <div class="tp-caption   tp-resizeme rs-parallaxlevel-4" id="slide-964-layer-42"

                  data-x="['center','center','center','center']" data-hoffset="['545','545','545','181']"

                  data-y="['middle','middle','middle','middle']" data-voffset="['-100','-100','-120','-178']"

                  data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"

                  data-beforeafter="after" data-responsive_offset="on"

                  data-frames='[{"delay":2100,"speed":2000,"frame":"0","from":"x:right;y:-500px;rZ:-180deg;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'

                  data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"

                  data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"

                  style="z-index: 14;"><img src="images/letter5.png" alt=""

                     data-ww="['375px','375px','375px','170px']" data-hh="['375px','375px','375px','170px']"

                     width="1500" height="1500" data-no-retina=""> </div> -->



               <!-- LAYER NR. 11 -->

               <div class="tp-caption   tp-resizeme rs-parallaxlevel-3" id="slide-964-layer-45"

                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"

                  data-y="['center','center','middle','middle']" data-voffset="['10','-70','-70','-0']"

                  data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"

                  data-beforeafter="after" data-responsive_offset="on"

                  data-frames='[{"delay":2200,"speed":2000,"frame":"0","from":"x:-200px;y:bottom;rZ:90deg;sX:1;sY:1;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'

                  data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"

                  data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"

                  style="z-index: 15;"><img src="images/tvv.png" alt=""

                     data-ww="['450px','450px','450px','250px']" data-hh="['300px','300px','300px','150px']"

                     width="1600" height="1600" data-no-retina=""> </div>







               <!-- <div

                  class="tp-caption main-slider-text padding-top-35 fontface-one text-color-secondary  tp-resizeme  tp-blackshadow rs-parallaxlevel-5"

                  id="slide-794-layer-999" data-x="['center','center','center','center']"

                  data-hoffset="['-45','-45','-45','-35']" data-y="['middle','middle','middle','middle']"

                  data-voffset="['90','110','110','50']" data-width="none" data-height="none"

                  data-whitespace="nowrap" data-type="text" data-beforeafter="after" data-responsive_offset="on"

                  data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'

                  data-textalign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"

                  data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[50,50,50,50]"

                  style="z-index: 16; white-space: nowrap; font-size: 50px; line-height: 80px; font-weight: 700;">

                  Smart Vision <br> Testing</div> -->

               <!-- LAYER NR. 13 -->

               <!-- <div class="tp-caption main-slider-detail-text tp-resizeme rs-parallaxlevel-5"

                  id="slide-964-layer-49" data-x="['center','center','center','center']"

                  data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"

                  data-voffset="['180','210','210','150']" data-width="['960','960','960','320']"

                  data-height="none" data-whitespace="normal" data-type="text" data-beforeafter="after"

                  data-responsive_offset="on"

                  data-frames='[{"delay":600,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'

                  data-textalign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"

                  data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"

                  style="z-index: 11; min-width: 960px; max-width: 960px; white-space: normal; font-size: 13px; line-height: 20px; font-weight: 400; color: #fff; letter-spacing: 1px;font-family:Montserrat;">

                  Advanced Visual Acuity System for Modern Eye Care Needs

               </div> -->



               <!-- LAYER NR. 14 -->

               <!-- <div

                  class="tp-caption button-setting background-white button-setting-primary  tp-resizeme rs-parallaxlevel-4"

                  id="slide-964-layer-44" data-x="['center','center','center','center']"

                  data-hoffset="['0','0','0','0']" data-y="['bottom','bottom','bottom','bottom']"

                  data-voffset="['90','70','70','70']" data-width="none" data-height="none"

                  data-whitespace="nowrap" data-type="text" data-beforeafter="after" data-responsive_offset="on"

                  data-frames='[{"delay":2200,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgb(0,0,0);bg:rgb(255,255,255);"}]'

                  data-textalign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"

                  data-paddingright="[40,40,40,40]" data-paddingbottom="[0,0,0,0]"

                  data-paddingleft="[45,45,45,45]"

                  style="z-index: 18; white-space: nowrap; font-size: 17px;  font-weight: 400; color: #000; letter-spacing: 1px;font-family:Montserrat;cursor:pointer;">

                  <a href="#about-company-section" class="scroll">Learn More</a>

               </div> -->

            </li>



            <li data-index="rs-967" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="../../assets/images/night-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-beforeafter='{"moveto":"50%|50%|50%|50%","bgColor":"","bgType":"image","bgImage":"images/slide6.jpg","bgFit":"cover","bgPos":"center center","bgRepeat":"no-repeat","direction":"horizontal","easing":"Power2.easeInOut","delay":"500","time":"750","out":"fade","carousel":false}'>

               <!-- MAIN IMAGE -->

               <img src="images/slide5.png" alt="" data-bgposition="center center" data-kenburns="on" data-duration="5000" data-ease="Power4.easeOut" data-scalestart="150" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-blurstart="30" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="off" class="rev-slidebg" data-no-retina="">

               <!-- LAYERS -->



               <!-- LAYER NR. 3 -->

               <!-- <div class="tp-caption   tp-resizeme rs-parallaxlevel-3" id="slide-964-layer-28"

                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"

                  data-y="['middle','middle','middle','middle']" data-voffset="['-140','-70','-70','-170']"

                  data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"

                  data-beforeafter="before" data-responsive_offset="on"

                  data-frames='[{"delay":700,"speed":2000,"frame":"0","from":"x:-200px;y:bottom;rZ:90deg;sX:1;sY:1;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'

                  data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"

                  data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"

                  style="z-index: 7;"><img src="images/tv-5.png" alt=""

                     data-ww="['400px','400px','400px','300px']" data-hh="['300px','300px','300px','150px']"

                     width="1600" height="1600" data-no-retina=""> </div> -->



               <!-- <div class="tp-caption main-slider-text padding-top-35 fontface-one text-color-white  tp-resizeme  tp-blackshadow rs-parallaxlevel-5"

                  id="slide-994-layer-999" data-x="['center','center','center','center']"

                  data-hoffset="['-45','-45','-45','-35']" data-y="['middle','middle','middle','middle']"

                  data-voffset="['90','110','110','50']" data-width="none" data-height="none"

                  data-whitespace="nowrap" data-type="text" data-beforeafter="before" data-responsive_offset="on"

                  data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'

                  data-textalign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"

                  data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[50,50,50,50]"

                  style="z-index: 16; white-space: nowrap; font-size: 50px; line-height: 80px; font-weight: 700; color: #fff;">

                  Precision You Can <br> Trust</div> -->



               <!-- LAYER NR. 6 -->

               <div class="tp-caption   tp-resizeme  tp-whiteshadow rs-parallaxlevel-5" id="slide-964-layer-1743"

                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"

                  data-y="['middle','middle','middle','middle']" data-voffset="['110','110','110','0']"

                  data-fontsize="['120','120','120','60']" data-lineheight="['120','120','120','60']"

                  data-letterspacing="['50','50','50','30']" data-width="none" data-height="none"

                  data-whitespace="nowrap" data-type="text" data-beforeafter="before" data-responsive_offset="on"

                  data-frames='[{"delay":500,"speed":2000,"frame":"0","from":"opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'

                  data-textalign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"

                  data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[50,50,50,50]"

                  data-blendmode="screen"

                  style="z-index: 10; white-space: nowrap; font-size: 120px; line-height: 120px; font-weight: 400; color: #000000; letter-spacing: 50px;font-family:Montserrat;text-transform:uppercase;">

               </div>



               <!-- LAYER NR. 7 -->

               <!-- <div class="tp-caption padding-top-10 main-slider-detail-text tp-resizeme rs-parallaxlevel-5"

                  id="slide-964-layer-48" data-x="['center','center','center','center']"

                  data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"

                  data-voffset="['180','210','210','150']" data-width="['960','960','960','320']"

                  data-height="none" data-whitespace="normal" data-type="text" data-beforeafter="before"

                  data-responsive_offset="on"

                  data-frames='[{"delay":600,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'

                  data-textalign="['center','center','center','center']" data-paddingtop="[5,5,5,5]"

                  data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[5,5,5,5]"

                  style="z-index: 11; min-width: 960px; max-width: 960px; white-space: normal; font-size: 13px; line-height: 20px; font-weight: 400; color: #65ff65; letter-spacing: 1px;font-family:Montserrat; padding-top: 10px;">

                  Transforming Eye Exams with Convenient, Accurate Testing Solutions.

               </div> -->



               <!-- LAYER NR. 8 -->

               <!-- <div

                  class="tp-caption background-white button-setting button-setting-primary text-color-dark tp-resizeme rs-parallaxlevel-4"

                  id="slide-964-layer-46" data-x="['center','center','center','center']"

                  data-hoffset="['0','0','0','0']" data-y="['bottom','bottom','bottom','bottom']"

                  data-voffset="['90','70','70','70']" data-width="none" data-height="none"

                  data-whitespace="nowrap" data-type="text" data-beforeafter="before" data-responsive_offset="on"

                  data-frames='[{"delay":700,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgb(0,0,0);bg:rgb(255,255,255);"}]'

                  data-textalign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"

                  data-paddingright="[40,40,40,40]" data-paddingbottom="[0,0,0,0]"

                  data-paddingleft="[45,45,45,45]"

                  style="z-index: 12; white-space: nowrap; font-size: 17px;  font-weight: 400; color: #000; letter-spacing: 1px;font-family:Montserrat;cursor:pointer;">

                  <a class="scroll" href="#about-company-section">Learn More</a>

               </div> -->



               <!-- LAYER NR. 10 -->

               <!-- <div class="tp-caption   tp-resizeme rs-parallaxlevel-4" id="slide-964-layer-42"

                  data-x="['center','center','center','center']" data-hoffset="['545','545','545','181']"

                  data-y="['middle','middle','middle','middle']" data-voffset="['-100','-100','-120','-178']"

                  data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"

                  data-beforeafter="after" data-responsive_offset="on"

                  data-frames='[{"delay":2100,"speed":2000,"frame":"0","from":"x:right;y:-500px;rZ:-180deg;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'

                  data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"

                  data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"

                  style="z-index: 14;"><img src="images/letter5.png" alt=""

                     data-ww="['375px','375px','375px','170px']" data-hh="['375px','375px','375px','170px']"

                     width="1500" height="1500" data-no-retina=""> </div> -->



               <!-- LAYER NR. 11 -->

               <!-- <div class="tp-caption   tp-resizeme rs-parallaxlevel-3" id="slide-964-layer-45"

                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"

                  data-y="['middle','middle','middle','middle']" data-voffset="['-140','-70','-70','-170']"

                  data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"

                  data-beforeafter="after" data-responsive_offset="on"

                  data-frames='[{"delay":2200,"speed":2000,"frame":"0","from":"x:-200px;y:bottom;rZ:90deg;sX:1;sY:1;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'

                  data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"

                  data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"

                  style="z-index: 15;"><img src="images/tv-6.png" alt=""

                     data-ww="['400px','400px','400px','300px']" data-hh="['300px','300px','300px','150px']"

                     width="1600" height="1600" data-no-retina=""> </div> -->







               <!-- <div

                  class="tp-caption main-slider-text padding-top-35 fontface-one text-color-dark  tp-resizeme  tp-blackshadow rs-parallaxlevel-5"

                  id="slide-794-layer-999" data-x="['center','center','center','center']"

                  data-hoffset="['-45','-45','-45','-35']" data-y="['middle','middle','middle','middle']"

                  data-voffset="['90','110','110','50']" data-width="none" data-height="none"

                  data-whitespace="nowrap" data-type="text" data-beforeafter="after" data-responsive_offset="on"

                  data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'

                  data-textalign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"

                  data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[50,50,50,50]"

                  style="z-index: 16; white-space: nowrap; font-size: 50px; line-height: 80px; font-weight: 700;">

                  Precision You Can <br> Trust</div> -->

               <!-- LAYER NR. 13 -->

               <!-- <div class="tp-caption main-slider-detail-text tp-resizeme rs-parallaxlevel-5"

                  id="slide-964-layer-49" data-x="['center','center','center','center']"

                  data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"

                  data-voffset="['180','210','210','150']" data-width="['960','960','960','320']"

                  data-height="none" data-whitespace="normal" data-type="text" data-beforeafter="after"

                  data-responsive_offset="on"

                  data-frames='[{"delay":600,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'

                  data-textalign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"

                  data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"

                  style="z-index: 11; min-width: 960px; max-width: 960px; white-space: normal; font-size: 13px; line-height: 20px; font-weight: 400; color: #000; letter-spacing: 1px;font-family:Montserrat;">

                  Transforming Eye Exams with Convenient, Accurate Testing Solutions.

               </div> -->



               <!-- LAYER NR. 14 -->

               <!-- <div

                  class="tp-caption button-setting background-secondary button-setting-primary  tp-resizeme rs-parallaxlevel-4"

                  id="slide-964-layer-44" data-x="['center','center','center','center']"

                  data-hoffset="['0','0','0','0']" data-y="['bottom','bottom','bottom','bottom']"

                  data-voffset="['90','70','70','70']" data-width="none" data-height="none"

                  data-whitespace="nowrap" data-type="text" data-beforeafter="after" data-responsive_offset="on"

                  data-frames='[{"delay":2200,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgb(0,0,0);bg:rgb(255,255,255);"}]'

                  data-textalign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"

                  data-paddingright="[40,40,40,40]" data-paddingbottom="[0,0,0,0]"

                  data-paddingleft="[45,45,45,45]"

                  style="z-index: 18; white-space: nowrap; font-size: 17px;  font-weight: 400; color: #fff; letter-spacing: 1px;font-family:Montserrat;cursor:pointer;">

                  <a href="#about-company-section" class="scroll">Learn More</a>

               </div> -->

            </li>



         </ul>

         <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>

      </div>

   </div>

   <!-- END REVOLUTION SLIDER -->



</section>

<!-- /Main Slider Section End -->





<!-- About Company Section -->

<section class="about-company-section background-grey padding-top-bottom" id="about">

   <div class="container">

      <!-- About Company Slider -->

      <div class="about-company-slider-section">

         <div class="about-company-slider swiper-container">

            <div class="swiper-wrapper">

            <div class="swiper-slide">

                  <div class="about-company-slide">

                     <div class="row">

                        <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2">

                           <div class="about-slider-image-section clearfix position-relative">

                              <div class="about-slider-images-section-inner">

                                 <img src="images/about-4.jpg" alt="about-slider-image" data-slide="animated" data-animate="zoomIn">

                              </div>

                              <div class="about-img-gradient-box gradient-bg-pink-purple" data-slide="animated" data-animate="zoomIn"></div>

                           </div>

                        </div>

                        <div class="col-lg-6 vertical-align-about-caption">

                           <div class="about-slider-img-detail" data-slide="animated" data-animate="fadeInRight">

                              <p class="text-color-secondary paragraph-20 fontface-two padding-bottom-25">Real-Time Insights</p>

                              <h2 class="fontface-one text-color-dark padding-bottom-35">Instant Results, Track Progress</h2>

                              <p class="text-color-dark paragraph-15 padding-bottom-35 text-color-darkgrey">

                                 OPTIC CHART &#174; offers real-time insights and progress tracking, allowing patients and practitioners to monitor eye health over time. Immediate results help inform decisions quickly, while the tracking feature keeps a record of past tests. This empowers users with ongoing knowledge of their eye health status for improved outcomes.</p>

                              <p class="text-color-dark paragraph-15 padding-bottom-45 text-color-darkgrey">

                                 Real-time results and tracking empower users with instant insights. OPTIC CHART &#174; enables ongoing monitoring, helping maintain consistent eye health for better long-term vision care.</p>

                              <!-- <a href="#." class="button-setting background-secondary text-color-white button-setting-primary">

                                 Learn More</a> -->

                           </div>

                        </div>

                     </div>

                  </div>

               </div>


               <div class="swiper-slide">

                  <div class="about-company-slide">

                     <div class="row">

                        <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2">

                           <div class="about-slider-image-section clearfix position-relative">

                              <div class="about-slider-images-section-inner">

                                 <img src="images/about-1.jpeg" alt="about-slider-image" data-slide="animated" data-animate="zoomIn">

                              </div>

                              <div class="about-img-gradient-box gradient-bg-green-blue" data-slide="animated" data-animate="zoomIn"></div>

                           </div>

                        </div>

                        <div class="col-lg-6 vertical-align-about-caption">

                           <div class="about-slider-img-detail" data-slide="animated" data-animate="fadeInRight">

                              <p class="text-color-secondary paragraph-20 fontface-two padding-bottom-25">Complete Eye Health Check</p>

                              <h2 class="fontface-one text-color-dark padding-bottom-35">Early Vision Issue Detection</h2>

                              <p class="text-color-dark paragraph-15 padding-bottom-35 text-color-darkgrey">

                                 OPTIC CHART &#174; provides a complete eye health check by offering a wide range of visual acuity tests. From standard assessments to specialized exams, the software is designed to detect early vision issues with accuracy. This comprehensive approach ensures a reliable diagnosis, helping users maintain their eye health and address concerns promptly.</p>

                              <p class="text-color-dark paragraph-15 padding-bottom-45 text-color-darkgrey">

                                 With OPTIC CHART &#174;, users gain access to thorough eye health checks. Its variety of tests quickly identifies potential vision issues, supporting early detection and proactive care for optimal eye health.</p>

                              <!-- <a href="#." class="button-setting background-primary text-color-white button-setting-secondary"> Learn More </a> -->

                           </div>

                        </div>

                     </div>

                  </div>

               </div>



               <div class="swiper-slide">

                  <div class="about-company-slide">

                     <div class="row">

                        <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2">

                           <div class="about-slider-image-section clearfix position-relative">

                              <div class="about-slider-images-section-inner">

                                 <img src="images/about-2.jpeg" alt="about-slider-image" data-slide="animated" data-animate="zoomIn">

                              </div>

                              <div class="about-img-gradient-box gradient-bg-pink-purple" data-slide="animated" data-animate="zoomIn"></div>

                           </div>

                        </div>

                        <div class="col-lg-6 vertical-align-about-caption">

                           <div class="about-slider-img-detail" data-slide="animated" data-animate="fadeInRight">

                              <p class="text-color-secondary paragraph-20 fontface-two padding-bottom-25">Accurate Testing Methods</p>

                              <h2 class="fontface-one text-color-dark padding-bottom-35">Versatile Eye Tests for All</h2>

                              <p class="text-color-dark paragraph-15 padding-bottom-35 text-color-darkgrey">

                                 OPTIC CHART &#174; includes a diverse array of testing methods to meet unique vision care needs. With options like the Snellen chart, color vision tests, and contrast sensitivity checks, the software adapts to each individual’s requirements. This variety allows for tailored testing and delivers accurate insights for both practitioners and patients.</p>

                              <p class="text-color-dark paragraph-15 padding-bottom-45 text-color-darkgrey">

                                 OPTIC CHART’s &#174; adaptable testing methods ensure precise assessments. Its versatile test options, from standard to specialized, allow individualized care and effective monitoring of patients’ vision health.</p>

                              <!-- <a href="#." class="button-setting background-secondary text-color-white button-setting-primary">Learn More </a> -->

                           </div>

                        </div>

                     </div>

                  </div>

               </div>



               <div class="swiper-slide">

                  <div class="about-company-slide">

                     <div class="row">

                        <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2">

                           <div class="about-slider-image-section clearfix position-relative">

                              <div class="about-slider-images-section-inner">

                                 <img src="images/about-3.jpeg" alt="about-slider-image" data-slide="animated" data-animate="zoomIn">

                              </div>

                              <div class="about-img-gradient-box gradient-bg-green-blue" data-slide="animated" data-animate="zoomIn"></div>

                           </div>

                        </div>

                        <div class="col-lg-6 vertical-align-about-caption">

                           <div class="about-slider-img-detail" data-slide="animated" data-animate="fadeInRight">

                              <p class="text-color-secondary paragraph-20 fontface-two padding-bottom-25">Easy & Reliable Use</p>

                              <h2 class="fontface-one text-color-dark padding-bottom-35">Precision with a Simple Interface</h2>

                              <p class="text-color-dark paragraph-15 padding-bottom-35 text-color-darkgrey">

                                 OPTIC CHART &#174; is designed to be both user-friendly and clinically reliable. Its intuitive interface ensures that anyone, from eye care professionals to first-time users, can navigate it effortlessly. With clinical-grade accuracy, it delivers trustworthy results, making it an essential tool for modern eye testing in various settings.</p>

                              <p class="text-color-dark paragraph-15 padding-bottom-45 text-color-darkgrey">

                                 OPTIC CHART &#174; combines ease of use with clinical precision, providing accurate results. Its intuitive design suits professionals and individuals, ensuring reliable eye testing for everyone.</p>

                              <!-- <a href="#." class="button-setting background-primary text-color-white button-setting-secondary">Learn More </a> -->

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

            </div>

            <div class="swiper-pagination d-none d-sm-none d-md-none d-lg-block"></div>

         </div>

      </div>



      <section class="blog-section" id="demo-video">

         <div class="container d-flex">

            <div class="blog-inner-detail position-relative pad-top">

               <div class="row align-items-center justify-content-center">

                  <div class="col-lg-6 col-md-6 col-sm-12">

                     <div class="blog-inner-detail vertical-align-about-caption text-md-left text-center wow fadeInLeft" data-wow-delay="300ms">

                        <div class="blog-detail-text">

                           <h2 class="fontface-one text-color-dark pb-5">See the <span class="font-weight-700 text-color-secondary">Software in Action</span>

                           </h2>

                           <p class="paragraph-14 text-color-darkgrey fontface-two padding-bottom-50">

                              Watch our demo video to experience how Optic Chart &#174; simplifies eye testing with intuitive tools and precise results.

                           </p>

                           <!-- <a href="blog.php" class="button-setting background-primary button-setting-secondary fontface-one text-color-white">Read Full Story</a> -->

                        </div>

                     </div>

                  </div>

                  <div class="main-display col-lg-6 col-md-6 col-sm-12">

                     <video src="images/demo-video.mp4" alt="blog-picture" class="width-100 display-video" autoplay muted controls>

                     </video>

                     <img src="images/display-tv.png" class="display-tv" alt="">

                  </div>

               </div>

            </div>

         </div>

      </section>

      <section class="blog-section" id="demo-video">

         <div class="container d-flex">

            <div class="blog-inner-detail position-relative pad-top pad-0">

               <div class="row align-items-center justify-content-center">

                  <div class="col-lg-6 col-md-12">

                     <!-- <video src="images/demo-video.mp4" alt="blog-picture" class="width-100 display-video" autoplay muted>

                     </video> -->

                     <img src="images/multi-display.png" alt="" width="100%">

                  </div>

                  <div class="col-lg-6 col-md-12">

                     <div class="blog-inner-detail vertical-align-about-caption text-md-left text-center wow fadeInLeft" data-wow-delay="300ms">

                        <div class="blog-detail-text">

                           <h2 class="fontface-one text-color-dark pb-5">Download Now and <span class="font-weight-700 text-color-secondary">Transform Your Vision!</span>

                           </h2>

                           <p class="paragraph-14 text-color-darkgrey fontface-two padding-bottom-20">

                              Get the OPTIC CHART &#174; app today from the Play Store and unlock advanced eye testing tools right at your fingertips. Designed for precision and ease, our software ensures accurate diagnostics and seamless functionality for professionals. Download now and take the first step toward revolutionizing eye care!

                           </p>

                           <div class="download-now d-flex align-items-center">

                              <a href="https://play.google.com/work?hl=en_IN" target="_blank"><img src="images/playstore.png" alt="" width="150"></a>

                              <img src="images/brand-logo.png" alt="" class="brand-logo" width="250">

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

            </div>

         </div>

      </section>


      <section class="blog-section" id="pricing">

         <div class="container d-flex tv-container">

            <div class="blog-inner-detail position-relative pad-top">

               <div class="row align-items-center justify-content-center phone-width">

                  <h2 class="fontface-one text-color-dark pb-5">Smart Solutions for <span class="font-weight-700 text-color-secondary">Every TV Type</span>

                  </h2>

                  <div class="d-flex justify-content-between align-items-center p-5 phone-width col-lg-12 col-md-12 col-sm-12">

                     <div class="col-lg-4 col-md-12 col-sm-12 bora pr-20 same_height">

                        <div class="blog-inner-detail vertical-align-about-caption text-md-left text-center wow fadeInLeft" data-wow-delay="300ms">

                           <div class="blog-detail-text text-center">

                              <h6 class="fontface-one text-color-dark text-instart pb-3">For <span class="font-weight-700 text-color-secondary">Smart Tv</span>

                              </h6>

                              <img src="images/setup-1.png" alt="" class="pb-3 stick-tv">

                              <p class="paragraph-14 text-color-darkgrey fontface-two padding-bottom-30 p-3 minheight">

                                 <strong>Download Optic Chart &#174; Apps:</strong> Most smart TVs come with built-in app stores where you can download OpticChart Ensure your TV is connected to the internet for Activate by License Key get it on the time of BUY.

                              </p>

                              <a href="javascript:;" class="buy-btn">Buy Now</a>

                           </div>

                        </div>

                     </div>

                     <div class="col-lg-4 col-md-12 col-sm-12 bora pr-20 same_height">

                        <div class="blog-inner-detail vertical-align-about-caption text-md-left text-center wow fadeInLeft" data-wow-delay="300ms">

                           <div class="blog-detail-text text-center">

                              <h6 class="fontface-one text-color-dark text-instart pb-3">For <span class="font-weight-700 text-color-secondary">Non Smart Tv</span>

                              </h6>

                              <img src="images/setup-2.png" alt="" class="pb-3 stick-tv">

                              <p class="paragraph-14 text-color-darkgrey fontface-two padding-bottom-30 p-3 minheight">

                                 <strong>HDMI OpticChart TV Stick 4K Max:</strong> Offers 4K HDR support Setup is simple, and it provides smooth performance with Wi-Fi 6 support​. If your TV supports HDMI and you’re looking for versatility and value, options like the OpticChart TV Stick. Ensure your TV is connected to the internet for Activate by License Key get it on the time of BUY.

                              </p>

                              <a href="javascript:;" class="buy-btn">Buy Now</a>

                           </div>

                        </div>

                     </div>

                     <div class="col-lg-4 col-md-12 col-sm-12 bora same_height">

                        <div class="blog-inner-detail vertical-align-about-caption text-md-left text-center wow fadeInLeft" data-wow-delay="300ms">

                           <div class="blog-detail-text text-center">

                              <h6 class="fontface-one text-color-dark text-instart pb-3">For <span class="font-weight-700 text-color-secondary">Complete Kit</span>

                              </h6>

                              <img src="images/setup-3.png" alt="" class="pb-3 stick-tv">

                              <p class="paragraph-14 text-color-darkgrey fontface-two padding-bottom-30 p-3 minheight">

                                 <strong>Complete Kit - All-in-One Solution:</strong> Get everything you need in one package! The Complete Kit includes the OpticChart software pre-installed on a dedicated hardware device, ensuring seamless integration and top-notch performance. Designed for both smart and non-smart TVs, this kit simplifies setup and guarantees precise eye testing results.

                              </p>

                              <a href="javascript:;" class="buy-btn">Buy Now</a>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

            </div>

         </div>

      </section>



      <!-- About Company Services -->

      <div class="about-company-services">

         <div class="section-heading text-center">

            <div class="row">

               <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">

                  <h2 class="fontface-one text-color-dark padding-bottom-35 wow fadeInUp" data-wow-delay="300ms">What <span class="text-color-secondary font-weight-700">We Offer</span></h2>

                  <p class="paragraph-15 fontface-two text-color-darkgrey wow fadeInUp" data-wow-delay="350ms">

                     Advanced tools for accurate, efficient, and accessible eye care.</p>

               </div>

            </div>

         </div>

         <div class="about-company-services-block">

            <div class="row">

               <div class="col-lg-4 offset-lg-0 col-md-6 offset-md-3 offset-sm-0">

                  <div class="about-company-services-block-inner background-white text-center wow fadeInUp" data-wow-delay="300ms">

                     <div class="about-company-services-block-inner-icon"><i class="fa fa-eye" aria-hidden="true"></i></div>

                     <h4 class="fontface-one text-color-dark font-weight-700 padding-bottom-10">Smart Calibration</h4>

                     <p class="text-color-secondary paragraph-14 font-weight-300 fontface-two padding-bottom-20">Visual Accuracy </p>

                     <p class="text-color-darkgrey paragraph-14 fontface-two">

                        Optimizes calibration for each test, ensuring accuracy and reliable results, enhancing diagnostic confidence. </p>

                  </div>

               </div>

               <div class="col-lg-4 offset-lg-0 col-md-6 offset-md-3 offset-sm-0">

                  <div class="about-company-services-block-inner background-white text-center wow fadeInUp" data-wow-delay="350ms">

                     <div class="about-company-services-block-inner-icon"><i class="fas fa-pencil-alt"></i></div>

                     <h4 class="fontface-one text-color-dark font-weight-700 padding-bottom-10">Adaptive Testing</h4>

                     <p class="text-color-secondary paragraph-14 font-weight-300 fontface-two padding-bottom-20">Personalized Exams</p>

                     <p class="text-color-darkgrey paragraph-14 fontface-two">

                        Adjusts testing parameters based on individual needs, enhancing accuracy and user experience.</p>

                  </div>

               </div>

               <div class="col-lg-4 offset-lg-0 col-md-6 offset-md-3 offset-sm-0">

                  <div class="about-company-services-block-inner background-white text-center wow fadeInUp" data-wow-delay="400ms">

                     <div class="about-company-services-block-inner-icon"><i class="fa fa-search" aria-hidden="true"></i></div>

                     <h4 class="fontface-one text-color-dark font-weight-700 padding-bottom-10">Instant Analysis </h4>

                     <p class="text-color-secondary paragraph-14 font-weight-300 fontface-two padding-bottom-20">Real-Time Feedback</p>

                     <p class="text-color-darkgrey paragraph-14 fontface-two">

                        Provides immediate insights, allowing for quick diagnosis and efficient decision-making.</p>

                  </div>

               </div>

            </div>

         </div>

      </div>

   </div>

</section>

<!-- /About Company Section End -->







<!-- Company Information Banner Start -->

<section class="company-information-section padding-top-bottom bg-setting" data-parallax="scroll" data-image-src="images/display-about.jpeg" id="company-information-section">

   <div class="container">

      <div class="row">

         <div class="col-lg-7 col-md-8">

            <div class="company-information-inner">

               <p class="paragraph-18 fontface-two font-weight-300 text-color-white padding-bottom-25 wow fadeInLeft" data-wow-delay="300ms">Revolutionizing eye care with advanced software solutions.</p>

               <h2 class="text-color-white fontface-one padding-bottom-35 wow fadeInLeft" data-wow-delay="350ms">Clear Vision, <span class="font-weight-700 ">Accurate Results</span></h2>

               <p class="text-color-white fontface-two paragraph-23 padding-bottom-45 wow fadeInLeft" data-wow-delay="400ms">Optic Chart &#174; offers cutting-edge eye testing software designed to deliver accurate, efficient results for comprehensive vision assessments.</p>

               <!-- <a href="#." class="button-setting background-white button-setting-primary text-color-dark wow fadeInLeft" data-wow-delay="400ms">Learn More</a> -->

            </div>

         </div>

      </div>

   </div>

</section>

<!-- /Company Information Banner End -->



<!-- Company Portfolio Start -->

<section class="company-portfolio-section padding-top-bottom" id="features">

   <div class="container">

      <div class="section-heading">

         <div class="row">

            <div class="col-lg-6 wow fadeInUp pad-bottom" data-wow-delay="300ms">

               <p class="fontface-two text-color-secondary paragraph-20 padding-bottom-25">Comprehensive Eye Tests</p>

               <h2 class="fontface-one text-color-dark padding-bottom-35">Advanced Methods for <span class="text-color-dark font-weight-700 ">Accurate Vision AssessmentWork</span></h2>

            </div>

            <div class="col-md-12">

               <!-- <div id="js-filters-mosaic" class="cbp-l-filters-button wow fadeInUp" data-wow-delay="350ms">

                  <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> All</div>

                  <div class="cbp-divider"> |</div>

                  <div data-filter=".print" class="cbp-filter-item">Print</div>

                  <div class="cbp-divider">|</div>

                  <div data-filter=".web-design" class="cbp-filter-item">Web Design</div>

                  <div class="cbp-divider"> |</div>

                  <div data-filter=".motion" class="cbp-filter-item"> Motion</div>

                  <div class="cbp-divider"> |</div>

                  <div data-filter=".graphic" class="cbp-filter-item">Graphic</div>

               </div> -->



               <div id="js-grid-mosaic" class="cbp cbp-l-grid-mosaic">

                  <div class="cbp-item graphic">

                     <a href="images/etdrs-chart.png" class="cbp-caption cbp-lightbox" data-title="Workout Buddy<br>by Tiberiu Neamu">

                        <div class="cbp-caption-defaultWrap">

                           <img src="images/etdrs-chart.png" alt="">

                        </div>

                        <div class="cbp-caption-activeWrap portfolio-hover-effect"></div>

                     </a>

                     <h3 class="fontface-one font-weight-500 portfolio-heading-text padding-top-30 padding-bottom-15">ETDRS CHART</h3>

                     <p class="fontface-two paragraph-18 font-weight-500 portfolio-detail-text">With ETDRS convertion unity</p>

                  </div>



                  <div class="cbp-item motion">

                     <a href="images/green-red.png" class="cbp-caption cbp-lightbox" data-title="Workout Buddy<br>by Tiberiu Neamu">

                        <div class="cbp-caption-defaultWrap">

                           <img src="images/green-red.png" alt="">

                        </div>

                        <div class="cbp-caption-activeWrap portfolio-hover-effect"></div>

                     </a>

                     <h3 class="fontface-one font-weight-500 portfolio-heading-text padding-top-30 padding-bottom-15">RED GREEN TEST</h3>

                     <p class="fontface-two paragraph-18 font-weight-500 portfolio-detail-text">Refine Eyeglass prescription.</p>

                  </div>



                  <div class="cbp-item print web-design">

                     <a href="images/dots.png" class="cbp-caption cbp-lightbox" data-title="Workout Buddy<br>by Tiberiu Neamu">

                        <div class="cbp-caption-defaultWrap">

                           <img src="images/dots.png" alt="">

                        </div>

                        <div class="cbp-caption-activeWrap portfolio-hover-effect"></div>

                     </a>

                     <h3 class="fontface-one font-weight-500 portfolio-heading-text padding-top-30 padding-bottom-15">WORTH 4 DOT TEST</h3>

                     <p class="fontface-two paragraph-18 font-weight-500 portfolio-detail-text">Assess degree of binocular vision</p>

                  </div>



                  <div class="cbp-item web-design">

                     <a href="images/colorblind.png" class="cbp-caption cbp-lightbox" data-title="Workout Buddy<br>by Tiberiu Neamu">

                        <div class="cbp-caption-defaultWrap">

                           <img src="images/colorblind.png" alt="">

                        </div>

                        <div class="cbp-caption-activeWrap portfolio-hover-effect"></div>

                     </a>

                     <h3 class="fontface-one font-weight-500 portfolio-heading-text padding-top-30 padding-bottom-15">Color vision test</h3>

                     <p class="fontface-two paragraph-18 font-weight-500 portfolio-detail-text">All 36 colored plates</p>

                  </div>

                  <!-- 

                  <div class="cbp-item print">

                     <a href="images/portfolio-6.jpg" class="cbp-caption cbp-lightbox" data-title="Workout Buddy<br>by Tiberiu Neamu">

                        <div class="cbp-caption-defaultWrap">

                           <img src="images/portfolio-6.jpg" alt="">

                        </div>

                        <div class="cbp-caption-activeWrap portfolio-hover-effect"><i class="ti-zoom-in"></i></div>

                     </a>

                     <h3 class="fontface-one font-weight-500 portfolio-heading-text padding-top-30 padding-bottom-15">SEO Work</h3>

                     <p class="fontface-two paragraph-18 font-weight-500 portfolio-detail-text">Some SEO Ideas</p>

                  </div> -->



                  <div class="cbp-item graphic">

                     <a href="images/astigmatic.png" class="cbp-caption cbp-lightbox" data-title="Workout Buddy<br>by Tiberiu Neamu">

                        <div class="cbp-caption-defaultWrap">

                           <img src="images/astigmatic.png" alt="">

                        </div>

                        <div class="cbp-caption-activeWrap portfolio-hover-effect"></div>

                     </a>

                     <h3 class="fontface-one font-weight-500 portfolio-heading-text padding-top-30 padding-bottom-15">ASTIGMATIC TESTS</h3>

                     <p class="fontface-two paragraph-18 font-weight-500 portfolio-detail-text">Many dial astigmatic tests</p>

                  </div>



                  <div class="cbp-item motion">

                     <a href="images/figure.png" class="cbp-caption cbp-lightbox" data-title="Workout Buddy<br>by Tiberiu Neamu">

                        <div class="cbp-caption-defaultWrap">

                           <img src="images/figure.png" alt="">

                        </div>

                        <div class="cbp-caption-activeWrap portfolio-hover-effect"></div>

                     </a>

                     <h3 class="fontface-one font-weight-500 portfolio-heading-text padding-top-30 padding-bottom-15">Figures</h3>

                     <p class="fontface-two paragraph-18 font-weight-500 portfolio-detail-text">Easely discernible figures for kids</p>

                  </div>

               </div>



               <!-- <div id="js-loadMore-lightbox-gallery" class="cbp-l-loadMore-button wow fadeInUp" data-wow-delay="650ms">

                  <a href="portfolio-loadfile/index.php" class="cbp-l-loadMore-link button-setting button-setting-primary background-secondary text-color-white" rel="nofollow">

                     <span class="cbp-l-loadMore-defaultText">Load More</span>

                     <span class="cbp-l-loadMore-loadingText">Loading...</span>

                     <span class="cbp-l-loadMore-noMoreLoading">No More Works</span>

                  </a>

               </div> -->

            </div>

         </div>

      </div>

   </div>

</section>

<!-- Company Portfolio End -->



<!-- Pricing Table Start -->

<!-- <section class="pricing-table-section padding-top-bottom pb-0 background-grey" id="pricing">

   <div class="container">

      <div class="section-heading text-center">

         <div class="row">

            <div class="col-lg-8   offset-lg-2 col-md-8 offset-md-2">

               <h2 class="fontface-one text-color-dark padding-bottom-35 wow fadeInUp" data-wow-delay="300ms">Pricing<span class="text-color-secondary font-weight-700"> Plans</span></h2>

               <p class="paragraph-15 fontface-two text-color-darkgrey wow fadeInUp" data-wow-delay="350ms">

               Get Started with <strong>OPTIC CHART.</strong></p>

            </div>

         </div>

      </div>



      <div class="pricing-table-outer">

         <div class="row justify-content-center">

            <div class="col-lg-12 col-md-12 col-sm-12">

               <div class="pricing-table-inner text-center wow fadeInUp" data-wow-delay="300ms">

                  <div class="row justify-content-center">

                     <div class="price-left col-lg-5">

                           <i class="fas fa-user text-color-secondary"></i>

                           <p class="pt-5">Single Display</p>

                     </div>

                     <div class="price-right col-lg-7">

                     <div class="col-md-12">

                        <h4 class="font-weight-600 text-color-secondary fontface-one padding-bottom-20">Single Plan Display</h4>

                     </div>

                     <div class="col-md-12">

                        <p class="paragraph-14 fontface-two text-color-darkgrey  padding-bottom-30">

                           The Basic Plan is perfect for small practices or individual users who need essential eye testing tools with reliable results.

                        </p>

                     </div>

                     <div class="col-md-12">

                        <h2 class="pricing-main-price fontface-one font-weight-700 text-color-dark">

                           <span class="paragraph-20 pricing-currency-sign font-weight-600 fontface-two">&#8377;</span> 10,000

                           <span class="paragraph-16 font-weight-400 fontface-two"> /Year per screen</span>

                        </h2>

                     </div>

                     <div class="col-md-12">

                        <ul class="pricing-detail-list padding-top-25 padding-bottom-45">

                           <li class="paragraph-15 text-color-darkgrey fontface-two padding-top-15">Full access to the OPTIC CHART software for one year</li>

                           <li class="paragraph-15 text-color-darkgrey fontface-two padding-top-15">Security key generated at the time of purchase</li>

                           <li class="paragraph-15 text-color-darkgrey fontface-two padding-top-15">Download the app from the Play Store</li>

                           <li class="paragraph-15 text-color-darkgrey fontface-two padding-top-15">Unlimited eye-testing tools and features</li>

                           <li class="paragraph-15 text-color-darkgrey fontface-two padding-top-15">24/7 customer support</li>

                        </ul>

                     </div>

                     <div class="col-md-12">

                        <a href="#." class="button-setting background-secondary  button-setting-primary">Subscribe Now</a>

                     </div>

                     </div>

                  </div>

               </div>

            </div>

         </div>

      </div>

   </div>

</section> -->

<!-- Pricing Table End -->



<!-- Company Stats Information Start -->

<section class="company-stats-section background-grey padding-top-bottom" id="stats-section">

   <div class="container">

      <div class="row">

         <div class="col-lg-7 order-md-12 order-sm-12 order-12 order-lg-1">

            <div class="row">

               <div class="col-lg-4 col-md-4 col-sm-4">

                  <div class="stats-block-inner text-center wow fadeInUp" data-wow-delay="300ms">

                     <i class="ti-hand-point-right text-color-dark "></i>

                     <div class="stats-number-inner text-color-dark fontface-one font-weight-700 padding-top-20">

                        <span>1200</span>+

                     </div>

                     <p class="paragraph-16 font-weight-400 fontface-two text-color-dark padding-top-5">Satisfied Practitioners</p>

                  </div>

               </div>



               <div class="col-lg-4 col-md-4 col-sm-4">

                  <div class="stats-block-inner text-center wow fadeInUp" data-wow-delay="350ms">

                     <i class="ti-bar-chart text-color-dark "></i>

                     <div class="stats-number-inner text-color-dark fontface-one font-weight-700 padding-top-20">

                        <span>900</span>+

                     </div>

                     <p class="paragraph-16 font-weight-400 fontface-two text-color-dark padding-top-5">Validated Tests</p>

                  </div>

               </div>

               <div class="col-lg-4 col-md-4 col-sm-4">

                  <div class="stats-block-inner text-center wow fadeInUp" data-wow-delay="400ms">

                     <i class="ti-blackboard text-color-dark "></i>

                     <div class="stats-number-inner text-color-dark fontface-one font-weight-700 padding-top-20">

                        <span>1500</span>+

                     </div>

                     <p class="paragraph-16 font-weight-400 fontface-two text-color-dark padding-top-5">Successful Screenings</p>

                  </div>

               </div>

            </div>

         </div>



         <div class="col-lg-5 order-md-1 order-sm-1 order-1 order-lg-12">

            <div class="row">

               <div class="col-lg-12">

                  <div class="stats-heading text-right padding-bottom-30 wow fadeInUp" data-wow-delay="300ms">

                     <h2 class="text-color-dark fontface-one">Why</h2>

                     <h2 class="text-color-dark fontface-one">Optic <span class="text-color-secondary ">Chart?</span></h2>

                  </div>

                  <div class="stats-heading-detail text-right wow fadeInUp" data-wow-delay="350ms">

                     <p class="paragraph-14 text-color-darkgrey fontface-two">Optic Chart &#174; brings accurate, affordable, and convenient eye diagnostics to any setting. Trusted by professionals, our validated system ensures reliable results for modern eye health assessments.</p>

                  </div>

               </div>

            </div>

         </div>

      </div>

   </div>

</section>

<!-- Company Stats Information End -->


<!-- Exhibition Section  -->
<div class="container pad-top">
   <div class="about-company-slider-section">

      <h2 class="fontface-one text-color-dark pb-5">Upcoming <span class="font-weight-700 text-color-secondary">Exhibitions</span>

      </h2>

      <div class="exhibition-slider swiper-container">

         <div class="swiper-wrapper">

            <div class="swiper-slide">

               <div class="about-company-slide">

                  <div class="row">

                     <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2">

                        <div class="about-slider-image-section clearfix position-relative">

                           <div class="about-slider-images-section-inner exhibition-slider-images">

                              <a href="https://optikamumbai.in/" target="_blank"> <img src="images/exhibition-1.jpg" alt="about-slider-image" data-slide="animated" data-animate="zoomIn"></a>

                           </div>

                           <!-- <div class="about-img-gradient-box gradient-bg-green-blue" data-slide="animated" data-animate="zoomIn"></div> -->

                        </div>

                     </div>

                     <div class="col-lg-6 vertical-align-about-caption">

                        <div class="blog-inner-detail vertical-align-about-caption text-md-left text-center wow fadeInLeft" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInLeft;">
                           <div class="blog-detail-text">
                              <h2 class="fontface-one text-color-dark"><a href="https://optikamumbai.in/" target="_blank">OptikaMumbai 2025</a>
                              </h2>
                              <ul class="blog-meta padding-bottom-35">
                                 <li><a href="javascript:void(0)"><i class="fa fa-calendar-alt"></i> 1st - 3rd April 2025</a></li>
                              </ul>
                              <p class="padding-bottom-20">The organising team is passionate about creating high-quality events that engage visitors and spark curiosity. Whether you're looking to learn, explore, or simply enjoy the experience, make sure to mark your attendance at NESCO, Mumbai from 1-3 February 2025.</p>
                              <p class="paragraph-20 text-color-secondary fontface-one padding-bottom-35">Location : <span class="paragraph-14 text-color-darkgrey fontface-two">
                                    Stall No. D29, NESCO, GAOREGAON EAST, MUMBAI
                                 </span></p>

                              <a href="https://optikamumbai.in/" target="_blank" class="buy-btn buy-btn2">View More</a>
                           </div>
                        </div>

                     </div>

                  </div>

               </div>

            </div>

            <div class="swiper-slide">

               <div class="about-company-slide">

                  <div class="row">

                     <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2">

                        <div class="about-slider-image-section clearfix position-relative">

                           <div class="about-slider-images-section-inner exhibition-slider-images">

                              <a href="https://2025.apaophth.org/" target="_blank"> <img src="images/exhibition-1.jpg" alt="about-slider-image" data-slide="animated" data-animate="zoomIn"></a>

                           </div>

                           <!-- <div class="about-img-gradient-box gradient-bg-pink-purple" data-slide="animated" data-animate="zoomIn"></div> -->

                        </div>

                     </div>

                     <div class="col-lg-6 vertical-align-about-caption">

                        <div class="blog-inner-detail vertical-align-about-caption text-md-left text-center wow fadeInLeft" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInLeft;">
                           <div class="blog-detail-text">
                              <h2 class="fontface-one text-color-dark"><a href="https://2025.apaophth.org/s" target="_blank">APAO / AIOC 2025</a>
                              </h2>
                              <ul class="blog-meta padding-bottom-35">
                                 <li><a href="javascript:void(0)"><i class="fa fa-calendar-alt"></i> 3rd - 6th April 2025</a></li>
                              </ul>
                              <p class="padding-bottom-20">The 40th Asia-Pacific Academy of Ophthalmology Congress
                                 In Conjunction with The 83rd Annual Conference of the All India Ophthalmological Society</p>
                              <p class="paragraph-20 text-color-secondary fontface-one padding-bottom-35">Location : <span class="paragraph-14 text-color-darkgrey fontface-two">
                                    Stall no - N17 & N18, NESCO, GAOREGAON EAST, MUMBAI
                                 </span></p>

                              <a href="https://2025.apaophth.org/" target="_blank" class="buy-btn buy-btn2">View More</a>
                           </div>
                        </div>

                     </div>

                  </div>

               </div>

            </div>

         </div>

         <div class="button-container">
            <div class="swiper-button-prev left-button">
               <i class="fas fa-chevron-left"></i>
            </div>
            <div class="swiper-button-next right-button">
               <i class="fas fa-chevron-right"></i>
            </div>
         </div>


      </div>

   </div>
</div>

<!-- Exhibition Section End  -->


<!-- Contact Form Section Start -->

<section class="contact-form-section pad-top" id="contact">

   <div class="container">

      <div class="row">

         <div class="col-lg-5">

            <div class="company-contact-detail wow fadeInLeft" data-wow-delay="300ms">

               <div class="contact-heading padding-bottom-35">

                  <h2 class="fontface-one text-color-dark ">Connect with</h2>

                  <h2 class="fontface-one text-color-dark"><span class="font-weight-700">Optic Chart &#174;<span class="text-color-secondary">.</span></span>

                  </h2>

               </div>

               <p class="paragraph-14 text-color-darkgrey fontface-two">

                  Reach out to us for inquiries, support, or more information about Optic Chart’s &#174; features and services.</p>

               <div class="contact-detail-list">

                  <ul>

                     <li class="paragraph-15 text-color-darkgrey fontface-two padding-top-10">Location, World</li>

                     <!-- <li class="paragraph-15 text-color-darkgrey fontface-two padding-top-10">Ha Noi, Viet Nam</li> -->

                     <li class="paragraph-15 text-color-darkgrey fontface-two padding-top-10">123456789</li>

                     <li class="paragraph-15 text-color-darkgrey fontface-two padding-top-10">example@gmail.com</li>

                  </ul>

               </div>



               <div class="contact-company-icons padding-top-35">

                  <ul class="company-social-icons">

                     <li class="company-social-icons-list">

                        <a href="#." class="facebook-icon"> <i class="fab fa-facebook-f"></i></a>

                     </li>

                     <li class="company-social-icons-list">

                        <a href="#." class="twitter-icon"> <i class="fab fa-twitter"></i> </a>

                     </li>



                     <li class="company-social-icons-list">

                        <a href="#." class="instagram-icon"><i class="fab fa-instagram"></i></a>

                     </li>



                     <li class="company-social-icons-list">

                        <a href="#." class="googleplus-icon"><i class="fab fa-google-plus-g"></i></a>

                     </li>

                  </ul>

               </div>

            </div>

         </div>



         <div class="col-lg-6 offset-lg-1">

            <div class="company-contact-form wow fadeInRight" data-wow-delay="300ms">

               <h3 class="text-color-dark font-weight-600 fontface-one padding-bottom-45">Write Us</h3>

               <form class="contact-form-outer">

                  <div class="row">

                     <div class="col-md-6">

                        <div class="contact-form-textfield padding-bottom-30">

                           <input type="text" placeholder="Your Name" class="form-control paragraph-16">

                        </div>

                     </div>

                     <div class="col-md-6">

                        <div class="contact-form-textfield padding-bottom-30">

                           <input type="email" placeholder="Your Email" class="form-control paragraph-16">

                        </div>

                     </div>

                     <div class="col-md-12">

                        <div class="contact-form-textfield padding-bottom-45">

                           <input type="text" placeholder="Subject" class="form-control paragraph-16">

                        </div>

                     </div>

                     <div class="col-md-12">

                        <div class="contact-form-textfield padding-bottom-40">

                           <textarea placeholder="Your Message" class="form-control paragraph-16"></textarea>

                        </div>

                     </div>

                     <div class="col-md-12">

                        <a class="buy-btn buy-btn2 container-fluid" href="#.">Send Message</a>

                     </div>

                  </div>

               </form>

            </div>

         </div>

      </div>

   </div>

</section>

<!-- Contact Form Section End -->


<!-- Google Map Section -->

<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14030.746935896712!2d77.28769243204172!3d28.45885832014583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce75cda53c4e3%3A0xf44b9bfd6ae1f17f!2sSSR%20Corporate%20Park%2C%20NH-19%2C%20Ekta%20Nagar%2C%20Faridabad%2C%20Haryana%20121003!5e0!3m2!1sen!2sin!4v1731498408654!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->

<div class="footprints pad-top">
   <div class="container">
      <h2 class="fontface-one text-color-dark pb-5">Our <span class="font-weight-700 text-color-secondary">Footprints</span>
      </h2>
      <img src="images/map.png" alt="" class="foot_img">
   </div>
</div>

<!-- /Google Map Section End -->




<?php include("include/footer.php") ?>