<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width">
     <title>spyroYak: web development and other things</title>
     <link rel="stylesheet" href="css/main.css">
    <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">-->

    
</head>
<body onload="run();timer=setInterval('run()',interval);">
     <div id="wrapper">
          <?php include("includes/header.php") ?>
          <nav id="tabs" class="top">
		<ul>
                <li><a id="menuAbout" href="#tabs-1">Time Zones</a>
                <li><a id="menuUnicode" href="#tabs-2">Unicode </a>
		<!--<li><a id="meunAstro" href="#tabs-3">The Solar System</a>-->
                <li><a id="menuJQuery" href="#tabs-4">Notes</a>
                <li><a id="menuAbout" href="#tabs-5">About this Site</a>
		</ul>
         
       
          <article id="tabs-1"><?php include("includes/timezones.php") ?></article>
               
          <article id="tabs-2" style="clear:left"><?php include("includes/unicodeList.php") ?></article>
                   
          <!--<article id="tabs-3"><?php //include('includes/astro.php') ?></article>-->
                 
          <article id="tabs-4" style="clear:left"><?php include("includes/jQuery.php") ?></article>
              
         <article id="tabs-5" ><?php include("includes/about.php") ?></article>
          </nav>
			
         
         <footer>
		<p>last updated 2015 by Daniel Mulvihill</p>
         </footer>
    </div> <!--end wrapper--> 
 <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script>window.jQuery || document.write('<script src="scripts/jquery.min.js"><\/script>')</script>

     
     <!--<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>-->
     <script src="scripts/jquery-ui.min.js"></script>
     
     <script src="scripts/mainSpyroYak.js"></script>
    <script src="astro/explore.js"></script>
    <script>
          $(function() {$( "#tabs" ).tabs();});
     </script>
</body>
</html>