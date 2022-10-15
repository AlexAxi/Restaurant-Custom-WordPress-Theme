<?php get_header();?>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" />

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- 1. Owl Carousel Min.Css -->
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

<!--   2. Owl Carousel Theme Min.css -->
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />




<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

<!-- Testimonials -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>

<link rel="stylesheet"  href="<?php echo get_template_directory_uri(); ?>/assets/Css/normalize.css" />
<link rel="stylesheet"  href="<?php echo get_template_directory_uri(); ?>/assets/Css/style.css" />
<link rel="stylesheet"  href="<?php echo get_template_directory_uri(); ?>/assets/Css/nav.css" />


<script src="<?php echo get_template_directory_uri(); ?>/assets/Javascript/JS.js" defer></script>




<main>

<div class="grid-landing">

    <h1 class="welcome-title">WELCOME TO BØF OG VIN</h1>
    <p class="landing-intro">The restaurant provides <strong>prime food service</strong> and a <strong>unique location</strong> which makes <strong>Bøf og Vin Aalborg</strong>  the perfect place for friends & family to come together and have a great time. We have many years of experience in the industry, and we are known for our <strong>delicious steaks</strong> here, in
        <b>Aalborg.</b>
    </p>

    <!-- buttons -->

    <div class="landing-menu-button">
        <a class="all-buttons menu-btn" href="http://restaurant-version-2.local/menu/?menu#see">MENU</i></a>
    </div>

    <div class="landing-monthly-menu-button">
        <a class="all-buttons monthly-menu-btn-1" href="http://restaurant-version-2.local/menu/?monthly-menu#see">MONTHLY MENU</i></a>
    </div>

    <!-- Arrow  -->

    <a href="#video">
        <div class="arrow-container">
            <div class="arrow-down">
            </div>
    </a>

</div>
</div>

</div>

</div>


<!--  Video Section  -->
<div id="bg">
    <img src="<?php bloginfo('template_directory');?>/assets/Images/Backgound-test-4.jpg" alt="landing-page">
</div>

<div class="video-section">

<!--  Creative Comons Licence for music: https://creativecommons.org/licenses/by/3.0/deed Source: https://www.youtube.com/watch?v=_hg8fkuATyU&ab_channel=MusicforVideoLibrary
The video is only used for this case and will not be released for the public-->
    <div class="video" id="video">
        <video controls width="65%" height="100%" onloadstart="this.volume=0.1">
            <source src="<?php bloginfo('template_directory');?>/assets/Video/Bof-og-vin.mp4" type="video/mp4">
            Sorry, your browser doesn't support embedded videos.
        </video>
    </div>

    <div class="video-text" id="video">
        <!-- hr -->

        <!--     <hr width="70rem;" color="#96192B" size="2"> -->

        <div class="line-red"></div>
        <div class="line-text">
            <div class="line-red"></div>
            <p> &nbsp; KNOW US</p>
        </div>


        <!--   <h1 class="hr-headline" id="video">KNOW US</h1> -->

        <h1 class="video-title">Disvover our restaurant</h1> 
        <p class="video-p"> Our steakhouse in Aalborg is the perfect place for friends & family 
        to come together and have a great time. We can offer high-quality steaks and wine 
        collection to supplement your meals and ensure a nice atmosphere and service. 
        For your comfort, we ensure an easy table reservation online or by calling.
        </p>

        <div class="read-more-btn">
            <a class="all-buttons read-more-btn" href="#">READ MORE</i></a>
        </div>
    </div>
</div>
</main>

<article>

<!--   Working hours section -->
<div class="working-hours-section">

    <!--    First Box -->
    <div class="working-hours-box1">
        <!-- hr -->

        <div class="line-red" id="opening-h"></div>
        <div class="line-text">
            <div class="line-red"></div>
            <p> &nbsp; OPENING</p>
        </div>

        <h1 class="working-hours-title">Working Hours</h1>
        <p class="working-hours-p">Here you can check opening hours of Bøf og Vin. <br>You can also do a
            reservation by calling or doing<br> it online and prebooking menu is available! </p>
        <h1 class="corona-information">Don’t forget to bring CORONA PASS and to wear masks!</h1>

        <a class="all-buttons contact-us-btn" href="#">CONTACT US</i></a>

    </div>

    <!------ Second Box ------->
    <div class="working-hours-box2">
        <p class="working-schedule">
            Monday to Thursday:<br>
            <b>17:00<br></b>
            <b>22:00<br><br></b> Friday to Saturday:<br>
            <b>16:00<br></b>
            <b>23:00<br><br></b> Sunday:
            <br>
            <b>Closed</b><br>
        </p>
    </div>
