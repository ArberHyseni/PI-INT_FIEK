<!DOCTYPE html>
<html en lang="lang">
    <head>
        <meta charset="utf-8">
        <title>Serial</title>
        <link rel="stylesheet" href="CSS/Fklasik.css"/>
        <link rel="stylesheet" href="CSS/klasa.css"/>
        <script> src="js.js"</script>
        <style>
.error {color: #FF0000;}
</style>
</head>
    

  <?php 
//File php
  if(!empty($_GET['file'])){
    $fileName = basename($_GET['file']);
    $filePath = 'video/'.$fileName;
    if(!empty($fileName) && file_exists($filePath)){
       
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$fileName");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");
        
        
        readfile($filePath);
        fwrite($filePath);
        exit;
    }else{
        echo 'Ky file nuk ekziston';
    }
}


?>




    <div onmouseover="mOver(this)" onmouseout="mOut(this)"
            style="background-color:black;widows: 100px;px;height:20px;width:1100px; padding:45px;font-size:230%; border: 8px solid #ffffff;
            border-radius: 40px; color:#ffffff; text-align: center;">
            
            Seriala</div>
            

            <script>
            function mOver(obj) {
              obj.innerHTML = "Faleminderit qe Vizituat faqen tone"
            }
            
            function mOut(obj) {
              obj.innerHTML = "Miresevini ne Faqen Ton"
            }
            </script>
        
    <body>
        <header>
            
            <p id="test2"><b class='Seri'>Serial</b></p>
            <p>TV/Filma</p>
        </header>
       <table cellspacing="70">
        
     
          <tr>
        <td > <div class="dropdown" ><a href="https://www.filma24.cc/seriale/titans/ ">
            <img src="Foto11.jpg" width="240" height="380" alt="Photo" />
             <div class="dropdown-content">
               <h2 style="color:blanchedalmond">Titans</h2>
                <p style="color:rgb(235, 202, 145)">Titans ndjek heronj të rinj nga e gjithë
                   Universi DC kur ata vijnë në moshë dhe gjejnë përkatësi në një ekskluzivitet marramendës
                    klasik të Teen Titans. Dick Grayson dhe Rachel Roth, një vajzë e re e veçantë
                     e poseduar nga një errësirë e çuditshme, përqafohen në një komplot që mund të sjellë 
                     Ferrin në Tokë. Duke iu bashkuar atyre gjatë rrugës janë Starfire me kokë të nxehtë
                      dhe Beast Boy të aftë për dashuri. Së bashku ata bëhen një familje surrogate dhe ekipi i heronjve.</p>
               </div></div><br>
               <h2 style="color:white">Titans</h2>
               <p style="color:white">Categoria:Aksion</p> 
               </td>

        <td> <div class="dropdown" ><a href="https://www.filma24.cc/seriale/the-mandalorian/ ">
           <img src="Foto12.jpg"width="240" height="380" alt="Photo"/>
           <div class="dropdown-content">
             <h2 style="color:white">Mandaloriam</h2>
              <p style="color:rgb(235, 202, 145)">Në Tales of the Jedi, të vendosur mijëra vjet para
                 filmit origjinal të Luftrave Star, Mandarorët janë një fuqi e madhe ushtarake që luftojnë
                  me Sithin në luftën e tyre kundër Jedi-t, dhe udhëheqësi i tyre manipulohet nga Sith në 
                  nxitjen e një lufte me Republic. </p> 
                 </div> </div> <br>
                 <h2 style="color:white">Mandaloriam</h2>
                 <p style="color:white">Categori:Aksion </p>
                </td>
                
        <td> <div class="dropdown" ><a href="https://www.filma24.cc/seriale/mr-robot/ ">
           <img src="Foto13.jpg" width="240" height="380" alt="Photo" />
           <div class="dropdown-content"> 
             <h2 style="color:white" >Mr Robot</h2>
              <p style="color:rgb(235, 202, 145)">  Z. Robot është një seri televizive thriller drama amerikane 
                e krijuar nga Sam Esmail për USA Network. Ajo interpreton Rami Malek si Elliot Alderson, një inxhinier
                 i sigurisë në internet dhe haker me çrregullim të ankthit social, çrregullim identiteti disociues dhe
                  depresion klinik. Elliot rekrutohet nga një anarkist kryengritës i njohur si "Z. Robot", i luajtur 
                  nga Christian Slater, për t'u bashkuar me një grup hacktivistësh të quajtur "fsocience". [8] Grupi 
                  synon të shkatërrojë të gjitha regjistrimet e borxheve duke koduar të dhënat financiare të E Corp,
                   konglomeratit më të madh në botë. </p>
                  </div> </div></div><br>
                  <h2 style="color:white">Mr Robot</h2>
                  <p style="color:white">Categori:Mister</p></td>
        <td> <div class="dropdown" ><a href="https://www.filma24.cc/seriale/vikings/ ">
           <img src="Foto14.jpg" width="240" height="360" alt="Photo" />
           <div class="dropdown-content">
             <h2 style="color:white">Vikings</h2>
             <p style="color:rgb(235, 202, 145)">Historia se si Ragnar Lothbrok, një fermer norvegjez me etjen për
               kërkime, i cili bëhet mbreti i veriut. ... Vikings është frymëzuar nga sagat e Viking Ragnar Lothbrok,
                një prej heronjve legjendar më të njohur të Norvegjisë dhe famëkeq si skamja e Anglisë dhe Francës.</p>
              </div></div>
              <h2 style="color:white">Vikings</h2>
              <p style="color:white">Categori:Aventure</p>
            </td>
      </tr>
      <tr >
         <td> <div class="dropdown" ><a href="https://www.filma24.cc/seriale/good-omens/ "> 
           <img src="Foto15.jpg" width="240" height="380" alt="Photo"  />
           <div class="dropdown-content">
             <h2 style="color:white" >Good Omens</h2>
              <p style="color:rgb(235, 202, 145)"> Aziraphale, një engjëll dhe Crowley, një demon, bien dakord të
                 bashkojnë forcat për të gjetur Anti-Krishtin që mungon dhe për të ndaluar luftën që do t'i japë
                  fund gjithçkaje. Bazuar në romanin më të shitur nga Terry Pratchett dhe Neil Gaiman, Good Omens
                   ndjek një duo të pa gjasë dhe përpjekjen e tyre për të shpëtuar botën.</p>
                  </div></div>
                  <h2 style="color:white">Good Omens </h2>
                  <p style="color:white"> Categorie:Komedi</p>
                </td></br></br>
         <td><div class="dropdown" > <a href="https://www.filma24.cc/seriale/the-flash/ "> 
           <img src="Foto16.jpg" width="240" height="380" alt="Photo"  />
           <div class="dropdown-content">
             <h2 style="color:white" >Flash</h2> 
             <p style="color:rgb(235, 202, 145)"> Barry Allen është një shkencëtar mjeko-ligjor
               i policisë së Qytetit Qendror me një jetë të lumtur në mënyrë të arsyeshme, megjithë
                traumën fëminore të një rrufeje misterioze të kuqe dhe të verdhë që vriste nënën e tij dhe 
                inkuadroi babanë e tij. E gjithë kjo ndryshon kur një aksident masiv i përshpejtuesit të grimcave
                 çon në atë që Barry u godit nga rrufeja në laboratorin e tij. Duke dalë nga koma nëntë
                  muaj më vonë, Barry dhe miqtë e tij të rinj në laboratorët S.T.A.R zbulojnë se ai tani ka
                   aftësinë të lëvizë me shpejtësi mbinjerëzore. Për më tepër, Barry mëson se ai është vetëm një
                    nga shumë të prekur nga ajo ngjarje, shumica e të cilëve po përdorin fuqitë e tyre për të keqen.
                     I vendosur për të bërë një ndryshim, Barry kushton jetën e tij në luftimin e kërcënimeve të tilla,
                      si The Flash. Ndërsa ai fiton aleatët që nuk e prisnin kurrë.</p>
                    </div></div>
                    <h2 style="color:white" >Flash</h2>
                    <p style="color:white">Categori:Aksion</p>
                  </td></br></br>
         <td> <div class="dropdown" > <a href="https://www.filma24.cc/seriale/v-wars/ ">
           <img src="Foto17.jpg" width="240" height="380"alt="Photo"   />
           <div class="dropdown-content">
             <h2 style="color:white" >V-Wars</h2>
              <p style="color:rgb(235, 202, 145)">  V Wars ndjek historinë e mjekut-shkencëtar Dr. Luther Swann dhe
                 mikut të tij më të mirë Michael Fayne pasi ata përballen me krizën evolucionare të një shpërthimi 
                 vdekjeprurës që copëton shoqërinë në fraksione kundërshtare, duke potencialisht përshkallëzimin në
                  një luftë të ardhshme midis njerëzve dhe vampirëve. [2 ] Përhapja është shkaktuar nga një kombinim
                   i ndryshimit të klimës [3] dhe një virus i lashtë që i shndërron njerëzit në vampira. [4]
                    Në konflikt, fraksioni i vampirëve i quajtur Gjaku kundërshtohet nga elementët e qeverisë si 
                    Calix Nikolos (Outerbridge) i cili komploton me senatorin anti-Gjak Smythe (Atherton). [3]</p>
                  </div></div> 
                  <h2 style="color:white" >V-Wars</h2>
                  <p style="color:white">Categori:Aksion</p>
                </td></br></br>
         <td> <div class="dropdown" > <a href="https://www.filma24.cc/seriale/the-walking-dead/">
           <img src="Foto18.jpg" width="240" height="380"alt="Photo"   />
           <div class="dropdown-content">
             <h2 style="color:white" >The Walking dead</h2> 
             <p style="color:rgb(235, 202, 145)"> Një spin-off i Walking Dead, i vendosur në Los Angeles, pas
               dy familjeve që duhet të bashkohen për të mbijetuar nga apokalipsi i padrejë. Një përmbledhje e
                serive në internet e "Të vdekurit në këmbë". Zëvendësministri Sherif Rick Grimes zgjohet nga koma
                 për të mësuar se bota është në gërmadha, dhe duhet të udhëheqë një grup të mbijetuarve 
                 për të qëndruar gjallë.</p>
                </div></div>
                  <h2 style="color:white">The Walking dead</h2>
                  <p style="color:white">Categori:Luft</p>
                 </td></br></br>
      </tr>
      <tr>
         <td> <div class="dropdown" > <a href="https://www.filma24.cc/seriale/power/ ">
           <img src="Foto19.jpg" width="240" height="380" alt="Photo"  />
           <div class="dropdown-content">
             <h2 style="color:white" >Power</h2>
              <p style="color:rgb(235, 202, 145)"> "Fuqia" është një dramë vizionare që shtrëngon stilin e jetës
                 magjepsëse të Manhattan të të pasurve dhe famëkeqve dhe nëntokës së tregtisë ndërkombëtare të drogës.
                  Kasti drejtohet nga Omari Hardwick si James "Ghost" St. Patrick, një njeri që përpiqet të shpëtojë
                   nga roli i tij si një mbret i drogës për një jetë të legjitimuar në elitën e NYC; Joseph Sikora si
                    vëllai i tij në krah në biznesin e drogës, Tommy Egan; Naturi Naughton luan gruan e ashpër të Ghost,
                     Tasha St. Patrick; dhe Lela Loren është dashuria e tij e parë, Asistentja e Avokatëve të Sh.B.A-së
                      Angela Valdes.</p>
                    </div></div>
                     <h2 style="color:white">Power</h2>
                     <p style="color:white">Categori:Dram</p>
                    </td>
         <td> <div class="dropdown" > <a href="https://www.filma24.cc/seriale/ballers/ "> 
          <img src="Foto20.jpg" width="240" height="380" alt="Photo"  />
          <div class="dropdown-content">
            <h2 style="color:white" >Ballers</h2>
             <p style="color:rgb(235, 202, 145)"> Ballers është një serial televiziv komedi-dramë [1] amerikane 
              e krijuar nga Stephen Levinson dhe duke interpretuar Dwayne Johnson si Spencer Strasmore, një lojtar
               në pension NFL i cili duhet të lundrojë në karrierën e tij të re të zgjedhjes si menaxher financiar
                i lojtarëve të tjerë të NFL. Seriali u bë premierë në rrjetin televiziv kabllor amerikan HBO më 21
                 qershor 2015, me një episod pilot të shkruar nga Levinson dhe me regji nga Peter Berg. Sezoni 
                 i pestë u bë premierë në 25 gusht 2019, dhe përfundoi në 13 tetor 2019. [2]</p>
                </div></div>
                <h2 style="color:white">Ballers</h2>
                <p style="color:white">Categori:Komedi</p>
              </td>
         <td><div class="dropdown"> <a href="https://www.filma24.cc/seriale/13-reasons-why/ "> 
            <img src="Foto21.jpg" width="240" height="380" alt="Photo"  />
            <div class="dropdown-content">
              <h2 style="color:white" >13 Reasons why</h2>
               <p style="color:rgb(235, 202, 145)"> Trembëdhjetë Arsyet Pse, bazuar në librat më të shitur nga Jay 
                Asher, ndjek adoleshenten Clay Jensen (Dylan Minnette) ndërsa kthehet në shtëpi nga shkolla për 
                të gjetur një kuti misterioze me emrin e tij mbi të shtrirë në verandën e tij. Brenda ai zbulon
                 një grup kasetë kasetë të regjistruara nga Hannah Baker (Katherine Langford) -
                  një shok i saj i klasës dhe i dërmuar - i cili në mënyrë tragjike kreu vetëvrasje dy javë më parë.
                   Në kasetë, Hannah shpalos një ditar emocionues audio, duke detajuar trembëdhjetë arsyet pse 
                   vendosi t'i jepte fund jetës. .</p>
                  </div></div>
                  <h2 style="color:white" >13 Reasons why</h2>
                  <p style="color:white">Categori:Drame</p>
                </td>
         <td> <div class="dropdown"> <a href="https://www.filma24.cc/seriale/peaky-blinders/"> 
           <img src="Foto22.jpg" width="240" height="380"  alt="Photo" />
           <div class="dropdown-content">
             <h2 style="color:white" >Peaky Blinders</h2>
              <p style="color:rgb(235, 202, 145)">Peaky Blinders është një dramë e krimit në televizionin anglez
                 e vendosur në vitin 1920 Birmingham, Angli në pasojat e Luftës së Parë Botërore. Seriali, i cili 
                 u krijua nga Steven Knight dhe prodhuar nga Caryn Mandabach Productions, Screen Yorkshire dhe Tiger
                  Aspect Productions, ndjek shfrytëzimet e Familja e krimit Shelby. Screen Yorkshire siguroi fonde 
                  për prodhimin përmes Yorkshire Fundit Fund. Ishte prodhimi i parë që merrte fonde nga Fondi i
                   Përmbajtjes në Yorkshire, i cili nga ana tjetër bëri të sigurt që shumica e shfaqjes u filmua
                    në Yorkshire si pjesë e marrëveshjes.</p>
                  </div></div>
                  <h2 style="color:white" >Peaky Blinders</h2>
                   <p style="color:white">Categori:Drame</p>
                  </td>
      </tr>
       </table></br>

       
       <h1 class='c' style="color:black">Pershkrimet e Faqes</h1>
     <p class='c'  style="color:black">Ne Vazhdim Do te Percaktojm Disa pershkrimie ne lidhje me faqen ton ,si dhe disa letsime per juve</p>
      
     
