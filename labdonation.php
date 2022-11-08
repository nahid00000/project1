<?php
$conn = mysqli_connect("localhost", "root", "", "donation") or die("Connection Failed");
session_start();
?>
<html>
  
  <link rel="stylesheet" href="css/lab1.css">
  <section class="showcase">
    <header>
        <title> FOUNDATION</title>
      <h2 class="logo">Asha Foundation</h2>
      <div class="toggle"></div>
    </header>
    <video src="image/file.mp4" muted loop autoplay></video>
    <div class="overlay"></div>
    <div class="text">
      <h2>SHARING</h2> 
      <h3>IS HAPPINESS</h3>
      <p>A donation is a gift for charity,humanitarian aid or to benefit a cause 
         that is given to a chraity.<br> Charity brings to life again those who are spiritually.
          <br> He has no charity deserves no mercy.</p>
    </p>
<?php
    if (isset($_SESSION["user_email"])) {
    ?>
  <a href= "profile.php" ><?php echo $_SESSION["user_name"] ?></a>
    <br>
    <a href="logout.php">logout</a>
<?php
    } else {
    ?>
     <a href="login.php">login</a><br>
      <a href="signup.php">Sign UP</a>
     <?php
    }
    ?>
    </div>
    <ul class="social">
      <li><a href="https://www.facebook.com/profile.php?id=100080486304811"><img src="https://i.ibb.co/x7P24fL/facebook.png"></a></li>
      <li><a href="https://twitter.com/shaharea_md?t=g_2I8vkpjsvjeaahfbF8WQ&s=08"><img src="https://i.ibb.co/Wnxq2Nq/twitter.png"></a></li>
      <li><a href="//instagram.com//shahareabidda"><img src="https://i.ibb.co/ySwtH4B/instagram.png"></a></li>
    </ul>
  </section>
  <div class="menu">
    <ul>
      <li><a href="labdonation.php">Home</a></li>
      <li><a href="service.php">Service</a></li>
      <li><a href="donation.php">Donation</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="about.php">About</a></li>
    </ul>
    <script>
        const menuToggle = document.querySelector('.toggle');
        const showcase = document.querySelector('.showcase');
        
        menuToggle.addEventListener('click', () => {
          menuToggle.classList.toggle('active');
          showcase.classList.toggle('active');
        })
    </script>
  </div>
  </html>