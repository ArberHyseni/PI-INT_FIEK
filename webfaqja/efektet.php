<!DOCTYPE html>
<html lang="eng">
    <head>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/stilizimi1.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="dynamic.js"></script>
        <meta charset="UTF-8">

        <style>
            .error
            {
              color: red;
              font-size: 10px;
            }
        </style>

    </head>
    <body onload="startGame()">
      
      <div style="text-align:center;width:200px; float: right; padding-top: 80px;">
        <p>Leviz katrorin duke shtypur butonat</br></p>
        <button onclick="moveup()">UP</button><br><br>
        <button onclick="moveleft()">LEFT</button>
        <button onclick="moveright()">RIGHT</button><br><br>
        <button onclick="movedown()">DOWN</button> 
      </div>
   


            <h1>Ez mode</h1>
            <h4>Cilet filma deshironi ti shikoni?</h4>
            <div class="container">
              <form  action="#">
                <input type="text" name="item" id="item" />
            </form>  
            <ul id="list"></ul>
            </div>

            <script>
              (function(){
              
              var list = document.querySelector('#list'),
                  form = document.querySelector('form'),
                  item = document.querySelector('#item');
              
              form.addEventListener('submit',function(e){
                e.preventDefault();
                list.innerHTML += '<li>' + item.value + '</li>';
                store();
                item.value = "";
              },false)
              
              list.addEventListener('click',function(e){
                var t = e.target;
                if(t.classList.contains('checked')){
                  t.parentNode.removeChild(t);
                } else {
                  t.classList.add('checked');
                }
                store();
              },false)
              
              function store() {
                window.localStorage.myitems = list.innerHTML;
              }
              
              function getValues() {
                var storedValues = window.localStorage.myitems;
                if(!storedValues) {
                  list.innerHTML = '<li>Cilet filma/seriale deshiron qe ti shikosh?</li>';
                }
                else {
                  list.innerHTML = storedValues;
                }
              }
              getValues();
            })();
            </script>

<div class="stili">
<p style="padding-bottom: 5px;">Ju lutem jepni nje numer ne mes te 4 dhe 25:</p>
  <input id="demo" type="text" style="width: 19%; padding-bottom: 5px;">
  <button type="button" onclick="myFunction()" style="margin-top: 5px;">Testo hyrjen</button>
  <p id="p01" style="padding-top: 5px;" ></p>
</div>
<p></p>
<div>

<?php

  $usernameError = "";
  $passwordError = "";

  function Validate( $data) {

    $data = trim( $data );
    $data = stripslashes( $data );
    $data = htmlspecialchars( $data );

    return $data;
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $usernameVar = Validate( $_POST["username"] );
        $passwordVar = Validate( $_POST["password"] );

        if ( empty( $_POST["username"] ) ) {

          $usernameError = "Username is empty";

        } else {

          if (!preg_match( "/^[a-zA-Z ]*$/", $usernameVar)) {

            $usernameError = "Only letters and whitespace are allowed.";

          }

        }

        if (empty( $_POST["password"])) {

          $passwordError = "Password is empty";

        }
  }

?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST" class="stili">
          Username: <input type="text" name="username" style="width: 19%; padding-bottom: 5px;"/>
          <div class="error"><?php echo $usernameError; ?></div>
          Password: <input type="password" name="password" style="width: 19%; padding-bottom: 5px;"/>
          <div class ="error"><?php echo $passwordError; ?></div>

          <input type="submit" style="width: 10%; padding-bottom: 3px;" />
</form>
</div>

<script>
  function allowDrop(ev) {
    ev.preventDefault();
  }
  
  function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
  }
  
  function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
  }
  </script>

<h2 style="padding-left: 130px; text-align: center;">Drag dhe Drop</h2>
<p style="padding-left: 130px; text-align: center;">Zvarrit fotografine ndermjet dy div-ave.</p>

<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)" style="margin-left: 130px;">
  <img src="images\nike.jpg" draggable="true" ondragstart="drag(event)" id="drag1" width="100%" height="100%" >
</div>

<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)" style="margin-left: 130px;"></div>
          <div class="stili">

          <?php
            echo "Today is " . date("Y/m/d") . "<br>";
            echo "The time is " . date("h:i:sa");
          ?>

          </div>

          <?php
            include 'footer.php';
          ?>

    </body>
</html>