<div class="Teli" style="height:1350px;width:1127px;">








<?php
//
$nameErr = $emailErr = $genderErr = $MbiemriErr = "";
$name = $email = $gender = $comment = $Mbiemri = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "<a style=color:red >Emri nuk eshte shkruar";
  } else {
    $name = test_input($_POST["name"]);
    
    $File = "Komentuesi.txt"; 
    $Handle = fopen($File, 'w');
    fwrite($Handle,"Emri:". $name."\n"); 
   
    


    
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "<a style=color:red >Lejohen vetem shkronjat dhe hapsirat";
    }
  }

  if (empty($_POST["Mbiemri"])) {
    $MbiemriErr = "<a style=color:red >Mbiemri nuk eshte shkruar";
  } else {
    $Mbiemri = test_input($_POST["Mbiemri"]);
    //write file
    fwrite($Handle,"Mbiemri:".$Mbiemri."\n"); 
    
   
    if (!preg_match("/^[a-zA-Z ]*$/",$Mbiemri)) {
      $MbiemriErr = "<a style=color:red >Lejohen vetem shkronjat dhe hapsirat";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "<a style=color:red >Emaili nuk eshte shkruar";
  } else {
    $email = test_input($_POST["email"]);
    //write file
    fwrite($Handle, "Email:".$email."\n"); 
   
   
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "<a style=color:red >Gabim ne email";
    }
  }

  if (empty($_POST["gender"])) {
    $genderErr = "<a style=color:red >Gjinia   nuk eshte Shtypur";
  } else {
    $gender = test_input($_POST["gender"]);
    //write file
    
    fwrite($Handle,"Gjinia:". $gender."\n\n"); 
    
   
  }
}

  if (empty($_POST["comment"])) {
    $comment = "Shkruani nje koment";
  } else {
    $comment = test_input($_POST["comment"]);
    //write file
    fwrite($Handle,"Komenti:". $comment."\n"); 
    fclose($Handle);
  } 

 
