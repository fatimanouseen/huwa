const slideimg = document.querySelector("#slide-img");
const radio1 = document.getElementById("radio1");
const radio2 = document.getElementById("radio2");
const radio3 = document.getElementById("radio3");
const radio4 = document.getElementById("radio4");
const right = document.getElementById("right");
const left = document.getElementById("left");
const radios = document.querySelectorAll('#radios input[type="radio"');

let count = 0;
let array = [radio1, radio2, radio3, radio4];



const imagesslide = () => {
  slideimg.style.transform = `translateX(-${count * 100}%)`;
};

function updateradio (index){
  radios.forEach((radios,i) => {
    if(i===index){
      radios.checked=true;
    }else{
      radios.checked=false;
    }
  });
}

for(let i=0;i<array.length;i+=1){
array[i].addEventListener("click", function () {
  slideimg.style.transform =`translateX(-${i*100}%)`;
})}



right.addEventListener("click", function () {
  if (count == 3) {
    count =0;
  } else {
    count +=1;
  }
  imagesslide();
  updateradio(count);
 
});

left.addEventListener("click", function () {
  if (count == 0) {
    count =3
    ;
  } else {
    count -=1;
  }
  imagesslide();
  updateradio(count);
});

// LOGIN (START)

const login = document.querySelector('#loginn');
const modalWindow=document.querySelector('.modal-window');
const opaque = document.getElementsByClassName('opaque');

login.addEventListener('click',function(){
  modalWindow.classList.toggle('hidden');
  
})

const closeModal = function () {
  modalWindow.classList.add('hidden');
  opaque.classList.add('hidden');
};

opaque.addEventListener('click', closeModal);

document.addEventListener('keydown', function (e) {
  if (e.key === 'Escape' && !modalWindow.classList.contains('hidden')) {
    closeModal();
  }
})
