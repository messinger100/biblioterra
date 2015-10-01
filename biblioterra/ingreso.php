<!DOCTYPE html>
<html lang="en-US">
   <head>
   <meta name="description" content="Taller de HTML5" />
   <meta name="keywords" content="HTML5" />
   <meta charset="UTF-8" />
      <title>Mi Cuenta - Biblioterra</title>
      <link rel="shortcut icon" type="image/x-icon" href="images/biblioterra.ico">
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/responsee.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
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
               <!-- CONTENT -->
               <section id="slider1">                 
      		<?php
         	    include('assets/login.php');
         	?>   
               </section>
         </div>
      </div>
      <!-- FOOTER -->
      <?php
      	    include 'assets/footer.php';
	?>
   </body>
</html>