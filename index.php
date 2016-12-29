<!DOCTYPE html>
<html>
<title>Brendon Fatland Portfolio</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
.w3-sidenav a,.w3-sidenav h4 {font-weight:bold}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidenav/menu -->
<nav class="w3-sidenav w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidenav"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="brendon.jpg" style="width:100%;" class="w3-round"><br><br>
    <h4 class="w3-padding-0"><b>Brendon Fatland</b></h4>
  </div>
  <a href="#portfolio" onclick="w3_close()" class="w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>PORTFOLIO</a> 
  <a href="#about" onclick="w3_close()" class="w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT</a> 
  <a href="#contact" onclick="w3_close()" class="w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
   
  <div class="w3-section w3-padding-top w3-large">
    <a href="https://www.facebook.com/brendon.fatland" class="w3-hover-white w3-hover-text-indigo w3-show-inline-block"><i class="fa fa-facebook-official"></i></a>
    <a href="https://www.linkedin.com/in/brendon-fatland-6b196662" class="w3-hover-white w3-hover-text-indigo w3-show-inline-block"><i class="fa fa-linkedin"></i></a>
  </div>
</nav>

<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header class="w3-container w3-border-bottom w3-border-grey w3-margin-bottom w3-padding" id="portfolio">
    <a href="#"><img src="brendon.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-opennav w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <h1><b>My Portfolio</b></h1>
   
  </header>
  
  <!-- First Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="dg.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Bark & Buzz</b></p>
        <p>Redesigned website. Fixed all broken and hidden links. Fully setup site. Added uniform color palette througout site.</p>
		<a class="w3-btn w3-round-xxlarge" href="http://www.barkbuzzdoggrooming.com/">Click Here to visit website</a>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
	  <div class="w3-content w3-display-container">
		<img class="mySlides" src="jenny1.jpg" style="width:100%">
		<img class="mySlides" src="jenny3.jpg" style="width:100%">
		<img class="mySlides" src="jenny2.jpg" style="width:100%">

		<a class="w3-btn-floating w3-display-left" onclick="plusDivs(-1)">&#10094;</a>
		<a class="w3-btn-floating w3-display-right" onclick="plusDivs(1)">&#10095;</a>
	  </div>
      <div class="w3-container w3-white">
        <p><b>Jenny's Photo Website</b></p>
        <p>From scratch, mobile first, photo portfolio website. The client has yet to pick out the final title of the company and a URL. Comming soon. For now enjoy the pictures of the local copy. I've added both mobile and web display in the photos for your consideration.</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="chatroom.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Dynamic Chatroom</b></p>
        <p>Fun chatroom app that I built using Socket.io. To get the most out of this, try this site along with a friend!</p>
		<a class="w3-btn w3-round-xxlarge" href="https://enigmatic-mesa-65398.herokuapp.com/">Click Here to visit website</a>
		<a class="w3-btn w3-round-xxlarge w3-margin-top" href="https://github.com/Brendonfatland/dynamic_chatroom">Click Here to view the code</a>
      </div>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="birthday.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>My wife's birthday present</b></p>
        <p>I created a slideshow website for my wife. I love her. </p>
		<a class="w3-btn w3-round-xxlarge" href="https://brendonfatland.github.io/jennysBirthday/#">Click Here to visit website</a>
		<a class="w3-btn w3-round-xxlarge w3-margin-top" href="https://github.com/Brendonfatland/jennysBirthday">Click Here to view the code</a>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="googleapi.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Google API APP</b></p>
        <p>Showing off my Google API skills by creating an app with my favorite places to visit in Minnesota.</p>
		<a class="w3-btn w3-round-xxlarge" href="https://brendonfatland.github.io/5BestPlacesToVisitInMinnesota/">Click Here to visit website</a>
		<a class="w3-btn w3-round-xxlarge w3-margin-top" href="https://github.com/Brendonfatland/5BestPlacesToVisitInMinnesota">Click Here to view the code</a>
		
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="tictactoe.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>JavaScript Tic Tac Toe Game</b></p>
        <p>Tic Tac Toe at it's finest!</p>
		<a class="w3-btn w3-round-xxlarge" href="https://brendonfatland.github.io/tic-tac-toe/">Click Here to visit website</a>
		<a class="w3-btn w3-round-xxlarge w3-margin-top" href="https://github.com/Brendonfatland/tic-tac-toe">Click Here to view the code</a>
		
      </div>
    </div>
  </div>
  
    <!-- Third Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="youtube.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Youtube API</b></p>
        <p>Having fun playing around with the Youtube API.  </p>
		<a class="w3-btn w3-round-xxlarge" href="https://brendonfatland.github.io/YouTubeAPI/">Click Here to visit website</a>
		<a class="w3-btn w3-round-xxlarge w3-margin-top" href="https://github.com/Brendonfatland/YouTubeAPI">Click Here to view the code</a>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="pokemon.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Pokemon Quiz App</b></p>
        <p>If there is one app I'd show off, it's this one. This uses some complex jQuery and JavaScript code to make a fancy quiz app. Not to mention this quiz comes from a real pokemon episode!</p>
		<a class="w3-btn w3-round-xxlarge" href="https://brendonfatland.github.io/quizApp/">Click Here to visit website</a>
		<a class="w3-btn w3-round-xxlarge w3-margin-top" href="https://github.com/Brendonfatland/quizApp">Click Here to view the code</a>
	
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="hotcold.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Hot or Cold app</b></p>
        <p>This is a very pretty app. This took more logic then originally expected. However I am very pleased with the results.</p>
		<a class="w3-btn w3-round-xxlarge" href="https://brendonfatland.github.io/hot-or-cold-starter/">Click Here to visit website</a>
		<a class="w3-btn w3-round-xxlarge w3-margin-top" href="https://github.com/Brendonfatland/hot-or-cold-starter">Click Here to view the code</a>
		
      </div>
    </div>
  </div>
  
      <!-- Fourth Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="fizzbuzz.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>FizzBuzz</b></p>
        <p>Thinkful Challenge, create a FizzBuzz app. Mission accomplished.</p>
		<a class="w3-btn w3-round-xxlarge" href="https://brendonfatland.github.io/FizzBuzz/">Click Here to visit website</a>
		<a class="w3-btn w3-round-xxlarge w3-margin-top" href="https://github.com/Brendonfatland/FizzBuzz">Click Here to view the code</a>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="shopping.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Shopping List</b></p>
        <p>This Shopping List UI is a neat little bit of code that will come in handy some day!</p>
		<a class="w3-btn w3-round-xxlarge" href="https://brendonfatland.github.io/shopping-list/">Click Here to visit website</a>
		<a class="w3-btn w3-round-xxlarge w3-margin-top" href="https://github.com/Brendonfatland/shopping-list">Click Here to view the code</a>
	
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="ryu.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Street Fighter!</b></p>
        <p>Perhaps one of the fun apps I've built. Ryu is pretty awesome!</p>
		<a class="w3-btn w3-round-xxlarge" href="https://brendonfatland.github.io/jQuery-streetfighter/">Click Here to visit website</a>
		<a class="w3-btn w3-round-xxlarge w3-margin-top" href="https://github.com/Brendonfatland/jQuery-streetfighter">Click Here to view the code</a>
		
      </div>
    </div>
  </div>

        <!-- Fifth Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="starwars.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Star Wars Responsive</b></p>
        <p>I built a responsive site from scratch. Please test this by using your phone and PC or simply minimizing the screen from the top.</p>
		<a class="w3-btn w3-round-xxlarge" href="https://brendonfatland.github.io/star-wars-responsive-challenge/">Click Here to visit website</a>
		<a class="w3-btn w3-round-xxlarge w3-margin-top" href="https://github.com/Brendonfatland/star-wars-responsive-challenge">Click Here to view the code</a>
      </div>
    </div>
    
  </div>
  


  <!-- Images of Me -->
  <div class="w3-row-padding w3-padding-16 w3-border-top w3-border-grey" id="about">
    <div class="w3-col m6">
      <img src="brendon2.jpg.jpg" alt="Me" style="width:100%">
    </div>
    <div class="w3-col m6">
      <img src="pic1.jpg" alt="Me" style="width:100%">
    </div>
  </div>

  <div class="w3-container w3-padding-large" style="margin-bottom:32px">
    <h4><b>About Me</b></h4>
    <p>13 years old is when my curiosity for programming took hold. My uncle told me he worked with alien files from the government, programming odds and ends. Needless to say his fanaticism sparked my young mind. Since then I have had the privilege to attain a great college education, work for over 2 years with some of the best companies in the area. Now I'm adventuring forward in a new stage with freelancing. I really enjoy WordPress and building custom sites from ecommerce to mobile first. I've just recently started creating custom logos for companies as well. Please peek around my portfolio at my different jobs and websites. If you have any questions please have no hesitations and ask me below.  </p>
    <hr>
    
    <h4>Technical Skills</h4>
    <!-- Progress bars / Skills -->
    <p>Web Designer/Developer</p>
    <div class="w3-progress-container w3-grey">
      <div class="w3-progressbar w3-dark-grey" style="width:95%"></div>
    </div>
    <p>Logo Design</p>
    <div class="w3-progress-container w3-grey">
      <div class="w3-progressbar w3-dark-grey" style="width:85%"></div>
    </div>
    <p>SEO</p>
    <div class="w3-progress-container w3-grey">
      <div class="w3-progressbar w3-dark-grey" style="width:80%"></div>
    </div>
    <p>
      <button class="w3-btn w3-dark-grey w3-padding-large w3-margin-top w3-margin-bottom">
        <i class="fa fa-download w3-margin-right"><a href="resume.pdf" download></i>Download Resume </a>
      </button>
    </p>
    <hr>
    
    <h4>How much I charge</h4>
    <!-- Pricing Tables -->
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-third w3-margin-bottom">
        <ul class="w3-ul w3-border w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-black w3-xlarge w3-padding-32">Basic</li>
          <li class="w3-padding-16">Web Design</li>
          <li class="w3-padding-16">WordPress</li>
          <li class="w3-padding-16">Minor Fixes</li>
          <li class="w3-padding-16">Logo Design</li>
          <li class="w3-padding-16">
            <h2>$ 10</h2>
            <span class="w3-opacity">per hour</span>
          </li>
        </ul>
      </div>
      
      <div class="w3-third w3-margin-bottom">
        <ul class="w3-ul w3-border w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-teal w3-xlarge w3-padding-32">Pro</li>
          <li class="w3-padding-16">Web Design</li>
          <li class="w3-padding-16">Mobile First Website</li>
          <li class="w3-padding-16">Custom Website</li>
          <li class="w3-padding-16">SEO</li>
          <li class="w3-padding-16">
            <h2>$ 20</h2>
            <span class="w3-opacity">per hour</span>
          </li>
          
        </ul>
      </div>
      
      <div class="w3-third">
        <ul class="w3-ul w3-border w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-black w3-xlarge w3-padding-32">Premium</li>
          <li class="w3-padding-16">Ecommerce Store</li>
          <li class="w3-padding-16">MySql</li>
          <li class="w3-padding-16">
            <h2>$ 25</h2>
            <span class="w3-opacity">per hour</span>
          </li>
         
        </ul>
      </div>
    </div>
  </div>
  
  <!-- Contact Section -->
  <div class="w3-container w3-padding-large w3-grey">
    <h4 id="contact"><b>Contact Me</b></h4>
    <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
        <p>b.fatland@gmail.com</p>
      </div>
      <div class="w3-third w3-teal">
        <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
        <p>Minneapolis, US</p>
      </div>
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
        <p>612-599-4748</p>
      </div>
    </div>
    <hr class="w3-opacity">
    
  </div>

  <!-- Footer -->
  <footer class="w3-container w3-padding-32 w3-dark-grey">
  <div class="w3-row-padding">
    
  
    <div class="w3-center">
      <h3>Brendon's Other Resources</h3>
      <ul class="w3-ul w3-hoverable">
        <li class="w3-padding-16">
          
          <span class="w3-large">CodePen</span><br>
          <span>For more of Brendon's Front End ideas</span>
		  <a href="https://codepen.io/Brendonfatland/" class="w3-button w3-margin " style="width:50px">Click Here</a>
        </li>
      </ul>
    </div>



  </div>
  </footer>
  
  <div class="w3-black w3-center w3-padding-24">Powered by <a href="http://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></div>

<!-- End page content -->
</div>

<script>
// Script to open and close sidenav
function w3_open() {
    document.getElementById("mySidenav").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

</body>
</html>
