<?php
function getTop($title='UCLA Library')
{
$top = '<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="UTF-8">
    <title>'.$title.'</title>
    <meta name="description" content="UCLA East Asia Library">
    <meta name="author" content="SitePoint">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="images/styles.css" rel="stylesheet" type="text/css">
    <style>
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
        width: 100%;
        height:300px;
        margin: auto;
  }
  </style>
  </head>
<body>
  <div class="header-wrapper">
    <img src="images/logo.JPG" width="172" height="57" alt="Library">
  </div>
  <div style="height:50px; background-color:#D7D9DA;">
    <div style="display:block; width:900px; margin:0 auto; padding:15px;">
    <img src="images/home.JPG" width="30" height="28" align="absmiddle">
    <a href="index.php">UCLA Library Home</a> |
    <a href="writer-search.php">Writer Search</a> |
    <a href="mfz-search.php">MFZ Search</a> |
    <a href="staff.php">Production Staff</a> |
    <a href="contact.php">Contact Us</a>
    </div></div>
  <div class="main-wrapper">
  <div class="content">
  ';
  return $top;
}
$top=getTop();
$bottom='
  </div>
  <div class="footer-wraper">
    <div class="content">
      <h2>UCLA Library</h2>
      <p>The UCLA Library creates a vibrant nexus of ideas, collections, expertise, and spaces in which users illuminate solutions for local and global challenges. We constantly evolve to advance UCLA\'s research, education, and public service mission by empowering and inspiring communities of scholars and learners to discover, access, create, share, and preserve knowledge.</p>
    </div>
  </div>
  <div class="copy">&copy; 2014 - 2017 UCLA </div>
</body>
</html>
';


function chronicleTable($results)
{
    $result_string='';
    $num=0;
    foreach($results as $r)
    {
        if($num%2 == 0) $color ='#F1F1F1'; else $color = '#E4F2FB';
        $result_string .='<table cellspacing="3" cellpadding="3" width="100%">';
        $result_string.='<tr bgcolor="'.$color.'"><td width="30%">Romanization title</td><td>'.$r->Romanization_title.' </td></tr>';
        $result_string.='<tr bgcolor="'.$color.'"><td>Chinese title</td><td>'.$r->Chinese_title.' </td></tr>';
        $result_string.='<tr bgcolor="'.$color.'"><td>Compiler</td><td>'.$r->Compiler.' </td></tr>';
        $result_string.='<tr bgcolor="'.$color.'"><td>Reign</td><td>'.$r->Reign.' </td></tr>';
        $result_string.='<tr bgcolor="'.$color.'"><td>Imprint</td><td>'.$r->Imprint.' </td></tr>';
        $result_string.='<tr bgcolor="'.$color.'"><td>Ming admin</td><td>'.$r->Ming_admin_cn.' '.$r->Ming_admin_en.' </td></tr>';
        $result_string.='<tr bgcolor="'.$color.'"><td>Modern admin</td><td>'.$r->Modern_admin_cn.' '.$r->Modern_admin_en.' </td></tr>';
        $result_string.='<tr bgcolor="'.$color.'"><td>Holding Library</td><td>'.$r->Holding_Library.'  </td></tr>';
        $result_string.='<tr bgcolor="'.$color.'"><td>Reprint/Microfilm</td><td>'.$r->Reprint_Microfilm.'  </td></tr>';
        $result_string.='<tr bgcolor="'.$color.'"><td colspan="2">    <center>------------------------------------------------------</center></td></tr>';
        $result_string.='</table>';
        $num++;
    }
    return $result_string;
}


?>