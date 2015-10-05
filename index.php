<?php
  // Variable setup for this page.
  // If and when this template is transferred to a CMS,
  // these variables should hopefully be replaced by
  // something CMS-driven.

  $currentPage = 'home';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <?php include('includes/head.php'); ?>

    <title>Home – The Carmel Institute of Russian Culture &amp; History</title>
    
  </head>
  <body class="<?php echo $currentPage; ?>">
    
    <?php include('includes/site-header.php'); ?>

    <!-- BEGIN HOMEPAGE JUMBOTRON -->
    <div class="jumbotron">

      <div id="homepageCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">

        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
          <li data-target="#homepageCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#homepageCarousel" data-slide-to="1"></li>
          <li data-target="#homepageCarousel" data-slide-to="2"></li>
        </ol>   

        <!-- Carousel items -->
        <div class="carousel-inner" role="listbox">

          <div class="item active" style="background-image: url(img/homepage-placeholder-1300x650.jpg);">
            <div class="container">
              <h1>Russian Culture in our nation’s capital</h1>
              <p>
                The Carmel Institute of Russian Culture and History at American University promotes greater understanding of Russian culture's versatility and richness among all Consortium students in the Washington area.
                <br />
                <a class="btn btn-primary">Learn More About Us</a>
              </p>
            </div>
          </div>

          <div class="item" style="background-image: url(img/homepage-placeholder-1300x650.jpg);">
            <div class="container">
              <h1>Second example slide lorem ipsum dolor</h1>
              <p>
                The Carmel Institute of Russian Culture and History at American University promotes greater understanding of Russian culture's versatility and richness among all Consortium students in the Washington area.
                <br />
                <a class="btn btn-primary">Learn More About Us</a>
              </p>
            </div>
          </div>

          <div class="item" style="background-image: url(img/homepage-placeholder-1300x650.jpg);">
            <div class="container">
              <h1>Third example slide lorem ipsum dolor</h1>
              <p>
                The Carmel Institute of Russian Culture and History at American University promotes greater understanding of Russian culture's versatility and richness among all Consortium students in the Washington area.
                <br />
                <a class="btn btn-primary">Learn More About Us</a>
              </p>
            </div>
          </div>

        </div> <!-- .carousel-inner -->
      </div> <!-- .carousel -->

    </div>
    <!-- END HOMEPAGE JUMBOTRON -->


    <!-- BEGIN HOMEPAGE CALLOUT ITEMS -->
    <div class="callout-list callout-list--image">
      <div class="container">

        <div class="hr"><div class="flourish"></div></div>

        <div class="row">
          <div class="callout-list__column  col-xs-12 col-sm-4">
            <span class="callout-list__title">Upcoming Event</span>
            <div class="callout-list__image">
              <a href="#">
                <img src="http://placehold.it/350x233" alt="alt-text" />
              </a>
            </div>
            <div class="callout-list__caption">
              <h3>
                <a href="#">Title of item lorem ipsum dolor sit amet</a>
              </h3>
              <span class="callout-list__date">July 3, 2015</span>
              <p class="callout-list__description">Description of item. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu enim vel felis scelerisque imperdiet.</p>
              <p><a href="#" class="btn btn-primary" role="button">Call to action</a></p>
            </div>
          </div>

          <div class="callout-list__column  col-xs-12 col-sm-4">
            <span class="callout-list__title">Study Abroad</span>
            <div class="callout-list__image">
              <a href="#">
                <img src="http://placehold.it/350x233" alt="alt-text" />
              </a>
            </div>
            <div class="callout-list__caption">
              <h3>
                <a href="#">Title of item lorem ipsum dolor sit amet</a>
              </h3>
              <span class="callout-list__date">July 3, 2015</span>
              <p class="callout-list__description">Description of item. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu enim vel felis scelerisque imperdiet.</p>
              <p><a href="#" class="btn btn-primary" role="button">Call to action</a></p>
            </div>
          </div>

          <div class="callout-list__column  col-xs-12 col-sm-4">
            <span class="callout-list__title">About the Institute</span>
            <div class="callout-list__image">
              <a href="#">
                <img src="http://placehold.it/350x233" alt="alt-text" />
              </a>
            </div>
            <div class="callout-list__caption">
              <h3>
                <a href="#">Title of item lorem ipsum dolor sit amet</a>
              </h3>
              <span class="callout-list__date">July 3, 2015</span>
              <p class="callout-list__description">Description of item. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu enim vel felis scelerisque imperdiet.</p>
              <p><a href="#" class="btn btn-primary" role="button">Call to action</a></p>
            </div>
          </div>
        </div> <!-- .row -->

      </div> <!-- .container -->
    </div> <!-- .callouts -->
    <!-- END HOMEPAGE CALLOUT ITEMS -->


    <!-- BEGIN HOMEPAGE TEXT LIST -->
    <div class="callout-list callout-list__text">
      <div class="container">

        <div class="hr"><div class="flourish"></div></div>

        <div class="row">
          <div class="callout-list__column  col-xs-12 col-sm-4">
            <span class="callout-list__title">Recent News</span>
            <div class="callout-list__caption">
              <h3>
                <a href="#">Title of item lorem ipsum dolor sit amet</a>
              </h3>
              <span class="callout-list__date">July 3, 2015</span>
              <p class="callout-list__description">Description of item. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu enim vel felis scelerisque imperdiet... <a href="#">read more.</a></p>
            </div>
            <div class="callout-list__caption">
              <h3>
                <a href="#">Title of item lorem ipsum dolor sit amet</a>
              </h3>
              <span class="callout-list__date">July 3, 2015</span>
              <p class="callout-list__description">Description of item. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu enim vel felis scelerisque imperdiet... <a href="#">read more.</a></p>
            </div>
          </div>

          <div class="callout-list__column  col-xs-12 col-sm-4">
            <span class="callout-list__title">Study Abroad Opportunities</span>
            <div class="callout-list__caption">
              <h3>
                <a href="#">Title of item lorem ipsum dolor sit amet</a>
              </h3>
              <span class="callout-list__date">July 3, 2015</span>
              <p class="callout-list__description">Description of item. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu enim vel felis scelerisque imperdiet... <a href="#">read more.</a></p>
            </div>
            <div class="callout-list__caption">
              <h3>
                <a href="#">Title of item lorem ipsum dolor sit amet</a>
              </h3>
              <span class="callout-list__date">July 3, 2015</span>
              <p class="callout-list__description">Description of item. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu enim vel felis scelerisque imperdiet... <a href="#">read more.</a></p>
            </div>
          </div>

          <div class="callout-list__column  col-xs-12 col-sm-4">
            <span class="callout-list__title">Event Partners</span>
            <div class="callout-list__logo  col-xs-6">
              <a href="#">
                <img src="http://placehold.it/100x100" alt="name" />
              </a>
            </div>
            <div class="callout-list__logo  col-xs-6">
              <a href="#">
                <img src="http://placehold.it/100x100" alt="name" />
              </a>
            </div>
            <div class="callout-list__logo  col-xs-6">
              <a href="#">
                <img src="http://placehold.it/100x100" alt="name" />
              </a>
            </div>
            <div class="callout-list__logo  col-xs-6">
              <a href="#">
                <img src="http://placehold.it/100x100" alt="name" />
              </a>
            </div>
            <div class="callout-list__logo  col-xs-6">
              <a href="#">
                <img src="http://placehold.it/100x100" alt="name" />
              </a>
            </div>
            <div class="callout-list__logo  col-xs-6">
              <a href="#">
                <img src="http://placehold.it/100x100" alt="name" />
              </a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .text-list -->
    <!-- END HOMEPAGE TEXT LIST -->   

    <?php include('includes/site-footer.php'); ?>

  </body>
</html>