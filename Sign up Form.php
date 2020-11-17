<?php
session_start();

if( $_SESSION['submit'] == $_POST['submit'] && 
     isset($_SESSION['submit'])){
    // user double submitted 
}
else {
    // user submitted once
    $_SESSION['submit'] = $_POST['submit'];        
} 
$link = mysqli_connect("shareddb-x.hosting.stackcp.net", "findmecoffee.com-3135378a69", "iloveshan123", "findmecoffee.com-3135378a69");
if (mysqli_connect_error()) {
  echo ("Sorry, could not connect to database");
}
if (array_key_exists('email', $_POST) OR array_key_exists('password', $_POST)) {
$query = "SELECT `id` FROM `users` WHERE email = '".mysqli_real_escape_string($_POST['email'])."'";
}
$query = "INSERT INTO `users` (`email`, `name`) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."',
'".mysqli_real_escape_string($link, $_POST['name'])."')";
if (mysqli_query($link, $query)) {
    echo "";
} else {
    echo "<p>There was a problem signing you up, please try again later";
}


$error = ""; 
$successMessage = "";
  if ($_POST) {
    
  if (!$_POST["name"]) {
      $error .= "Please enter your name <br>";
  }
  if (!$_POST["email"]) {
 
  $error .= "The email field is required.<br>";

  }
 
  if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
 
  $error .= "The email address is invalid.<br>";
  }
  if ($error != "") {
 
      $error = '<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>'.$error.'</div>';

  } else {
      $emailTo = "austinveitch@gmail.com";
      $subject = $_POST['subject'];
      $message = $_POST['message'];
      $headers = "From: ".$_POST['email'];
      if (mail($emailTo, $subject, $message, $headers)) {
        $successMessage = '<div class="alert alert-success" role="alert">Sign up successful</div>';
      } else {
        $error = '<div class="alert alert-danger" role="alert"><p><strong>Your message could not be sent - Please
        try again later</strong></p>'.$error.'</div>';
      }
    }

  }


?> 


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Find me coffee Sign up</title>
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
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
  <style type="text/css">
    
  </style>
 


</head>
<body>
<div class="block text-center" style="height: 550px;
background-image: url(https://images.unsplash.com/photo-1551266681-ba5f0b95e2e5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1196&q=80); background-size: cover;">

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
  <h1 class="block-title" style="color: white;">Find new Places Weekly</h1>
  
  
</div>
    
   
<form method="post">

 
    <h2 class="h1-responsive font-weight-bold text-center my-4">Sign Up</h2>
   
    <p class="text-center w-responsive mx-auto mb-5">recieve coffee reccomendations to your email <strong>local to the DFW area</strong> weekly
    </p>

    <div id="error"><? echo $error.$successMessage?></div>

    <div class="row">

        
        <div class="col" style="margin: 0 auto;">
            <form id="form" name="contact-form" action="mail.php" method="POST">

                
                <div class="form-group">

                    
                    <div class="col">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control" style="display: block; margin: 0 auto; width: 25rem;">
                            <label for="name" class="label" style="margin: 0 auto;">Your name</label>
                        </div>
                    </div>
                    

                    
                    <div class="col">
                        <div class="md-form mb-0">
                            <input type="email" id="email" name="email" class="form-control" style="display: block; margin: 0 auto; width: 25rem;">
                            <label for="email" class="label">Your email</label>
                        </div>
                    </div>
                    

                </div>
                <br>
                <br>
                <div id="submit" style="text-align: center;">
                    <div class="text-center">
                    <button type="submit" id="submit" class="btn btn-primary">Submit</a>
                    <button type="button" class="btn btn-mdb-color" onclick="location.href='index.php'">Back to Home</button>
                </div>
</form>
        </div>
    </div>
</div>
</form>


  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="dist/toolkit.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript">

        $("form").submit(function (e) {
        
        var error = "";
        if ($("#email").val()=="") {
            error += "<p>email field is required</p>"
        }
        if ($("#subject").val()=="") {
            error += "<p>The subject field is required</p>"
        }
        if ($("#message").val()=="") {
            error += "<p>There is no message</p>"
        }
        
        if ($("#name").val()=="") {
            error += "<p>Please put your name</p>"
        }
        if (error != ""){
              $("#error").html('<div class="alert alert-danger" role="alert"<strong>There were error(s) in your form:</strong>' + error + '</div>');
                return false;
            } else {
                return true;
                
            }
        });


  </script>

</body>
</html>


