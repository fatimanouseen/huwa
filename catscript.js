//CATEGORIES SLIDE 

const catRadios = document.querySelectorAll('#cat-radios input[type="radio"');
const catRadio1 = document.getElementById("cat-radio1");
const catRadio2 = document.getElementById("cat-radio2");
const catRadio3 = document.getElementById("cat-radio3");
const catRadio4 = document.getElementById("cat-radio4");
const catRadio5 = document.getElementById("cat-radio5");
const catSlide = document.querySelector('#category-slide')
const catRight = document.getElementById("cat-right");
const catLeft = document.getElementById("cat-left");
let arraycat = [catRadio1,catRadio2,catRadio3,catRadio4,catRadio5];
console.log(catSlide.length);
let count=0;

(function() {
let counter = 0;
var imgLen = document.querySelector('#category-slide');
var images = imgLen.getElementsByTagName('img');
if (counter <= images.length) {
  setInterval(function() {
    images[0].src = images[counter].src;
    console.log(images[counter].src);
    counter++;

    if (counter === images.length) {
      counter = 0;
    }
    
  }, 2000);
}
})();



const imagescatslide = () => {
    catSlide.style.transform = `translateX(-${count * 100}%)`;
  };

function updatecatradio (index){
  catRadios.forEach((catRadios,i) => {
    if(i===index){
      catRadios.checked=true;
    }else{
      catRadios.checked=false;
    }
  });
}

for(let i=0;i<arraycat.length;i+=1){
  arraycat[i].addEventListener("click", function () {
    catSlide.style.transform =`translateX(-${i*100}%)`;
  })}

catRight.addEventListener("click", function () {
  if (count == 4) {
    count =0;
  } else {
    count +=1;
  }
  imagescatslide();
  updatecatradio(count);
 
});

catLeft.addEventListener("click", function () {
  if (count == 0) {
    count =4;
    
  } else {
    count -=1;
  }
  imagescatslide();
  updatecatradio(count);
});

const catAddtocart = document.querySelector('.cat-btnaddtocart');