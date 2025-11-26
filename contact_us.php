<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us</title>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/contact_us.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body>

  <!-- ===== HEADER ===== -->

 <header>
    
        <a href="Shqiperiajone.php" class="logoja">Shqiperia jone</a>

        <nav>
            <ul id="nav-list">
                <li><a href="new.php">Tours</a></li>
                <li><a href="aboutus.php">About</a></li>
                <li><a href="contact_us.php">Contact</a></li>
            </ul>
        </nav>
         <div class="user-icon">
    <a href="sign_in.php">
        <i class="fa-solid fa-user"></i>
    </a>
        <div class="menu-toggle" id="menuToggle">
            <span></span>
            <span></span>
            <span></span>
        </div>

    </header>
    <!------------------------------------------------------------------------------Modal --------------------------------------------------------------------------------->
    <script>
    const menuToggle = document.getElementById("menuToggle");
    const navList = document.getElementById("nav-list");

    menuToggle.addEventListener("click", () => {
        menuToggle.classList.toggle("active");
        navList.classList.toggle("active");
    });
</script>


  <section class="contact-header">
    <h4>Get in Touch</h4>
    <h1>Contact <span>Our Team</span></h1>
    <p>Ready to start your Albanian adventure? Our travel experts are here to help you plan the perfect journey. Get in
      touch with us today and let's make your travel dreams come true.</p>
  </section>

  <!-- ===== CONTACT INFO CARDS ===== -->
  <section class="contact-info">
    <div class="info-card">
      <i class="ri-phone-line"></i>
      <h3>Call Us</h3>
      <p>+355 68 234 2345</p>
    </div>

    <div class="info-card">
      <i class="ri-mail-line"></i>
      <h3>Email Us</h3>
      <p>shqiperiajone@gmail.com</p>
    </div>

    <div class="info-card">
      <i class="ri-map-pin-line"></i>
      <h3>Visit Us</h3>
      <p>Tirana, Albania</p>
    </div>

    <div class="info-card">
      <i class="ri-time-line"></i>
      <h3>Open Hours</h3>
      <p>24/7 Support</p>
    </div>
  </section>

  <!-- ===== MAP SECTION ===== -->
  <section class="map-section">
    <div class="map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1224706399937!2d19.81957961539707!3d41.32754527926968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x135031028b6b2a67%3A0xe7a6b18c62bb8f0d!2sThe%20Plaza%20Tirana!5e0!3m2!1sen!2s!4v1731523149000!5m2!1sen!2s"></iframe>
    </div>

    <div class="office-details">
      <div class="detail-card">
        <h4><i class="ri-map-pin-2-line"></i> Office Address</h4>
        <p><strong>Shqiperia Jone</strong><br>Rruga Ibrahim Rugova, Tirana 1001, Albania<br>Near Skanderbeg Square</p>
      </div>

      <div class="detail-card">
        <h4><i class="ri-time-line"></i> Office Hours</h4>
        <p>Monday - Friday: 9:00 AM - 6:00 PM<br>
          Saturday: 10:00 AM - 4:00 PM<br>
          Sunday: Closed<br>
          <em>Emergency support available 24/7</em>
        </p>
      </div>
    </div>
  </section>
  <!----==--====================================================================FOOTER=================================================------>
  <footer class="footer">
    <div class="Container">
      <div class="row">
        <div class="footer-col">
          <h4>Our Company</h4>
          <ul>
            <li><a href="#">Our History</a></li>
            <li><a href="#">Our Tours</a></li>
            <li><a href="#">Our Work</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>About Us</h4>
          <ul>
            <li><a href="#">New</a></li>
            <li><a href="#">Tours</a></li>
            <li><a href="#">Clients</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Contact Us</h4>
          <ul>
            <li><a href="#">email</a></li>
            <li><a href="#">+355 66 234 2345</a></li>
            <li><a href="#">our socials</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Follow Us</h4>
          <div class="social-links">
            <a href=""><i class="fa fa-facebook-f"></i> </a>
            <a href=""><i class="fa fa-instagram"></i> </a>
            <a href=""><i class="fa fa-youtube"></i> </a>
          </div>
        </div>
      </div>
    </div>
    <div>
      <br>
      <br>
      <br>



    </div>
    <div class="footerBottom">
      <p>&copy; 2025 Shqiperia Jone. Te gjitha te drejtat te rezervuara.</p>
    </div>
  </footer>
</body>

</html>