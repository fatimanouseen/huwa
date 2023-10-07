<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="icon" type="image/x-icon" href="./favicon/favicon.ico">
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/framework.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
  </head>
  <body>

    <!--FIRST NAV BAR (STARTS) -->
    <div class="cat-first-nav bg-site-green p-1" style="height: 2vh">
    <p>huwashop@gmail.com | 1800-5646-9878</p>
    </div>
    <!--FIRST NAV BAR (ENDS) -->

    <!--SECOND NAV BAR (STARTS) -->
    <div class="flex bg-white flex-justify-space-between mt-1 mb-2">
      <div class="fs-3 ml-10 logo "><a href="./index.php" class="black"><i class="fa-solid fa-leaf black"></i> HUWA</a></div>
      <div class="mt-1">
        <input type="text" placeholder="search" style="padding: 5px 310px 5px 0px"/>
        <button class="search-button">
          <i class="fa-solid fa-magnifying-glass" style="color: #000000"></i>
          Search
        </button>
      </div>
      <div class="flex mt-1">
        <div class="">
          <div class="nav mr-10 flex" style="gap: 10px">
            <i class="fa-solid fa-heart ash-gray"></i>
            <a href="./cart.php" style="padding: 0px; margin: 0px; border: 0px;"><i class="fa-solid fa-cart-shopping ash-gray "></i></a>
            <i class="fa-regular fa-user ash-gray"></i>
          </div>
        </div>
      </div>
    </div>
    <!--SECOND NAV BAR (ENDS) -->

    <!-- THIRD NAV BAR -->
    <div class="bg-gold cat-third-nav flex flex-justify-space-between" style="height: 5vh">
      <div class="flex flex-center ml-10">SHOP BY CATEGORIES</div>
      <div class="flex flex-center">
        <a href="#" class="mr-3 ml-4 black">Shop</a>
        <a href="#" class="pop-up-products black" id="pop-up-products">Products</a>
        <i class="fa-solid fa-sort-down mr-3" style="color: #000000"></i>
        <a href="#" class="mr-1 black">Brands</a>
        <i class="fa-solid fa-sort-down mr-3" style="color: #000000"></i>
        <a href="#" class="mr-1 black">Blog</a>
        <i class="fa-solid fa-sort-down mr-3" style="color: #000000"></i>
        <a href="#" class="mr-3 black">Contact us</a>
      </div>
      <div class="flex flex-center mr-7">FREE SHIPPING ABOVE 500</div>
    </div>

    <!-- ///// -->
    <!-- <div class="pop-up flex flex-center">
    <div class="pop-up-1  col4 flex flex-center " id="pop-up-1"  style="height: 30vh;">

    </div>
  </div> -->
    <!-- THIRD NAV BAR -->

    <!--side cart page in category -->
    <div class="hidden cart" style="width:10%;height:100vh">
      <h1>cart</h1>
    </div>

    <div class="category-hero flex mt-4">
      <!-- category part -->
      <div class="one col2 bg-white ml-9 flex-column elevation-7">
        <div class="cat-main flex mt-2 ml-2">
          <i class="fa-solid fa-bars"></i>
          <p class="ml-2 fw-1">Categories</p>
        </div>
        <div class="cat-sub-main flex mt-2 ml-2">
          <i class="fa-solid fa-chair ash-gray"></i>
          <p class="ml-2">furniture</p>
        </div>
        <div class="cat-sub-main flex mt-2 ml-2">
          <i class="fa-solid fa-ring ash-gray"></i>
          <p class="ml-2">jewellery</p>
        </div>
        <div class="cat-sub-main flex mt-2 ml-2">
          <i class="fa-solid fa-hat-cowboy ash-gray"></i>
          <p class="" style="margin-left: 16px">accesories</p>
        </div>
        <div class="cat-sub-main flex mt-2 ml-2">
          <i class="fa-solid fa-mitten ash-gray"></i>
          <p class="" style="margin-left: 21px">wool</p>
        </div>
        <div class="cat-sub-main flex mt-2 ml-2">
          <i class="fa-solid fa-menorah ash-gray"></i>
          <p class="" style="margin-left: 16px">candle</p>
        </div>
        <div class="cat-sub-main flex mt-2 ml-2">
          <i class="fa-solid fa-soap ash-gray"></i>
          <p class="ml-2">soap</p>
        </div>
        <div class="cat-sub-main flex mt-2 ml-2">
          <i class="fa-solid fa-bag-shopping ash-gray"></i>
          <p class="" style="margin-left: 23px">handbag</p>
        </div>
        <div class="cat-sub-main flex mt-2 ml-2">
          <i class="fa-solid fa-kitchen-set ash-gray"></i>
          <p class="ml-2">ceramic</p>
        </div>
        <div class="cat-sub-main flex mt-2 ml-2">
          <i class="fa-solid fa-icicles ash-gray"></i>
          <p class="" style="margin-left: 21px">macrame</p>
        </div>
      </div>
      <!-- CATEGORY PART (END) -->

      <!-- CATEGORY SLIDE(START) -->
      <div class="slide-category col5 flex-column">
        <div class="col12 flex category-slide" id="category-slide">
          <div class="cat-img">
            <img src="./img/kettle1.jpg" id="c1" width="633px" height="420px" />
          </div>
          <div class="cat-img">
            <img src="./img/kettle3.jpg" id="c2" width="633px" height="420px" />
          </div>
          <div class="cat-img">
            <img src="./img/kettle (3).jpg" id="c3" width="633px" height="420px"/>
          </div>
          <div class="cat-img">
            <img src="./img/kettle1.jpg" id="c4" width="633px" height="420px" />
          </div>
          <div class="cat-img">
            <img src="./img/kettle3.jpg" id="c5" width="633px" height="420px" />
          </div>
        <!-- arrows -->
        </div>
        <div><i class="fa-solid fa-chevron-right" style="color: rgba(0, 0, 0, 0.418); position: absolute; top: 48%; left: 63%; font-size: 40px;"
            id="cat-right"></i>
        </div>
        <div><i class="fa-solid fa-chevron-left"
            style=" color: rgba(0, 0, 0, 0.381); position: absolute; top: 47%; left: 26%; font-size: 40px;"
            id="cat-left"></i>
        </div>
        <!-- radios -->
        <div class="radios" id="cat-radios" style="gap: 20px">
          <form>
            <input type="radio" id="cat-radio1" name="radio-btn-cat" />
            <input type="radio" id="cat-radio2" name="radio-btn-cat" />
            <input type="radio" id="cat-radio3" name="radio-btn-cat" />
            <input type="radio" id="cat-radio4" name="radio-btn-cat" />
            <input type="radio" id="cat-radio5" name="radio-btn-cat" />
          </form>
        </div>
      </div>

      <!-- CATEGORY SLIDE(END) -->

      <!-- CATEGORY COL (START) -->
      <div class="category-col flex-column" style="width: 20%">
        <div class="col12 one ">
          <img src="./img/ceramic2.jpg" width="350px" height="190px" />
        </div>
        <div class="col12 one ">
          <img src="./img/ceramic2.jpg" width="350px" height="190px" />
        </div>
      </div>
      <!-- CATEGORY COL (END) -->
    </div>

    <!-- PART (START) -->
    <div class="flex" style="gap: 20px;">
      <div class="cat-product col2 bg-white ml-9 flex-column elevation-7 flex-justify-center">
        <h4 class="cat-product-main bg-gold pl-1 pt-1 pb-1">Ceramic</h4>
        <p>All</p>
        <p>plates</p>
        <p>bowl</p>
        <p>glass</p>
        <p>pot</p>
        <p>vase</p>
        <p class="pb-3">show items</p>
      </div>
    
      <!-- first product -->
      <div class="elevation-7 flex col9 pb-3">
      <div class="cat-product-1 col4 ml-4 "> 
       <img src="./img/plate (1).jpg" height="180px" width="180px" class="mt-2 elevation-7">
       <p class="ash-gray mt-1">floral plate</p>
       <p class="mt-1">191.00</p>
       <button class="bg-maroon white border mt-1 p-1 jose cat-btnaddtocart">Add to cart</button>
      </div>
      <div class="cat-product-1 col4  "> 
        <img src="./img/plate (2).jpg" height="180px" width="180px" class="mt-2">
        <p class="ash-gray mt-1">floral plate</p>
        <p class="mt-1">191.00</p>
        <button class="bg-maroon white border mt-1 p-1  jose">Add to cart</button>
      </div>
      <div class="cat-product-1 col4 "> 
        <img src="./img/plate (3).jpg" height="180px" width="180px" class="mt-2">
        <p class="ash-gray mt-1">floral plate</p>
        <p class="mt-1">191.00</p>
        <button class="bg-maroon white border mt-1 p-1  jose">Add to cart</button>
      </div>
      <div class="cat-product-1 col4 "> 
        <img src="./img/plate (4).jpg" height="180px" width="180px" class="mt-2">
        <p class="ash-gray mt-1">floral plate</p>
        <p class="mt-1">191.00</p>
        <button class="bg-maroon white border mt-1 p-1  jose">Add to cart</button>
      </div>
      <div class="cat-product-1 col4 "> 
        <img src="./img/plate (3).jpg" height="180px" width="180px" class="mt-2">
        <p class="ash-gray mt-1">floral plate</p>
        <p class="mt-1">191.00</p>
        <button class="bg-maroon white border mt-1 p-1  jose">Add to cart</button>
      </div>
    </div>
      
    </div>

    <!-- PART (END) -->

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

    <script src="./js/catscript.js"></script>
  </body>
</html>
