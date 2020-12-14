<?php
    session_start();
    include 'conn.php';
  
    $sql = "SELECT * FROM users";

    $rows = mysqli_query($conn, $sql);
    $i = 0;
    mysqli_close($conn);

    $pageTitle = 'Responsive';
    include 'header.php';
    include 'homeheader.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"> -->
    
    <link rel="stylesheet" href="assets/css/templatemo-breezed.css">
    
<!--   <style>
.responsive {
  width: 100%;
  height: auto;
} -->

</style>
</head>
<body>
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>  
<nav>
  <ul class="menu">
    <li class="item"><a href="index.php">Home</a></li>
    <?php if ($_SESSION) : ?>
      <li class="item"><a href="materi.php">Materi</a></li>
      <li class="item"><a href="profile.php?id=<?php echo $_SESSION['id']?>" >Profile</a>
      <li class="item button"><a href="update.php">Update</a></li>
      <li class="item button"><a href="logout.php">Log Out</a></li>
    <?php else: ?>
      <li class="item button"><a href="login.php">Log In</a></li>
      <li class="item button secondary"><a href="register.php">Sign Up</a></li>
    <?php endif; ?>
      <li class="toggle"><a href="#"><i class="fas fa-bars"></i></a></li>
  </ul>
</nav>
<div class="row no-gutters">
  <div class="col-xl-12 img-cover">
    <img src="images/home-background.jpg" alt="Foto profil" class="cover-img">
      <div class="overlay-black"></div>
        <img class="profile-img img-responsive img img-thumbnail" src="images/profil.jpg" alt="Foto profil">
        <h2>@TriRizki</h2>
  </div>
</div>

<section class="section" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Contact Us</h6>
                            <h2>Feel free to keep in touch with us!</h2>
                        </div>
                        <ul class="contact-info">
                            <li><img src="assets/images/contact-info-01.png" alt="">0851-5662-8350</li>
                            <li><img src="assets/images/contact-info-02.png" alt="">tririzki222@gmail.com</li>
                            <li><img src="assets/images/contact-info-03.png" alt="">www.test.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area Ends ***** -->
<!-- jQuery -->
<script src="assets/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/imgfix.min.js"></script> 
<script src="assets/js/slick.js"></script> 
<script src="assets/js/lightbox.js"></script> 
<script src="assets/js/isotope.js"></script> 

<!-- Global Init -->
<script src="assets/js/custom.js"></script>

<script>

    $(function() {
        var selectedClass = "";
        $("p").click(function(){
        selectedClass = $(this).attr("data-rel");
        $("#portfolio").fadeTo(50, 0.1);
            $("#portfolio div").not("."+selectedClass).fadeOut();
        setTimeout(function() {
          $("."+selectedClass).fadeIn();
          $("#portfolio").fadeTo(50, 1);
        }, 500);
            
        });
    });

</script>
  <!-- <img src="images/third slide.jpeg" class="responsive"> -->
</body>
</html>

<?php 
  include 'footer.php';
  include 'homefooter.php';
?>