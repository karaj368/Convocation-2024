<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Thank You Shobhit University</title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
<meta name=viewport content="width=device-width, initial-scale=1, shrink-to-fit=no user-scalable=no">
<link rel="icon" type="image/png" sizes="32x32" href="https://www.shobhituniversity.ac.in/images/favicon.png" />

</head>

<body>
<canvas class="grey darken-4" id="canvas" width="" height=""> </canvas>
<style>
body{font-family: 'Open Sans', sans-serif;overflow: hidden;}
img {max-width: 100%}
#canvas {width: 100%; height: 100%;}
  .text span {
   font-weight: 300;
  }

.text span.complete {
	font-weight: bold;
	margin: 19px 0 7px;
	display: inline-block;
	font-size: 16px;
}
 /* .btn::before {
   content: "";
   margin: 40px auto 0;
   width: 73px;
   background-image: url(./images/degree.png);
   position: absolute;
   left: -55px;
   bottom: -5px;
   height: 50px;
   background-size: 70px;
   background-repeat: no-repeat;
  } */

  .text {
   font-size: 18px;
   text-align: center;
   font-weight: 400;
  }

  .tankyou {
    width: 100%;
   max-width: 600px;
   margin: auto;
   position: absolute;
   transform: translate(-50%, -50%);
   left: 50%;
   top: 50%;
  }

  .logo {
   width: 243px;
   margin: 0 auto 40px;
   position: relative;
   z-index: 9;
  }

  .btn a {
   background: #f10000;
   color: #fff;
   text-decoration: none;
   padding: 9px 40px;
   border-radius: 50px;
   text-transform: uppercase;
   font-size: 19px;font-weight: bold;
  }
  .btn{
    display:inline-block;
    margin-top:20px;
  }
   
   @media screen and (max-width:480px){
    .text span.complete {font-size: 26px; line-height: 25px;}
    .text {font-size: 14px;	text-align: center; font-weight: 100; line-height: 16px; }
    .tankyou { padding:20px 0px;}
   }
 </style>
<div class="tankyou">
  <div class="cong"><img src="./assets/images/thankyou.png" alt="Thank You"> </div>
  <div class="text"> Dear Proud Shobhitian,<br>

    We are happy to note that you have successfully registered yourself for attending the 15th Convocation. 
    Please ensure to reach latest by 07:30 am on 17th June 2024 to avoid any inconvenience. <br>
    
    We are eagerly looking forward to see you at your University Campus.<br> <br>
    
    <span>Prof. (Dr) Jayanand</span><br>
    Pro-Vice Chancellor<br>
    Chairman, 15th Convocation Organizing Committee<br>
    Shobhit Institute of Engineering &amp; Technology<br>
    (A Deemed to-be University)<br>
    NH 58, Modipuram, Meerut, Uttar Pradesh <br>
    Helplines: +917617505012 | 9810649492<br>
    
  <div class="btn"> Registration Fee Rs.1000/- :<br> <a class="btn " href="https://shobhit.collpoll.com/publicEvent/402" target="_blank">To Pay Online</a> </div>
</div>
<script>
 
 var canvas = document.getElementById('canvas');
var c = canvas.getContext('2d');

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

var mouse = {
    x: undefined,
    y: undefined
}

window.addEventListener('mousemove', function(e){
    mouse.x = e.x;
    mouse.y = e.y;
});

window.addEventListener('resize', function(){
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
});

function getRandomInt(max) {
    return Math.floor(Math.random() * Math.floor(max));
}

function Circle(){
    this.radius = getRandomInt(10);
    this.originalSize = this.radius;
    this.x = Math.random() * (innerWidth - this.radius * 2) + this.radius;
    this.y = Math.random() * (innerHeight - this.radius * 2) + this.radius;
    this.gradient = Math.random();
    this.color = 'rgba('+ getRandomInt(255) +','+ getRandomInt(255) + ','+ getRandomInt(255) + ','+ this.gradient +')';    
    this.xVelocity = 5 * (Math.random() - Math.random());
    this.yVelocity = 5 * (Math.random() - Math.random());
    this.draw = function(){
        // c.font = 'lighter 80px sans-serif';
        // c.fillStyle = '#dedede';
        // c.textAlign = 'center';
        // c.fillText('Bouncing Bubbles', canvas.width/2, canvas.height/2);
        c.beginPath();
        c.arc(this.x,this.y, this.radius, 0, Math.PI*2, false);
        c.strokeStyle = this.color;
        c.stroke();
        c.fillStyle = this.color;
        c.fill();
        this.update();
    }
    this.update = function(){
        if(this.x + this.radius > innerWidth || this.x - this.radius < 0){
            this.xVelocity = -this.xVelocity;
        }
        if(this.y + this.radius > innerHeight || this.y - this.radius < 0){
            this.yVelocity = -this.yVelocity;
        }
        this.x += this.xVelocity;
        this.y += this.yVelocity;

        if(mouse.x - this.x < 50 && mouse.x - this.x > -50 
            && mouse.y - this.y < 10 && mouse.y - this.y > -50){
                if(this.radius < 100){
                    this.radius += 2;
                }
        }
        else if(this.radius !== this.originalSize){
            this.radius -= 2;
        }
    }
}

var circleArray = [];

for(var i = 0; i < 30; i++){
    circleArray.push(new Circle());
}

function animate(){
    c.clearRect(0,0, innerWidth, innerHeight);
    for(var i = 0; i < circleArray.length; i++){
        circleArray[i].draw();
    }
    requestAnimationFrame(animate);
}
animate();
 </script> 

</body>
</html>
