<?php 
/*Template Name: Know*/
get_header();
?>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" />
<link rel="stylesheet"  href="<?php echo get_template_directory_uri(); ?>/assets/Css/normalize.css" />
<link rel="stylesheet"  href="<?php echo get_template_directory_uri(); ?>/assets/Css/nav.css" />
<link rel="stylesheet"  href="<?php echo get_template_directory_uri(); ?>/assets/Css/know-us.css" />
<link rel="stylesheet"  href="<?php echo get_template_directory_uri(); ?>/assets/Css/footer.css" />


<script src="<?php echo get_template_directory_uri(); ?>/assets/Javascript/script.js" defer></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/Javascript/script-know.js" defer></script>







<!-- .......................... header know us  ..........................   -->
<section class="header-know">
        <div class="header-know-content">
            <h1>About Bøg og Vin</h1>
            <p>Would you like to discover more about our company's history and products? <br>
You've landed in the right place.</p>
        </div>
        <img src="<?php bloginfo('template_directory');?>/assets/Images/heading-know.png" alt="Header-img">
    </section>



    <!-- .......................... info know us ..........................   -->
    <div id="bg">
        <img src="<?php bloginfo('template_directory');?>/assets/Images/Backgound-test-4.jpg" alt="landing-page">
    </div>

    <div class="grid-info-know grid-info-know-adj">

        <section class="know-intro">
            <h3 class="know-h3" >In the heart of city ,</h3>
            <p class="know-p">All of our steaks are grilled with specific spices and served on a cast iron plate to keep them warm throughout the dinner.
At Bof og Vin, we take pride in using only the highest-quality ingredients. As a result, we ensure that our guests have some memorable dinners.
                <br><br> We take care in curating a wine list that is tailored to your preferences, and don't forget that we also provide food for children. <br> Take a peek at our website's menu and allow yourself to be tempted!
