<?php
  // Variable setup for this page.
  // If and when this template is transferred to a CMS,
  // these variables should hopefully be replaced by
  // something CMS-driven.

  $currentPage = 'news';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <?php include('includes/head.php'); ?>

    <title>News – The Carmel Institute of Russian Culture &amp; History</title>

  </head>
  <body class="<?php echo $currentPage; ?>">
    
    <?php include('includes/site-header.php'); ?>

    <!-- BEGIN PAGE TITLE -->
    <header class="page-title">
      <div class="container">
        <h1>News</h1>
      </div>
    </header>
    <!-- END PAGE TITLE -->

    <!-- BEGIN CONTENT AREA -->
    <div class="content-area  container">
      <div class="row">
        <div class="content-area__column  col-xs-12 col-sm-8">

          <article class="content-area__item content-area__item--news">
            <div class="content-area__thumbnail">
              <img src="img/news-images/2015-04-11-thumbnail-141x94.jpg" alt="Inaugural Event for Carmel Institute of Russian Culture and History" width="141" height="94" />
            </div>
            <div class="content-area__description">
              <header>
                <h3>
                  <a href="#">Inaugural Event for Carmel Institute of Russian Culture and History</a>
                </h3>
                <span class="content-area__date">July 3, 2015</span>
              </header>
              <p>Saturday was a big day for cultural diplomacy at AU, as hundreds of people gathered at the Katzen Arts Center for the official kick-off event of the Carmel Institute of Russian Culture and History (CIRCH).</p>
              <p>he day began with a symposium, The Strength of Cooperation: Lessons from the Grand Alliance, 1941–1945. Panelists included Frank Costigliola, professor of history at the University of Connecticut; Iskander Magadeev from the Moscow State Institute of International Relations <a href="#">...read more.</a></p>
            </div>
          </article>

          <article class="content-area__item content-area__item--news">
            <div class="content-area__thumbnail">
              <img src="img/news-images/2015-04-11-thumbnail-141x94.jpg" alt="Inaugural Event for Carmel Institute of Russian Culture and History" width="141" height="94" />
            </div>
            <div class="content-area__description">
              <header>
                <h3>
                  <a href="#">Inaugural Event for Carmel Institute of Russian Culture and History</a>
                </h3>
                <span class="content-area__date">July 3, 2015</span>
              </header>
              <p>Saturday was a big day for cultural diplomacy at AU, as hundreds of people gathered at the Katzen Arts Center for the official kick-off event of the Carmel Institute of Russian Culture and History (CIRCH).</p>
              <p>he day began with a symposium, The Strength of Cooperation: Lessons from the Grand Alliance, 1941–1945. Panelists included Frank Costigliola, professor of history at the University of Connecticut; Iskander Magadeev from the Moscow State Institute of International Relations <a href="#">...read more.</a></p>
            </div>
          </article>

        </div>

        <div class="feed content-area__column  col-xs-12 col-sm-4">
          <h3 class="feed__title">
            <span>Events Calendar</span>
          </h3>
          <ul class="feed__list">
            <li class="feed__item">
              <h4>
                <a href="#">CIRCH 2016 Symposium</a>
              </h4>
              <p class="feed__item__description">
                Saturday, April 16
              </p>
            </li>
          </ul>
          
          <h3 class="feed__title">
            <span>Mariinsky Theatre</span>
          </h3>
          <ul class="feed__list">
            <li class="feed__item">
              <p class="feed__item__description">
                A cultural exhibit based on materials from the United States' Library of Congress, entitled Russian Influences on Music and Dance in America, was previewed for the first time at the Mariinsky Theatre in St. Petersburg, Russia.
              </p>
              <a class="btn btn-primary" href="#"><span>Learn More</span></a>
            </li>
          </ul>

          <h3 class="feed__title">
            <span>Memorial Library</span>
          </h3>
          <ul class="feed__list">
            <li class="feed__item">
              <p class="feed__item__description">
                A generous donation from the Carmel Institute of Russian Culture and History at American University funds the Richard Stites Memorial Library at the St. Petersburg Campus of the Higher School of Economics.
              </p>
              <a class="btn btn-primary" href="#"><span>Learn More</span></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- END CONTENT AREA -->


    <?php include('includes/site-footer.php'); ?>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>