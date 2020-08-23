<?php
  require "header.php";
 ?>

<!-- Covid Message -->
<div class="covid">
      <div class="card covidAlert" >
        <div class="card-body" >
          <h5 class="card-title">Covid-19 Alert!</h5>
          <p class="card-text">We're remaing open for you during this COVID time. We're deticated to help you.
          <br>Click here <a href="#busHrs"><i class="fas fa-business-time"></i></a> to see our business hours<br></p>
        </div>
      </div>
</div>
 <!-- Posts -->
   <section class="posts">
     <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item postsImg active">
            <img class="d-block w-100 imgPost" src="images/pic1.jpg" alt="First slide">
          </div>
          <div class="carousel-item postsImg">
            <img class="d-block w-100 imgPost" src="images/pic2.jpg" alt="Second slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <script type="text/javascript">
         $('.carousel').carousel({
           interval: 2000
         })
      </script>
   </section>

   <!-- Features -->

   <section id="features">

     <div class="row">

       <div class="feature-box col-lg-4">
         <a href="#reviews"><i class="far fa-check-circle fa-4x icon"></i></a>
         <h3>Customer Service</h3>
         <p>Great customer service that you will love</p>
       </div>

       <div class="feature-box col-lg-4">
         <a href="#reviews"><i class="fas fa-dollar-sign fa-4x icon"></i></a>
         <h3>Affordable Prices</h3>
         <p>Our prices are unbelievably affordable</p>
       </div>

       <div class="feature-box col-lg-4">
         <a href="#reviews"><i class="fas fa-heart fa-4x icon"></i></a>
         <h3>Great Reviews</h3>
         <p>Read some great reviews below from our previous customers</p>
       </div>
     </div>
     <script type="text/javascript">
        $('.carousel').carousel({
          interval: 2000
        })
     </script>
   </section>


   <!-- reviews -->

   <section id="reviews">

     <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
       <ol class="carousel-indicators">
         <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
         <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
       </ol>
       <div class="carousel-inner">
         <div class="carousel-item reviewImg active">
           <h2>I no longer have to sniff other dogs for love. I've found the hottest Corgi on TinDog. Woof.</h2>
           <img class="reviews-image" src="images/dog-img.jpg" alt="dog-profile">
           <em>Pebbles, New York</em>
         </div>
         <div class="carousel-item reviewImg">
           <h2 class="reviews-text">My dog used to be so lonely, but with TinDog's help, they've found the love of their life. I think.</h2>
           <img class="reviews-image" src="images/lady-img.jpg" alt="lady-profile">
           <em>Beverly, Illinois</em>
         </div>
       </div>
       <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
       </a>
       <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
       </a>
     </div>

   </section>
<div id="busHrs" class="busHrs">
  <h2>Business Hours</h3>
  <p>
    Monday       : 11:00am to 7:00pm<br>
    Tuesday      : 11:00am to 7:00pm<br>
    Wednesday    : 11:00am to 7:00pm<br>
    Wednesday    : 11:00am to 7:00pm<br>
    Wednesday    : 11:00am to 7:00pm<br>
    Wednesday    : 11:00am to 7:00pm<br>
    Wednesday    : 11:00am to 7:00pm<br>
  </p>
</div>
 <?php
   require "footer.php";
  ?>
