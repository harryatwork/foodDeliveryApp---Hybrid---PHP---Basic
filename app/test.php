<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.2/flexslider.css">

<link rel="stylesheet" href="flex.css">
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-backstretch/2.0.4/jquery.backstretch.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.2/jquery.flexslider.js"></script>

<!--

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/linuxguist/flexslider@main/css/flexslider.css" type="text/css" media="screen" />

  <script src="https://cdn.jsdelivr.net/gh/linuxguist/flexslider@main/js/modernizr.js"></script>

  <script defer src="https://cdn.jsdelivr.net/gh/linuxguist/flexslider@main/js/jquery.flexslider.js"></script>

  <script src="https://cdn.jsdelivr.net/gh/linuxguist/flexslider@main/js/jquery.easing.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/linuxguist/flexslider@main/js/jquery.mousewheel.js"></script>
  <script defer src="https://cdn.jsdelivr.net/gh/linuxguist/flexslider@main/js/demo.js"></script>

-->

<style type="text/css">

.slider_background{
background:#eee;
}
.slide-caption {
padding:0;
height:76px;
margin:0;
margin-top:34%;
width:auto;
}
.slide-caption .btn-primary{
width:100%;
height:100%;
display:inline-block;
vertical-align: middle;
font-weight:normal;
font-size:18px;
}
.slide-caption .btn-primary span{
display:inline-block;
vertical-align: middle;
}
.centerer{
height:100%;
width:0;
display:inline-block;
vertical-align: middle;
}
.slide-caption{
color:khaki;
background-color:#373737;
}
.slider-container{
overflow:hidden;
}
.slide-caption .row, .slide-caption .col-md-2{
height:100%;
}
.slide-caption .slide-text{
padding:6px 45px;
}
.slider-container .slider-left, .slider-container .slider-right {
padding:0;
margin-bottom: -9999px;
padding-bottom: 9986px;
}
.slider-right{
padding:15px;
background:#00aced;
}
.slider-right h2{
font-weight:normal!important;
font-family: Roboto, sans-serif;
color:#fff !important;
text-transform: uppercase;
font-size:18px;
line-height: 26px;
margin: 15px;
padding-left: 15px;
}
.slider-right ul{
margin:0;
padding:0;
list-style:none;
}
.slider-right .arrow{
-webkit-transition: all 0.2s ease-out;
transition: all 0.2s ease-out;
line-height:normal;
float:right;
color:#346100;
font-weight: 100;
font-size:14px;
}
.slide-title{
margin-bottom: 3px;
font-size:20px;
color:#fff;
}
.slider-right ul li a{
-webkit-transition: all 0.2s ease-out;
transition: all 0.2s ease-out;
display:block;
padding:20px 30px;
background:#f6f5f6;
text-transform: uppercase;
font-size:16px;
color:#475055;
margin-bottom: -1px;
}
.slider-right ul li a:hover{
background:#00aced;
text-decoration:none;
color:#fff;
}
.slider-right ul li a:hover .arrow{
color:#fff;
}
.slider-right .glyphicon{
display:inline-block;
}

</style>

<script>
$(document).ready(function () {
if (jQuery().flexslider) {
    //flexslider ticker
    $('.flexslider-ticker').each(function() {
      var tickerSettings =  {
        animation: "fade",
        animationLoop: false,
        selector: ".items > .item",
        move: 1,
        controlNav: true,
        directionNav: true,
        pausePlay: false,
        slideshow: true,
        direction: 'vertical',
        slideshowSpeed: 2000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
        animationSpeed: 0,            //Integer: Set the speed of animations, in milliseconds
        pauseOnAction: true,            //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
        pauseOnHover: false,            //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
        touch: true,                    //{NEW} Boolean: Allow touch swipe navigation of the slider on touch-enabled devices
        video: false,                   //{NEW} Boolean: If using video in the slider, will prevent CSS3 3D Transforms to avoid graphical glitches


      };
      $(this).flexslider(tickerSettings);
    });

    // flexsliders
    $('.flexslider').each(function() {
      var sliderSettings =  {
        animation: $(this).attr('data-transition'),
        selector: ".slides > .slide",
        controlNav: true,
        directionNav: true,
        pausePlay: false,
        slideshow: true,
        direction: 'vertical',
        slideshowSpeed: 2000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
        animationSpeed: 0,            //Integer: Set the speed of animations, in milliseconds
        pauseOnAction: true,            //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
        pauseOnHover: false,            //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
        touch: true,                    //{NEW} Boolean: Allow touch swipe navigation of the slider on touch-enabled devices
        video: false,                   //{NEW} Boolean: If using video in the slider, will prevent CSS3 3D Transforms to avoid graphical glitches        
        smoothHeight: true,
        prevText: "<<",
        nextText: ">>",
        sync: $(this).data('slidernav') || '',
        start: function(slider) {
          if (slider.find('[data-slide-bg-stretch=true]').length > 0) {
            slider.find('[data-slide-bg-stretch=true]').each(function() {
              if ($(this).data('slide-bg')) {
                $(this).backstretch($(this).data('slide-bg'));
                // $(this).data('slide-bg');
              }
            });
          }
        }
      };
      
      $('html').addClass('has-flexslider');
      $(this).flexslider(sliderSettings);
    });
    // $(window).delay(1000).trigger('resize'); //make sure height is right load assets loaded
}})
</script>

<!-- @zone - hightlighted -->
<!--Showshow-->
<div class="container slider-container">
   <div class="row">
      <div class="col-md-12 slider-left">
         <section class="flexslider-wrapper">
            <div id="main-slider" class="flexslider" data-transition="fade" data-page-class="slider-full-width">
               <div class="slides">
                  <div data-slide-alt="alt" data-slide-bg-stretch=true class="slide slide-bg" data-slide-bg="https://i.imgur.com/GRRgUd3.jpg">
                     <div class="slide-caption">
                        <!-- <div class="row">
                           <div class="col-md-12">
                              <div class="slide-text">
                                 <div class="slide-title">This is Slide #1</div>
                                 This is text for the first slide.
                              </div>
                           </div>
                        </div> -->
                     </div>
                  </div>
                  <div data-slide-alt="alt" data-slide-bg-stretch=true class="slide slide-bg" data-slide-bg="https://i.imgur.com/3bL2SS0.jpg">
                     <div class="slide-caption">
                        <!-- <div class="row">
                           <div class="col-md-12">
                              <div class="slide-text">
                                 <div class="slide-title">This is Slide #2</div>
                                 This is text for the second slide.
                              </div>
                           </div>
                        </div> -->
                     </div>
                  </div>
                  <div data-slide-alt="alt" data-slide-bg-stretch=true class="slide slide-bg" data-slide-bg="https://i.imgur.com/rVDVtJa.jpg">
                     <div class="slide-caption">
                        <!-- <div class="row">
                           <div class="col-md-12">
                              <div class="slide-text">
                                 <div class="slide-title">This is Slide #3</div>
                                 This is text for the third slide.
                              </div>
                           </div>
                        </div> -->
                     </div>
                  </div>
               </div>
         </section>
         </div>
      </div>
   </div>
</div>

