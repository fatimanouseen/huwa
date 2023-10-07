<?php
 session_start();
//  session_unset();
//  session_destroy();
//  header('location:index.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>website</title>
    <link rel="icon" type="image/x-icon" href="./favicon/favicon.ico">
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/framework.css" />
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  </head>
  <body>
    <!--FIRST NAV BAR (STARTS) -->
    <div
      class="nav-bar flex flex-justify-space-between flex-center bg-gold flex-sm pt-2-sm">
      <div class="hidden">
        <i class="fa-solid fa-bars-staggered ml-2-sm"></i>
      </div>
      <div class="fs-3 ml-4 logo ml-2-sm">
        <i class="fa-solid fa-leaf"></i> HUWA
      </div>
      <div class="flex flex-sm">
        <div class="nav mr-2">
          <a href="#" class=" hidden-sm">Shop</a>
          <a href="./category.php" class=" hidden-sm">Products</a>
          <a href="#" class=" hidden-sm">Brands</a>
          <a href="#" class=" hidden-sm">Blog</a>
          <a href="#" class=" hidden-sm">Contact us</a>
        </div>
        <?php
          if (empty($_SESSION['id'])){
            echo '<button class="signin login mr-2 pr-2 pl-2 pt-0h pb-0h bg-site-green white hidden-sm" id="loginn">log in</button>
            <a href="./signup.html"><button class="signin mr-6 pr-2 pl-2 pt-0h pb-0h bg-site-green white hidden-sm"> Sign up</button></a>';
          }

          ?>
          <div class="icons ml-10-sm flex-sm fs-2-sm hidden" style="gap: 10px">
            <i class="fa-solid fa-heart dark-red-sm"></i>
            <i class="fa-solid fa-cart-shopping blue-sm"></i>
            <i class="fa-regular fa-user site-green-sm"></i>
          </div>
      </div>
    </div>

    <!-- only for mobile screen -->
    <div class="search hidden ml-2-sm mt-1-sm">
      <img src="./img/search.png" width="27px" />
      <input type="text" placeholder="candles" />
    </div>
    <!--FIRST NAV BAR (ENDS) -->

    <!-- SECOND NAV BAR (STARTS) -->
    <div
      class="second-nav elevation-7 flex bg-site-green white flex-center flex-sm mt-2-sm bg-site-green-sm white-sm p-1-sm"
    >
      <a href="./category.php"><p class="ml-2-sm white ">furniture</p></a>
      <p>jewellery</p>
      <p>accesories</p>
      <p>wool</p>
      <p>candle</p>
      <p>soap</p>
      <p>handbag</p>
      <p>ceramic</p>
      <p>macrame</p>
    </div>
    <!-- SECOND NAV BAR (ENDS) -->
    

    <!-- HERO SECTION (STARTS) -->
    <div class="col12 flex hidden-sm" style="border-bottom-right-radius: 15%;border-bottom-left-radius: 10%;">
      <!-- MODAL WINDOW -->
      <div class="modal-window hidden">
      <div class="modal flex flex-column flex-center ml-7">
       <form action="./php/login.php" method="post" >
        
        <div class="flex-column " style="gap: 2px;">
          <label class="signin">Username</label>
          <input type="text"  name="uname" class="p-1" required>
          </div>
          <div class="flex-column mt-3" style="gap: 2px;">
          <label class="signin">Password</label>
          <input type="text" name="pass" class="p-1" required>
          </div>
          <div class="mt-3" >
            <a href="./index.html">
            <input type="submit" value="submit" name="submit">
            </a>
            </div>
       </form>
      </div>
      </div>

      <div class="opaque bg-maroon hidden" style="height: 50vh;">
        
      </div>
      <!-- MODAL WINDOW -->


      <!-- SECOND HERO -->
      <div class="col7 flex ml-6">
        <div class="ml-3 flex-column mt-3">
          <img
            src="./img/pexels-cottonbro-studio-3838688.jpg"
            width="260px"
            height="220px"
            class="elevation-7"
          />
          <img
            src="./img/candle-making.jpg"
            width="260px"
            height="220px"
            class="mt-2 elevation-7"
          />
        </div>
        <div class="ml-3 mt-3">
          <img
            src="./img/pexels-antoni-shkraba-4706135.jpg"
            width="350px"
            height="458px"
            class="elevation-7"
          />
        </div>
      </div>
      <!-- FIRST HERO -->
      <div class="first-head col6 mt-3 pt-4">
        <p class="fs-5 pt-4 pl-6 col9">
          Handmade finely with natural ingredients
        </p>
        <em>
          <p class="pt-4 pl-6 col9">
            Find the most beautiful naturally and sustainably made products coming from various small growing firms

          </p></em
        >
        <a href="./category.php">
        <button class=" ml-6 mt-3 pr-3 pl-3 pt-1 pb-1 bg-gold pointer">
          Get Started
        </button>
      </a>
      </div>
    </div>
    <!-- HERO SECTION (ENDS) -->

    <!-- SHOP NOW SECTION FOR BIG SCREEN ONLY (STARTS) -->
    <div class="hidden-sm">
      <p class="fs-4 flex-column flex-center ml-3 mt-4">SHOP NOW</p>
      <hr class="col8 ml-24" />
      <div class="flex flex-center">
        <div class="flex col7 mt-3 flex-sm mt-2-sm ml-5-sm">
          <div class="shop-now ml-1">
            <img src="./img/glass.jpg" />
            <button
              class="ml-5 mt-1 bg-black white pt-0h pl-1 pr-1 pb-0h border"
            >
              shop now
            </button>
          </div>
          <div class="shop-now">
            <img src="./img/pillow.jpg" />
            <button
              class="ml-5 mt-1 bg-black white pt-0h pl-1 pr-1 pb-0h border"
            >
              shop now
            </button>
          </div>
          <div class="shop-now">
            <img src="./img/earring.jpg" />
            <button
              class="ml-5 mt-1 bg-black white pt-0h pl-1 pr-1 pb-0h border"
            >
              shop now
            </button>
          </div>
          <div class="shop-now">
            <img src="./img/candle.jpg" />
            <button
              class="ml-5 mt-1 bg-black white pt-0h pl-1 pr-1 pb-0h border"
            >
              shop now
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- SHOP NOW SECTION (ENDS) -->

    <!-- SLIDE BAR FOR SMALL SCREEN ONLY (start)-->
    <div
      class="slide-bar hidden flex-column-sm mt-2-sm"
      style="overflow-x: hidden"
    >
      <div class="slide-img flex-sm" id="slide-img">
        <img src="./img/glass.jpg" id="q1" alt="q1" />
        <img src="./img/pillow.jpg" id="q2" alt="q2" />
        <img src="./img/earring.jpg" id="q3" alt="q3" />
        <img src="./img/candle.jpg" id="q4" alt="q4" />
        <img src="./img/pillow.jpg" id="q5" alt="q5" />
        <img src="./img/earring.jpg" id="q6" alt="q6" />
        <img src="./img/glass.jpg" id="q7" alt="q7" />
        <img src="./img/candle.jpg" id="q8" alt="q8" />
      </div>

      <div class="arrow-right">
        <i
          class="fa-solid fa-chevron-right"
          style="color: white"
          id="right"
        ></i>
      </div>
      <div class="arrow-left">
        <i
          class="fa-solid fa-chevron-left"
          style="color: white"
          id="left"
        ></i>
      </div>

      <div
        class="radios flex-sm flex-center-sm mt-1-sm"
        id="radios"
        style="gap: 10px"
      >
        <form>
          <input type="radio" id="radio1" name="radio-btn" />
          <input type="radio" id="radio2" name="radio-btn" />
          <input type="radio" id="radio3" name="radio-btn" />
          <input type="radio" id="radio4" name="radio-btn" />
        </form>
      </div>
    </div>
    <!-- SLIDE BAR (END)-->

    <!--  SALE FOR MOBILE SCREEN ONLY -->
    <div
      class="col12-sm hidden bg-gold-sm mt-1-sm flex-sm flex-align-center-sm"
      style="height: 15vh; gap: 25px"
    >
      <img
        src="./img/sale.jpg"
        width="70px"
        height="70px"
        style="border-radius: 50%"
        class="ml-1-sm"
      />
      <p
        style="
          font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
          font-weight: bolder;
        "
      >
        get 20% off on your<br />
        first order
      </p>
      <button class="shop-now white-sm bg-site-green-sm p-1-sm">
        shop now
      </button>
    </div>
    <div class="hidden bg-gray-sm col12-sm" style="height: 2vh"></div>
    <!-- SALE FOR MOBILE SCREEN ONLY (END)-->

    <!-- ADVERTISEMENT FOR BIG SCREEN-->
    <div class="flex flex-justify-center mt-4 hidden-sm">
      <img src="./img/Project (1).jpg" width="550px" height="150px" />
      <img src="./img/Project (1).jpg" width="550px" height="150px" />
    </div>
       <!-- ADVERTISEMENT FOR BIG SCREEN-->

    <!-- PRODUCTS (START )-->
    <div class="product-head col12 mt-2">
      <div class="flex flex-justify-space-between">
        <p
          class="fs-4 ml-4 mt-2 flex flex-sm ml-2-sm mt-2-sm fs-2-sm"
          style="font-family: Arial, Helvetica, sans-serif"
        >
          PRODUCTS
        </p>
        <button class="mt-3 btn-1-sm mr-1 hidden-sm">view all</button>
      </div>
      <div class="flex-column ml-2 mr-1">
        <!-- FIRST -->
        <div class="col12 product flex mt-2 flex-justify-center flex-sm">
          <div class="para-1">
            <img src="./img/Adobe1.jpeg" width="190px" height="130px" />
            <p class="gray jose ml-1 mt-1" style="font-size: 12px">soaps</p>
            <p class="para-2 ml-1 mt-1">Classic Lavender Body Soap</p>
            <div class="rating gold ml-1 gold-sm">
              <span> ☆ </span><span> ☆ </span><span> ☆ </span><span> ☆ </span
              ><span> ☆ </span>
            </div>
            <span style="font-size: 14px; margin: 5px 0px 0px 12px" class=""
              >&#8377;199</span
            >
          </div>
          <div class="para-1">
            <img src="./img/Adobe2.jpeg" width="190px" height="130px" />
            <p class="gray jose ml-1 mt-1" style="font-size: 12px">soaps</p>
            <p class="ml-1 para-2 mt-1">Classic Lavender Body Soap</p>
            <div class="rating gold ml-1 gold-sm">
              <span> ☆ </span><span> ☆ </span><span> ☆ </span><span> ☆ </span
              ><span> ☆ </span>
            </div>
            <span style="font-size: 14px; margin: 2px 0px 0px 12px" class="ml-1"
              >&#8377;199</span
            >
            <p></p>
          </div>
          <div class="para-1">
            <img src="./img/Adobe3.jpeg" width="190px" height="130px" />
            <p class="gray jose ml-1 mt-1" style="font-size: 12px">soaps</p>
            <p class="ml-1 para-2 mt-1">Classic Lavender Body Soap</p>
            <div class="rating gold ml-1 gold-sm">
              <span> ☆ </span><span> ☆ </span><span> ☆ </span><span> ☆ </span
              ><span> ☆ </span>
            </div>
            <span style="font-size: 14px; margin: 2px 0px 0px 12px" class="ml-1"
              >&#8377;199</span
            >
            <p></p>
          </div>
          <div class="para-1">
            <img src="./img/Adobe5.jpeg" width="190px" height="130px" />
            <p class="gray jose ml-1 mt-1" style="font-size: 12px">soaps</p>
            <p class="ml-1 para-2 mt-1">Classic Lavender Body Soap</p>
            <div class="rating gold ml-1 gold-sm">
              <span> ☆ </span><span> ☆ </span><span> ☆ </span><span> ☆ </span
              ><span> ☆ </span>
            </div>
            <span style="font-size: 14px; margin: 2px 0px 0px 12px" class="ml-1"
              >&#8377;199</span
            >
            <p></p>
          </div>
          <div class="para-1">
            <img src="./img/Adobe6.jpeg" width="190px" height="130px" />
            <p class="gray jose ml-1 mt-1" style="font-size: 12px">soaps</p>
            <p class="ml-1 para-2 mt-1">Classic Lavender Body Soap</p>
            <div class="rating gold ml-1 gold-sm">
              <span> ☆ </span><span> ☆ </span><span> ☆ </span><span> ☆ </span
              ><span> ☆ </span>
            </div>
            <span style="font-size: 14px; margin: 2px 0px 0px 12px" class="ml-1"
              >&#8377;199</span
            >
            <p></p>
          </div>
          <div class="para-1 col2 bg-">
            <img src="./img/Adobe6.jpeg" width="190px" height="130px" />
            <p class="gray jose ml-1 mt-1" style="font-size: 12px">soaps</p>
            <p class="ml-1 para-2 mt-1">Classic Lavender Body Soap</p>
            <div class="rating gold ml-1 gold-sm">
              <span> ☆ </span><span> ☆ </span><span> ☆ </span><span> ☆ </span
              ><span> ☆ </span>
            </div>
            <span style="font-size: 14px; margin: 2px 0px 0px 12px" class="ml-1"
              >&#8377;199</span
            >
            <p></p>
          </div>
        </div>

        <!-- SECOND -->
        <div class="col12 product flex flex-justify-center flex-sm">
          <div class="para-1">
            <img src="./img/Adobe1.jpeg" width="190px" height="130px" />
            <p class="gray jose ml-1 mt-1" style="font-size: 12px">soaps</p>
            <p class="ml-1 para-2 mt-1">Classic Lavender Body Soap</p>
            <div class="rating gold ml-1">
              <span> ☆ </span><span> ☆ </span><span> ☆ </span><span> ☆ </span
              ><span> ☆ </span>
            </div>
            <span style="font-size: 14px; margin: 2px 0px 0px 12px" class="ml-1"
              >&#8377;199</span
            >
          </div>
          <div class="para-1">
            <img src="./img/Adobe2.jpeg" width="190px" height="130px" />
            <p class="gray jose ml-1 mt-1" style="font-size: 12px">soaps</p>
            <p class="ml-1 para-2 mt-1">Classic Lavender Body Soap</p>
            <div class="rating gold ml-1">
              <span> ☆ </span><span> ☆ </span><span> ☆ </span><span> ☆ </span
              ><span> ☆ </span>
            </div>
            <span style="font-size: 14px; margin: 2px 0px 0px 12px" class="ml-1"
              >&#8377;199</span
            >
            <p></p>
          </div>
          <div class="para-1">
            <img src="./img/Adobe3.jpeg" width="190px" height="130px" />
            <p class="gray jose ml-1 mt-1" style="font-size: 12px">soaps</p>
            <p class="ml-1 para-2 mt-1">Classic Lavender Body Soap</p>
            <div class="rating gold ml-1">
              <span> ☆ </span><span> ☆ </span><span> ☆ </span><span> ☆ </span
              ><span> ☆ </span>
            </div>
            <span style="font-size: 14px; margin: 2px 0px 0px 12px" class="ml-1"
              >&#8377;199</span
            >
            <p></p>
          </div>
          <div class="para-1">
            <img src="./img/Adobe5.jpeg" width="190px" height="130px" />
            <p class="gray jose ml-1 mt-1" style="font-size: 12px">soaps</p>
            <p class="ml-1 para-2 mt-1">Classic Lavender Body Soap</p>
            <div class="rating gold ml-1">
              <span> ☆ </span><span> ☆ </span><span> ☆ </span><span> ☆ </span
              ><span> ☆ </span>
            </div>
            <span style="font-size: 14px; margin: 2px 0px 0px 12px" class="ml-1"
              >&#8377;199</span
            >
            <p></p>
          </div>
          <div class="para-1">
            <img src="./img/Adobe6.jpeg" width="190px" height="130px" />
            <p class="gray jose ml-1 mt-1" style="font-size: 12px">soaps</p>
            <p class="ml-1 para-2 mt-1">Classic Lavender Body Soap</p>
            <div class="rating gold ml-1">
              <span> ☆ </span><span> ☆ </span><span> ☆ </span><span> ☆ </span
              ><span> ☆ </span>
            </div>
            <span style="font-size: 14px; margin: 2px 0px 0px 12px" class="ml-1"
              >&#8377;199</span
            >
            <p></p>
          </div>
          <div class="para-1">
            <img src="./img/Adobe6.jpeg" width="190px" height="130px" />
            <p class="gray jose ml-1 mt-1" style="font-size: 12px">soaps</p>
            <p class="ml-1 para-2 mt-1">Classic Lavender Body Soap</p>
            <div class="rating gold ml-1">
              <span> ☆ </span><span> ☆ </span><span> ☆ </span><span> ☆ </span
              ><span> ☆ </span>
            </div>
            <span style="font-size: 14px; margin: 2px 0px 0px 12px" class="ml-1"
              >&#8377;199</span
            >
            <p></p>
          </div>
        </div>
      </div>
      <button class="btn-2-sm btn-2-sm-sm">view all</button>
    </div>

    <!-- PRODUCTS (ENDS) -->

    <!-- label FOR BIG SCREEN ONLY-->
    <div class="main-label flex ml-6 mt-3 hidden-sm">
      <img src="./img/50.jpg" width="450px" height="300px" />
      <button>browse</button>
      <div class="ml-1">
        <img src="./img/awaited collection.jpg" width="250px" height="300px" />
      </div>
      <div>
        <img
          src="./img/RENAME.jpg"
          width="550px"
          height="300px"
          class="ml-1"
        />
      </div>
    </div>
    <!-- label FOR BIG SCREEN ONLY (END)-->

    <!-- BLOG-->
    <div class="featured hidden flex-sm ml-2-sm m-2-sm">FEATURED</div>
    <div class="extra col11 mt-2 ml-7 mb-5 flex-column flex-justify-center">
      <p class="fs-3 flex flex-center mb-2 ml-1 hidden-sm">FEATURED SELLERS</p>
      <div class="flex extra0 flex-sm">
        <div class="col4 extra1 elevation-7 elevation-8-sm ml-2-sm">
          <div class="blog-img flex mt-1 ml-1">
            <img src="./img/pottery.jpg" class="col5" />
            <div class="extraa flex-column flex-column-sm">
              <p class="ml-2 mt-1">
                my pottery business started rising and i was so pleased
              </p>
              <h6 class="ml-2 mt-1" style="font-size: 12px; color: gray">
                E pensando nisso, encontramos alguns modelos de layouts
                responsivos e gratuitos para quem usa o Blogger
              </h6>
              <button class="col2 mt-1 ml-2">Read</button>
            </div>
          </div>
        </div>
        <div class="col4 extra1 elevation-7 elevation-8-sm ml-2-sm">
          <div class="blog-img flex mt-1 ml-1">
            <img src="./img/wool.jpg" class="col5" />
            <div class="extraa flex-column flex-column-sm">
              <p class="ml-2 mt-1">
                my pottery business started rising and i was so pleased
              </p>
              <h6 class="ml-2 mt-1" style="font-size: 12px; color: gray">
                E pensando nisso, encontramos alguns modelos de layouts
                responsivos e gratuitos para quem usa o Blogger
              </h6>
              <button class="col2 mt-1 ml-2">Read</button>
            </div>
          </div>
        </div>
        <div class="col4 extra1 elevation-7 elevation-8-sm ml-2-sm">
          <div class="blog-img flex mt-1 ml-1">
            <img src="./img/pottery.jpg" class="col5" />
            <div class="extraa flex-column flex-column-sm">
              <p class="ml-2 mt-1">
                my pottery business started rising and i was so pleased
              </p>
              <h6 class="ml-2 mt-1" style="font-size: 12px; color: gray">
                E pensando nisso, encontramos alguns modelos de layouts
                responsivos e gratuitos para quem usa o Blogger
              </h6>
              <button class="col2 mt-1 ml-2">Read</button>
            </div>
          </div>
        </div>
      </div>
      <div class="flex extra0 hidden-sm">
        <div class="col4 extra1 elevation-7">
          <div class="flex mt-1 ml-1">
            <img src="./img/wool.jpg" class="col5" height="130px" />
            <div class="extraa flex-column">
              <p class="ml-2 mt-1">
                my pottery business started rising and i was so pleased
              </p>
              <h6 class="ml-2 mt-1" style="font-size: 12px; color: gray">
                E pensando nisso, encontramos alguns modelos de layouts
                responsivos e gratuitos para quem usa o Blogger
              </h6>
              <button class="col2 mt-1 ml-2">Read</button>
            </div>
          </div>
        </div>
        <div class="col4 extra1 elevation-7">
          <div class="flex mt-1 ml-1">
            <img src="./img/open.jpg" class="col5" height="130px" />
            <div class="extraa flex-column">
              <p class="ml-2 mt-1">
                my pottery business started rising and i was so pleased
              </p>
              <h6 class="ml-2 mt-1" style="font-size: 12px; color: gray">
                E pensando nisso, encontramos alguns modelos de layouts
                responsivos e gratuitos para quem usa o Blogger
              </h6>
              <button class="col2 mt-1 ml-2">Read</button>
            </div>
          </div>
        </div>
        <div class="col4 extra1 elevation-7">
          <div class="flex mt-1 ml-1">
            <img src="./img/pottery.jpg" class="col5" height="130px" />
            <div class="extraa flex-column">
              <p class="ml-2 mt-1">
                my pottery business started rising and i was so pleased
              </p>
              <h6 class="ml-2 mt-1" style="font-size: 12px; color: gray">
                E pensando nisso, encontramos alguns modelos de layouts
                responsivos e gratuitos para quem usa o Blogger
              </h6>
              <button class="col2 mt-1 ml-2">Read</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- BLOG (ENDS) -->

    <!-- FOOTER (STARTS) -->
    <!-- FIRST -->
    <div
      class="footer col12 bg-site-green mt-2 flex bg-site-green-sm flex-column-sm"
    >
      <div
        class="flex-column col2 white ml-6 white-sm ml-3-sm mt-1-sm"
        style="gap: 4px"
      >
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
      <div
        class="flex-column col2 white ml-10 flex-column-sm white-sm ml-3-sm mt-2-sm"
        style="gap: 4px"
      >
        <div><p class="fw-1 mt-6">Customer Policies</p></div>
        <div class="flex-sm footer-p mt-1-sm">
          <p>Contact Us</p>
          <p>FAQ</p>
          <p>T&C</p>
          <p>Terms of use</p>
        </div>
      </div>
      <!-- THIRD -->
      <div
        class="flex-column col2 white ml-10 flex-column-sm white-sm ml-3-sm mt-2-sm"
        style="gap: 4px"
      >
        <div><p class="fw-1 mt-6">Useful links</p></div>
        <div class="flex-sm footer-p mt-1-sm">
          <p>Blog</p>
          <p>Careers</p>
          <p>Site Map</p>
        </div>
      </div>
      <!-- FOUR -->
      <div
        class="flex-column col2 white ml-10 flex-column-sm white-sm ml-3-sm mt-2-sm mb-1-sm"
        style="gap: 4px"
      >
        <div><p class="fw-1 mt-6">Connect to us</p></div>
        <div class="flex flex-sm footer-p mt-1-sm" style="gap: 10px">
          <i
            class="fa fa-facebook-official white-sm"
            aria-hidden="true"
            style="font-size: 25px"
          ></i>
          <i
            class="fa fa-instagram white-sm"
            aria-hidden="true"
            style="font-size: 25px"
          ></i>
          <i
            class="fa fa-twitter-square white-sm"
            aria-hidden="true"
            style="font-size: 25px"
          ></i>
          <i
            class="fa fa-pinterest white-sm"
            aria-hidden="true"
            style="font-size: 25px"
          ></i>
        </div>
        <p class="mt-5 footer-signin mb-1 hidden-sm">
          start shopping smootly by signing
        </p>
        <a href="./signup.html">
        <button class="footer-signin-btn col5 bg-gold pt-0h pb-0h border pl-1 pr-1 hidden-sm pointer">
          sign up
        </button>
      </a>
      </div>
    </div>
    <!-- FOOTER (ENDS) -->


  

    <script src="./js/script.js"></script>
  </body>
</html>
