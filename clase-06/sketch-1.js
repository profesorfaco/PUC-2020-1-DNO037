var a = 40;
var c;

function setup() {
  createCanvas(windowWidth, windowHeight);
}

function draw() {
  //colorMode (RGB), 
  colorMode (HSB,360,100,100);
  //background(0,100,100);
  fill(random(0,40),100,100);
  noStroke();
  c =a * random(1,5);
  ellipse(mouseX,mouseY,c,c);
 
}