//Funskion Trim
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Komenti per Faqe</h2>
<p><span class="error">* Mbusheni keto hapsira per koment te faqes</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <a style="color:black">Emri: <input style="width:525px;margin-left:18px" type="text" name="name" value="<?php echo $name;
  ?>">
  <span class="error"style="color:green" >* <?php echo $nameErr;?></span>
  <br><br>
   <a style="color:black">Mbiemri: <input style="width:525px;" type="text" name="Mbiemri" value="<?php echo $Mbiemri;?>">
  <span class="error" style="color:green" >*<?php echo $MbiemriErr;?></span>
  <br><br>
  <a style="color:black">E-mail:<input style="width:525px;margin-left:24px" type="text" name="email" value="<?php echo $email;?>">
  <span class="error" style="color:green" >* <?php echo $emailErr;?></span>
  <br><br>
  
  <a style="color:black">Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  <a style="color:black">Gjinia:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Femen">Femen
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Mashkull">Mashkull
   
  <span class="error" style="color:green" >* <?php echo $genderErr;?></span>
  <br><br>
  <input class="button" type="submit" name="submit" value="Shtype">
  
</form>

<br><br>
<p style="color:black;" >Serialat me te shikuar <b><a href="http://localhost/PojektiPI/PHP/Ariani/Sss.php" target="_blank" style="color:red">Kliko ketu</a></b></p>

