$(document).ready(function(){
    $("#footeri").mouseenter(function(){
      alert("Keni vendosur miun mbi footer");
    });
  });


  $(document).ready(function(){
    $("h4").click(function(){
      $("h1").animate({
        height: 'toggle'
      });
    });
  });



//Loja-fillimi
  var myGamePiece;

function startGame() {
    myGamePiece = new component(30, 30, "orange", 10, 120);
    myGameArea.start();
}

var myGameArea = {
    canvas : document.createElement("canvas"),
    start : function() {
        this.canvas.width = 480;
        this.canvas.height = 270;
        this.context = this.canvas.getContext("2d");
        document.body.insertBefore(this.canvas, document.body.childNodes[0]);
        this.interval = setInterval(updateGameArea, 20);
    },
    clear : function() {
        this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
    }
}

function component(width, height, color, x, y) {
    this.width = width;
    this.height = height;
    this.speedX = 0;
    this.speedY = 0;
    this.x = x;
    this.y = y;    
    this.update = function() {
        ctx = myGameArea.context;
        ctx.fillStyle = color;
        ctx.fillRect(this.x, this.y, this.width, this.height);
    }
    this.newPos = function() {
        this.x += this.speedX;
        this.y += this.speedY;        
    }    
}

function updateGameArea() {
    myGameArea.clear();
    myGamePiece.newPos();    
    myGamePiece.update();
}

function moveup() {
    myGamePiece.speedY -= 1; 
}

function movedown() {
    myGamePiece.speedY += 1; 
}

function moveleft() {
    myGamePiece.speedX -= 1; 
}

function moveright() {
    myGamePiece.speedX += 1; 
}

//Loja-mbarimi




//Gjetja e gabimeve
function myFunction() {
    var mesazhi, x;
    mesazhi = document.getElementById("p01");
    mesazhi.innerHTML = "";
    x = document.getElementById("demo").value;
    try { 
      if(x == "")  throw "Hyrje e zbrazet";
      if(isNaN(x)) throw "Hyrje jo-numer";
      x = Math.sqrt(Number(x));
      if(x < 2)  throw "Hyrje pertej kufirit te poshtem";
      if(x > 5)   throw "Hyrje pertej kufirit te eperm";
      throw "Rrenja katrore eshte "+x;
    }
    catch(err) {
      mesazhi.innerHTML =  err;
    }
  }
  
  

