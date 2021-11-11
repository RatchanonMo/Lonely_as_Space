<div class="site-mobile-menu site-navbar-target">
  <div class="site-mobile-menu-header">
    <div class="site-mobile-menu-close mt-3">
      <span class="icon-close2 js-menu-toggle" style="text-decoration:none"></span>
    </div>
  </div>
  <div class="site-mobile-menu-body"></div>
</div>
<!-- .site-mobile-menu -->

<div class="site-navbar-wrap ">
  <div class="site-navbar site-navbar-target js-sticky-header">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-2">
          <h1 class="my-0 site-logo" style="line-height: 0.4">
            <a href="index.php">LONELY <br />
              AS SPACE</a>
          </h1>
        </div>
        <div class="col-10">
          <nav class="site-navigation text-right" role="navigation">
            <div class="container">
              <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3">
                <a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a>
              </div>

              <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                <li <?php
                    if ($_SERVER['PHP_SELF'] == '/lasp/index.php') {
                      echo "class='active'";
                    }
                    ?>>
                  <a href="index.php" class="nav-link">Home</a>
                </li>
                <li <?php
                    if ($_SERVER['PHP_SELF'] == '/lasp/project.php') {
                      echo "class='active'";
                    }
                    ?>>
                  <a href="project.php" class="nav-link">Project</a>
                </li>
                <li <?php
                    if ($_SERVER['PHP_SELF'] == '/lasp/discover.php') {
                      echo "class='active'";
                    }
                    ?>>
                  <a href="discover.php" class="nav-link">Discover</a>
                </li>
                <li <?php
                    if ($_SERVER['PHP_SELF'] == '/lasp/information.php') {
                      echo "class='active'";
                    }
                    ?>>
                  <a href="information.php" class="nav-link">Information</a>
                </li>
                <li <?php
                    if ($_SERVER['PHP_SELF'] == '/lasp/map.php') {
                      echo "class='active'";
                    }
                    ?>>
                  <a href="map.php" class="nav-link">Map & DSN</a>
                </li>
                <li <?php
                    if ($_SERVER['PHP_SELF'] == '/lasp/about.php') {
                      echo "class='active'";
                    }
                    ?>>
                  <a href="about.php" class="nav-link">About</a>
                </li>
                <!--li class="has-children">
                    <a href="#" class="nav-link">Pages</a>
                    <ul class="dropdown arrow-top">
                      <li><a href="#" class="nav-link">Team</a></li>
                      <li><a href="#" class="nav-link">Pricing</a></li>
                      <li><a href="#" class="nav-link">FAQ</a></li>
                      <li class="has-children">
                        <a href="#">More Links</a>
                        <ul class="dropdown">
                          <li><a href="#">Menu One</a></li>
                          <li><a href="#">Menu Two</a></li>
                          <li><a href="#">Menu Three</a></li>
                        </ul>
                      </li>
                    </ul>
                  </!--li-->

              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>