See you at restaurant Bøf og Vin, located on Østerågade 18c in the center of Aalborg.
            </p>
              <!-- ......... btn ............   -->
                 <div class="btn-disable" id="reserve" onclick="clicks()">
                  <button style="border:none;" class="all-buttons reserve-btn-body">Reservation<i class="far fa-calendar-alt i-reserve"></i></button>
                     </div>

            <div class="nav-reserve-btn hide" id="reserve" onclick="clicks()">
                <button style="border:none;" class="all-buttons reserve-btn-body">Reservation<i class="far fa-calendar-alt i-reserve"></i></button>
            </div>
        </section>

        <div class="know-intro-img know-intro-img-adj">
            <img src="<?php bloginfo('template_directory');?>/assets/Images/pic-info-know.png" alt=info-know-img>
        </div>
        <div class="nav-reserve-btn-mobile " id="reserve" onclick="clicks()">
            <button style="border:none;" class="all-buttons reserve-btn-body">Reservation<i class="far fa-calendar-alt i-reserve"></i></button>
        </div>
    </div>
    <!-- .......................... key strenghts  ..........................   -->

    <div class="header-know-key">
        <h1>Our key strenghts</h1>
        <p>In Bøf og Vin we are proud of </p>
    </div>

    <div class="grid-info-key">
        <div class="key1">
            <img src="<?php bloginfo('template_directory');?>/assets/Images/beef-img.png" alt="Fresh Beef">
            <h1> Fresh Beef </h1>
            <p> In Aalborg, we are recognized for our succulent and fresh steak and wine </p>
        </div>
        <div class="key2">
            <img src="<?php bloginfo('template_directory');?>/assets/Images/wine-img.png" alt="Quality Wine">
            <h1> Quality Wine </h1>
            <p> We supply you with our highest-quality wine, from which you can select the best sortiments </p>
        </div>
        <div class="key3">
            <img src="<?php bloginfo('template_directory');?>/assets/Images/preorde-img.png" alt="Fresh Beef">
            <h1>Preorder Food</h1>
            <p> You can order meals online and enjoy without having to wait for it to arrive </p>
        </div>
        <div class="key4">
            <img src="<?php bloginfo('template_directory');?>/assets/Images/chef-img.png" alt="Fresh Beef">
            <h1> 5 Star Cheff </h1>
            <p> We believe that our passion for cooking steaks do and our ability to work together are what distinguishes us </p>
        </div>
    </div>

    <!-- .......................... chef and food  ..........................   -->

    <div class="header-know-key">
        <h1>About our quality and chef</h1>
        <p>Get a feel of our vision towards client and food </p>
    </div>
    <!-- .......... box-1 ............   -->
    <div class="grid-chef">
        <div class="right-chef">
            <div class="right-text">
                <div class="line-text">
                    <div class="line-red"></div>
                    <p> &nbsp; QUALITY</p>
                </div>
                <h1>The Best Ingredients</h1>
                <p class="text-medium-chef">Discover our quality</p>
                <p class="text-chef">We take an enormous amount of pride in sourcing our ingredients carefully to ensure that the flavors of our food are as delicious and authentic as possible.
                    <br> <br> We are only able to achieve this level of excellence by putting an extra level of care into our menu items that are difficult to find at other restaurants.</p>
            </div>
        </div>
        <div class="left-chef">
            <!-- <img src="assets/Images/img-know-2.jpg" alt=chef-bg-img> -->
        </div>
    </div>

    <div class="grid-chef">
        <div class="right-chef-2">
            <div class="right-text">
                <div class="line-text">
                    <div class="line-red"></div>
                    <p> &nbsp; CHEF</p>
                </div>
                <h1>Bøf og Vin owner and chef</h1>
                <p class="text-medium-chef">Discover our values</p>
                <p class="text-chef">Our deepest and most closely held beliefs make us who we are. Passion is the first of our core values, which is the reason we do what we do. It's what drives us every day, serving the highest quality stakes and providing the best service for our clients. Harmony is the second core value, meaning that we encourage teamwork in our place to ensure smooth workflow.</p>
            </div>
        </div>
        <div class="left-chef-2">
            <!-- <img src="assets/Images/img-know-2.jpg" alt=chef-bg-img> -->
        </div>
    </div>

    </div>
    <!-- ......... btn ............   -->
    <div class="nav-reserve-btn-center" id="reserve" onclick="clicks()">
        <button style="border:none;" class="all-buttons reserve-btn-body">Reservation<i class="far fa-calendar-alt i-reserve"></i></button>
    </div>


    <!-- .......................... gallery  ..........................   -->   <!-- Lightbox https://codepen.io/dreyz420/pen/VyYNqP -->

    <div class="header-know-key">
        <h1>Restaurant Gallery</h1>
        <p>Get a feel of our cozy restaurant </p>
    </div>

    <div class="image-mosaic">
        <div class="card card-tall card-wide">
            <img id="myImg" src="<?php bloginfo('template_directory');?>/assets/Images/gallery/gallery-img-1.jpg" alt="Restaurant-outside-picture" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
        </div>
        <div class="card card-tall"> <img id="myImg" src="<?php bloginfo('template_directory');?>/assets/Images/gallery/gallery-img2.jpg" alt="Group-table" onclick="openModal();currentSlide(2)" class="hover-shadow cursor"> </div>
        <div class="card">
            <img id="myImg" src="<?php bloginfo('template_directory');?>/assets/Images/gallery/gallery-img7.jpg" alt="Couple-Table" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
        </div>
        <div class="card">
            <img id="myImg" src="<?php bloginfo('template_directory');?>/assets/Images/gallery/gallery-img8.jpg" alt="Salad-bar" onclick="openModal();currentSlide(4)" class="hover-shadow cursor"></div>
        <div class="card">
            <img src="<?php bloginfo('template_directory');?>/assets/Images/gallery/gallery-img5.jpg" alt="Glass-table" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
        </div>
        <div class="card">
            <img src="<?php bloginfo('template_directory');?>/assets/Images/gallery/gallery-img6.jpg" alt="beef-picture" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
        </div>
        <div class="card card-wide">
            <img src="<?php bloginfo('template_directory');?>/assets/Images/gallery/gallery-img9.jpg" alt="restaurant-drawing" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
        </div>
    </div>


    <div id="myModal" class="modal">
        <span class="close cursor" onclick="closeModal()">&times;</span>
        <div class="modal-content">

            <div class="mySlides">

                <img src="<?php bloginfo('template_directory');?>/assets/Images/gallery/gallery-img-1.jpg" style="width:100%" alt="Restaurant-outside-picture">
            </div>

            <div class="mySlides">

                <img src="<?php bloginfo('template_directory');?>/assets/Images/gallery/gallery-img2-1.jpg" style="width:100%" alt="Group-table">
            </div>

            <div class="mySlides">

                <img src="<?php bloginfo('template_directory');?>/assets/Images/gallery/gallery-img7-1.jpg" style="width:100%" alt="Couple-Table">
            </div>

            <div class="mySlides">

                <img src="<?php bloginfo('template_directory');?>/assets/Images/gallery/gallery-img8-1.jpg" style="width:100%" alt="Salad-bar">
            </div>

            <div class="mySlides">
                <img src="<?php bloginfo('template_directory');?>/assets/Images/gallery/gallery-img5-1.jpg" style="width:100%" alt="Glass-table">
            </div>

            <div class="mySlides">
                <img src="<?php bloginfo('template_directory');?>/assets/Images/gallery/gallery-img6-1.jpg" style="width:100%" alt="beef-picture">
            </div>

            <div class="mySlides">
                <img src="<?php bloginfo('template_directory');?>/assets/Images/gallery/gallery-img9-1.jpg" style="width:100%" alt="restaurant-drawing">
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>


        </div>
    </div>





<?php get_footer();?>