</div>
</main>

<!-------- Carousel -------> <!-- https://www.youtube.com/watch?v=F0FkpgNtyt0&t=696s -->

<div class="container-fluid my-5">
    <h1 class="carousel-title">Explore Our Menu</h1>
    <h2 class="carousel-title1">We offer a variety of dishes plus a monthly menu</h2>

    <div class="row mt-5">
        <div class="owl-carousel owl-theme">
            <a href="http://restaurant-version-2.local/menu?starters#see" class="item mb-4" id="no-underline">
                <div class="card border-0 shadow">
                    <img src="<?php bloginfo('template_directory');?>/assets/Images/monthly-menu-starter.jpg" alt="cake-img" class="card-img-top">
                    <div class="card-body">
                        <h4>Starters</h4>
                    </div>
                </div>
            </a>

            <!--   Ends -->

            <a href="http://restaurant-version-2.local/menu?mainCourse#see" class="item mb-4" id="no-underline">
                <div class="card border-0 shadow">
                    <img src="<?php bloginfo('template_directory');?>/assets/Images/monthly-menu-main.jpg" alt="cake-img" class="card-img-top">
                    <div class="card-body">
                        <h4>Main Course</h4>
                    </div>
                </div>
            </a>

            <!--   Ends -->

            <a href="http://restaurant-version-2.local/menu?children#see" class="item mb-4" id="no-underline">
                <div class="card border-0 shadow">
                    <img src="<?php bloginfo('template_directory');?>/assets/Images/kids menu.jpg" alt="cake-img" class="card-img-top">
                    <div class="card-body">
                        <h4>Children
                        </h4>
                    </div>
                </div>
            </a>

            <!--   Ends -->

            <a href="http://restaurant-version-2.local/menu?luxury#see" class="item mb-4" id="no-underline">
                <div class="card border-0 shadow">
                    <img src="<?php bloginfo('template_directory');?>/assets/Images/luxury menu.jpg" alt="cake-img" class="card-img-top">
                    <div class="card-body">
                        <h4>Luxury</h4>
                    </div>
                </div>
            </a>

            <!--   Ends -->

            <a href="http://restaurant-version-2.local/menu?desserts#see" class="item mb-4" id="no-underline">
                <div class="card border-0 shadow">
                    <img src="<?php bloginfo('template_directory');?>/assets/Images/dessert-landing.jpg" alt="cake-img" class="card-img-top">
                    <div class="card-body">
                        <h4>Desserts</h4>
                    </div>
                </div>
            </a>

            <!--   Ends -->
            <a href="http://restaurant-version-2.local/menu?drinks#see" class="item mb-4" id="no-underline">
                <div class="card border-0 shadow">
                    <img src="<?php bloginfo('template_directory');?>/assets/Images/wine-landing.jpg" alt="cake-img" class="card-img-top">
                    <div class="card-body">
                        <h4>Wines</h4>
                    </div>
                </div>
            </a>

            <!--   Ends -->

           

           

            <a href="http://restaurant-version-2.local/menu?coffee#see" class="item mb-4" id="no-underline">
                <div class="card border-0 shadow">
                    <img src="<?php bloginfo('template_directory');?>/assets/Images/coffe-front-p.jpg" alt="cake-img" class="card-img-top">
                    <div class="card-body">
                        <h4>Coffee</h4>
                    </div>
                </div>
            </a>

            <!--   Ends -->

            <a href="http://restaurant-version-2.local/menu?soft#see" class="item mb-4" id="no-underline">
                <div class="card border-0 shadow">
                    <img src="<?php bloginfo('template_directory');?>/assets/Images/cola.jpg" alt="cake-img" class="card-img-top">
                    <div class="card-body">
                        <h4>Drinks</h4>
                    </div>
                </div>
            </a>

            <!--   Ends -->

            <!------------------ Ends ------------------->
        </div>
    </div>
</div>

