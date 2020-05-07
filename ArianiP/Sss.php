<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serialat e Muajit</title>
</head>
<style>
body{
    background-color:gray;
}
</style>
<body>
<header style="background:black; height:60px;">
<h1 style="color:red">Ketu mund te i gjeni Serialet me te shikur gjat muajit</h1>
</header>
</br></br></br>

<?php 

class Filma {
    
    const BR='<br/>';


    var $kategoria;
    var $emri;
    var $foto;
    var $dir = 'seriale/';
   
    public function print_filma(){
      
        echo "<div style='float:left;margin-right:40px;'>";
        echo "<font size='5px'>{$this->emri}</font>".self::BR;
        echo "<img src= '{$this->dir}{$this->foto}'  width=293px>".self::BR;
        echo '-'.$this->kategoria;
        echo "</div>";

    }
    public function set_filma($emri,$kategoria,$foto){
        $this->emri = $emri;
        $this->kategoria = $kategoria;
        $this->foto = $foto;
      
     
}
}
     
$filma = new Filma;
$filma->emri='Mindhunter';
$filma->kategoria="Aksion";
$filma->foto='1.jpg';
    
$filma->print_filma();

$filma->emri ='The Thick of it';
$filma->kategoria ="Drame";
$filma->foto='2.jpg';

$filma->print_filma();

$filma->set_filma('Dark',"Aventure",'3.jpg');

$filma->print_filma();

$filma->set_filma('Unabomber',"Aksion",'4.jpg');

$filma->print_filma();


$filma->set_filma('Madmen',"Mister",'5.jpg');


$filma->print_filma();

$filma->set_filma('Orande Black',"Komedi",'6.jpg');

$filma->print_filma();

$filma->set_filma('Orande Black',"Aventur",'Foto14.jpg');

$filma->print_filma();

$filma->set_filma('Orande Black',"Drame",'Foto22.jpg');

$filma->print_filma();

?>






<footer>
<div id="myDIV" style="margin-top:1000px;border-radius:10px; width:1300px;">
<?php

class F {
public $emri;
public $ngjyra;
public function __construct($emri, $ngjyra) {
$this->emri = $emri;
$this->ngjyra = $ngjyra; 
}
protected function funksion() {
echo "<p style=color:white;margin-left:500px;margin-top:0px;font-size:30px;>www {$this->emri} KFilma {$this->ngjyra}com</p>"; 
}
}
class s extends F {
public function mesazhi() {
echo "<p style=color:white;margin-left:540px;margin-top:0px;font-size:23px;>Faqja jone zyrtare</p> ";

$this -> funksion();
}
}
$s = new S(".", ".");  
$s->mesazhi(); 
?>
</div>



</footer>


<style>

#myDIV {
    width: 430px;
    height: 90px;
    background: black;
    animation: mymove 2s infinite;
    border-radius:80px;
  } 
  
  @keyframes mymove {
    from { background-color:blue;
    }
    to {background-color: red;}
  }
  

    </style>

</body>
</html>