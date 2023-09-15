<!DOCTYPE html>
<html>

<head>
    <title>AgroU</title>
    <link rel="icon" href="">
    <link rel="stylesheet" href="agro_css.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- FONTS -->
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Nunito&family=Alkatra&family=Shadows+Into+Light&display=swap"
        rel="stylesheet">
    <!-- SWIPER.JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <!-- Remix Icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body>

    <!-------------------- PRELOADER -------------------->
    <div class="preloader">
        <span class="loader"></span>
    </div>

    <!-------------------- SCROLL TO TOP BUTTON -------------------->
    <div id="scrollTop" onclick="scrollToTop()">
        <i class="ri-arrow-up-line"></i>
    </div>

    <!-------------------- Header -------------------->
    <div class="home" id="home">
        <nav>
            <div class="nav-logo">
                <i class="ri-suitcase-line"></i>
                <h2 id="company" onclick="scrollToTop()">AgroU</h2>
            </div>

            <div class="nav-menu" id="nav-menu">
                <ul class="nav-list">
                    <li>
                        <a href="Agro_html.php" class="pages">Home</a>
                    </li>
                    <li>
                        <a href="#about" class="pages">Ways for farming</a>
                    </li>
                    <li>
                        <a href="#featured" class="pages"> Products</a>
                    </li>
                    <li>
                        <a href="#lands" class="pages"> Lands</a>
                    </li>
                    <div class="dropdown">
                        <button class="dropbtn">Login</button>
                        <div class="dropdown-content">
                            <a href="login.php">Login</a>
                            <a href="signup-c.php">Sign-up(customer)</a>
                            <a href="signup-f.php">Sign-up(farmer)</a>

                        </div>
                    </div>

                    <div class="nav-close" id="nav-close" onclick="hideNav()">
                        <i class="ri-close-line"></i>
                    </div>
            </div>

        </nav>
        <!-- LANDING PAGE -->
        <div class="header" id="header">
            <div class="content" data-inViewport="slideTop">
                <h2 id="title"><span>Agro</span>U</h2>
                <p>
                    Welcome to our agriculture website! Here, we provide comprehensive <br>information on
                    everything related to agriculture, from crop cultivation <br>to livestock management
                    and beyond.<br>
                    <br>
                    Our website is designed to cater the needs of farmers, agriculturists,<br> and anyone interested
                    in learning about agriculture. <br>We understand the challenges faced
                    by the agricultural community,
                    <br> and we strive to provide practical solutions to help farmers increase their<br> productivity
                    and
                    profitability.
                </p>
                <button onclick="scrollToAbout()">Learn more!<i class="ri-arrow-right-line"></i></button>
            </div>
            <img class="image" src="images/about_pic1_wob.png" data-inViewport="slideLeft">
        </div>
    </div>
    <!--------------------  ABOUT -------------------->
    <div class="about" id="about">
        <h2>Perfect ways for farming</h2>
        <p>
            Farming is a complex and multifaceted activity that <br>involves many different factors. The perfect way<br>
            to farm
            will
            vary depending on the specific context,<br> such as the location, climate, soil type, and available
            resources.
            <br>However, there are some general principles and practices that<br>
            can help farmers achieve success in their operations. <br>Here are some perfect ways to farm:
            <br>
            <br>
        </p>
        <div class="content first">
            <img src="images/soil_management_1.png" data-inViewport="slideLeftDown">
            <p data-inViewport="slideLeft"><span>Soil management:</span><br>Healthy soil is essential for good crop
                yields, <br>and farmers
                should aim to improve<br> soil health by reducing tillage,<br>
                adding organic matter, and using cover crops.


            </p>
            <br>
        </div>
        <div class="content">
            <p data-inViewport="slideLeft"><span>Crop rotation:</span><br> Planting different crops in the same
                field in <br>successive seasons helps prevent soil depletion, <br>
                reduces pest pressure, and maintains soil fertility


            </p>
            <img src="images/crop_rotation.png" id="special" data-inViewport="slideLeft">
        </div>
        <br>
        <br>
        <div class="content">
            <img src="images/water_irrigation.png" id="special" data-inViewport="slideLeftDown">
            <p data-inViewport="slideLeft"><span>Water conservation:</span><br> Efficient irrigation
                practices such as<br> drip irrigation and rainwater
                harvesting can<br> help reduce water use and improve crop yields



            </p>

        </div>
        <button onclick="location.href='methods.php'">Learn More!-></button>
    </div>
    <!-------------------- Featured Products ------------------>
    <div class="featured" id="featured">
        <h2> Products</h2>
        <p>Here are some featured Fresh Fruits and Veggies , Check them out!</p>
        <!-- Swiper -->
        <div class="swiper" data-inViewport="slideTop">
            <div class="swiper-wrapper">
                <div class="swiper-slide">



                    <h2>Cucumber<br><sub><span id="product-price"></span></sub></h2>
                    <img src="images/cucumber.png">

                </div>
                <div class="swiper-slide">

                    <h2>Pomogranate<br><sub><span id="product-price"></span></sub></h2>
                    <img src="images/pomograntes.png">
                </div>
                <div class="swiper-slide">

                    <h2>Maongo<br><sub><span id="product-price"></span></sub></h2>
                    <img src="images/mango.png">
                </div>
                <div class="swiper-slide">


                    <h2> Oranges<br><sub><span id="product-price"></span></sub></h2>
                    <img src="images/oranges.png">
                </div>
                <div class="swiper-slide">

                    <h2> Papaya<br><sub><span id="product-price"></span></sub></h2>
                    <img src="images/papaya.png">
                </div>
                <div class="swiper-slide">

                    <h2>Tomato<br><sub><span id="product-price"></span></sub></h2>
                    <img src="images/tomato.png">
                </div>
                <div class="swiper-slide">

                    <h2>Watermelon<br><sub><span id="product-price"></span></sub></h2>
                    <img src="images/watermelon.png">
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>



        </div>
        <button onclick="location.href='login.php'">learn more-></button>
        <div class="lands" id="lands">
            <h2> Lands</h2>
            <p>Here are some lands for rent and sale , Check them out!</p>
            <!-- Swiper -->
            <div class="swiper" data-inViewport="slideTop">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">

                        <h2> Mahalakshmi<br><sub><span id="product-price">9654345679</span></sub></h2>

                        <img src="images/WhatsApp Image 2023-05-05 at 03.26.09.jpg">
                    </div>
                    <div class="swiper-slide">

                        <h2>Deepthi<br><sub><span id="product-price"></span>9916368469</sub></h2>
                        <img src="images/WhatsApp Image 2023-05-05 at 03.28.04.jpg">

                    </div>
                    <div class="swiper-slide">

                        <h2>Ananya<br><sub><span id="product-price">8932415674</span></sub></h2>
                        <img src="images/WhatsApp Image 2023-05-05 at 03.28.35.jpg">
                    </div>




                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>



            </div>
            <button onclick="location.href='login.php'">Learn More!-></button>




            <!-------------------- FOOTER ------------------->
            <div class="footer">

                <p>© Copyright Deepthi G <br>




                </p>
            </div>

            <!-------------------- SCRIPT JS ------------------->

            <script src="agro_js.js"></script>
            <!--<script src="https://cdn.botpress.cloud/webchat/v0/inject.js"></script>
            <script>
                window.botpressWebChat.init({
                    "botId": "5b545c8a-e6f3-40a2-b298-d222a6f5de22",
                    "hostUrl": "https://cdn.botpress.cloud/webchat/v0",
                    "messagingUrl": "https://messaging.botpress.cloud",
                    "clientId": "5b545c8a-e6f3-40a2-b298-d222a6f5de22",
                    "showBotInfoPage": false,
                    "enableConversationDeletion": false
                });
            </script>-->
            <script src="https://cdn.botpress.cloud/webchat/v0/inject.js"></script>
<script>
  window.botpressWebChat.init({
      "botId": "5b545c8a-e6f3-40a2-b298-d222a6f5de22",
      "hostUrl": "https://cdn.botpress.cloud/webchat/v0",
      "messagingUrl": "https://messaging.botpress.cloud",
      "clientId": "5b545c8a-e6f3-40a2-b298-d222a6f5de22",
      "botName": "Annada",
      "showBotInfoPage": false,
      "enableConversationDeletion": false
  });
</script>
</body>

</html>