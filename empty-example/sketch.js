var fireworks = [];
var gravity;
var fade;
var fadeAmount = 1

function setup() {
  createCanvas(1520, 600);
  img = loadImage('empty-example/papa.jpg');
  colorMode(HSB);
  gravity = createVector(0, 0.2);
  stroke(255);
  strokeWeight(4);
  background(0);
  textSize(100)
  fade = 0
}

function draw() {
  colorMode(RGB);
  image(img, 650, 350);
  fill(0, 200, 200, fade);
  text("Happy Father's Day!",300 ,300);
  background(0, 0, 0, 25);
  if (random(1) < 0.03) {
    fireworks.push(new Firework());
  
  if (fade<0) fadeAmount=1; 
   
  if (fade>255) fadeAmount=-10; 
   
  fade += fadeAmount; 
  print(fade)  
  
  }
    

  for (var i = fireworks.length - 1; i >= 0; i--) {
    fireworks[i].update();
    fireworks[i].show();

    if (fireworks[i].done()) {
      fireworks.splice(i, 1);    
    }
  }
}