<p style="color:black;">Per informata me te shumta<b ><a href="https://www.google.com/" target="_blank" style="color:red" >Kliko ketu</a></b></p>
    <div class="Tabela">
  
      <h2 style="color:black" > Kerko serial:</h2>
          <form>
            <input type="text" name="search" placeholder="Search..">
          </form> 
           
          
          <button class="button" onclick="myFunctione()"  >Kerko</button>
    
          <p id="dem"></p>

          <script>
            var fruitse = [];
            document.getElementById("dem").innerHTML = fruitse;
            
            function myFunctione() {
              fruitse.push("Ska Kerkime");
              document.getElementById("dem").innerHTML = fruitse;
            }
            </script>


</div>
      

     <h1 style="color:black;" class="V">Seriali me i Shikuar i javes</h1>
     <div style="text-align:center"> 
      <button class="B" onclick="playPause()">Play/Pause</button> 
      <button class="B" onclick="makeBig()">Big</button>
      <button class="B" onclick="makeSmall()">Small</button>
      <button class="B" onclick="makeNormal()">Normal</button>
      <br><br>
      <video class="VI" id="video1" width="450">
        <source src="HBO Ballers Official Trailer.mp4" type="video/mp4">
        <source src="Facebook.png" type="video/ogg" >
      </video>
    </div> 
    <script> 

      var myVideo = document.getElementById("video1"); 
      function playPause() { 
        if (myVideo.paused) 
          myVideo.play(); 
        else 
          myVideo.pause(); 
      } 
      
      function makeBig() { 
          myVideo.width = 530; 
      } 
      
      function makeSmall() { 
          myVideo.width = 320; 
      } 
      
      function makeNormal() { 
          myVideo.width = 420; 
      } 
      </script> 


