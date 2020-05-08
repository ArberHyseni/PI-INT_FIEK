<!DOCTYPE html>
<html en="lang">
    <head>
        <meta charset="utf-8">
        <title>Top 18 faktet per filma</title>
      
        <link rel="stylesheet" href="css\reset.css">
        <link rel="stylesheet" href="css\stilizimi.css">
      
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="jquery-1.11.2.min.js"></script>
      
<script>
    $(document).ready(function(){
        $("#btn2").click(function(){
    alert("HTML: " + $("#test").html());
  });
        $("#btnhtml").click(function(){
    $("#test2").html("<h1>Tetëmbëdhjetë fakte që nuk i dini për filmat e famshëm (Foto)</h1>");
  });
});
</script>

<script>
    $(document).ready(function(){
        $("#btn3").click(function(){
        $("ul").append("<li><b>Duket sikur i gjithë emisioni televiziv ‘Friends’ është filmuar në New<br> York. Në realitet, nuk u xhirua asnjë skenë në qytet – gjithçka u<br> filmua në një studio.</b></li>");
  });
});
</script>

<script> 
    $(document).ready(function(){
      $("#flip").click(function(){
        $("#panel").slideToggle("slow");
        $("#flip").text("Klikoni per ta mbyllur");
        
      });
    });
</script>

<style> 
    #panel,#flip
    {
    padding:5px;
    text-align:center;
    background-color:#f8965e;
    border:solid 1px #585656;
    }
    #panel
    {
    padding:50px;
    display:none;
    }