<div class="explore-button">
    <a class="all-buttons explore-menu-btn" href="http://restaurant-version-2.local/menu?menu#see">EXPLORE FULL MENU</i></a>
</div>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

<!--  jquery cdn-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!--     1. Owl Carousel Min.js   -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script src="assets/Java/JS.js" defer></script>

</article>

<!----------- Carousel Ends ------>

<figure>

<div class="Monthly-box">
    <h1 class="monthly-title">
        Monthly Menu
    </h1>
    <h2 class="monthly-title1">
        Try a special menu every month
    </h2>
</div>

<!--------------------------------Monthly Menu ------------------------------------->
<div id="container">

    <a href="http://restaurant-version-2.local/menu/?monthly-menu#see">
        <div class="container">
            <div class="wrap">
                <img src="<?php bloginfo('template_directory');?>/assets/Images/monthly-menu-starter.jpg" alt="Starters" />
                <p class="centered">Starters</p>
            </div>
        </div>
    </a>

    <a href="http://restaurant-version-2.local/menu/?monthly-menu#see">
        <div class="container">
            <div class="wrap">
                <img src="<?php bloginfo('template_directory');?>/assets/Images/main-monthly.jpg" alt="Main Course" />
                <p class="centered" id="main-course">Main Course</p>
            </div>
        </div>
    </a>

    <a href="http://restaurant-version-2.local/menu/?monthly-menu#see">
        <div class="container">
            <div class="wrap">
                <img src="<?php bloginfo('template_directory');?>/assets/Images/dessert-monthly.jpg" alt="Dessert" />
                <p class="centered">Dessert</p>
            </div>
        </div>
</div>
</a>


<div class="monthly-btn">
    <a class="all-buttons monthly-menu-btn" href="http://restaurant-version-2.local/menu/?monthly-menu#see">EXPLORE MONTHLY MENU</i></a>
</div>


<!------------------------------------------- Events --------------------------------------------------->

<div class="box-event">

    <h1 class="event-title">
        Group tables
    </h1>
    <h2 class="event-title1">
        We can be perfect place for
    </h2>

    <!--  First Box -->

    <div class="text-box">
        <h1 class="text-box-h1">Occasions</h1>
        <p class="text-box-p"> Bøf og Vin is a perfect place for your occasion! We have space for birthday parties, 
        company meetings, or Julefrokost! If you have more questions according to seat number or food menu, you can 
        call us: +45 86 31 88 88 or write an email: info@bofogvin.dk. See YOU at Bøf og Vin!
        </p>
    </div>

    <div class="text-img">
        <img src="<?php bloginfo('template_directory');?>/assets/Images/occasion.jpg" width="100%" alt="Occasion" >
    </div>


    <!-- ------------------------ -->

    <div class="text-box-1">
        <h1 class="text-box-1-h1">Dinning</h1>
        <p class="text-box-1-p"> Bøf og Vin is a perfect place for meeting your friends, family or having
            dinner with your loved ones. For the special occasion, we can offer a three-meal-course or a special
            monthly menu. You can do a reservation by calling us: +45 86 31
            88 88 or doing it online. See YOU at Bøf og Vin!
        </p>
    </div>
    <div class="text-img-1">
        <img src="<?php bloginfo('template_directory');?>/assets/Images/ordinary-1 (1).jpg" width="100%" alt="ordinary">
    </div>

    <div class="reserve-landing" id="reserve" onclick="clicks()">
        <button style="border:none;" class="all-buttons reserve-btn" >RESERVATION<i class="far fa-calendar-alt i-reserve"></i></button>
    </div>
</div>

</figure>

<!-- Testimonials -->  <!-- https://www.youtube.com/watch?v=mi1-o9hjbsk&t=108s -->
<section class="container-testimonials">

<div class="section-title">
    <h2>What Clients Say</h2>
</div>

<div class="section-title-p">
    <p>The oppinion of our clients matters </p>
</div>


<div class="testimonials-carousel-wrap">
    <div class="listing-carousel-button listing-carousel-button-next"><i class="fa fa-caret-right"
            style="color: #fff;"></i></div>
    <div class="listing-carousel-button listing-carousel-button-prev"><i class="fa fa-caret-left"
            style="color: #fff;"></i></div>

