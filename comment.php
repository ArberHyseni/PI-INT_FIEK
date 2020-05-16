<!DOCTYPE html>

<html lang = "en">
<head>
	<title> A title for the document </title>
    <meta charset = "utf-8" />
    <link rel="stylesheet" href="commentstyle.css"/>
    <style>

</style>
	</head>
	<body>
        
  <!-- comments container -->
  <div class="container pen">
      <div class="row">
        <div class="col-sm-12">
          <div class="page-header">
            <h2>Comment section</h2>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="pen-box">
        <?php 
          // One way to create an indexed array 
          $name_one = array("Arian", "Petritit", "Stina", "Diona", "Toni"); 
          $number = count($name_one) + 5;
            
          // Accessing the elements directly 
          echo "Antaret qe kane komentuar:\n"; 
          echo $name_one[2], ",\n"; 
          echo $name_one[0], ",\n"; 
          echo $name_one[4], "\n"; 

          echo "</br>Numri total i antareve ne forum: \n";
          echo $number;
            
          ?> 

          </div>
        </div>
        </div>
      </div>
    </div>
    
    <div class="container"><div class="row">
      <div class="col-sm-12"><div class="page-separator">
      </div></div>
    </div></div>
    
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="pen-box">
          <?php
          //Associative array
            $movie = array("Tarantino"=>"Pulp Fiction", "Tarntino"=>"Django Unchained", "Tarrantino"=>"Kill Bill");
            echo "Best Tarantino movies are: ";
            foreach ($movie as $key => $value) {
              echo $value.", ";
            }
          ?>
          <br>
          <p class="italic">Posted by Stina<p>
            <div>
              <br>
          </div>
          </div>
          
          <div class="container">
            <div class="row">
        <div class="col-sm-12">
          <div class="pen-box">
          <?php 
              // Defining a multidimensional array 
              $favorites = array( 
                  "Toni" => array( 
                      "Filmi im i preferuar eshte" => "Inception nga Christopher Nolan", 
                      ", eshte nje film fantastik dhe shume interesant" => "nese dikush deshiron te bisedoj rreth filmave me mua, kontaktoni ne 044xx23231", 
                  )
              ); 
              // Using for and foreach in nested form 
              $keys = array_keys($favorites); 
              for($i = 0; $i < count($favorites); $i++) {  
                  foreach($favorites[$keys[$i]] as $key => $value) { 
                      echo $key . " : " . $value . "\n"; 
                  } 
                  echo "\n"; 
              } 
              ?>
              <p class="italic">Posted by Toni<p>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="pen-box">
            <p>
          <?php
            $komenti = array("Arian", "Seriali breaking bad eshte seriali me i mire ne bote");
            echo "$komenti[0]".": ka thene se ". "$komenti[1]."
          ?>
          </p>
          </div>
        </div>
      </div>
    </div>
    

      </body>
</html>