</style>
<?php
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
    ?>
    </head>
    <body>
        <header>
            <p id="test2"><b>Titulli</b></p>
            <?php
                define("TV","<p>TV/Filmat</p>");
                function funk(){
                    echo TV;
                }
                funk();
            ?>
        </header>
        <main>
            <section>             
                <button id="btnhtml">Vendos titullin</button>
                <p></p>
                <figure>
                    <a href="images/it3-780x439.jpg">
                    <img src="images/it3-780x439.jpg" width="700px"></a>
                </figure>
                <p id="test"><b>Pa marrë parasysh se sa i tmerrshëm është filmi, ajo që shihni në<br> 
                                ekran nuk është gjithmonë më mirë se ajo që mbeti prapa <br>
                                skenave. Industria e filmit është shumë interesante!</b></p>
                   <button id="btn2">Trego ne HTML paragrafin me larte</button>
                   <p></p>
                <p>Bright Side bëri një listë prej 18 fakteve pak të njohura rreth<br>
                   filmave popullorë që janë shumë interesante për të lexuar.</p>
            </section>

            <section>
                <ul>
                    <li><b>Sipas romanit të Stephen King IT, kllouni Pennywise zgjohet çdo 27 <br>
                           vjet. Ky libër u adaptua për herë të parë në ekran në vitin 1990 dhe <br>
                           adaptimi i ri u lirua 27 vjet më vonë. Bill Skarsgard, i cili luajti<br>
                           Pennywisen, ishte 27 vjeç gjatë xhirimeve.</b>
                           <p></p>
                    <?php

                    $nr = 27;
                    $str1 = "të Stephen King IT, kllouni Pennywise zgjohet çdo ";
                    $str2 = "vjet";

                    printf("Sipas romanit %s çdo %u %s .", $str1, $nr, $str2);
                
                    ?>
                        <figure>
                            <a href="images/1.jpg">
                            <img src="images/1.jpg"></a>
                        </figure>
                    <p></p></li>
                    <li>
                    <?php
              
                    $ip1 = " <b>Kllouni Pennywise u frymëzua nga vrasësi i vërtetë dhe përdhunuesi
                    John Wayne Gacy, i cili do të vishej si një klloun në një festë 
                    fëmijësh. Ai u paraqit si një anëtar aktiv i komunitetit dhe ishte i
                    njohur për fëmijët e sëmurë zbavitës dhe grumbullimin e të hollave 
                    për bamirësi.</b>";
                    $iparr1 = preg_split ("/\./", $ip1);
                    print "$iparr1[0] <br />";
                    print "$iparr1[1] <br />" ;
                    print "$iparr1[2] <br />"  ;
                    
                    ?>
                        <figure>
                            <a href="images/2.jpg">
                            <img src="images/2.jpg"></a>
                        </figure>
                    <p></p></li>
                    <li>
                    <?php

                    $ip1 = " <b>Jackson Robert Scott i cili luan Georgien në ‘IT’ ka punuar tashmë në
                    ‘Scary’ nga Walking Dead dhe Criminal Minds. Edhe pse ai është
                    vetëm nëntë vjeç, ai nuk është i frikësuar nga kllounët apo
                    përbindëshat dhe gjithmonë gëzon ndjenjën e të qenit i vendosur.";
                    $iparr1 = preg_split ("/\./", $ip1);
                    print "$iparr1[0] <br />";
                    print "$iparr1[1] <br />" ;
                    print "$iparr1[2] <br />"  ;
                    
                    ?>
                        <figure>
                            <a href="images/3.jpg">
                            <img src="images/3.jpg"></a>
                        </figure>
                    <p></p></li>        
                    <li><b>Vokalizimi i shpejtë i komunikimit në Jurassic Park ishte asgjë më<br>
                           shumë se zhurma e regjistruar e breshkave që kishin marrëdhënie <br>
                           seksuale.</b>
                        <p></p></li>
                    <li><b>“E Bukuria dhe Bisha” (1992) ishte filmi i parë i animuar që u <br>
                           nominua për një ‘Oscar’ në kategorinë më të mirë. Megjithatë,<br>
                           ‘Heshtja e Qengjave’ fitoi çmimin në këtë kategori.</b>
                           <p></p>
                    <?php
                        echo str_replace("Bisha", "Heshtja", "E Bukura dhe Bisha");    

                    ?>
                    
                        <p></p></li>
                    <li>    
                    <?php

                    $ip1 = " <b>Në filmin e kompanisë Pixar Up, shtëpia e Carl u hoq me 20,622
                    balona. Në të vërtetë, do të duhej rreth 20 deri në 30 milionë balona
                    për të ngritur një shtëpi. Dhe vetëm 10,297 balona u përdorën në
                    shumicën e skenave.";
                    $iparr1 = preg_split ("/\./", $ip1);
                    print "$iparr1[0] <br />";
                    print "$iparr1[1] <br />" ;
                    print "$iparr1[2] <br />"  ;
                    
                    ?>
    
                        <figure>
                            <a href="images/4.jpg">
                            <img src="images/4.jpg"></a>
                        </figure>
                    <p></p></li>
                    <li><b>Një hulumtuese e hienave paditi Disneyn për “shpifje të karakterit”<br>
                           për përfaqësimin e saj negativ të hienave në Mbretin Luan.</b>
                           <p></p>
                     
                    <?php
                        $array = array("hulumtuese", "paditi", "Disneyn");
                        echo "Një ".$array[0]." e hienave ".$array[1]." ".$array[2]." për 'shpifje të karakterit' <br>"; 
                        echo "\n";

                        $arrlen = count($array);
                        for($x = 0; $x < $arrlen; $x++) {
                            sort($array);
                            echo $array[$x]; 
                            echo "<br>";
                          }
                        echo "<br>";
                        for($x = 0; $x < $arrlen; $x++) {
                            rsort($array);
                            echo $array[$x]; 
                            echo "<br>";
                          }
                    ?>                     
                        <p></p></li>
                    <li><b>A e dini se çfarë kanë të përbashkët Leonardo DiCaprio, Will Smith,<br>
                           Nicolas Cage dhe Johnny Depp? Ata u konsideruan të gjitha për<br>
                           pjesën e Neos në ‘The Matrix’.</b>
                           <p></p>
                        <?php
                        $varg = array
                        (
                            array("Leonardo", "DiCaprio"),
                            array("Will", "Smith"),
                            array("Nicolas", "Cage"),
                            array("Johnny", "Deep")
                        );
                        echo "A e dini se çfarë kanë të përbashkët ".$varg[0][0]." ".$varg[0][1].", ".$varg[1][0]." ".$varg[1][1].", ".
                        $varg[2][0]." ".$varg[2][1].", ".$varg[3][0]." ".$varg[3][1]."?"; 
                       
                        for ($row = 0; $row < 4; $row++) {
                            echo "<br><p>Rreshti $row permban keto vlera:</p>";
                            echo "<ol>";
                            for ($col = 0; $col < 2; $col++) {
                              echo "<li>".$varg[$row][$col]."</li>";
                            }
                            echo "</ol>";
                          }
                        ?>
                        <p></p></li>
                    <li><b>Duart që vizatojnë Rose në Titanik i përkasin James Cameron. Ai<br>
                           gjithashtu tërhoqi çdo skicë të vetme nga lidhësja e Jackit. Regjisori<br>
                           i famshëm është me të vërtetë i majtë, dhe të gjitha skenat e<br>
                           vizatimit u kthyen.</b>
                        <figure>
                            <a href="images/5.jpg">
                            <img src="images/5.jpg"></a>
                        </figure>
                    <p></p></li>           
                    <li>
                    <?php

                        $txt = " <b>Fjala 'dude' përdoret rreth 161 herë në ‘The Big Lebowski’, dhe
                        numri i fjalëve të F-së arriti në 292. </b>";
                        echo $txt."<br>";
                        echo trim($txt, ", dhe numri i fjalëve të F-së arriti në 292. </b>");
                    ?> 
                    <p></p></li>  
                    <li><b>Buzz’s (vëllai i Kevin) ishte në të vërtetë një djalë i përbërë si një<br>
                           vajzë në ‘Home Alone’. Prodhuesit menduan se do të ishte mizore<br>
                           për të hedhur një vajzë të re për këtë pjesë.</b>
                        <figure>
                            <a href="images/6.jpg">
                            <img src="images/6.jpg"></a>
                        </figure>
                    <p></p></li>
                    <li><b>Panemi është një vend imagjinar dhe vendosja e përgjithshme e<br> 
                           Lojrave të urisë. Emri “Panem” vjen nga shprehja latine “Panem et<br> 
                           circenses”, që do të thotë “bukë dhe cirqe”.</b>
                           <p></p>
                           <?php
                            $a = array("vend"=>"52", "shprehja"=>"44", "bukë"=>"56");
                            asort($a);
                            foreach($a as $x => $x_value) {
                                echo "Key=" . $x . ", Value=" . $x_value;
                                echo "<br>";
                            }
                            echo "<br>";
                            krsort($a);
                            foreach($a as $x => $x_value) {
                                echo "Key=" . $x . ", Value=" . $x_value;
                                echo "<br>";
                            }
                            echo "<br>";
                            arsort($a);
                            foreach($a as $x => $x_value) {
                                echo "Key=" . $x . ", Value=" . $x_value;
                                echo "<br>";
                            }
                            ?>
                        <p></p></li>
                    <li><b>Në fund të kredive të Harry Potter dhe Kupës së Zjarrit, thuhet:<br> 
                           “Asnjë dragua nuk u dëmtua në bërjen e këtij filmi”. Le të<br> 
                           shpresojmë që kjo të jetë e vërtetë!</b>
                        <figure>
                            <a href="images/7.jpg">
                            <img src="images/7.jpg"></a>
                        </figure>
                    <p></p></li>
                    <li><b>Gal Gadot u desh të rimarrë disa skena nga ‘Wonder Woman’ kur<br> 
                           ajo ishte pesë muajshe shtatzënë, duke përfshirë disa skena ku ajo<br> 
                           kishte për të bërë truket.</b>
                        <p></p></li>
                    <li><b>Emma Watson fillimisht duhej të luante në ‘La La Land’, por ajo<br> 
                           duhej të vonohej për shkak të kontratës së saj të nënshkruar më<br> 
                           parë për filmin “E bukura dhe Bisha”.</b>
                        <figure>
                            <a href="images/8.jpg">
                            <img src="images/8.jpg"></a>
                        </figure>
                    <p></p></li>
                    <li><b>Cameron Diaz bëri debutimin e saj duke vepruar si Tina Carlyle në<br> 
                           ‘The Mask’. Ajo kishte 12 audicione para se ajo të zgjidhej<br> 
                           përfundimisht për këtë rol vetëm shtatë ditë para fillimit të filmimit.</b>
                            <p></p>
                            <?php
                            $a1 = array("Cameron", "Diaz", "bëri", "debutimin", "e", "saj");
                            $a2 = array("duke", "vepruar", "si", "Tina", "Carlyle", "në", "The", "Mask");
                            $a3 = array("Ajo", "kishte", "12" , "audicione");
                            
                            echo "array1 eshte: '".implode(",", $a1)."'<br>";
                            echo "array2 eshte: '".implode(";", $a2)."'<br>";
                            echo "array3 eshte: '".implode("/", $a3)."'<br>";
                            ?>
                        <p></p></li>
                    <li><b>A ju kujtohet skena në ‘Twilight’ ku Bella dhe Charlie janë në<br> 
                           restorant, dhe ka një grua me flokë kafe të errët ulur pas tyre me një<br> 
                           kompjuter portativ? Kjo grua është autorja e librit, Stephenie Meyer. </b>
                        <figure>
                            <a href="images/9.jpg">
                            <img src="images/9.jpg"></a>
                        </figure>
                    <p></p></li>
                    <li><b>Duket sikur i gjithë emisioni televiziv ‘Friends’ është filmuar në New<br> 
                           York. Në realitet, nuk u xhirua asnjë skenë në qytet – gjithçka u<br> 
                           filmua në një studio.</b>
                        <p></p>
                        <button id="btn3">Shto paragrafin e fundit te listes</button></li>
                </ul>
                <p></p>
                <div id="flip">Klikoni per me shume</div>
                <div id="panel">Keto pra ishin 18 faktet per filmat e famshem. Nuk ka rëndësi se sa fantastik është një film, ajo çfarë shihet në ekran shpesh nuk është më mirë se ajo që mbetet pas kamerave. Industria e kinematografisë është kurioze dhe magjepse.
                <?php
                    $ndarja = "Keto pra ishin 18 faktet per filmat e famshem.
                           Nuk ka rëndësi se sa fantastik është një film, 
                           ajo çfarë shihet në ekran shpesh nuk është më mirë se ajo që mbetet pas kamerave. 
                           Industria e kinematografisë është kurioze dhe magjepse.";
                    $a = explode(" ", $ndarja);
                    echo $a[0];
                    echo $a[1];
                    echo $a[2];
                    echo $a[3];
                    echo $a[4];
                    echo $a[5];
                    echo $a[6];
                    echo $a[7];
                    echo $a[8];

                    $x = 12;
                    $y = 6;
                    function f1() {
                        $GLOBALS['x'] = $GLOBALS['x'] + $GLOBALS['y'];
                        echo "<br>Pra numri i fakteve ishte: ".$GLOBALS['x'];
                    }
                    f1();
                ?>
                </div>
                <p></p>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <label>Sheno koment ne lidhje me keto fakte per filmat: </label>
                <textarea id="Mytextarea" type="text" name="fname" rows="3" cols="90"></textarea>
                <input type="submit">
                </form>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST['fname'];
                if (empty($name)) {
                    echo "Nuk keni shenuar koment!";
                } else {
                    echo $name;
                }
                }           
                ?>
                <p></p>
            </section>
        </main>
        <footer>
            <div style="margin-left:435px;">
                <a href='#'>Home</a> |  <a href='#'>Search</a> |  <a href='#'>Browse</a>
                <p>Copyright &copy; - G22 Projekti n&euml; Internet</p>
            </div>
        </footer>
    </body>
</html>