<!DOCTYPE html>
<html lang="en">
<head>
 <?php include ('includes/head.php');?>
</head>
<body>
  <!--##### Header #####-->
  <header id="header">
   <?php include ('includes/header.php');?>
  </header><!-- #header -->
  <!--##### Intro Section #####-->
  <section id="intro">
    <?php include ('includes/intro.php');?>
  </section><!-- #intro -->
  <main id="main">
    <!--#### About Us Section ####-->
    <section id="about" class="section-bg">
      <?php include('includes/about.php');?>
    </section><!-- #about -->
    <!--#### ACTIVITIES ###-->
    <section id="features">
     <?php include('includes/activities.php');?> 
    </section><!-- #meetups -->
  <!--##  Crew Leads ##-->
    <section id="team" class="section-bg">
     <?php include ('includes/leads.php');?>
    </section><!-- #leads -->
    <!--####  Gallery Section ###-->
    <section id="gallery">
     <?php include('includes/gallery.php');?>
    </section><!-- #gallery --> 
    <!--### Contact Section ###-->
    <section id="contact">
     <?php include ('includes/contact.php');?>
    </section><!-- #contact -->
  </main>
  <!--### Footer ###-->
  <footer id="footer">
    <?php include ('includes/footer.php');?>
  </footer><!-- #footer -->
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>
  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
</body>
</html>