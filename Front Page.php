<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- These meta tags come first. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Find me Coffee</title>

    <!-- Include the CSS -->
    <link href="dist/toolkit.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic|Work+Sans:300,400,500,600' rel='stylesheet' type='text/css'>
    <link href="assets/css/toolkit-startup.css" rel="stylesheet">
    <link href="assets/css/application-startup.css" rel="stylesheet">
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
    <link href="dist/toolkit.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <style type="text/css">
        .nav-link {
            color: white;
        }
        .navbar {
            margin: 0;
            padding: 0;
        }
        .text-uppercase {
            margin-left: 20px;
            margin-top: 40px !important;
        }
        .section1 {
          background-image: url('https://images.unsplash.com/flagged/photo-1557443134-e10781e5ea1e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=60');
          height: 500px;
          background-attachment: fixed;
          background-size: cover;
        
          
        }
        .iframe-container{
          position: relative;
          margin: 0 auto;
          margin-top: 20px;
          width: 100%;
          padding-bottom: 56.25%; /* Ratio 16:9 ( 100%/16*9 = 56.25% ) */
          }
.iframe-container > *{
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    margin: 0;
    padding: 0;
    height: 100%;
    width: 100%;
    
}
.lead2 {
  margin-top: 70px;
}
#map-intro {
  margin-top: -5px;
}
body:before {
  content: "";
  display: block;
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  z-index: -10;
  background: url(photos/2452.jpg) no-repeat center center;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.color-key {
  color: red !important;
}
.my-2 {
  
  height: 350px;
}
@media (max-width: 767px) {
.section1 {

    background-attachment: scroll;

}
}
@media (max-width: 767px) {
.iframe-container {

    height: 500px;

}
}
@media (max-width: 767px) {
.container2 {

    margin-left: 20px;

}
}



        
    </style>
  </head>
  <body>
    <nav class="navbar navbar-transparent  navbar-toggleable-sm">
        <button
          class="navbar-toggler navbar-toggler-right hidden-md-up"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="py-10 px-10" style="background: url(https://floomby.io/s/290920/7PcAgaeS.jpg?download=1)
         top center; width: 100%; height: 450px; background-size: cover; margin: 0px;">
        <a class="navbar-brand" href="index.php">
          <h4 class="text-uppercase my-0" style="color:white;">Find Me Coffee</h4>
        </a>
    
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index3.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index2.php">Sign Up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index4.php">Top 7</a>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </nav>
      <br>
      <br>
      <!--End of navbar/ beginning of Content-->
<div class="container-fluid">
  <div class="row my-3">
    <div class="col-sm-4">
      <ul class="featured-list featured-list-bordered">
        <li class="mb-5">
          <div class="featured-list-icon">
            <span class="icon icon-location"></span>
          </div>

          <h3>5 years of coffee tourism</h3>
          <p>
            In the last five years, I have accumulated a list of almost 100 coffee shops from around the United States, primarily based 
            in the DFW metroplex, but through various roadtrips, major cities across the U.S. have also been covered.</p>
          <br>
          <br>
          <button type="button" class="btn btn-mdb-color" onclick="location.href='index3.php'">About The Author</button>
        </li>
       </ul>
    </div>
    <div class="col-sm-4">
      <ul class="featured-list featured-list-bordered">
        <li class="mb-5">
          <div class="featured-list-icon">
            <span class="icon icon-list"></span>
          </div>

          <h3>a list of the top ten best coffee shops I have been to</h3>
          <p>
            This list is, of course very subjective,  but in it I include things I believe are important for a coffee shop to create that
          invaluable 'third place' that so many of us need in our daily lives.</p>
          <br>
          <br>
          <button type="button" class="btn btn-mdb-color" onclick="location.href='index4.php'">See the List</button>
        </li>
      </ul>
    </div>
    <div class="col-sm-4">
      <ul class="featured-list featured-list-bordered">
        <li class="mb-5">
          <div class="featured-list-icon">
            <span class="icon icon-mail"></span>
          </div>

          <h3>recieve new coffee reccomendations every week</h3>
          <p>
            Sign up with your email to get coffee recommendations weekly. The goal of this site is to support local coffee roasters, and encourage
            folks to go outside the typical mold of established coffee chains and try somehting new!
          </p>
          <button type="button" class="btn btn-mdb-color" onclick="location.href='index2.php'">Sign up</button>
        </li>
       </ul>
    </div>
    
    </div>
  </div>
  <br>
  <br>
  <br>
  <div class="section1">
    <div id="map-intro"> 
    <h2 style="color: white; text-align: center; padding-top: 30vh; font-family: Arial, Helvetica, sans-serif; ">search the map <br> see some of the best coffee in the country</h2>
    </div>
  </div>
  <div class="container-fluid">
  <div class="row my-3">
  <div class="col-sm-4" style="margin-top: 50px; ">
        <ul class="featured-list featured-list-bordered">
          <li class="mb-7" >
            <div class="featured-list-icon" style="background-color: #9C27B0;">
              <span class="color-key"></span>
            </div>

            	<h3>Best Aesthetics</h3>
            	<p>
            	Let's face it, half of the appeal of trendy coffee shops is the endless instagram and photo potential. From
          	statement furniture pieces to high class decor, the three shops marked under this color have truly an amazing look.</p>
          </li>
      </ul>
</div>
<div class="col-sm-4" style="margin-top: 50px;">
        <ul class="featured-list featured-list-bordered">
          <li class="mb-5-2">
            <div class="featured-list-icon" style="background-color:#0F9D58;>
              <span class="color-key"></span>
          </div>

            <h3>Best Place to Study</h3>
            <p>
              As internet becomes increasingly vital for work and school, coffee shops that offer both wifi and a quiet place 
              free from distractions have become a staple. The featured shops marked under this color are guaranteed to host your
              most productive hours. </p>
          </li>
        </ul>
      </div>
      <div class="col-sm-4" style="margin-top: 50px;">
        <ul class="featured-list featured-list-bordered">
          <li class="mb-5">
            <div class="featured-list-icon" style="background-color:#A52714;">
              <span class="color-key"></span>
            </div>

            <h3>Best Tasting Coffee</h3>
            <p>Peacefulness and looks asside, the most important factor that keeps people coming back to a coffee shop is simply if they know how to
              brew excellent joe.  Under this color, these listed shops offer some of the best tasting coffee I have ever had the pleasure of drinking. 
            </p>
          </li>
        </ul>
      </div>
     </div>
  </div>


  
    
        
    
   
    
    <div class="iframe-container">
        <iframe 
        src="https://www.google.com/maps/d/u/0/embed?mid=1lR-HUPsd79Lybr-fiw-yUPnDT3AOFUrX" 
        id="map"
        width="640" 
        height="680">
        
        </iframe>
    </div>
   
    </div>
   


  
    <!-- Include jQuery (required) and the JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="dist/toolkit.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/tether.min.js"></script>
    <script src="assets/js/toolkit.js"></script>
    <script src="assets/js/application.js"></script>
  </body>
</html>


