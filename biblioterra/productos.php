<!DOCTYPE html>
<html lang="en-US">
   <head>
   <meta name="description" content="Taller de HTML5" />
   <meta name="keywords" content="HTML5" />
   <meta charset="UTF-8" />
      <title>Productos - Biblioterra</title>
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
            <div class="margin">
               <!-- CONTENT -->
               <section class="s-12 m-8 l-9 right">
                  <h1>Nuestros Libros</h1>
                  <div class="margin">
                     <div class="s-12 m-6 l-4">
                        <img src="images/books/canto.jpg">
                        <p class="margin-bottom">Nombre: / Precio:</p>
                        <form class="customform s-12" action="">
                           <div class="margin-bottom"><button type="submit">Agregar al Carrito</button></div>
                        </form>
                     </div>
                     <div class="s-12 m-6 l-4">
                        <img src="images/books/turco_espanyol.jpg">
                        <p class="margin-bottom">Nombre: / Precio:</p>
                        <form class="customform s-12" action="">
                           <div class="margin-bottom"><button type="submit">Agregar al Carrito</button></div>
                        </form>
                     </div>
                     <div class="s-12 m-6 l-4">
                        <img src="images/books/canto.jpg">
                        <p class="margin-bottom">Nombre: / Precio:</p>
                        <form class="customform s-12" action="">
                           <div class="margin-bottom"><button type="submit">Agregar al Carrito</button></div>
                        </form>
                     </div>
                     <div class="s-12 m-6 l-4">
                        <img src="images/books/turco_espanyol.jpg">
                        <p class="margin-bottom">Nombre: / Precio:</p>
                        <form class="customform s-12" action="">
                           <div class="margin-bottom"><button type="submit">Agregar al Carrito</button></div>
                        </form>
                     </div>
                     <div class="s-12 m-6 l-4">
                        <img src="images/books/canto.jpg">
                        <p class="margin-bottom">Nombre: / Precio:</p>
                        <form class="customform s-12" action="">
                           <div class="margin-bottom"><button type="submit">Agregar al Carrito</button></div>
                        </form>
                     </div>
                     <div class="s-12 m-6 l-4">
                        <img src="images/books/turco_espanyol.jpg">
                        <p class="margin-bottom">Nombre: / Precio:</p>
                        <form class="customform s-12" action="">
                           <div class="margin-bottom"><button type="submit">Agregar al Carrito</button></div>
                        </form>
                     </div>
                  </div>
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