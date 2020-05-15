<!DOCTYPE html>
<html lang = "en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    <link rel="stylesheet" href="css/reset.css"/>
    <link rel="stylesheet" href="css/stilizimi.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
  <title>KS Critic</title>
	<meta charset = "utf-8" />
</head>
	<body>
       <header>
          <nav id="topnav">
              <ul>
                <li><a href="signup.html">Sign Up |</a></li>
                <li><a href="login.php">Login |</a></li>
                <li><a href="#">RSS Feeds |</a></li>
                <li><a href="ipphp.php">Fun </a></li>
              <input type="text" class="input_box" name="searchbar">
            <i class="fas fa-chevron-circle-right"></i>
            </form>
          </nav>
          <nav class="nav2">
          <div class="navbar">
            <a href="contactus.html">Rreth ne</a>
            <a href="./projekti/Projekti.php">Fakte per filma</a>
            <a href="./webfaqja/webfaqja.html">Filmat</a>
          <div class="dropdown">
              <button class="dropbtn">Me te miret
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                <a href="#">Fituesit e oskareve</a>
                <a href="https://www.imdb.com/list/ls024149810/">Top 250</a>
                <a href="#">Filmat me te ri</a>
              </div>
            </div>
            <a>Faqja Kryesore</a>
          </div>  
          <p class="c23">KS Critics</p>
          <?php
          echo substr('KS Critics', -7);
          echo "\n";
          echo substr('KS Critics', 0, 3);
          ?>

          </nav>
         </header>
         <article id="main">
             <div class="fig1">
                    <img src="img/main/mafiaMAIN.jpg" alt="Portrait" class="figmain1">
                    <img src="img/main/MAIN1.jpg" alt="Portrait" class="figmain2">
                    <img src="img/main/titanicMAIN.jpg" alt="Portrait" class="figmain3">
                    <p><br><br><br><br><br></p>
            </div>
            <br><br><br>
         </article>
         <section>
            <div class="fade_rule"><p><i>Ketu do t'i gjeni filmat me te mire qe kane ekzistuar ndonjehere.</i></p></div>  
            <br><br><br>
            <div class="fade_rule"></div>
            <br><br><br>

            <figure>
            <div class="grid-container">
              <div class="grid-item1" id="mainbox"><h3>Latest Projects</h3><p>Angleso it va semblar un simplificat Angles,
                 quam un skeptic Cambridge amico dit me que Occidental es.
                 Li Europan lingues es membres del sam familie.
                 Lor separat existentie es un myth. 
                 Por scientie, musica, sport etc, litot Europa usa li sam vocabular.
                 Li lingues differe solmen in li grammatica, 
                 li pronunciation e li plu commun vocabules</p>
                 <?php
                  $stringu = "Angleso it va semblar un simplificat Angles,
                  quam un skeptic Cambridge amico dit me que Occidental es.
                  Li Europan lingues es membres del sam familie.
                  Lor separat existentie es un myth. 
                  Por scientie, musica, sport etc, litot Europa usa li sam vocabular.
                  Li lingues differe solmen in li grammatica, 
                  li pronunciation e li plu commun vocabules";

                  echo strlen($stringu);
                 ?>
                 </div>
              <div  id="box1"><img class= "shadow"src="img/Schindlers.jpg" alt="Portrait"/><p><br>Schindlers List</p><br><a id="fotot" href="">Kliko per me shume ></a></div>
              <div id="box2"><img class= "shadow" src="img/shawreduce.jpg" alt="Portrait"/><p><br>The Shawshank Redemption</p><br><a id="fotot" href="">Kliko per me shume ></a></div>  
              <div id="box3"><img class= "shadow" src="img/pianistreduce.jpg" alt="Portrait"/><p><br>The Pianist</p><br><a id="fotot" href="">Kliko per me shume ></a></div>
              <div id="box4"><img class= "shadow" src="img/matrixreduce.jpg" alt="Portrait"/><p><br>The Matrix</p><br><a id="fotot" href="">Kliko per me shume ></a></div> 
              <div id="box5"><img class= "shadow" src="img/batman.jpg" alt="Portrait"/><p><br>The Dark Knight</p><br><a id="fotot" href="">Kliko per me shume ></a></div> 
              <div id="box6"><img class= "shadow" src="img/avengersreduce.jpg" alt="Portrait"/><p><br>The Avengers</p><br><a id="fotot" href="">Kliko per me shume ></a></div> 
            </div>
          </figure>
          </section>
         <footer>
          <div class="about">
            <h1>Newsletter</h1>
            <p>Wanting people to listen, you can't just tap them on the shoulder anymore. You have to hit them with a sledgehammer, and then you'll notice you've got their strict attention.</p>
            <input class="input1" placeholder="Enter your text here" />
            <a class="myButton" href="signup.html">SIGN UP</a>
            <br>
            <h1>Stay Social</h1>
            <table>
            <tbody>
              <tbody>
                <tr>
                  <br>
                  <td><a href="https://www.google.com"><img src="img/fb.png">   Facebook</td>
                  <td><a href="https://www.flickr.com"><img src="img/flickr.png">    Flickr</td>
                </tr>
                <tr>
                  <td><a href="https://www.twitter.com"><img src="img/twitter.png">    Twitter</td>
                  <td><a href="https://rss.com"><img src="img/rss.jfif">    RSS Feed</td>
                </tr>

              </tbody>
            </tbody>
            </table>
            </div> 
           
            
          </div>
          <div class="contact">
            <h1>Kritikat e fundit</h1>
            <h4>Postuar nga: <i>Shpend Ahmeti</i></h4>
            <p>Filmi Memento eshte nje nder filmat me te mire qe e kam pare ndonjehere. E rekomandoj per te gjithe.<br><a href="">Kliko per me shume</a></p> 
            <h4>Postuar nga: <i>Dardan Berisha</i></h4>
            <?php
            $mbiemri = array("Shpend"=>"Ahmeti", "Dardan"=>"Berisha");
            echo "<h4>Postuar nga: Dardan ".$mbiemri['Dardan']."</h4>";
            ksort($mbiemri);
            foreach($mbiemri as $x => $x_value) {
              echo "Key=" . $x . ", Value=" . $x_value;
              echo "<br>";
            }
            ?>
            <p>Film me tematike interesante por jo dicka e jashtezakonshme.<br><br><a href="">Kliko per me shume</a></p>
          </div>
          <div class="twitter">
            <h1>Te fundit nga Twitteri</h1>
            <p>@Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
              Aenean commodo ligula eget dolor. Aenean massa.
            </p> <p>@Povrtw sociis natoque penatibus et magnis dis parturient montes,
              nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis,
              sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel.</p>
              <p>@Aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, 
              venenatis vitae, justo.
              Nullam dictum felis eu pede mollis pretium. Integer tincidunt.</p>
          </div>
        </footer>
    </body>
</html>