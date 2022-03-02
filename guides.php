<?php
 require "php/Parsedown.php";
?>
<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/main.dwt" codeOutsideHTMLIsLocked="false" -->
  <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- InstanceBeginEditable name="doctitle" -->
  <title>Yaya's World - Guides</title>
  <!-- InstanceEndEditable -->
  <!-- Bootstrap -->
  <link href="/~yayoi/css/yayoi.css" rel="stylesheet">
  <!-- InstanceBeginEditable name="head" -->
  <!-- InstanceEndEditable -->
  <!-- InstanceParam name="Jumbotron" type="boolean" value="false" -->
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-yayoi bg-yayoi">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"> <a class="nav-link" href="/~yayoi/">Home</a> </li>
          <li class="nav-item"> <a class="nav-link" href="/~yayoi/adventures/">Adventures</a> </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Guides</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/~yayoi/guides/builds">Builds</a> <a class="dropdown-item" href="/~yayoi/guides/luckyhouse">Lucky House</a> <a class="dropdown-item" href="/~yayoi/guides/enhancement">Enhancement</a>
              <div class="dropdown-divider"></div>
              <h6 class="dropdown-header">Leveling Guides</h6> 
              <a class="dropdown-item" href="/~yayoi/guides/lvling/babies">Levels 1-40</a>
              <a class="dropdown-item" href="/~yayoi/guides/lvling/newblets">Levels 41-80</a>
              <a class="dropdown-item" href="/~yayoi/guides/lvling/fledgling">Levels 81-120</a>
              <a class="dropdown-item" href="/~yayoi/guides/lvling/adventurer">Levels 121-135</a>
            </div>
          </li>
          <li class="nav-item"> <a class="nav-link" href="//forums.onigirionegai.info/viewforum.php?f=3">Forum</a> </li>
        </ul><form action="//forums.onigirionegai.info/search.php" method="get" class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" name="keywords" placeholder="Search the forums" aria-label="Search">
          <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav></header>
    <section><!-- InstanceBeginEditable name="Body" -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 mb-4">
        <?php
$parse=new Parsedown();

if (!empty($_SERVER['PATH_INFO']))
{
  $md=file_get_contents('guides'.$_SERVER['PATH_INFO'].'.md');
}
else
{
  $uri = rtrim( dirname($_SERVER["SCRIPT_NAME"]), '/' );
  $uri = '/' . trim( str_replace( $uri, '', $_SERVER['REQUEST_URI'] ), '/' );
  $uri = ltrim(urldecode( $uri ),'/').".md";

  $md=file_get_contents($uri);
}

if (!empty($md))
{
  print $parse->text($md);
}
else
{ ?>
          <h1>Guides</h1>
          <p>Welcome to my guides to Fiesta Online. I mostly just wrote these for me and my friends, but hopefully you find them useful 😅. I'm going to be trying to update them as I learn and discover new things about the game from playing it myself or from friends, particularly the <a href="./builds">build guide</a>. So, check back, and if you have any suggetions let me know. I hope to have an e-mail up soon 😜</p>
          <ol>
            <li><a href="./builds">Builds</a></li>
            <li><a href="./luckyhouse">Lucky House</a></li>
            <li><a href="./enhancement">Enhacement</a></li>
            <li>Leveling Guides <ol type="a">
                <li><a href="./lvling/babies">Babies (levels 1-40)</a></li>
                <li><a href="./lvling/newblets">Newblets (41-80)</a></li>
                <li><a href="./lvling/fledgling">Fledgling Adventurers (81-120)</a></li>
                <li><a href="./lvling/adventurer">Bone-fide Adventurers (121-135)</a></li>
              </ol></li>
          </ol>
<?php }
        ?>
        </div>
      </div>
    </div>
    <!-- InstanceEndEditable --></section>
    <footer class="text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p>Copyright © Yayoi. All rights reserved.</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="/~yayoi/js/jquery-3.4.1.min.js"></script> 
    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="/~yayoi/js/popper.min.js"></script> 
    <script src="/~yayoi/js/bootstrap-4.4.1.js"></script>
    <!-- InstanceBeginEditable name="Scripts" -->
  <script language="javascript" type="application/javascript">
  jQuery('a[href^="https://"],a[href^="http://"]').not("a[href*='"+ window.location.host +"']").attr('target','blank');
  </script>
    <!-- InstanceEndEditable -->
  </body>
<!-- InstanceEnd --></html>