<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Indie & other Music</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
    <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/frontpage.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/frontpage2.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/stylish.css">

  </head>
  <body>
    
    <?php

    include 'includes/navbar.html'

    ?>

    <main>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/505image.jpg" style="width: 100%">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
            <div class="container">
              <div class="carousel-caption text-start">
                <h1>Arctic Monkeys</h1>
                <p>British alternative/indie formed in mid-2002 by friends Alex Turner, Matt Helders, and Andy Nicholson.</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/greendayblu.png" style="width: 100%">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
            <div class="container">
              <div class="carousel-caption">
                <h1>Green Day</h1>
                <p>American punk rock band formed in 1987 by lead vocalist and guitarist Billie Joe Armstrong and bassist Mike Dirnt. They have been a trio with drummer Tré Cool.</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/coldplayshow.jpg" style="width: 100%">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
            <div class="container">
              <div class="carousel-caption text-end">
                <h1>Coldplay</h1>
                <p>British Alternative Rock band formed 1996 by vocalist and pianist Chris Martin and guitarist Jonny Buckland in the University College London. After naming it Pectoralz, Guy Berryman joined the group as bassist, changing the group name to Starfish.</p>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img src="images/billiejoe.jpg" class="rounded-circle" width="140" height="140" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>

            <h2 class="fw-normal">Billie Joe</h2>
            <p>He is an American musician who is the lead vocalist, guitarist, and primary songwriter of the rock band Green Day. He is also a guitarist and vocalist for the punk rock band Pinhead Gunpowder, and provides lead vocals for Green Day's side projects Foxboro Hot Tubs, The Network, The Longshot and The Coverups. Armstrong has been considered by critics as one of the greatest punk rock guitarists of all time.</p>
            <p><a class="btn btn-secondary" href="https://en.wikipedia.org/wiki/Billie_Joe_Armstrong">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img src="images/alexturner.jpg" class="rounded-circle" width="140" height="140" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>

            <h2 class="fw-normal">Alex Turner</h2>
            <p>He is an English musician, singer, songwriter, and record producer. He is best known as the frontman and principal songwriter of the rock band Arctic Monkeys, with whom he has released six albums. He has also recorded with his side project the Last Shadow Puppets and as a solo artist.</p>
            <p><a class="btn btn-secondary" href="https://en.wikipedia.org/wiki/Alex_Turner">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img src="images/kurtcobain.jpg" class="rounded-circle" width="140" height="140" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>

            <h2 class="fw-normal">Kurt Cobain</h2>
            <p>He was an American musician, best known as the lead vocalist, guitarist and primary songwriter of the rock band Nirvana. Through his angst-fueled songwriting and anti-establishment persona, Cobain's compositions widened the thematic conventions of mainstream rock. He was heralded as a spokesman of Generation X and is considered one of the most influential musicians in the history of alternative rock.</p>
            <p><a class="btn btn-secondary" href="https://en.wikipedia.org/wiki/Kurt_Cobain">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
            <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
          </div>
          <div class="col-md-5">
            <img src="images/minipernalonga.jpg" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/>

          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading fw-normal lh-1">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img src ="images/kanagawa.jpg" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/>
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
          </div>
          <div class="col-md-5">
            <img src ="images/pinkfloid.jpg" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/></svg>

          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->


      <!-- FOOTER -->
      <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>&copy; 2017–2022 Company, Inc.</p>
      </footer>
    </main>

    <script src="script/bootstrap.bundle.min.js"></script>
      
  </body>
</html>
