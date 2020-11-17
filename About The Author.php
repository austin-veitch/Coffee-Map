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
              <a class="nav-link" href="#">About</a>
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
      <!--End of navbar/ beginning of Content-->
    <h1 style="text-align: center; margin-top: 50px; margin-left: 20px; margin-right: 20px;">your coffee explorers</h1>
    <br>
    <br>
<!-- Card Wider -->
<div class="row">  
    <div class="col-sm-4">
        <div class="card card-cascade wider">

        <!-- Card image -->
        <div class="view view-cascade overlay">
            <img class="card-img-top" src="https://floomby.io/s/271020/SlOIJIR9.jpg?download=1" style="height:" alt="Card image cap">
            <a href="#!">
            <div class="mask rgba-white-slight">
            <p class="text-white" style="margin-top: 300px; margin-left: 200px;"> "Coffee is not a drink. It's an idea."</p>
            </div>
            </a>
        </div>

        <!-- Card content -->
        <div class="card-body card-body-cascade text-center pb-0">

            <!-- Title -->
            <h4 class="card-title"><strong>Austin Veitch</strong></h4>
            <!-- Subtitle -->
            <h5 class="blue-text pb-2"><strong>Coffee Enthusiast / Developer of This Site</strong></h5>
            <!-- Text -->
            <p class="card-text">One of the fondest memories I have as a young boy is taking coffee from the pot and putting chocolate milk in it to make it palatable. I have come a long way since then - from espresso to pourovers, and even
                working as a barista for a couple years. I am convinced coffee is the best drink on the planet and undoubtely the best 
                bean.
            </p>

            <!-- Linkedin -->
            <a class="px-2 fa-lg li-ic" href="https://www.instagram.com/austinveitch/"><i class="fab fa-instagram"></i></a>

            <!-- Card footer -->
            <div class="card-footer text-muted text-center mt-4">
            "Coffee is not a drink. It's an idea."
            </div>
        </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card card-cascade wider">

        <!-- Card image -->
        <div class="view view-cascade overlay">
            <img class="card-img-top" src="https://floomby.io/s/271020/EhZymTo9.jpg?download=1" style="height: 400px;" alt="Card image cap">
            <div class="mask rgba-white-slight">
                <p class="text-white" style="margin-left: 220px; margin-top: 70px;">"Coffe shops are a vibe."</p>
            </div>
            </a>
        </div>

        <!-- Card content -->
        <div class="card-body card-body-cascade text-center pb-0">

            <!-- Title -->
            <h4 class="card-title"><strong>Shanna Veitch</strong></h4>
            <!-- Subtitle -->
            <h5 class="blue-text pb-2"><strong>My Dear Wife / Shares a passion for aesthetics</strong></h5>
            <!-- Text -->
            <p class="card-text">When Shanna and I met, coffee wasn't really on her radar. It was the repeated dates at coffee shops, 
               aromas of the brews, amazing design of the shops, and great music usually playing that solidified coffee shop hopping as
                one of her favorite experiences. Her and I particularly like going around the country and seeing what each state has to offer.
            </p>

            <!-- Linkedin -->
            <a class="px-2 fa-lg li-ic" href="https://www.instagram.com/shannaveitch/"><i class="fab fa-instagram"></i></a>
            <!-- Twitter -->
            <a class="px-2 fa-lg tw-ic" href=""><i class="fab fa-twitter"></i></a>
            <!-- Dribbble -->
            <a class="px-2 fa-lg fb-ic" href=""><i class="fab fa-facebook-f"></i></a>

            <!-- Card footer -->
            <div class="card-footer text-muted text-center mt-4">
            "Coffe shops are a vibe."
            </div>
        </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card card-cascade wider">

        <!-- Card image -->
        <div class="view view-cascade overlay">
            <img class="card-img-top" src="https://floomby.io/s/271020/L0LyWHLc.jpg?download=1" alt="Card image cap">
            <a href="#!">
            <div class="mask rgba-white-slight" style = "color: white; margin-top: 20px;"> "Three steps to a happier life, Roast, Grind, and Brew."</div>
            </a>
        </div>

        <!-- Card content -->
        <div class="card-body card-body-cascade text-center pb-0">

            <!-- Title -->
            <h4 class="card-title"><strong>Devin and Stephanie Guevara</strong></h4>
            <!-- Subtitle -->
            <h5 class="blue-text pb-2"><strong>Admins of Texas Coffee Craving</strong></h5>
            <!-- Text -->
            <p class="card-text">Ever since Devin and Stephanie married, their passions for cool and unique places for food and coffee throughout
            the DFW area have led them to all sorts of places. Having this drive, and some savy photography skills, they decided to take to social 
            media to document and share all these wonderful coffee shops. In just a few short months, they have built an incredible following and
            are continuing to build a community passionate about local roast.</p>

            <!-- Linkedin -->
            <a class="px-2 fa-lg li-ic" href="https://www.instagram.com/txcoffeecraving/?hl=en"><i class="fab fa-instagram"></i></a>

            <!-- Card footer -->
            <div class="card-footer text-muted text-center mt-4">
            "Three steps to a happier life, Roast, Grind, and Brew."
            </div>
        </div>
        </div>
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


