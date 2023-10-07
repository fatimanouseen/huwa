
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" type="image/x-icon" href="./favicon/favicon.ico">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/product.css">
    <link rel="stylesheet" href="./css/framework.css">
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
          <div class="fs-3 ml-10 logo"><i class="fa-solid fa-leaf"></i> HUWA</div>
          <div class="mt-1">
            <input type="text" placeholder="search" style="padding: 5px 310px 5px 0px"/>
            <button class="search-button">
              <i class="fa-solid fa-magnifying-glass" style="color: #000000"></i>
              Search
            </button>
          </div>
          <div class="flex mt-1">
            <div class="">
              <div class="nav mr-10 flex" style="gap: 15px">
                <i class="fa-solid fa-heart ash-gray"></i>
                <i class="fa-solid fa-cart-shopping ash-gray"></i>
                <i class="fa-regular fa-user ash-gray"></i>
              </div>
            </div>
          </div>
        </div>
        <!--SECOND NAV BAR (ENDS) -->
    
        <!-- THIRD NAV BAR -->
        <div class="bg-gold cat-third-nav flex flex-justify-space-between" style="height: 5vh">
          <div class="flex flex-center ml-10">OFFER USE CODE #TC3N0</div>
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

        <!-- HERO SECTION -->
        <div class="col12 flex">
        <!-- left side -->
        <div class="col6 mt-3" style="height: 70vh;">
         <div class="ml-6">
            <img src="./img/product/angle (5).jpg" width="600px" height="400px" id="main-img-replace">
         </div>
         <div class="ml-6">
          <img src="./img/product/angle (2).jpg" width="146px" height="150px" id="replace-img1">
          <img src="./img/product/angle (1).jpg" width="146px" height="150px" id="replace-img2">
          <img src="./img/product/angle (3).jpg" width="146px" height="150px" id="replace-img3">
          <img src="./img/product/angle (4).jpg" width="146px" height="150px" id="replace-img4">
         </div>
        </div>
        <!-- right side -->
        <div class="desc col6">
         <h2 class="mt-4">Ceramic plates IN DIFFERENT COLORS</h2>
         <h2 class="mt-1">Black borders - set of 4</h2>
         <p class="ash-gray fs-1 mt-1">made by a superb team of pottery artist with 30 years of experience made by a superb team of pottery artist with 30 years of experience</p>
         <p class="mt-2"> <span style="color: orangered;">5.0  ☆ </span><span class="ash-gray">132 reviews</span></p>
         <p><del>Rs 400</del><ins>Rs 349</ins></p>
        </div>
        </div>
        <script src="./js/product.js"></script>
</body>
</html>