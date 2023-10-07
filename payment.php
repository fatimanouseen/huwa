<?php
session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/payment.css">
    <link rel="stylesheet" href="./css/framework.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>
<body>
    <div class="col12 flex">
    
    <div>
        <a href="./cart.php">
        <button class="ml-4 mt-4 goback-btn">
            <i class="fa-solid fa-chevron-left"></i>  GO BACK</button></a>
    </div>

    <div class="col4 flex ml-3 mt-8">
    <div class="col12 bg-white  pt-4 pl-3 pr-3 pb-5 br-radius ml-2 elevation-7 ">
        <div class="flex flex-justify-space-between">
        <p>CREDIT CARD DETAILS</p>
        <p class="fs-1 ash-gray "><i class="fa-solid fa-wand-magic-sparkles mr-1"></i>secured payment</p>
        </div>
        <div class="flex flex-column br-radius mt-4 p-1" style="border: 0.2px solid gray;">
            <div class="flex">
            <input type="radio">
            <p class="ml-1 fs-1h">Credit Card</p>
            </div>
            <div class="fs-1 ash-gray ml-2 mt-1"><P>safe money transfter using your bank account.</P></div>
        </div>
        <div class="flex-column mt-4">
        <label>Name on card</label>
        <input type="text" name="cardName" class="p-1  mt-1">
        </div>
        <div class="flex-column mt-2">
        <label>Card Number</label>
        <input type="text" name="cardNumber" class="p-1 mt-1">
        </div>
        <div class="flex">
        <input type="date" name="expirationDate" class="pl-2 pr-2 p-1 mt-4">
        <input type="number" class="mt-4 ml-3 pl-4" placeholder="CVC">
        </div>
        <div class="flex mt-2">
        <input type="checkbox" name="saveinfo">
        <p class="fs-1 saving-credit-info">save credit card information for the next time<br></p>
        </div>
        <input type="submit" class="paynow-btn" value="PAY NOW">
    </div>
    </div>
     
    
    <div class="bg-white col4 ml-11 mt-8 br-radius elevation-7" style="height: 50vh;">
       <h2 class="mt-4 ml-3">Order Summary</h2>
       <div class="flex flex-justify-space-between mt-4">
          <p class="ml-4">classic ceramic plates</p>
          <p class="mr-4">&#8377;340</p>
       </div>
       <div class="flex flex-justify-space-between mt-3">
          <p class="ml-4">classic ceramic plates</p>
          <p class="mr-4">&#8377;340</p>
       </div>
       <div class="flex flex-justify-space-between mt-3">
        <p class="ml-4">Shipping</p>
        <p class="mr-4">&#8377;30</p>
     </div>
     <div class="flex flex-justify-space-between mt-3">
        <p class="ml-4">Discount</p>
        <p class="mr-4">&#8377;100</p>
     </div>
     <hr width="430px" class="mt-3 ml-2">
     <div class="flex flex-justify-space-between mt-3">
        <p class="ml-4">Total</p>
        <p class="mr-4">&#8377;610</p>
     </div>
    </div>
</div>

 
</div>
</body>
</html>