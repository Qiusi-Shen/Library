<?php
include_once('lib/vars.php');
echo(getTop('Contact - Slide Demo'));
?>
<h1>About the Library</h1>
<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="5000">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="images/001-books.jpg" alt="books">
        <div class="carousel-caption">
          <h3>Books</h3>
          <p>Large collection of art works and history records from East Asian area.</p>
        </div>
      </div>

      <div class="item">
        <img src="images/002-readers.jpg" alt="Raders">
        <div class="carousel-caption">
          <h3>Readers</h3>
          <p>We help a large group of readers with their research and study. </p>
        </div>
      </div>

      <div class="item">
        <img src="images/003-staff.jpg" alt="Staff">
        <div class="carousel-caption">
          <h3>Staff</h3>
          <p>An enthusiastic staff team maintains the library resources. </p>
        </div>
      </div>

      <div class="item">
        <img src="images/004-building.jpg" alt="Building">
        <div class="carousel-caption">
          <h3>Building</h3>
          <p>The Charles E. Young Research Library, looking from Outside, </p>
        </div>
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<p align="center"><img src="images/eal_main112.jpg" width="450" height="112" border="0" alt=""></p>
<p><strong>The Charles E. Young Research Library</strong> provides research-level
collections and services in the humanities, social sciences, education, public affairs, government information, and maps, primarily designed to support
graduate students and faculty.</p>


<p>
<strong>The Richard C. Rudolph East Asian Library</strong> was established in 1948
to support UCLA's teaching and research programs in East Asian studies.
The library selects, organizes, and makes available Chinese-, Japanese-,
and Korean-language materials, and its staff provides reference and
instruction services to optimize access to and use of the collections.</p>
<br>
<br>
<br>
<br>
<p align="center"><img src="images/library-img.jpg" width="700" border="0" alt=""></p>
<br>
<p><h4>21617 Charles E. Young Research Library, Los Angeles, CA 90095-1575
 (310) 825-4836</h4></p>

<?php
echo($bottom);
?>