<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Portfolio Ebol</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
.responsive_icon {
    margin-left: 45vw;
  }
@media screen and (max-width: 700px) {
  .responsive_icon {
    margin-left: 27.5vw;
  }
}

</style>  

</head>
<body style="background-color: #006600; margin: 0px; padding: 0px;">
<img style="display: left; z-index: 0; width: 100vw; height: 50vh;" src="../home/img_geral/capaPE-11.png"/><br/><br/>
<img class="responsive_icon"  src="../home/img_geral/port-5-ico.png"/>
<br/>
<br/>



<div class="w3-content" style="max-width:1200px">
  <img class="mySlides" src="../home/img_geral/peadd001-5-sc01.png" style="width:100%;display:none">
  <img class="mySlides" src="../home/img_geral/peadd001-5-sc02.png" style="width:100%">
  <img class="mySlides" src="../home/img_geral/peadd001-5-sc03.png" style="width:100%;display:none">

  <div class="w3-row-padding w3-section">
    <div class="w3-col s4">
      <img class="demo w3-opacity w3-hover-opacity-off" src="../home/img_geral/peadd001-5-sc01.png" style="width:100%;cursor:pointer" onclick="currentDiv(1)">
    </div>
    <div class="w3-col s4">
      <img class="demo w3-opacity w3-hover-opacity-off" src="../home/img_geral/peadd001-5-sc02.png" style="width:100%;cursor:pointer" onclick="currentDiv(2)">
    </div>
    <div class="w3-col s4">
      <img class="demo w3-opacity w3-hover-opacity-off" src="../home/img_geral/peadd001-5-sc03.png" style="width:100%;cursor:pointer" onclick="currentDiv(3)">
    </div>
  </div>
</div>

<a href="https://files.appsgeyser.com/porfolioebolio_17158038.apk" download><div style="position: relative; display:inline-block; width:100vw; height: 50vh;border: 1px solid black;"><img style="width:100%; height:50vh;" src="../home/img_geral/download_app.png"/></div></a>
  
<script>
function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}
</script>

</body>
</html>