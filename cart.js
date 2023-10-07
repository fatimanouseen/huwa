const minus = document.getElementById('minus');
const plus = document.getElementById('plus');
const generate = document.getElementById('generate');
const price = document.getElementById('price');
let count = 0;

// let cartProducts ={
//     name:"name",
//     price:'price',
//     quantity:'1',
//     imageURL:''

// }

// let cartList =[ ]
// cartList.push(cartProducts)
// cartList[0]

plus.addEventListener('click',function(){
    count = count + 1;
    document.getElementById('generate').textContent = count;
    generatePrice();
})

minus.addEventListener('click',function(){
    if(count !== 0){
    count = count - 1;
    document.getElementById('generate').textContent = count;
    }else{
        document.getElementById('generate').textContent = '0';  
    }
    generatePrice();
})

const addItem =(item)=>{


}

const generatePrice = () =>{
    document.getElementById(`price`).textContent = 100 * count;
}
