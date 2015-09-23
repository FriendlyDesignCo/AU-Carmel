<?php 
  if (!isset($currentPage)) {
    $currentPage = 'default';
  }
?>
<!-- BEGIN AU BAR -->
    <div class="au-bar">
      <a class="au-bar__logo">
        <img src="img/logo-au-cas-white-384x42.png" alt="American University College of Arts &amp; Sciences" />
      </a>

      <div class="au-bar__search">
        <input placeholder="Search AU" />
        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
      </div>
    </div> <!-- .au-bar -->
    <!-- END AU BAR -->


    <!-- BEGIN SITE HEADER -->
    <div class="site-header  container page-header">
      <span class="site-header__logo">
        <span class="border-1"></span>
        <span class="border-2"></span>
        <span class="gradient"></span>
        <a href="http://dev.friendlydesign.co/au-carmel/" title="Carmel Institute Home">
          <img class="hidden-xs" src="img/logo-carmel-full-gray-462x228.png" alt="The Carmel Institute of Russian Culture &amp; History" />
          <img class="visible-xs" src="img/logo-carmel-compressed-gray-376x42.png" alt="The Carmel Institute of Russian Culture &amp; History" />
        </a>
      </span>
      
      <nav class="site-header__nav">
        <ul class="nav navbar-nav">
          <a class="fill"></a>
          <a class="handle"></a>
          <div class="group">
            <li<?php if ($currentPage === 'events') { echo ' class="current"'; } ?>><a href="events.php">Events</a></li>
            <li<?php if ($currentPage === 'study-abroad') { echo ' class="current"'; } ?>><a href="study-abroad.php">Study Abroad</a></li>
            <li<?php if ($currentPage === 'associated-courses') { echo ' class="current"'; } ?>><a href="associated-courses.php">Associated Courses</a></li>
          </div>
          <div class="group">
            <li<?php if ($currentPage === 'faculty-and-staff') { echo ' class="current"'; } ?>><a href="faculty-and-staff.php">Faculty &amp; Staff</a></li>
            <li<?php if ($currentPage === 'advisory-committee') { echo ' class="current"'; } ?>><a href="advisory-committee.php">Advisory Committee</a></li>
            <li<?php if ($currentPage === 'news') { echo ' class="current"'; } ?>><a href="news.php">News</a></li>
          </div>
        </ul>
      </nav>
    </div> <!-- .site-header -->
    <!-- END SITE HEADER -->