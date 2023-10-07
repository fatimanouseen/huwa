
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="css/framework.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>
<body>

<!--  -->
<div class="cat-first-nav bg-site-green p-1" style="height: 2vh">
  <p>huwashop@gmail.com | 1800-5646-9878</p>
  </div>
 <!--  -->

<!--FIRST NAV-->
<div class="flex bg-white flex-justify-space-between mt-1 mb-2">
    <div class="fs-3 ml-10 logo"><i class="fa-solid fa-leaf"></i>HUWA</div>
    <div class="mt-1">
      <input type="text" placeholder="search" style="padding: 5px 310px 5px 0px"/>
        <button class="search-button">
           <i class="fa-solid fa-magnifying-glass" style="color: #000000"></i>Search
        </button>
    </div>
    <div class="flex mt-1">
      <div>
        <div class="nav mr-10 flex" style="gap: 15px">
          <i class="fa-solid fa-heart ash-gray"></i>
          <i class="fa-solid fa-cart-shopping ash-gray"></i>
          <i class="fa-regular fa-user ash-gray"></i>
        </div>
      </div>
    </div>
  </div>

  <!-- SECOND NAV-->
  <div class="bg-gold cat-third-nav flex flex-justify-space-between" style="height: 5vh">
    <a href="category.php" class="flex flex-center black"><div class="flex flex-center ml-10">GO BACK FROM CART</div></a>
    <div class="flex flex-center">
      <a href="#" class="mr-3 ml-4 black">Shop</a>
      <a href="#" class="pop-up-products black mr-1" id="pop-up-products">Products</a>
      <i class="fa-solid fa-sort-down mr-3" style="color: #000000"></i>
      <a href="#" class="mr-1 black">Brands</a>
      <i class="fa-solid fa-sort-down mr-3" style="color: #000000"></i>
      <a href="#" class="mr-1 black">Blog</a>
      <i class="fa-solid fa-sort-down mr-3" style="color: #000000"></i>
      <a href="#" class="mr-3 black">Contact us</a>
    </div>
    <div class="flex flex-center mr-7">FREE SHIPPING ABOVE 500</div>
  </div>

   <!--CART-->
   <div class="flex col12">
   <div class="bg-white col7 elevation-8 br-radius mt-3 ml-4 p-2">
     <div><h2>Your Shopping Cart</h2>
      <hr class="m-1 mt-2 mb-4"></div>
      <!-- -------- -->
      <div class="ml-2 flex ">
          <img src="./img/bangle.heic" width="150px" height="150px">
          <!-- ----- -->
        <div class="flex flex-center">
          <div class="ml-2 ash-gray">Floral Bangle</div>
          <div class="flex flex-center ml-10">
            <span id="minus" class="mr-1 minus">-</span>
              <p id="generate" class="generate">1</p>
            <span id="plus" class="ml-1 plus">+</span> 
          </div>
          <div id="price" class="ml-10">&#8377;100</div>
        </div>
        <!-- ------ -->
      </div> 
      <hr class="mt-3 mb-3">
      <!-- ----------  -->

       <!-- -------- -->
       <div class="ml-2 flex ">
        <img src="./img/candle.jpg" width="150px" height="150px">
        <!-- ----- -->
      <div class="flex flex-center">
        <div class="ml-2 ash-gray">white candle</div>
        <div class="flex flex-center ml-10">
          <span id="minus" class="mr-1 minus">-</span>
            <p id="generate" class="generate">1</p>
          <span id="plus" class="ml-1 plus">+</span> 
        </div>
        <div id="price" class="ml-10">&#8377;100</div>
      </div>
      <!-- ------ -->
    </div> 
    <hr class="mt-3 mb-3">
    <!-- ----------  -->
    <div class="ml-3 flex flex-justify-space-between">
      <p>TOTAL</p>
      <p class="mr-24">&#8377;200</p>
    </div>
    <!-- ----- -->
    </div>
  
      
    <!-- ITEMS IN THE CART -->
    <div class="col3 bg-white elevation-8 mt-3 ml-4 p-3" style="height: 20vh;">
      <p>Subtotal (2 items):<span> &#8377;200</span></p>
      <a href="./payment.php">
      <button class="btn-buy mt-2 p-1 pr-3  bg-maroon white border pointer">proceed to buy</button>
      </a>
    </div>
  </div>
       
  <!-- FOOTER (STARTS) -->
    <!-- FIRST -->
    <div class="footer col12 bg-site-green mt-2 flex bg-site-green-sm flex-column-sm">
      <div
        class="flex-column col2 white ml-6 white-sm ml-3-sm mt-1-sm"
        style="gap: 4px">
        <div><p class="fw-1 mt-6">Who are we?</p></div>
        <div class="footer-p flex-sm mt-1-sm">
          <p>Careers</p>
          <p>Authenticity</p>
          <p>Press</p>
          <p>Testimonials</p>
          <p class="hidden-sm">Responsible Disclosure</p>
          <p class="hidden-sm">Investor Relations</p>
        </div>
      </div>
      <!-- SECOND -->
      <div class="flex-column col2 white ml-10 flex-column-sm white-sm ml-3-sm mt-2-sm"
        style="gap: 4px">
        <div><p class="fw-1 mt-6">Customer Policies</p></div>
        <div class="flex-sm footer-p mt-1-sm">
          <p>Contact Us</p>
          <p>FAQ</p>
          <p>T&C</p>
          <p>Terms of use</p>
        </div>
      </div>
      <!-- THIRD -->
      <div class="flex-column col2 white ml-10 flex-column-sm white-sm ml-3-sm mt-2-sm"
        style="gap: 4px">
        <div><p class="fw-1 mt-6">Useful links</p></div>
        <div class="flex-sm footer-p mt-1-sm">
          <p>Blog</p>
          <p>Careers</p>
          <p>Site Map</p>
        </div>
      </div>
      <!-- FOUR -->
      <div class="flex-column col2 white ml-10 flex-column-sm white-sm ml-3-sm mt-2-sm mb-1-sm"
        style="gap: 4px">
        <div><p class="fw-1 mt-6">Connect to us</p></div>
        <div class="flex flex-sm footer-p mt-1-sm" style="gap: 10px">
          <i class="fa fa-facebook-official white-sm" aria-hidden="true" style="font-size: 25px"></i>
          <i class="fa fa-instagram white-sm" aria-hidden="true" style="font-size: 25px"></i>
          <i class="fa fa-twitter-square white-sm" aria-hidden="true" style="font-size: 25px"></i>
          <i class="fa fa-pinterest white-sm" aria-hidden="true" style="font-size: 25px"></i>
        </div>
        <p class="mt-5 footer-signin mb-1 hidden-sm">
          start shopping smootly by signing</p>
        <a href="./signup.html">
        <button class="footer-signin-btn col5 bg-gold pt-0h pb-0h border pl-1 pr-1 hidden-sm">
          sign up
        </button>
      </a>
      </div>
    </div>
    <!-- FOOTER (ENDS) -->

   
  <script src="./js/cart.js"></script>
</body>
</html>