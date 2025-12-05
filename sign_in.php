<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
     <link rel="stylesheet" type="text/css" href="css/navbar.css">
     <link rel="stylesheet" type="text/css" href="css/footer.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    <title>Login / Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            background: #fed6e5ff;
            min-height: 100vh;
            display: inline;
            justify-content: center;
            align-items: center;
            padding: 0;
            margin: 0;
            padding-left: 0rem;
        }
        
        .logoja{
         font-size: 25px !important;
         }

        .containerr {
            display: flex;
            gap: 50px;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            max-width: 1360px;
            width: 100%;
            padding-top: 170px;
            padding-bottom: 150px;
        }

        .form-box {
            background: rgba(255, 255, 255, 0.25);
            padding: 40px;
            border-radius: 20px;
            width: 350px;
            backdrop-filter: blur(10px);
            color: white;
            text-align: center;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, opacity 0.3s ease;
        }

        .form-box h2 {
            margin-bottom: 20px;
            font-size: 26px;
        }

        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 8px;
            border: none;
            outline: none;
        }

        button {
            font-family: 'Times New Roman', Times, serif;
            width: 100%;
            padding: 12px;
            margin-top: 15px;
            background: #cc0512;
            border: none;
            border-radius: 20px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #fff;
            color: #cc0512;
            border-radius: #cc0512;
        }

        .link {
            margin-top: 15px;
            color: white;
            cursor: pointer;
            text-decoration: none;
            font-size: 14px;
        }

        #signup-box {
            display: none;
        }

        @media (max-width: 900px) {
            .container {
                flex-direction: column;
                gap: 20px;
            }

            .form-box {
                width: 90%;
                max-width: 400px;
            }
        }

        @media (max-width: 600px) {
            .form-box {
                padding: 25px;
                width: 100%;
            }

            h2 {
                font-size: 22px;
            }

            input,
            button {
                font-size: 15px;
                padding: 10px;
            }
        }

        @media (min-width: 1600px) {
            .form-box {
                transform: scale(1.2);
            }
        }

        @media (min-width: 2200px) {
            .form-box {
                transform: scale(1.4);
            }
        }
    </style>
</head>

<body>
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
   
    
   


    <div class="containerr">

        <!-- LOGIN FORM -->
        <form class="form-box" action="login_process.php" method="POST" id="login-box" onsubmit="return validateLogin()">
            <h2>LOGIN</h2>

            <input type="email" id="login-first" name="email" placeholder="Email" required>
            <input type="password" placeholder="Password" name="password" required>

            <button type="submit">LOGIN</button>

            <div class="link" onclick="showSignup()">
                Don’t have an account? Sign up here
            </div>
        </form>

        <!-- SIGN UP FORM -->
        <form class="form-box" id="signup-box"  onsubmit="return validateSignup()">
            <h2>SIGN UP</h2>

            <input type="text" id="su-first" name="first_name" placeholder="First Name" required>
            <input type="text" id="su-last" name="last_name" placeholder="Last Name" required>
            <input type="email" placeholder="E-mail" required>
            <input type="password" placeholder="Password" required id="su-password">
            <input type="password" placeholder="Confirm Password" required id="su-confirm">

            <button type="submit">CREATE ACCOUNT</button>

            <div class="link" onclick="showLogin()">
                Already have an account? Login here
            </div>
        </form>

    </div>
     <footer class="footer">
        <div class="container">
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
                        <li><a href="#">Phone</a></li>
                        <li><a href="#">Our socials</a></li>
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


     <script>
    const menuToggle = document.getElementById("menuToggle");
    const navList = document.getElementById("nav-list");

    menuToggle.addEventListener("click", () => {
        menuToggle.classList.toggle("active");
        navList.classList.toggle("active");
    });
 </script>

    <script>
        function showSignup() {
            document.getElementById("login-box").style.display = "none";
            document.getElementById("signup-box").style.display = "block";
        }

        function showLogin() {
            document.getElementById("signup-box").style.display = "none";
            document.getElementById("login-box").style.display = "block";
        }

        function validateSignup() {
            let pass = document.getElementById("su-password").value;
            let confirm = document.getElementById("su-confirm").value;

            if (pass !== confirm) {
                alert("Passwords do not match!");
                return false;
            }
            return true;
        }

        function validateLogin() {
            return true;
        }
    </script>
</body>

</html>