<a style="color:black; background-color:green;border-radius:6px;" href="Seriala.php?file=HBO Ballers Official Trailer.mp4">DOWNLOAD</a>


</div>
</div>

<div style=" border: 3px solid black;;height:540px;width:1200px;margin-left:35px;  background: rgb(187, 187, 187);" >

<?php
 $Teksti = "/(tuaja|pjes) mundeni (te|komentet)/";
 $hyrja = "<h2 style=width:440px;> Ne pjes mundeni te komentet tuaja</h2> ";
 print preg_replace($Teksti, "kete $0 lexoni ", $hyrja);

echo "<h2>1.</h2><img src=account.jpg width=70px height=70px  >";
echo "</br>";
echo "Emri:".$name;
echo "<br>";
echo "Mbiemri:".$Mbiemri;
echo "<br>";
echo "Emaili:".$email;
echo "<br>";
echo "Gjinia :".$gender;
echo "<br>";
echo "<br>";
echo " Komenti:<br>"."<textarea style=border:0px;>   $comment </textarea>";
echo "<br>";

?>



    </div>


<div class="center" >
  <div class="pagination">
  <a href="#">&laquo;</a>
  <a href="#">1</a>
  <a href="#" class="active">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#">&raquo;</a>
  </div>
</div>


     
<footer style="height:200px;width:1215px;">



<div style="margin-left:450px;width:400px; margin-buttom:100px;">
<p>Na ndiqni ne rrjetet sociale<p>
            
             
             
<div style="margin-" class="IMG">
<img  src=" facebook.png " width="30" height="30" />
<img   src=" Instagram.jpg " width="30" height="30" />
<img   src=" painters.png " width="30" height="30" />
<img   src=" twiter.png " width="30" height="30" />
           
<a href='#'> Home</a>   <a href='#'>Search</a>  <a href='#'>Browse</a>
<p>Copyright &copy; - G22 Projekti n&euml; Internet</p>

</div> 
</div> 
</footer>
</body>
</html>




          

