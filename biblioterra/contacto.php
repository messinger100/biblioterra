<!DOCTYPE html>
<html lang="en-US">
   <head>
   <meta name="description" content="Taller de HTML5" />
   <meta name="keywords" content="HTML5" />
   <meta charset="UTF-8" />
      <title>Biblioterra</title>
      <link rel="shortcut icon" type="image/x-icon" href="images/biblioterra.ico">
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/responsee.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
      <script type="text/javascript" src="js/modernizr.js"></script>
      <script type="text/javascript" src="js/responsee.js"></script>
      <!--[if lt IE 9]>
	      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
      <![endif]-->
   </head>
   <body class="size-1140">
      <!-- HEADER -->
      	<?php
      	    include 'assets/header.php';
	?>
      <!-- ASIDE NAV AND CONTENT -->
      <div class="line">
         <div class="box">
            <div class="margin">
               <!-- CONTENT -->
               <section id="slider1" class="s-12 m-9 l-9 right">                 
      		<?php
         	    include 'assets/contacto.php';
         	?>   
               </section>

               <!-- ASIDE NAV -->
               <aside class="s-12 m-4 l-3">
                  <h3>Categorías</h3>
                  <div class="aside-nav">
                     <ul>
                        <li><a>Literatura Contemporánea</a></li>
                        <li><a>Literatura Clásica</a></li>
                        <li><a>Poesía</a></li>
                     </ul>
                  </div>
               </aside>
            </div>
         </div>
      </div>
      <!-- FOOTER -->
      <?php
      	    include 'assets/footer.php';
	?>
   </body>
</html>