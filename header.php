<!DOCTYPE html>
<html lang="en">

<head>
   
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Steak house in Aalborg is perfect place for friends & family to come together and have great time. We can offer a high quality steaks and wine collection to supplement your meals and ensure nice atmosphere and service. For your comfort, we ensure an easy table reservation via online or call.">
    
    <?php wp_head();?>

    <title>Restaurant</title>
</head>

<body>

    <!--   <div class="page-loader">
        <div class="spinner"></div>
        <div class="txt">Bøf og Vin</div>

    </div> -->
   

    <!----------------Navigation ------------------->
    <nav class="nav-desktop">
        <div>
            <a href="http://restaurant-version-2.local/">
                <img class="logo" src="<?php bloginfo('template_directory');?>/assets/Images/Bof-vin_LOGO.svg" alt="">
            </a>
        </div>

     


        <div class="nav-links">
            <a class="nav-a active" href="http://restaurant-version-2.local/">Home</a>
            <a class="nav-a" href="http://restaurant-version-2.local/menu/#menu">Menu</a>
            <a class="nav-a" href="http://restaurant-version-2.local/know-us/">Know Us</a>
            <a class="nav-a" href="http://restaurant-version-2.local/contact/">Contact</a>

        </div>
        <!-- Calling shortcode for reservation button plugin-->
        
        <div class="nav-reserve-btn" id="reserve" onclick="clicks()">
            <button style="border:none;" class="all-buttons reserve-btn-nav">Reservation<i class="far fa-calendar-alt i-reserve"></i></button>
        </div>

    </nav>

    <!-- Burger menu -->
    <nav id="nav-mobile" class="nav-mobile">
        <div>
            <a href="http://restaurant-version-2.local/">
                <img class="logo" src="<?php bloginfo('template_directory');?>/assets/Images/Bof-vin_LOGO.svg" alt="">
            </a>
        </div>




        <div id="burger-menu" class="burger-menu">
            <!-- Burger menu -->    <!-- https://codepen.io/ainalem/pen/GeMqdP -->

            <svg>
                <defs>
                    <filter id="gooeyness">
                        <feGaussianBlur in="SourceGraphic" stdDeviation="2.2" result="blur" />
                        <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 20 -10"
                            result="gooeyness" />
                        <feComposite in="SourceGraphic" in2="gooeyness" operator="atop" />
                    </filter>
                </defs>
            </svg>
            <div class="plates">

                <div class="plate plate4" onclick="this.classList.toggle('active')">
                    <svg class="burger" version="1.1" height="100" width="100" viewBox="25 25 50 50">
                        <path class="line line1" d="M 50,35 H 30" />
                        <path class="line line2" d="M 50,35 H 70" />
                        <path class="line line3" d="M 50,50 H 30" />
                        <path class="line line4" d="M 50,50 H 70" />
                        <path class="line line5" d="M 50,65 H 30" />
                        <path class="line line6" d="M 50,65 H 70" />
                    </svg>
                    <svg class="x" version="1.1" height="100" width="100" viewBox="25 25 50 50">
                        <path class="line" d="M 34,32 L 66,68" />
                        <path class="line" d="M 66,32 L 34,68" />
                    </svg>
                </div>


            </div>
    </nav>

    <div id="mobile-nav-box" class="mobile-nav-box hide">
        <ul class="nav-ul">
            <li class="nav-li"><a class="nav-a" href="http://restaurant-version-2.local/">Home</a></li>
            <li class="nav-li"><a class="nav-a" href="http://restaurant-version-2.local/menu/#menu">Menu</a></li>
            <li class="nav-li"><a class="nav-a" href="http://restaurant-version-2.local/know-us/">Know Us</a></li>
            <li class="nav-li"><a class="nav-a" href="http://restaurant-version-2.local/contact/">Contact</a></li>
        </ul>
        <div class="nav-reserve-btn" id="reserve" onclick="clicks()">
            <button style="border:none;" class="all-buttons-mobile reserve-btn-nav-mobile" style="background-color: white; color: #96192B;"
                >Reservation<i class="far fa-calendar-alt i-reserve"></i></button>
        </div>
        
    </div>

    <!----------------------------Navigation Ends ----------------------------------------------->