<style>
@keyframes tonext {
  75% {
    left: 0;
  }
  95% {
    left: 100%;
  }
  98% {
    left: 100%;
  }
  99% {
    left: 0;
  }
}

@keyframes tostart {
  75% {
    left: 0;
  }
  95% {
    left: -300%;
  }
  98% {
    left: -300%;
  }
  99% {
    left: 0;
  }
}

@keyframes snap {
  96% {
    scroll-snap-align: center;
  }
  97% {
    scroll-snap-align: none;
  }
  99% {
    scroll-snap-align: none;
  }
  100% {
    scroll-snap-align: center;
  }
 }


.banners {
	 position: relative;
	 filter: drop-shadow(0 0 10px #000 3);
	 height: 700px;
}
 .banners *::-webkit-scrollbar {
	 width: 0;
}
 .banners *::-webkit-scrollbar-track {
	 background: transparent;
}
 .banners *::-webkit-scrollbar-thumb {
	 background: transparent;
	 border: none;
}
 .banners * {
	 -ms-overflow-style: none;
}
 .banners__viewport, .banners__li {
	 list-style: none;
	 margin: 0;
	 padding: 0;
}
 .banners__viewport {
	 position: absolute;
	 overflow-y: hidden;
	 top: 0;
	 right: 0;
	 bottom: 0;
	 left: 0;
	 display: flex;
	 overflow-x: scroll;
	 counter-reset: item;
	 scroll-behavior: smooth;
	 scroll-snap-type: x mandatory;
}
 .banners__li__img {
	 width: 100%;
	 height: 100%;
	 object-fit: cover;
}
 .banners__li__nav {
	 position: absolute;
	 top: 38%;
	 color: white;
	 display: grid;
	 justify-content: space-between;
	 grid-template-columns: auto auto;
	 width: 100%;
	 z-index: 99;
}
 .banners__li__nav a {
	 color: white;
}
 .banners__slide {
	 position: relative;
	 flex: 0 0 100%;
	 width: 100%;
	 background-color: #f99;
	 counter-increment: item;
}
 .banners .bannerOne ::ng-deep .bannerContent {
	 display: grid;
	 grid-template-rows: auto 1fr;
	 position: absolute;
	 top: 0;
	 width: 100%;
	 height: 100%;
}
 .banners .bannerOne ::ng-deep .bannerContent .contentSecOne {
	 padding: 1% 4%;
	 display: grid;
	 gap: 10%;
	 width: 15%;
	 text-align: center;
	 width: fit-content;
}
 .banners .bannerOne ::ng-deep .bannerContent .contentSecOne p {
	 margin: 0;
	 font-size: 24px;
	 letter-spacing: 0.7px;
	 color: white;
}
 .banners .bannerOne ::ng-deep .bannerContent .contentSecOne .contentSecOneSub {
	 font-size: 36px;
	 letter-spacing: 0.7px;
	 color: white;
	 display: flex;
	 align-items: center;
}
 .banners .bannerOne ::ng-deep .bannerContent .contentSecOne .contentSecOneSub span {
	 display: grid;
	 padding: 2px;
}
 .banners .bannerOne ::ng-deep .bannerContent .contentSecOne .contentSecOneSub span img {
	 width: 40px;
}
 .banners .bannerOne ::ng-deep .bannerContent .contentSectionTwo {
	 display: grid;
	 grid-template-rows: auto auto 1fr;
	 justify-content: center;
	 margin: 0 auto 8%;
	 background: white;
	 width: fit-content;
	 padding: 16px 16px 0;
	 border-radius: 10px;
}
 .banners .bannerOne ::ng-deep .bannerContent .contentSectionTwo h4 {
	 font-weight: normal;
	 margin: 0;
	 font-size: 24px;
	 letter-spacing: 0.7px;
}
 .banners .bannerOne ::ng-deep .bannerContent .contentSectionTwo p {
	 font-style: italic;
	 letter-spacing: 0.7px;
	 margin: 7px 0;
}
 .banners .bannerOne ::ng-deep .bannerContent .contentSectionTwo .contentSecTwoSubOne {
	 width: 600px;
}
 .banners .bannerOne ::ng-deep .bannerContent .contentSectionTwo .contentSecTwoSubOne video {
	 object-fit: cover;
	 width: 100%;
	 height: 100%;
}
 .banners .bannerOne ::ng-deep .bannerContent .contentSectionTwo .contentSecTwoSubTwo {
	 display: flex;
	 justify-content: center;
	 font-size: 14px;
	 padding: 1%;
	 gap: 8%;
}
 .banners .bannerTwo ::ng-deep .bannerContent {
	 display: grid;
	 position: absolute;
	 top: 0;
	 width: 100%;
	 height: 100%;
}
 .banners .bannerTwo ::ng-deep .bannerContent .contentSecOne {
	 display: grid;
	 gap: 10%;
	 width: 15%;
	 text-align: left;
	 height: fit-content;
	 line-height: 0.8;
	 letter-spacing: 0.7px;
	 padding: 5% 8%;
}
 .banners .bannerTwo ::ng-deep .bannerContent .contentSecOne p {
	 font-size: 32px;
	 margin: 0;
}
 .banners .bannerTwo ::ng-deep .bannerContent .contentSecOne span {
	 font-size: 40px;
	 color: #c6601d;
}
 .banners .bannerThree ::ng-deep .bannerContent {
	 display: grid;
	 position: absolute;
	 justify-content: space-between;
	 top: 0;
	 width: 100%;
	 height: 100%;
	 grid-template-columns: 40% 50%;
	 align-items: end;
	 grid-template-rows: 1fr 10%;
	 justify-content: end;
	 gap: 5%;
}
 .banners .bannerThree ::ng-deep .bannerContent .contentSecOne {
	 padding: 4%;
	 line-height: 40px;
	 background: linear-gradient(0deg, rgba(72, 70, 39, 1) 0%, rgba(72, 70, 39, 0.7) 40%, rgba(255, 255, 255, 0) 100%);
	 border-radius: 16px;
	 color: white;
	 font-size: 16px;
	 letter-spacing: 0.7px;
}
 .banners .bannerThree ::ng-deep .bannerContent .contentSecOne h4 {
	 font-size: 24px;
}
 .banners .bannerThree ::ng-deep .bannerContent .contentSectionTwo .contentSecTwoSub {
	 height: 400px;
	 border: 4px solid #e3b438;
	 padding: 4px;
}
 .banners .bannerThree ::ng-deep .bannerContent .contentSectionTwo .contentSecTwoSub video {
	 object-fit: cover;
	 width: 100%;
	 height: 100%;
}
 .banners .bannerThree ::ng-deep .bannerContent .contentSectionTwo .contentSecTwoSub img {
	 width: 100%;
	 height: 100%;
}
 .banners__slide:nth-child(even) {
	 background-color: #99f;
}
 .banners__snapper {
	 position: absolute;
	 top: 0;
	 left: 0;
	 width: 100%;
	 height: 100%;
	 scroll-snap-align: center;
}
 .banners__navigation {
	 position: absolute;
	 right: 0;
	 bottom: 0;
	 left: 0;
	 text-align: center;
}
 .banners__navigation-button {
	 display: inline-block;
	 width: 25px;
	 background: white;
	 height: 3px;
	 border-radius: 4px;
	 border: none;
	 transition: transform 0.1s;
	 text-decoration: none;
}
 .banners__navigation-button::after {
	 width: 100%;
	 display: block;
	 content: '\00a0';
}
 .banners .navArrow {
	 height: fit-content;
	 width: fit-content;
	 font-size: 200px;
	 font-weight: 100;
	 opacity: 0.2;
}
 .banners .navArrow:hover {
	 opacity: 0.7;
}
 @media (hover: hover) {
	 .banners__snapper {
		 animation-name: tonext, snap;
		 animation-timing-function: ease;
		 animation-duration: 4s;
		 animation-iteration-count: infinite;
	}
	 .banners__slide:last-child .banners__snapper {
		 animation-name: tostart, snap;
	}
}
 @media (prefers-reduced-motion: reduce) {
	 .banners__snapper {
		 animation-name: none;
	}
}
 .banners:hover .banners__snapper, .banners:focus-within .banners__snapper {
	 animation-name: none;
}
 .banners__navigation-list {
	 display: flex;
	 justify-content: center;
	 gap: 10px;
	 padding: 2% 0;
}
 .banners__navigation-item {
	 display: inline-block;
}
 .banners__navigation-item .currentSlideBottomNav {
	 height: 5px;
	 width: 45px;
}
 .banners__viewport::before, .banners__viewport::after, .banners__prev, .banners__next {
	 position: absolute;
	 top: 0;
	 margin-top: 10%;
	 width: 4rem;
	 height: 4rem;
	 transform: translateY(-50%);
	 border-radius: 50%;
	 font-size: 0;
	 outline: 0;
}
 .banners__viewport::before, .banners__prev {
	 left: -1rem;
}
 .banners__viewport::after, .banners__next {
	 right: -1rem;
}
 
</style>

<section class="banners" aria-label="Gallery">
  <ol class="banners__viewport">
  
      <li class="banners__li banners__slide" 
          id="slide1"
      >
          <img class="banners__li__img" 
               src="https://www.designingbuildings.co.uk/w/images/6/6f/Field-175959_640.jpg" 
               alt="" />
        <div class="banners__snapper"></div>
      </li>
      
      <li class="banners__li banners__slide" 
          id="slide1"
      >
          <img class="banners__li__img" 
               src="https://www.nobroker.in/blog/wp-content/uploads/2023/01/Types-Of-Land-Zoning-1.jpg" 
               alt="" />
        <div class="banners__snapper"></div>
      </li>
    
  </ol>
</section>