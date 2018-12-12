var canvas, context;
var fieldWidth, fieldHeight;

canvas=$("#camp")[0];

fieldWidth=canvas.width;
fieldHeight=canvas.height;
context=canvas.getContext('2d');

// dades de sa bolla
var xBall, yBall;
var ballWidth, ballHeight;
var incBall, incX, incY;

// Sticks
var stickWidth, stickHeight, stickSeparation;
var incStick;
var leftStickX, leftStickY, rightStickX, rightStickY;

//tecles (constants)
LEFT_UP = "W";
LEFT_DOWN = "S";
RIGHT_UP = "O";
RIGHT_DOWN = "L";
SOUND= "B";

drawField();
initBall();
initSticks();
drawLeftStick();
drawRightStick();
drawBall();

function loopGame(){
  drawField ();
  updateBall();
  drawLeftStick();
  drawRightStick();
  drawBall();


  setTimeout(loopGame, 4);
};

function updateBall(){
  xBall += incX
  yBall += incY

  if(yBall<ballWidth/2){
    incY*=-1;
  }
  else if(yBall> fieldHeight - ballWidth/2){
    incY*=-1;
  }
  else if(xBall<ballWidth/2){
    incX*=-1;
  }
  else if(xBall> fieldWidth - ballWidth/2){
    incX*=-1;
  }
  //left stick hitbox
  if(yBall >= leftStickY) &&
  (yBall <= leftStickY + stickHeight -1) &&
  (xBall - ballWidth <= leftStickX + stickWidth){
    incX*=-1;
  }
  //right stick hitbox
  if(yBall >= rightStickY) &&
  (yBall <= rightStickY + stickHeight -1) &&
  (xBall - ballWidth <= rightStickX + stickWidth){
    incX*=-1;
  }
  if(xBall < ballWidth/2{
    goalsRight++;
    initBall();
  }
  }
  if(xBall >= fieldWidth - ballWidth/2 {
    alert ("RIGHT GOAL");
  }

}

function drawField(){
    context.fillStyle="red";
    context.clearRect(0,0,fieldWidth, fieldHeight);
    context.fillRect(fieldWidth/2,0,2,fieldHeight);
}
// inicia bolla a la mitat des camp (incBall només pot ser 1 o 0)
function initBall(){
    xBall=fieldWidth/2;
    yBall=fieldHeight/2;
    ballWidth=20;
    ballHeight=20;
    incBall=1;
    incX = -1 + 2*Math.random();
    inxY = -1 + 2*Math.random();
}
// dibuixar cercle
function drawBall(){
    context.fillStyle="blue";
    context.beginPath();
    context.arc(xBall,yBall,ballWidth,0,2*Math.PI);
    context.fill();
}

function initSticks(){
    stickWidth=15;
    stickHeight=120;
    stickSeparation=5;
    incStick=5;
    leftStickX=stickSeparation;
    leftStickY=fieldHeight/2 - stickHeight/2;
    rightStickX=fieldWidth - stickSeparation - stickWidth;
    rightStickY=fieldHeight/2 - stickHeight/2;
}

function drawLeftStick(){
    context.fillStyle="white";
    context.fillRect(leftStickX,leftStickY,stickWidth,stickHeight);
}

function drawRightStick(){
    context.fillStyle="white";
    context.fillRect(rightStickX,rightStickY,stickWidth,stickHeight);
}

function moveUpLeftStick(){
  leftStickY-=incStick;
  if(leftStickY<0){
    leftStickY=1;
  }
}

function moveDownLeftStick(){
  leftStickY+=incStick;
  if(leftStickY>fieldHeight - stickHeight){
    leftStickY= fieldHeight - stickHeight -1;
  }
}

function moveUpRightStick(){
  rightStickY-=incStick;
  if(rightStickY<0){
    rightStickY=1;
  }
}

function moveDownRightStick(){
  rightStickY+=incStick;
  if(rightStickY>fieldHeight - stickHeight){
    rightStickY= fieldHeight - stickHeight -1;
  }
}