</div>
<div class="testimonials-carousel">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="testi-item">
                    <div class="testi-avatar"><img src="<?php bloginfo('template_directory');?>/assets/Images/avatar-4.png" alt="Avatar pic"></div>

                    <div class="testimonials-text">
                        <h3>John Doe</h3>
                        <div class="listing-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>

                        <p>Fantastic place with really nice service, best steak I have ever tasted! The place is
                            simple but cozy and the price is really good for the quality as the food is served!
                            We would love to come back! Everything had a homemade
                            taste and not a lot of produced feeling but proper food made from scratch!
                        </p>
                        <a href="#" class="text-link"></a>
                        <div class="testimonials-avatar">
                            <h3>2021/10/21</h3>
                            <a href="https://goo.gl/maps/eGcvGXbyTtGfAmvb8" target="_blank">
                                <h4>Google reviews source</h4>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Second Testimonial -->
            <div class="swiper-slide">
                <div class="testi-item">
                    <div class="testi-avatar"><img src="<?php bloginfo('template_directory');?>/assets/Images/avatar-8.png" alt="Avatar pic"></div>

                    <div class="testimonials-text">
                        <h3>Thomas Bøgh</h3>
                        <div class="listing-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>

                        <p>Really good taste experience and super service. Their striploin steak was the
                            highlight of the dinner. Would definitely recommend to anyone who wants to have
                            family or friends out to dinner. Also very close to the harbour,
                            to enjoy the view after the dinner and go for a walk.
                        </p>
                        <a href="#" class="text-link"></a>
                        <div class="testimonials-avatar">
                            <h3>2021/08/02</h3>
                            <a href="https://goo.gl/maps/vy3kJ8VggWsdE6uE8" target="_blank">
                                <h4>Google reviews source</h4>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <!--   Third Testimonial -->

            <div class="swiper-slide">
                <div class="testi-item">
                    <div class="testi-avatar"><img src="<?php bloginfo('template_directory');?>/assets/Images/avatar-6.png" alt="Avatar pic"></div>

                    <div class="testimonials-text">
                        <h3>Steffen Nysum</h3>
                        <div class="listing-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>

                        <p>The place is cozy, there is a good atmosphere and the waiters are mega sweet and
                            attentive. We got the Autumn menu, with 3 dishes (crayfish tails, tenderloin and
                            chocolate mousse), all of which were well cooked and tasted
                            great.The wine for the food was not expensive. We will definitely come again👍🙂
                        </p>
                        <a href="#" class="text-link"></a>
                        <div class="testimonials-avatar">
                            <h3>2021</h3>
                            <a href="https://goo.gl/maps/HhQJY7J72BmZer3b9" target="_blank">
                                <h4>Google reviews source</h4>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <!--  fourth testimonial -->

            <div class="swiper-slide">
                <div class="testi-item">
                    <div class="testi-avatar"><img src="<?php bloginfo('template_directory');?>/assets/Images/avatar-7.png" alt="Avatar pic"></div>

                    <div class="testimonials-text">
                        <h3>Tina</h3>
                        <div class="listing-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>

                        <p>Got recommended this restaurant and their luxury menu - and it is definitely not
                            without reason. Got a very delicious lobster with prawns for starters, a passion
                            fruit sorbet, a whimsical touch, but a suitable balance between
                            acidity and sweetness and then we were definitely ready for the best fried beef
                            tenderloin we've had in a long time!
                        </p>
                        <a href="#" class="text-link"></a>
                        <div class="testimonials-avatar">
                            <h3>2021/07/17</h3>
                            <a href="https://www.tripadvisor.dk/ShowUserReviews-g189529-d12148896-r797709564-Bof_Og_Vin-Aalborg_North_Jutland_Jutland.html?m=19905"
                                target="_blank">
                                <h4>Trip Advisor</h4>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Fifth Testimonial -->

            <div class="swiper-slide">
                <div class="testi-item">
                    <div class="testi-avatar"><img src="<?php bloginfo('template_directory');?>/assets/Images/avatar-5.png" alt="Avatar pic"></div>

                    <div class="testimonials-text">
                        <h3>Kamilla Josefsen</h3>
                        <div class="listing-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>

                        </div>

                        <p>All in all, an incredibly nice experience, the house wine was really good, the steak
                            cooked perfectly and the service absolutely top notch, you could get it lukewarm as
                            you would gift it. The decor could possibly also have
                            been more stimulating, but it can not be eaten so puddle.
                        </p>
                        <a href="#" class="text-link"></a>
                        <div class="testimonials-avatar">
                            <h3>2020/01/05</h3>
                            <a href="https://www.tripadvisor.dk/ShowUserReviews-g189529-d12148896-r736992029-Bof_Og_Vin-Aalborg_North_Jutland_Jutland.html"
                                target="_blank">
                                <h4>Trip Advisor</h4>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <!--  Testimonial end -->
        </div>
    </div>
