<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
.myDiv {
  border: 1px outset skyblue;
  background-color: skyblue;    
  text-align: center;
  font-size: 27px;
}
.myDiv1 {
  padding: 0px;
 }
.dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 12px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

.dropdown {
  position: right-side;
  display: inline-block;
  text-align: left;
  float: right;

}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 140px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 9px 12px;
  text-decoration: none;
  display: block;
  font-size: 17px;

}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
button {
        display: inline-block;
        background-color: #7b38d8;
        border-radius: 10px;
        border: 4px double #cccccc;
        color: #eeeeee;
        text-align: center;
        font-size: 30px;
        padding: 25px;
        width: 290px;
        transition: all 0.5s;
        cursor: pointer;
        margin: 10px;
      }
      button span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
      }
      button span:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
      }
      button:hover {
        background-color: #f7c2f9;
      }
      button:hover span {
        padding-right: 25px;
      }
      button:hover span:after {
        opacity: 1;
        right: 0;
      }
.column {
  float: right;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}
.column1 {
  float: left;
  width: 66.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: black;
  padding: 15px;
  text-align: center;
  background: #1abc9c;
  font-size: 20px;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
.fixed {
  position: fixed;
  bottom: 0;
  right: 0;
}  
 .italic {
    font-style:italic;
  }
* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container1 {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column3 {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}  
</style>
</head>
<body>
<div class="myDiv">
  <h5 style="color: black; font-size: 6">***KAMALAKAR RAO BOREWELLS***</h5>
  </div>
  <div class ="myDiv1">
  <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Select Location</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#contact">Contact</a>
  </div>
</div>
</div>
</div>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img1.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img2.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
<div>
<button onclick="exemyFunction()">BOREWELLS</button>
<button onclick="exemyFunction()">CASING PIPES</button>
<button onclick="exemyFunction()">MOTORS</button>
<button onclick="exemyFunction()">OTHERS</button>
</div>
<div class="column">
    <div class="card">
      <img src="img3.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Mike Ross</h2>
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>mike@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
<div class="column1">
    <div class="card">
      <div class="container">
        <h5 class="title">OVERVIEW & HISTORY</h5>
		<div class="italic">
        <p><font size="5">KAMALAKAR Borewells is recognized as one of the most leading and reliable multi disciplinary drilling contractors in WARANGAL. Borewell is one of the best business now a days and it has a great future ahead. Having more than Fourteen years of experience in this business, the company has been offering best solutions for all kinds of water related problems. Our highly experienced drilling operators and dedicated technical personnel are integral part of the company who has perfection in bore well drilling. Our borewell drilling services are preferred by many clients to cater their varied needs of industrial, commercial, agricultural, construction and municipal applications. Our company is known as well drilling service provider who undertakes all types of boreworks in all types of soil. We have been serving both rural & city clients everywhere in WARANGAL.</font></p>
      </div>
	  </div>
    </div>
  </div> 
<h2 style="text-align:center">Slideshow Gallery</h2>

<div class="container1">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="img1.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="img3.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="img2.jpg" style="width:100%">
  </div>
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="img4.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="img5.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="img6.jpg" style="width:100%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column3">
      <img class="demo cursor" src="img1.jpg" style="width:100%" onclick="currentSlide(1)" alt="Borewells">
    </div>
    <div class="column3">
      <img class="demo cursor" src="img2.jpg" style="width:100%" onclick="currentSlide(2)" alt="navaneeth">
    </div>
    <div class="column3">
      <img class="demo cursor" src="img3.jpg" style="width:100%" onclick="currentSlide(3)" alt="poorna">
    </div>
	<div class="column3">
      <img class="demo cursor" src="img4.jpg" style="width:100%" onclick="currentSlide(1)" alt="Borewells">
    </div>
    <div class="column3">
      <img class="demo cursor" src="img5.jpg" style="width:100%" onclick="currentSlide(2)" alt="navaneeth">
    </div>
    <div class="column3">
      <img class="demo cursor" src="img6.jpg" style="width:100%" onclick="currentSlide(3)" alt="poorna">
    </div>
  </div>
</div>  
<hr size="8" width="90%" color="red"> 

<h5 style="color: black; font-size: 20; text-align: center; font-style:italic;">@2019 Kamalakar Rao Borewells--Warangal</h5>
<h5 style="color: black; font-size: 20; text-align: center; font-style:italic;">contact@ 9550064265</h5>
<script>
function exemyFunction() {
window.location.href = "some.html";
}
</script>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html> 
