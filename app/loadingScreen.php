<meta http-equiv="refresh" content="3;url=index.php" />

<style>
body {
    margin: 0;
}

#slidecaption {
     -webkit-animation-name: spinner; 
    -webkit-animation-timing-function: linear; 
    -webkit-animation-iteration-count: infinite; 
    -webkit-animation-duration: 1s; 
    animation-name: spinner; 
    animation-timing-function: linear; 
    animation-iteration-count: infinite; 
    animation-duration: 4s; 
    -webkit-transform-style: preserve-3d; 
    -moz-transform-style: preserve-3d; 
    -ms-transform-style: preserve-3d; 
    transform-style: preserve-3d;
}

  /* WebKit and Opera browsers */ @-webkit-keyframes spinner { 
    from 
    { 
        -webkit-transform: rotateY(0deg); 
    } 
    to { 
        -webkit-transform: rotateY(-360deg); 
    } 
} /* all other browsers */ 
@keyframes spinner { 
    from { 
        -moz-transform: rotateY(0deg); 
        -ms-transform: rotateY(0deg); 
        transform: rotateY(0deg); 
    } 
    to 
    { 
        -moz-transform: rotateY(-360deg); 
        -ms-transform: rotateY(-360deg); 
        transform: rotateY(-360deg); 
    
    } 
}
</style>

<div style="width: 100%;
            height: 100%;
            display: grid;
            justify-content: center;
            align-items: center;
            margin: 0;">
    <img id="slidecaption" src="../images/logo.png" alt="" style="width: 300px;" />
</div>