</div>

<!-- <div class="tc-pagination"></div> -->
</div>

</section>


<!------------------------------------------ Footer -------------------------------------->

    <!-- FOOTER DESKTOP-->

    <footer class="footer-desktop">
        <div class="foot-ratings">
            <h3 class="footer-h3">Ratings</h3>
            <div class="reviews">
                <div class="review-wrapper">
                    <a target="_blank" href="https://www.google.com/search?q=b%C3%B8f+og+vin+%C3%A5lborg+google+reviews&sxsrf=AOaemvJQw4erDcfT4gGfx1jtncQbyxt-Lw%3A1640432541281&ei=nQPHYa2-EKePxc8P4PG-kAw&oq=b%C3%B8f+og+vin+%C3%A5lborg+google+revi&gs_lcp=Cgdnd3Mtd2l6EAMYADIFCCEQoAE6BwgAEEcQsAM6BggAEBYQHjoCCCY6CAghEBYQHRAeOgcIIRAKEKABSgQIQRgASgQIRhgAUO8GWLQxYOs6aAFwAngAgAHJAYgBtQuSAQYxLjEwLjGYAQCgAQHIAQjAAQE&sclient=gws-wiz#lrd=0x4649328cfe884b23:0xa07904f41078b715,1,,,"
                        class="ratings-a"><img class="img-review" src="<?php bloginfo('template_directory');?>/assets/Images/google logo.svg" alt="Google Reviews"></a> <a target="_blank" href="https://www.google.com/search?q=b%C3%B8f+og+vin+%C3%A5lborg+google+reviews&sxsrf=AOaemvJQw4erDcfT4gGfx1jtncQbyxt-Lw%3A1640432541281&ei=nQPHYa2-EKePxc8P4PG-kAw&oq=b%C3%B8f+og+vin+%C3%A5lborg+google+revi&gs_lcp=Cgdnd3Mtd2l6EAMYADIFCCEQoAE6BwgAEEcQsAM6BggAEBYQHjoCCCY6CAghEBYQHRAeOgcIIRAKEKABSgQIQRgASgQIRhgAUO8GWLQxYOs6aAFwAngAgAHJAYgBtQuSAQYxLjEwLjGYAQCgAQHIAQjAAQE&sclient=gws-wiz#lrd=0x4649328cfe884b23:0xa07904f41078b715,1,,,"
                        class="ratings-a">Google Reviews</a>
                </div>
                <div class="review-wrapper">
                    <a target="_blank" href="https://www.tripadvisor.dk/Restaurant_Review-g189529-d12148896-Reviews-Bof_Og_Vin-Aalborg_North_Jutland_Jutland.html" class="ratings-a"><img class="img-review" src="<?php bloginfo('template_directory');?>/assets/Images/TripAdvisor logo.svg" alt="TripAdvisor"></a> <a target="_blank" href="https://www.tripadvisor.dk/Restaurant_Review-g189529-d12148896-Reviews-Bof_Og_Vin-Aalborg_North_Jutland_Jutland.html"
                        class="ratings-a">TripAdvisor</a>
                </div>

            </div>
            <div class="review-wrapper">
                <a target="_blank" href="https://www.tripadvisor.dk/Restaurant_Review-g189529-d12148896-Reviews-Bof_Og_Vin-Aalborg_North_Jutland_Jutland.html" class="ratings-a"><img class="img-review" src="<?php bloginfo('template_directory');?>/assets/Images/Kontrol Report.svg" alt="Kontrol Report"></a> <a target="_blank" href="https://www.findsmiley.dk/504573" class="ratings-a">Kontrol Report</a>
            </div>
        </div>

        <div class="vl"></div>

        <div class="foot-contact-us">
            <h3 class="footer-h3">Contact Us</h3>

            <div class="fo-icons">
                <p class="footer-p">CALL: &emsp;<a target="_blank" href="tel:+45 86 31 88
                        88" class="footer-a">+45 86 31 88
                        88</a>
                </p>
                <p class="footer-p">EMAIL: &emsp; <a target="_blank" href="mailto:info@bofogvin.dk" class="footer-a">info@bofogvin.dk</a></p>
                <p class="footer-p">ADDRESS: <a target="_blank" href="https://goo.gl/maps/mnawrVNtgxKMDSAx8" class="footer-a">Østerågade 18 C,
                        9000
                        Aalborg</a></p>
            </div>
            <div class="fo-icons">

                <a target="_blank" href="https://www.facebook.com/BofogVin/" class="img-a"><img class="img-social" src="<?php bloginfo('template_directory');?>/assets/Images/Facebook.svg" alt="Facebook"></a>
                <a target="_blank" href="https://www.instagram.com/bofogvin/" class="img-a"><img class="img-social" src="<?php bloginfo('template_directory');?>/assets/Images/Instagram.svg" alt="Instagram"></a>
            </div>
        </div>

        <div class="vl"></div>


        <div class="foot-opening-hours">
            <h3 class="footer-h3">Opening Hours</h3>
            <div>
                <p class="footer-p opening-h-p">
                    <strong style="color: #ffffff;">Monday – Thursday:</strong> &ensp; - kl. 17:00 – 22:00
                    <br> <strong style="color: #ffffff;">Friday – Saturday: </strong> &emsp; - kl . 16:00 – 23:00
                    <br> <strong style="color: #ffffff;">Sunday:</strong> &ensp; - Lukket.
                </p>
            </div>
            <a class="footer-a " style="font-weight: 600;" href="http://restaurant-version-2.local/contact/">FAQ</a>
        </div>
        <!-- </div> -->
        
    </footer>
    <!-- <div style="position:fixed; z-index:7; top:95%; background-color: white" class="cli-bar-container cli-style-v2">
    <div class="cli-bar-message" style="" >We use cookies on our website to give you the most relevant experience by remembering your preferences and repeat visits. By clicking “Accept All”, you consent to the use of ALL the cookies. However, you may visit "Cookie Settings" to provide a controlled consent.</div><div class="cli-bar-btn_container">
            <?php echo do_shortcode('[cookie_settings margin="0px 5px 0px 0px"][cookie_accept_all]');?></div></div>
    </div> -->
   
    <!-- FOOTER MOBILE-->

    <footer class="footer-mobile">
        <div class="ratings-contact-wrap-mr">
            <div class="reviews-mr">
                <div class="foot-ratings">
                    <h3 class="footer-h3">Ratings</h3>
                    <div class="reviews">
                        <div class="review-wrapper">
                            <a target="_blank" href="https://www.google.com/search?q=b%C3%B8f+og+vin+%C3%A5lborg+google+reviews&sxsrf=AOaemvJQw4erDcfT4gGfx1jtncQbyxt-Lw%3A1640432541281&ei=nQPHYa2-EKePxc8P4PG-kAw&oq=b%C3%B8f+og+vin+%C3%A5lborg+google+revi&gs_lcp=Cgdnd3Mtd2l6EAMYADIFCCEQoAE6BwgAEEcQsAM6BggAEBYQHjoCCCY6CAghEBYQHRAeOgcIIRAKEKABSgQIQRgASgQIRhgAUO8GWLQxYOs6aAFwAngAgAHJAYgBtQuSAQYxLjEwLjGYAQCgAQHIAQjAAQE&sclient=gws-wiz#lrd=0x4649328cfe884b23:0xa07904f41078b715,1,,,"
                                class="ratings-a"><img class="img-review" src="<?php bloginfo('template_directory');?>/assets/Images/google logo.svg" alt="Google Reviews"></a> <a target="_blank" href="https://www.google.com/search?q=b%C3%B8f+og+vin+%C3%A5lborg+google+reviews&sxsrf=AOaemvJQw4erDcfT4gGfx1jtncQbyxt-Lw%3A1640432541281&ei=nQPHYa2-EKePxc8P4PG-kAw&oq=b%C3%B8f+og+vin+%C3%A5lborg+google+revi&gs_lcp=Cgdnd3Mtd2l6EAMYADIFCCEQoAE6BwgAEEcQsAM6BggAEBYQHjoCCCY6CAghEBYQHRAeOgcIIRAKEKABSgQIQRgASgQIRhgAUO8GWLQxYOs6aAFwAngAgAHJAYgBtQuSAQYxLjEwLjGYAQCgAQHIAQjAAQE&sclient=gws-wiz#lrd=0x4649328cfe884b23:0xa07904f41078b715,1,,,"
                                class="ratings-txt">Reviews</a>
                        </div>
                        <div class="review-wrapper">
                            <a target="_blank" href="https://www.tripadvisor.dk/Restaurant_Review-g189529-d12148896-Reviews-Bof_Og_Vin-Aalborg_North_Jutland_Jutland.html" class="ratings-a"><img class="img-review" src="<?php bloginfo('template_directory');?>/assets/Images/TripAdvisor logo.svg" alt="TripAdvisor"></a> <a target="_blank" href="https://www.tripadvisor.dk/Restaurant_Review-g189529-d12148896-Reviews-Bof_Og_Vin-Aalborg_North_Jutland_Jutland.html"
                                class="ratings-txt">TripAdvisor</a>
                        </div>
                    </div>
                </div>
                <a class="footer-a " style="font-weight: 600; margin-left:1.2em;" href="http://restaurant-version-2.local/contact/">FAQ</a>
            </div>

            <div class="vl"></div>

            <div class="contact-mr">
                <div class="foot-contact-us">
                    <h3 class="footer-h3">Contact Us</h3>

                    <div class="contacts-wrop-mr">
                        <p class="footer-p">CALL:<a target="_blank" href="tel:+45 86 31 88
                        88" class="footer-a">+45 86 31 88
                                88</a>
                        </p>
                        <p class="footer-p">EMAIL: <a target="_blank" href="mailto:info@bofogvin.dk" class="footer-a">info@bofogvin.dk</a></p>
                        <p class="footer-p">ADDRESS: <a target="_blank" href="https://goo.gl/maps/mnawrVNtgxKMDSAx8" class="footer-a">Østerågade
                                18 C,
                                9000 Aalborg</a></p>
                    </div>

                </div>
            </div>
        </div>
        <div class="hr-mr"> </div>
        <div class="opening-hours-mr">
            <div class="foot-opening-hours">
                <h3 class="footer-h3 h3-adj-mr">Opening Hours</h3>
                <div>
                    <p class="footer-p opening-h-p">
                        <strong style="color: #ffffff;">Monday – Thursday:</strong> &ensp; - kl. 17:00 – 22:00
                        <br> <strong style="color: #ffffff;">Friday – Saturday: </strong> &emsp; - kl . 16:00 – 23:00
                        <br> <strong style="color: #ffffff;">Sunday:</strong> &ensp; - Lukket.
                    </p>
                </div>

            </div>
        </div>
        <div class="hr-mr"> </div>
        <div class="kontrol-mr">
            <div class="review-wrapper rev-wrap-adj">
                <a target="_blank" href="https://www.tripadvisor.dk/Restaurant_Review-g189529-d12148896-Reviews-Bof_Og_Vin-Aalborg_North_Jutland_Jutland.html" class="ratings-a">
                    <img class="img-review" src="<?php bloginfo('template_directory');?>/assets/Images/Kontrol Report.svg" alt="Kontrol Report"></a> <a target="_blank" href="https://www.findsmiley.dk/504573"
                    class="ratings-txt">Kontrol Report</a>
            </div>
            <div class="fo-icons fo-icons-adj">

                <a target="_blank" href="https://www.facebook.com/BofogVin/" class="img-a"><img class="img-social " src="<?php bloginfo('template_directory');?>/assets/Images/Facebook.svg" alt="Facebook"></a>
                <a target="_blank" href="https://www.instagram.com/bofogvin/" class="img-a"><img class="img-social " src="<?php bloginfo('template_directory');?>/assets/Images/Instagram.svg" alt="Instagram"></a>
            </div>
        </div>
        </div>
        <?php echo do_shortcode('[restaurant-reservations ruid="15ed3141-4fba-46a8-8ab3-6b7db6fa7409"]');?>
        
    </footer>


    <!---------------------------------- Footer ENDS ---------------------------------------->

</body>

</html>