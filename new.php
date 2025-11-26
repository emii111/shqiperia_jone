<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Albanian Travel Explorer</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/modali.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/new.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">


    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>


</head>
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

<!------------------------------------------------------------------------------Modal --------------------------------------------------------------------------------->
<div id="modal" class="modal">
    <div class="modal-content">
        <span id="closeModal" class="close">&times;</span>

        <h2>Book Your Holiday</h2>
        <form>
            <label for="firstName">First Name *</label>
            <input type="text" id="firstName" required>

            <label for="lastName">Last Name *</label>
            <input type="text" id="lastName" required>

            <label for="email">Email Address *</label>
            <input type="email" id="email" required>

            <label for="phoneNumber">Phone Number *</label>
            <input type="tel" id="phoneNumber" required>

            <label for="preferredDate">Preferred Date *</label>
            <input type="date" id="preferredDate" required>

            <label for="numberOfGuests">Number of Guests *</label>
            <input type="number" id="numberOfGuests" required>

            <label for="specialRequests">Special Requests</label>
            <textarea id="specialRequests"></textarea>

            <div class="actions">
                <button type="submit" class="confirm-btn">Confirm Booking</button>
                <button type="button" id="cancelBtn" class="cancel-btn">Cancel</button>
            </div>
        </form>
    </div>
</div>





<body>



    <!--=================================================================== Hero Section ===============================================-->

    <!-- Hero Section -->
    <section class="hero">
        <span class="discover">Discover Albania</span>
        <h2><span class="highlight">Amazing</span> Tours</h2>
        <p>Explore Albania's breathtaking landscapes, from pristine beaches to majestic mountains, with our carefully
            curated tour packages.</p>
    </section>

    <!-- ====================================================================Tours========================================================== -->

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
                    <p class="description">Breathtaking mountain adventure with hiking and traditional hospitality.</p>
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
                    <p class="description">Breathtaking mountain adventure with hiking and traditional hospitality.</p>
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
                    <p class="description">A city that blends of Ottoman charm, medieval heritage, and stunning mountain
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


    <!--========================== rrjeshti i trete==================================== -->

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
                    <p class="description">Breathtaking mountain adventure with hiking and traditional hospitality.</p>
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

    <!--========================== rrjeshti i katert==================================== -->

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
                    <p class="description">Breathtaking mountain adventure with hiking and traditional hospitality.</p>
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
                    <p class="description">A city that blends of Ottoman charm, medieval heritage, and stunning mountain
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


    <!--========================== rrjeshti i peste==================================== -->

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
                    <p class="description">Breathtaking mountain adventure with hiking and traditional hospitality.</p>
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

    <!--========================== rrjeshti i 6==================================== -->

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
                    <p class="description">Breathtaking mountain adventure with hiking and traditional hospitality.</p>
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
                    <p class="description">A city that blends of Ottoman charm, medieval heritage, and stunning mountain
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

    <!-----------------------------------------------------FOOTER--------------------------------------- -->
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