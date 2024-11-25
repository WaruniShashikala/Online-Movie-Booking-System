<?php 

    include_once 'header.php';

?>
 
<section class="home swiper" id="home">

        <div class="swiper-wrapper">

            <div class="swiper-slide container">
                <img  src="images/fastX.jpg" alt="">
                <div class="home-text">
                    <h1 class="home-movie">Fast X</h1>
                    <button type="button" class="Book_btn" onclick="location.href='booking.php'">Book Now</button>
                </div>
            </div>

            <div class="swiper-slide container">
                <img  src="images/johnwick home.jpg" alt="">
                <div class="home-text">
                    <h1 class="home-movie">Johnwick:<br> Chapter 4</h1>
                    <button type="button" class="Book_btn" onclick="location.href='booking.php'">Book Now</button>
                </div>
            </div>

            <div class="swiper-slide container">
                <img  src="images/Pathaan.jpg" alt="">
                <div class="home-text">
                    <h1 class="home-movie">Pathaan</h1>
                    <button type="button" class="Book_btn" onclick="location.href='booking.php'">Book Now</button>
                </div>
            </div>

        </div>

        
        <div class="swiper-pagination"></div>

  </div>




</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script src="javascript/home.js"> </script>

<?php

    include_once 'footer.php';

?>