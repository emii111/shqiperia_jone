<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta charset="UTF-8" />
    <title> Shqiperia jone</title>
    <link rel="stylesheet" type="text/css" href="css/shqiperiajone.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/aboutus.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/reviews.css">
    <link rel="stylesheet" type="text/css" href="css/slide_oher.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/new.css">
    <link rel="stylesheet" type="text/css" href="css/contact_us.css">
    <link rel="stylesheet" type="text/css" href="css/modali.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>

</head>

<body>
    <!-------------------------------------------------------------------------header---------------------------------------------------------------------------------->
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
    <script>
    const menuToggle = document.getElementById("menuToggle");
    const navList = document.getElementById("nav-list");

    menuToggle.addEventListener("click", () => {
        menuToggle.classList.toggle("active");
        navList.classList.toggle("active");
    });
</script>


    <!-----------------------------------------------------------------------HOME PAGE-------------------------------------------------------------------->
    <div class="heros">
        <h1>Discover Albania</h1>
        <p>Ejani per nje eksperience te paharrueshme.</p>

    </div>


    <!-----------------------------------------------------------------------Slidding Photos-------------------------------------------------------------------->

    <div class="slider">
        <div class="slide-track">

      
            <div class="slide"><img src="foto/destinacioni.jpg"><span>Oher</span></div>
            <div class="slide"><img src="foto/kotori.jpg"><span>Kotor</span></div>
            <div class="slide"><img src="foto/Lago-di-Koman-Albania.jpg"><span>Koman</span></div>
            <div class="slide"><img src="foto/Gjipe-Beach.jpg"><span>Gjipe</span></div>
            <div class="slide"><img src="foto/prizren.webp"><span>Prizren</span></div>
            <div class="slide"><img src="foto/plava.jpg"><span>Plave</span></div>
            <div class="slide"><img src="foto/rugovaaa.jpg"><span>Rugove</span></div>
            <div class="slide"><img src="foto/ulqin.jpg"><span>Ulqin</span></div>

           
            <div class="slide"><img src="foto/destinacioni.jpg"><span>Oher</span></div>
            <div class="slide"><img src="foto/kotori.jpg"><span>Kotor</span></div>
            <div class="slide"><img src="foto/Lago-di-Koman-Albania.jpg"><span>Koman</span></div>
            <div class="slide"><img src="foto/Gjipe-Beach.jpg"><span>Gjipe</span></div>
            <div class="slide"><img src="foto/prizren.webp"><span>Prizren</span></div>
            <div class="slide"><img src="foto/plava.jpg"><span>Plave</span></div>
            <div class="slide"><img src="foto/rugovaaa.jpg"><span>Rugove</span></div>
            <div class="slide"><img src="foto/ulqin.jpg"><span>Ulqin</span></div>

        </div>
    </div>




    <!--------------------------------------------------------------------REKLAMA----------------------------------------------------------------------------------->
    <div class="hero-sections">
        <div class="hero-content">
            <h1>Start Your Albanian Adventure Today</h1>
            <p>
                Don't wait to discover Albania's hidden treasures. Book your dream tour now and create memories that
                will last a lifetime.
            </p>

            <div class="contact-infos">
                <div class="contact-item">
                    <i class="fa fa-phone"></i>
                    <p>Call Us<br><strong>+355 68 234 2345</strong></p>
                </div>
                <div class="contact-item">
                    <i class="fa fa-envelope"></i>
                    <p>Email Us<br><strong>shqiperiajone@gmail.com</strong></p>
                </div>
                <div class="contact-item">
                    <i class="fa fa-comments"></i>
                    <p>Live Chat<br><strong>Available 24/7</strong></p>
                </div>
            </div>
        </div>
    </div>

    <!--------------------------------------------------------------- Destinacioni yne me i ri--------------------------------------------------------------------->
    <div class="fotos">
        <div class="sliders-container">
            <div class="slides">
                <img src="foto/destinacioni.jpg" alt="Ohrid">
                <div class="slide-text">
                    <h2>Destinacioni më i ri</h2>
                    <p>
                        Duke qenë buzë liqenit, Ohri është qytet magjeps, qytet i njohur për plazhet e
                        shumta,
                        për qytetin e vjetër,
                        për
                        kishat e manastiret e vjetra mesjetare, për xhamitë osmane, për kalanë madhështore,
                        për muzetë e
                        shumta,
                        për
                        shtëpitë karakteristike, për kuzhinën e pasur. Një tjetër atraksion interesant është
                        edhe
                        lundrimi apo
                        shëtia
                        turistike nëpër liqen dhe turet për Strugë, Shën Naum e vende tjera. Ohri është
                        gjithashtu i
                        njohur për
                        festivalet kulturore dhe ngjarjet muzikore që tërheqin vizitorë nga e gjithë bota.
                    </p>
                </div>
            </div>
        </div>
    </div>



    <!-------------------------------------------------------------------tours-------------------------------------------------------------------------->
    <div class="popular">
        <div class="hero-content">
            <h1>Most Popular Albanian Tours</h1>
            <p>
                Discover Albania's most breathtaking destinations with our carefully curated tour packages, designed
                to
                create unforgettable memories.
            </p>
        </div>
    </div>

    <!-------------------------------------------------------------------modali------------------------------------------------------------------------->
    <div id="modal" class="modal">
    <div class="modal-content">
        <span id="closeModal" class="close">&times;</span>

        <h2>Book Your Holiday</h2>

        <form action="save_booking.php" method="POST">

            <label for="firstName">First Name *</label>
            <input type="text" id="firstName" name="first_name" required>

            <label for="lastName">Last Name *</label>
            <input type="text" id="lastName" name="last_name" required>

            <label for="email">Email Address *</label>
            <input type="email" id="email" name="email" required>

            <label for="phoneNumber">Phone Number *</label>
            <input type="tel" id="phoneNumber" name="phone" required>

            <label for="preferredDate">Preferred Date *</label>
            <input type="date" id="preferredDate" name="preferred_date" required>

            <label for="numberOfGuests">Number of Guests *</label>
            <input type="number" id="numberOfGuests" name="guests" required>

            <label for="specialRequests">Special Requests</label>
            <textarea id="specialRequests" name="requests"></textarea>

            <div class="actions">
                <button type="submit" class="confirm-btn">Confirm Booking</button>
                <button type="button" id="cancelBtn" class="cancel-btn">Cancel</button>
            </div>
        </form>
    </div>
