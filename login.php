<!DOCTYPE html>

<html lang = "en">
<head>
	<title> A title for the document </title>
	<meta charset = "utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Form</title>
        <link rel="stylesheet" href="css/reset.css">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/signup.css">
        <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.1.1/build/ol.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.1.1/css/ol.css" type="text/css">
  
  <style>
    .map {
      height: 400px;
      width: 50%;
      position: relative;
      left: 25%;
    }
  </style>
</head>
    <body>
      <form action="webfaqja/php/GetLoginValues.php" method="post">
        <h1>Login</h1>
        <fieldset>    
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="Email">
          <label for="password">Password:</label>
          <input type="password" id="password" name="Password">
        </fieldset>
            
        <fieldset>
            <input type="checkbox" name="Remember[]" id="filma" value="Remember me"/><label class="poq1" for="filma">Remember me</label>
        </fieldset>
        <button type="submit" name="Login" value="Login">Login</button>
      </form><br>
      <div id="map" class="map"></div>

    </body>

  <?php
  
  if (isset($_COOKIE['Email'])) {
    $email = $_COOKIE['Email'];

    echo "<script> 
        document.getElementById('mail').value = '$email';
          </script>";
  }

  ?>

    <script> 
    //time color changing background
    function time(){
        var today = new Date();
        var h = today.getHours()
        if (h>12) {h= h- "12"} ;
        var m = today.getMinutes();
        var s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        var r = parseInt(s) * 1;
        var g = parseInt(s) * 3;
        var b = parseInt(s) * 5;
        document.body.style.backgroundColor = 'rgb(' + r + ',' + g + ',' + b + ')';
        var t = setTimeout(time, 100);
    }
      
    function checkTime(i) {
        if (i < 10) {i = "0" + i};
        return i;
    }
      
    time();
    </script>

    </html>