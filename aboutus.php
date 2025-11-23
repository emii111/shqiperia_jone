<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <meta charset="UTF-8" />
  <title> Shqiperia jone</title>
  <link rel="stylesheet" type="text/css" href="css/shqiperiajone.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <link rel="stylesheet" type="text/css" href="css/aboutus.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

</head>
<!-----------------------------------Nav---------------------------------------->
<header>
    
        <a href="Shqiperiajone.php">Shqiperia jone</a>

        <nav>
            <ul id="nav-list">
                <li><a href="new.php">Tours</a></li>
                <li><a href="#about">About</a></li>
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


<body>


  <!-----------------------------------------About us------------------------------------>
  
    <div id="about">
    <div class="section">
      <div class="container">
        <div class="content-section">
          <div class="title">
            <h2>About Us</h2>
          </div>
          <div class="content">
            <h3> Aktiviteti i Shqiperia Jonë ka nisur që në vitin 1992.</h3>

            <p>transportin për herë të parë nga qyteti i Tiranes, vizionin dhe dëshirën për të ofruar dhe
              mundësuar një udhetim jo vetëm të rehatshëm por dhe me çmime të përballueshme. Mbas 20 vitesh, ne vitin
              2012 krijohet agjensia e mirëfilltë turistike. Në vitin 2016, përveç udhëtimeve tokësore, agjensia
              jonë i mundësoi miqve tanë udhëtarë, mundësinë e udhëtimeve të organizuara me avion dhe paketat
              individuale, të menduara dhe ideuara për kerkesat e klientëve tanë. Në vitin 2021, agjensia jonë e bëri më
              të lehtë “shfletimin” e katalogut të produkteve që ofrojmë, pasi gjithë informacionet e nevojshme, u
              publikuan online dhe zyrtarisht filluam shërbimin si “Tour Online Operator”.</p>
            </p>

          </div>
        </div>
        <div class="image-section">
          <img src="foto/about_us.jpg">
        </div>
      </div>
    </div>
  </div>
  <div>





  <!------------------------------------------------------------------REKLAMA------------------------------------------------------------------------------->
  <div class="containe">
    <h2>Your Trusted <span>Travel Partner</span></h2>
    <p class="subtitle">With years of experience and thousands of happy travelers, we're committed to making your
      Albanian adventure extraordinary.</p>

    <div class="gridss">
      <div class="cardss">
        <div class="iconss">🛡️</div>
        <h3>Safe & Secure</h3>
        <p>Licensed guides and insured tours for your peace of mind.</p>
      </div>

      <div class="cardss">
        <div class="iconss">👨‍🏫</div>
        <h3>Local Experts</h3>
        <p>Native Albanian guides with deep local knowledge.</p>
      </div>

      <div class="cardss">
        <div class="iconss">🏆</div>
        <h3>Award Winning</h3>
        <p>Recognized as Albania's top travel agency.</p>
      </div>

      <div class="cardss">
        <div class="iconss">⏰</div>
        <h3>24/7 Support</h3>
        <p>Round-the-clock assistance during your journey.</p>
      </div>

      <div class="cardss">
        <div class="iconss">🎯</div>
        <h3>Personalized</h3>
        <p>Customized experiences tailored to your preferences.</p>
      </div>

      <div class="cardss">
        <div class="iconss">📍</div>
        <h3>Hidden Gems</h3>
        <p>Access to secret spots only locals know about.</p>
      </div>
    </div>
  </div>

  <!---------------------------------------FOOTER---------------------------------------------->
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
            <li><a href="#">email: shqiperiajone@gmail.com</a></li>
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
     <br>
     <br>
     <br>

    <div class="footerBottom">
      <p>&copy; 2025 Shqiperia Jone. Te gjitha te drejtat te rezervuara.</p>
    </div>
  </footer>
</body>

</html>