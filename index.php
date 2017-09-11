<?php
include_once('lib/vars.php');
echo(getTop('About UCLA Library'));
?>
<h1>About the UCLA Library</h1>
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
  <!-- <table width="200" border="0" cellspacing="2" cellpadding="2">
    <tr>
      <td><img src="images/AboutLL-ManCamera.jpg" width="210"></td>
      <td><img src="images/AboutLL-Dodd.jpg" width="210"></td>
      <td><img src="images/AboutLL-Library-somewhere.jpg" width="210"></td>
      <td><img src="images/AboutLL-RobertGoldberg.jpg" width="210"></td>
    </tr>
  </table> -->
  <h3> Quick Facts</h3>
  <ul>
    <li> 3.5 million in-person visits annually </li>
    <li> Twelve million print and electronic volumes </li>
    <li> Fifteen million+ virtual visitors via the website</li>
    <li> Laptops borrowed more than one hundred thousand times a year</li>
    <li> One of the largest student employers on campus</li>
    <li> Countless hours spent providing free research help and writing assistance to students</li>
  </ul>
  <center>
    <a href="writer-search.php"><img src="images/search.jpg" width="504" height="100" alt="Search" border="0"></a>
  </center>

<?php
echo($bottom);
?>