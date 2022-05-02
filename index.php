<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Responsive Tourism Website</title>
  <!-- Google fonts  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

  <!-- bootstrap css link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

  <!-- custom css file link  -->
  <link rel="stylesheet" href="style.css" />
  <!-- /linking aos -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
  <!-- Navbar -->
  <section class="navbar1" id="navbar1">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <i data-aos="fade-right" data-aos-delay="150" class="fa-solid fa-plane-departure"></i>
        <a data-aos="fade-right" data-aos-delay="200" class="navbar-brand" href="#about">Travel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="#navbar1" data-aos="fade-right"
                data-aos-delay="350">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about" data-aos="fade-right" data-aos-delay="500">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#service" data-aos="fade-right" data-aos-delay="650">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#gallery" data-aos="fade-right" data-aos-delay="800">Gallery</a>
            </li>
          </ul>
          <form class="d-flex">
            <a class="btn btn-outline-success"  data-aos="fade-right" data-aos-delay="600"
              href="config.php"
              target="_blank">
              Register Now
            </a>
          </form>
        </div>
      </div>
    </nav>
  </section>
  <!-- Navbar ends -->

  <!-- Home page starts -->
  <section class="home" id="home">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/compressed/home-min.jpg" class="d-block w-100" height="580" />
          <div class="carousel-caption d-none d-md-block">
            <h3>
              Some Beautiful Paths Can't Be Discovered Without Getting Lost.
            </h3>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/compressed/home1-min.webp" class="d-block w-100" height="580" />
          <div class="carousel-caption d-none d-md-block">
          <h1>
              Just Believe 
            </h1>
            <br><br><br><br><br><br><br>
            <h3>
              It Feels Good To Be Lost In The Right Direction.
            </h3>
          </div> 
        </div>
        <div class="carousel-item">
          <img src="images/compressed/home2-min.webp" class="d-block w-100" height="580" />
          <div class="carousel-caption d-none d-md-block">
            <h1>
              Global Viewpoint
            </h1>
            <br><br><br>
            <h3>
              Life Is A Journey, Not A Destination.
            </h3>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
  <!-- Home page ends -->

  <!-- About section -->
  <section class="about" id="about">
    <div class="container2">
      <h2 data-aos="zoom-in-up" data-aos-delay="50">About </h2>
      <h1 data-aos="zoom-in-up" data-aos-delay="100">Nature's Majesty Awaits You</h1>
      <div class="card-body">
        <div class="col2">
          <h3 data-aos="zoom-in-up" data-aos-delay="200">About us ?</h3>
          <h4 data-aos="zoom-in-up" data-aos-delay="300">We Convert Your Dream To Reality</h4>
          <div class="col3">
            <h3 data-aos="zoom-in-up" data-aos-delay="400">Why to choose us ?</h3>
            <p data-aos="zoom-in-up" data-aos-delay="500"></p>
            <p data-aos="zoom-in-up" data-aos-delay="500">Our tour price clearly lists all the inclusions and exclusions.
               All prices we quote are inclusive of all prevailing taxes in India.We believe If anything is important to you,
                it is important for us. We are happy
                to customise, tailor made tour, designed according to your budget, interest, travelling style and wishes.
                In your India trip your transport will play a big roll, actually your transport will be your first home and hotel will 
                be the second. It takes 5 to 6 hours travelling from one city to another city and back and forth to the attraction in the city.
                 Having a clean transport and experienced driver will enhance your trip of India. 
                 Each of our vehicle has all India tourists permit, enough leg space, air-condition and an experienced driver.
                 We have more travelling options. If you like to travel in train, want to stay in Heritage hotels, travel with personal 
                 car with driver, relaxing travel, family travel, off beat travel. We have everything for everyone you just need to share 
                 your travel plan and we customise it especially for you.
                 We welcome you in India as a guest; show you our incredible country like friends because we are in the 
                 industry only for one reason WE LOVE WHAT WE DO for us any request is not too big or small.
              </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About section end -->

  <!-- Button section -->
  <section class="button-section" id="button-section">
    <div class="container3">
      <form class="d-flex">
        <a class="btn btn-outline-success"  data-aos="fade-right" data-aos-delay="600" href="https://www.yatra.com/" target="_blank">
         Book-Now 
        </a>
      </form>
      <form class="d-flex">
        <a class="btn btn-outline-success"  data-aos="fade-right" data-aos-delay="600" href="explore.php" target="_blank">
         Explore-it!
        </a>
      </form>
    </div>
  </section>
  <!-- Button section ends -->

  <!-- Service section -->
  <section class="service" id="service">
    <div class="container">
      <h2 data-aos="zoom-in-up" data-aos-delay="50">Services</h2>
      <h1 data-aos="zoom-in-up" data-aos-delay="100">Countless Experience</h1>
      <div class="row">
        <div class="col" data-aos="zoom-in-up" data-aos-delay="50">
          <i class="fa-solid fa-globe"></i>
          <h2>Allover World</h2>
          <p>We allow you to book your trip across the world.
          </p>
        </div>
        <div class="col" data-aos="zoom-in-up" data-aos-delay="150">
          <i class="fa-solid fa-hotel"></i>
          <h2>Affordable Hotels</h2>
          <p>We will provide hotels as per your budget range.
          </p>
        </div>
        <div class="col" data-aos="zoom-in-up" data-aos-delay="250">
          <i class="fa-solid fa-hourglass"></i>
          <h2>Time-Saver</h2>
          <p>We will plan your trip with proper schedule which will save your time.
          </p>
        </div>
        <div class="col" data-aos="zoom-in-up" data-aos-delay="350">
          <i class="fa-solid fa-person-swimming"></i>
          <h2>Adventures</h2>
          <p>We will try to make your trip more memorable and more adventurous.
          </p>
        </div>
        <div class="col" data-aos="zoom-in-up" data-aos-delay="450">
          <i class="fa-solid fa-headset"></i>
          <h2>24-7 Support</h2>
          <p>We will provide a helpline number which will be providing 24-7 support.
          </p>
        </div>
        <div class="col" data-aos="zoom-in-up" data-aos-delay="550">
          <i class="fa-solid fa-utensils"></i>
          <h2>Delicious Meal</h2>
          <p>We will be providing your favourite food at affordable price.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- Service section ends -->

  <!-- Gallery -->
  <section class="gallery" id="gallery">
    <div class="row2">
      <h2 data-aos="zoom-in-up" data-aos-delay="50">Gallery</h2>
      <h1 data-aos="zoom-in-up" data-aos-delay="100">We Record Memories</h1>
      <div class="text-center">
        <img src="images/compressed/1-min.jpg" class="rounded float-left" height="400px" width="300px">
        <img src="images/compressed/2-min.jpg" class="rounded float-right" height="400px" width="300px">
        <img src="images/compressed/3-min.jpg" class="rounded float-right" height="400px" width="300px">
        <img src="images/compressed/4-min.jpg" class="rounded float-right" height="400px" width="300px">
        <img src="images/compressed/5-min.jpg" class="rounded float-right" height="400px" width="300px">
        <img src="images/compressed/6-min.jpg" class="rounded float-right" height="400px" width="300px">
        <img src="images/compressed/7-min.jpg" class="rounded float-right" height="400px" width="300px">
      </div>

      <div class="text-center">
        <img src="images/compressed/8-min.jpg" class="rounded float-left" height="400px" width="300px">
        <img src="images/compressed/9-min.jpg" class="rounded float-right" height="400px" width="300px">
        <img src="images/compressed/10-min.jpg" class="rounded float-right" height="400px" width="300px">
        <img src="images/compressed/11-min.jpg" class="rounded float-right" height="400px" width="300px">
        <img src="images/compressed/12-min.jpg" class="rounded float-right" height="400px" width="300px">
        <img src="images/compressed/13-min.jpg" class="rounded float-right" height="400px" width="300px">
        <img src="images/compressed/14-min.jpg" class="rounded float-right" height="400px" width="300px">
      </div>
    </div>
    </div>
  </section>
  <!-- Gallery ends-->
  <!-- Youtube videos  -->
  <!-- Youtube videos end -->
  <!-- Footer -->
  <section class="footer">
    <div class="footer2">
      <div class="share">
        <a href="https://www.facebook.com/" target="_blank" class="fab fa-facebook-f"></a>
        <a href="https://twitter.com/" target="_blank" target="_blank" class="fab fa-twitter"></a>
        <a href="https://www.instagram.com/" target="_blank" class="fab fa-instagram"></a>
        <a href="https://www.linkedin.com/" target="_blank" class="fab fa-linkedin"></a>
      </div>

      <div class="box2" data-aos="fade-up" data-aos-delay="400">
        <h3>Quick links</h3>
        <a href="#navbar1" class="links"> <i class="fas fa-arrow-right"></i> Home </a>
        <a href="#about" class="links"> <i class="fas fa-arrow-right"></i> About </a>
        <a href="#service" class="links"> <i class="fas fa-arrow-right"></i> Services </a>
        <a href="#gallery" class="links"> <i class="fas fa-arrow-right"></i> Gallery </a>
      </div>

      <div class="box2" data-aos="fade-up" data-aos-delay="450">
        <h3>Contact Info</h3>
        <p> <i class="fas fa-map"></i> Pune, India </p>
        <p> <i class="fas fa-phone"></i> +123-456-7890 </p>
        <p> <i class="fas fa-envelope"></i> webdeveloper@gmail.com</p>
      </div>

      <div class="box2" data-aos="fade-up" data-aos-delay="600">
        <h3> Newsletter</h3>
        <p>Subscribe for latest updates</p>
        <form action="">
          <input type="email" name="" placeholder="enter your email" class="email" id="" required>
          <input type="submit" value="Subscribe" class="btn">
        </form>
      </div>
    </div>
    </div>
  </section>
  <div class="foot">
    <h3>All Rights Reserved under | Web Developer.</h3>
  </div>

  <!-- Footer ends -->

  <!-- Bootstrap script link from bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>


<!-- linking font awesome -->
<script src="https://kit.fontawesome.com/c65a85acf5.js" crossorigin="anonymous"></script>
<!-- AOS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>AOS.init();</script>

</html>