</div>





    <section class="card-section">
        <div class="card-container">
            <!-- Karta 1 -->
            <article class="card">
                <div class="image-container">
                    <img src="foto/Valbone2.jpg" alt="Albanian Alps">
                    <div class="price-badge">€299</div>
                </div>
                <div class="card-content">
                    <h2>Albanian Alps</h2>
                    <div class="info">
                        <span>🕒 3 days</span>
                        <span>👥 6–12 people</span>
                        <span>📅 Mon & Thu</span>
                    </div>
                    <p class="description">Breathtaking mountain adventure with hiking and traditional hospitality.
                    </p>
                    <div class="tags">
                        <span>📍 Komani Lake</span>
                        <span>📍 Shala River</span>
                        <span>📍 Valbona</span>
                        <span>+1 more</span>
                    </div>
                    <div class="price-section">
                        <div>
                            <span class="current-price">€299</span>
                            <span class="old-price">€349</span>
                            <p class="per-person">per person</p>
                        </div>
                        <button class="openModal book-btn">Book Now</button>
                    </div>
                </div>
            </article>

            <!-- Karta 2 -->
            <article class="card">
                <div class="image-container">
                    <img src="foto/budva.jpg" alt="Albanian Alps">
                    <div class="price-badge">€189</div>
                </div>
                <div class="card-content">
                    <h2>Montenegro</h2>
                    <div class="info">
                        <span>🕒 2 days</span>
                        <span>👥 5-10 people</span>
                        <span>📅 Mon & Fri</span>
                    </div>
                    <p class="description"> Historic coastal town located on the Adriatic Sea in Montenegro.</p>
                    <div class="tags">
                        <span>📍 ShkoderLake</span>
                        <span>📍 Budva City</span>
                        <span>📍 Guci</span>
                        <span>+1 more</span>
                    </div>
                    <div class="price-section">
                        <div>
                            <span class="current-price">€189</span>
                            <span class="old-price">€249</span>
                            <p class="per-person">per person</p>
                        </div>
                        <button class="openModal book-btn">Book Now</button>
                    </div>
                </div>
            </article>

            <!-- Karta 3 -->
            <article class="card">
                <div class="image-container">
                    <img src="foto/rugovenew.jpg" alt="Albanian Alps">
                    <div class="price-badge">€499</div>
                </div>
                <div class="card-content">
                    <h2>Rugova Nature</h2>
                    <div class="info">
                        <span>🕒 5 days</span>
                        <span>👥 5-10 people</span>
                        <span>📅 Mon & Fri</span>
                    </div>
                    <p class="description"> Rugova with it's raw natural beauty, peaceful isolation, and authentic
                        mountain culture.</p>
                    <div class="tags">
                        <span>📍 Bjeshket e namuna</span>
                        <span>📍 Peja City</span>
                        <span>📍 Rugova's Valley</span>
                        <span>📍 Lumbardhi River</span>
                    </div>
                    <div class="price-section">
                        <div>
                            <span class="current-price">€499</span>
                            <span class="old-price">€649</span>
                            <p class="per-person">per person</p>
                        </div>
                        <button class="openModal book-btn">Book Now</button>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <!--========================== rrjeshti i dyte==================================== -->

    <section class="card-section">
        <div class="card-container">
            <!-- Karta 1 -->
            <article class="card">
                <div class="image-container">
                    <img src="foto/thethi.jpg" alt="Albanian Alps">
                    <div class="price-badge">€325</div>
                </div>
                <div class="card-content">
                    <h2>Theth Alps Experience</h2>
                    <div class="info">
                        <span>🕒 3 days</span>
                        <span>👥 5–10 people</span>
                        <span>📅 Mon & Fri</span>
                    </div>
                    <p class="description">Breathtaking mountain adventure with hiking and traditional hospitality.
                    </p>
                    <div class="tags">
                        <span>📍 Gruna Waterfall</span>
                        <span>📍 Shala River</span>
                        <span>📍 Blue Eye</span>
                        <span>+1 more</span>
                    </div>
                    <div class="price-section">
                        <div>
                            <span class="current-price">€325</span>
                            <span class="old-price">€450</span>
                            <p class="per-person">per person</p>
                        </div>
                        <button class="openModal book-btn">Book Now</button>
                    </div>
                </div>
            </article>

            <!-- Karta 2 -->
            <article class="card">
                <div class="image-container">
                    <img src="foto/Gjipe-Beach.jpg" alt="Albanian Alps">
                    <div class="price-badge">€129</div>
                </div>
                <div class="card-content">
                    <h2>South Beach Time</h2>
                    <div class="info">
                        <span>🕒 2 days</span>
                        <span>👥 5–10 people</span>
                        <span>📅 Mer</span>
                    </div>
                    <p class="description"> Gjipe, crescent-shaped bay of fine golden sand and small pebbles.</p>
                    <div class="tags">
                        <span>📍 Gjipe Canyon</span>
                        <span>📍 Gjipe Seashore</span>
                        <span>📍 Saranda</span>
                        <span>+1 more</span>
                    </div>
                    <div class="price-section">
                        <div>
                            <span class="current-price">€129</span>
                            <span class="old-price">€249</span>
                            <p class="per-person">per person</p>
                        </div>
                        <button class="openModal book-btn">Book Now</button>
                    </div>
                </div>
            </article>

            <!-- Karta 3 -->
            <article class="card">
                <div class="image-container">
                    <img src="foto/peje.jpg" alt="Albanian Alps">
                    <div class="price-badge">€149</div>
                </div>
                <div class="card-content">
                    <h2>Ne Carshine e vjeter.</h2>
                    <div class="info">
                        <span>🕒 1 day</span>
                        <span>👥 10-15 people</span>
                        <span>📅 Mer</span>
                    </div>
                    <p class="description">A city that blends of Ottoman charm, medieval heritage, and stunning
                        mountain
                        scenery.</p>
                    <div class="tags">
                        <span>📍 Patriarkana e Pejës</span>
                        <span>📍 Çarshia e Vjetër</span>
                        <span>📍 Old Bazaar</span>
                        <span>+1 more</span>
                    </div>
                    <div class="price-section">
                        <div>
                            <span class="current-price">€149</span>
                            <span class="old-price">€199</span>
                            <p class="per-person">per person</p>
                        </div>
                        <button class="openModal book-btn">Book Now</button>
                    </div>
                </div>
            </article>
        </div>
    </section>


    <!-- Butoni "View All Tours" -->
    <div class="view-all-containers">
        <a href="new.php" class="view-all-btn">View All Tours</a>
    </div>

    <!---------------------------------------------------------------review----------------------------------------------------------------------------->
    <div class="reviews">
        <h2>What Our Travelers Say</h2>
        <p>Real stories from real travelers who trusted us with their dream journeys</p>
    </div>
    <div class="contenedor">

        <div class="testimonials__grid">
            <div class="carta">
                <span><i class="ri-double-quotes-l"></i></span>
                <p>
                    Ishte nje fundjave shume e kendshme vetem fale Shqiperia Jone.</p>
                <hr />
                <!-- Star rating -->
                <div class="stars">
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                </div>
                <img src="foto/review.jpg" alt="user" />
                <p class="name">Ami L.</p>
            </div>
            <div class="carta">
                <span><i class="ri-double-quotes-l"></i></span>
                <p>
                    The trip was amazing everything was perfect,the staff the journey the weather and
                    everything.
                </p>
                <hr />
                <!-- Star rating -->
                <div class="stars">
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                </div>
                <img src="foto/review2.jpg" alt="user" />
                <p class="name">Sarah W.</p>
            </div>
            <div class="carta">
                <span><i class="ri-double-quotes-l"></i></span>
                <p>
                    El viaje fue increíble, todo fue perfecto, el personal, el viaje, el clima y todo.
                </p>
                <hr />
                <!-- Star rating -->
                <div class="stars">
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-half-line"></i>
                </div>
                <img src="foto/review3.jpg" alt="user" />
                <p class="name">Rosaria P.</p>
            </div>
        </div>
    </div>

    <!------------------------------------------------------------------REKLAMA------------------------------------------------------------------------------->
    <div class="containe">
        <h1>Your Trusted <span>Travel Partner</span></h1>
        <p class="subtitle">With years of experience and thousands of happy travelers, we're committed to making
            your
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
    <!----------------------------------------------------------------------About us--------------------------------------------------------------------->
    <div>
        <div id="about"></div>
        <div class="section">
            <div class="container">
                <div class="content-section">
                    <div class="title">
                        <h2>About Us</h2>
                    </div>
                    <div class="content">
                        <h3> Aktiviteti i Shqiperia Jonë ka nisur që në vitin 1992.</h3>

                        <p>transportin për herë të parë nga qyteti i Tiranes, vizionin dhe dëshirën për të
                            ofruar dhe
                            mundësuar një udhetim jo vetëm të rehatshëm por dhe me çmime të përballueshme.
                            Mbas 20
                            vitesh, ne vitin
                            2012 krijohet agjensia e mirëfilltë turistike...
                        </p>
                        <div class="button">
                            <a href="aboutus.php" class="read">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="image-section">
                    <img src="foto/about_us.jpg">
                </div>
            </div>
        </div>
    </div>

    <!------------------------------------------------------------------- FOOTER---------------------------------------------------------------------------->
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
        document.addEventListener("DOMContentLoaded", () => {
            const modal = document.getElementById("modal");
            const openButtons = document.querySelectorAll(".openModal");
            const closeBtn = document.getElementById("closeModal");
            const cancelBtn = document.getElementById("cancelBtn");

            // Hapja për të gjithë butonat
            openButtons.forEach(button => {
                button.addEventListener("click", () => {
                    modal.style.display = "flex";
                });
            });

            // Mbyllje me X
            closeBtn.addEventListener("click", () => {
                modal.style.display = "none";
            });

            // Mbyllje me Cancel
            cancelBtn.addEventListener("click", () => {
                modal.style.display = "none";
            });

            // Klik jashtë modalit
            window.addEventListener("click", (e) => {
                if (e.target === modal) {
                    modal.style.display = "none";
                }
            });
        });

    </script>

</body>

</html>