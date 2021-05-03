<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Peter Kline Portfolio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="main.css">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Discover</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Service</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sign Up</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="mid">
      <video autoplay muted loop>
        <source class="embed-responsive" src="assets/mid.mp4" type="video/mp4">
      </video>
      <div class="hero text-center">
        <h2 class="text-light display-4 font-weight-bolder">EFA Student and Aspiring Software Developer</h2>
        <h3 class="text-light mx-auto">Moving Forward, Constantly Learning.</h3>
      </div>
    </div>
  </header>

  <section class="aboutme container-fluid py-5 px-auto">
    <div class="row align-items-center container my-5 mx-auto">
      <div class="img col-lg-6 col-md-6 col-12 w-50 pt-5 pb-5">
        <img class="img-fluid" src="assets/computer-image.jpg">
      </div>
      <div class="text col-lg-6 col-md-6 col-12 w-50 pt-5 pb-5">
        <h2>My Story</h2>
        <p>Growing up, I was always interested in computers.
          After going to college for Statistical and Data Sciences, I realized
          that Eleven Fifty Academy was the right move for me. After only four weeks
          I can already tell that their Software Development Bootcamp will set
          me on the road to success in my future career.
        </p>
      </div>
    </div>
  </section>

  <div class="spacing pt-5 pb-5"></div>

  <section class="aboutme container-fluid py-5 px-auto">
    <div class="row align-items-center container my-5 mx-auto">
      <div class="text col-lg-6 col-md-6 col-12 w-50 pt-5 pb-5">
        <h2>My Life</h2>
        <p>Born and raised in Evansville, Indiana, I was a relatively normal kid growing up. I attended the University of Evansville
          for my undergrad before decided to take a leave of absence when they got rid of my major. Other than going to school and
          learning, I love to go climbing, both outdoors and indoors, and go mountaineering out West.
        </p>
      </div>
      <div class="img col-lg-6 col-md-6 col-12 w-50 pt-5 pb-5">
        <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
              <img src="assets/aboutmecarousel1.jpg" class="d-block w-100" alt="University of Evansville">
            </div>
            <div class="carousel-item" data-bs-interval="5000">
              <img src="assets/aboutmecarousel2.jpg" class="d-block w-100" alt="Climbing">
            </div>
            <div class="carousel-item" data-bs-interval="5000">
              <img src="assets/aboutmecarousel3.jpg" class="d-block w-100" alt="Mountaineering">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="spacing pt-5 pb-5"></div>

  <section class="projects py-5">
    <div class="header text-center pb-5 pt-5 container-fluid">
      <h2 class="text-light">EFA Projects</h2>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade w-75 mx-auto justify-content-center"
      data-bs-ride="carousel">
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
          <a href="https://peterkline1150.github.io/StaticStoreFront/" target="blank"><img
              src="assets/Peter'sOutdoorGearStore.JPG" class="d-block w-100" alt="Static StoreFront"></a>
          <a href="https://peterkline1150.github.io/StaticStoreFront/" target="blank">
            <div class="carousel-caption d-none d-md-block">
              <h5>Static StoreFront</h5>
              <p>Within the first week of our EFA course, we were tasked with creating a static storefront page.</p>
            </div>
          </a>
        </div>
        <div class="carousel-item">
          <a href="https://codepen.io/peterkline1150/pen/oNYayzY" target="blank"><img src="assets/CSSCreature.JPG"
              class="d-block w-100" alt="CSS Creature"></a>
          <a href="https://codepen.io/peterkline1150/pen/oNYayzY" target="blank">
            <div class="carousel-caption d-none d-md-block">
              <h5>CSS Creature</h5>
              <p>Also within the first week, we created a "creature" purely from CSS.</p>
            </div>
          </a>
        </div>
        <div class="carousel-item">
          <a href="https://github.com/peterkline1150/PeterAndJeremyAdventureGame" target="blank"><img
              src="assets/AdventureGame.JPG" class="d-block w-100" alt="Console Game"></a>
          <a href="https://github.com/peterkline1150/PeterAndJeremyAdventureGame" target="blank">
            <div class="carousel-caption d-none d-md-block">
              <h5>Console Game</h5>
              <p>My friend, Jeremy Grimmer, and I created a console adventure game.
                You must kill monsters, find keys, kill a boss, and work your way to the exit.
              </p>
            </div>
          </a>
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

  <div class="spacing pt-5 pb-5"></div>

  <section class="get_in_touch">
    <form action="form-to-email.php" method="post" name="myemailform">
    <h1 class="title">Get in Touch with Me</h1>
    <div class="container">
      <div class="contact-form row">
        <div class="form-field col-lg-6">
          <input id="name" class="input-text" type="text" name="name">
          <label for="name" class="label">Name</label>
        </div>
        <div class="form-field col-lg-6">
          <input id="email" class="input-text" type="email" name="email">
          <label for="email" class="label">Email</label>
        </div>
        <div class="form-field col-lg-12">
          <input id="subject" class="input-text" type="text" name="subject">
          <label for="subject" class="label">Subject</label>
        </div>
        <div class="form-field col-lg-12">
          <input id="message" class="input-text" type="text" name="message">
          <label for="message" class="label">Message</label>
        </div>
        <div class="form-field col-lg-12">
          <input class="submit-btn" type="submit" value="submit" name="submit">
        </div>
      </div>
    </div>
    </form>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
    integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
    integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
    crossorigin="anonymous"></script>
</body>

</html>