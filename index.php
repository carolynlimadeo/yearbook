<?php
include 'include/header.php';
include 'include/sidebar.php';
include 'include/db.inc.php';
?>

       <div class="span10">
      <!-- Website Development Alert -->
        <div class="alert fade in">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>This website is in development.</strong> Currently only images from 1980-1984 are available.
        </div>
      <!-- Website Development Alert -->
          <div class="hero-unit">
            <h2><div class="offset1">St. Francis College Yearbooks</div></h2>
            <br>
            <div class="row-fluid">
                  <div class="span3 offset1">
                  <p>Welcome to the St. Francis College Digital Yearbook Archive, where you can browse and search through over 80 years worth of Brooklyn History. Search for specific alumni, find old friends and relatives or even a younger you. Browse by graduating class, clubs, pubs and teams or download entire Yearbooks. </p>
                  </div>
            <div class="span7">
              <div id="myCarousel" class="carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="item active">
                      <img src="assets/img/scroll1.jpg" alt="Science Club, 1980">
                      <div class="carousel-caption">
                        <h4>Clubs, Pubs and Teams</h4>
                        <p>Browse and explore photographs of clubs, publications and teams throughout St. Francis' history from the Cat Haters Club to the Water Polo team.</p>
                      </div>
                    </div>
                    <div class="item">
                      <img src="assets/img/scroll2.jpg" alt="Student Council">
                      <div class="carousel-caption">
                        <h4>Explore Life as a Student in Brooklyn</h4>
                        <p>The St. Francis Yearbooks depict candid moments from life as a student in Brooklyn over the past 80 years.</p>
                      </div>
                    </div>
                    <div class="item">
                      <img src="assets/img/scroll3.jpg" alt="Senior Portraits">
                      <div class="carousel-caption">
                        <h4>Search for Alumni by Name or Browse by Graduating Class</h4>
                        <p>Using the search box on the navigation bar you can search for alumni from over 80 years of St. Francis History, or browse by graduating class or decade utilizing the dropdown menu and side menus.</p>
                      </div>
                    </div>
                  </div>
                  <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                  <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a> 
                </div>
              </div>
            </div>
        </div>
          
         
        </div><!--/span-->
      </div><!--/row-->

<?php
include 'include/footer.php';
?>