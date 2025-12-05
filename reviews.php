 <!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Reviews</title>

    <!-- Ikonat e yjeve  -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
<?php include "review_form.php"; ?>

    <style>
        .reviews-section {
            width: 100%;
            max-width: 600px;
            margin: auto;
            padding: 20px;
        }

        .stars i {
            font-size: 30px;
            color: #ccc;
            cursor: pointer;
            transition: 0.2s;
        }

        .stars i.active {
            color: gold;
        }

        .review-form input,
        .review-form textarea {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border-radius: 8px;
            border: 1px solid #aaa;
        }

        .review-form button {
            background: #cc0512;
            color: white;
            border: none;
            padding: 12px 20px;
            margin-top: 10px;
            cursor: pointer;
            border-radius: 8px;
        }

        .review-form button:hover {
            background: #a00010;
        }
    </style>
</head>

<body>

    <div class="reviews-section">

        <h2>Customer Reviews</h2>

        <!-- These will be printed from database -->
        <div id="reviews-list"></div>

        <h3>Write a Review</h3>

        <form action="save_review.php" method="POST" class="review-form">

            <!-- Produkti / turi i lidhur -->
            <input type="hidden" name="tour_id" value="1000">

            <!-- Emri i klientit -->
            <input type="text" name="name" placeholder="Your Name" required>

            <label>Rating:</label>

            <!-- Yjet -->
            <div class="stars">
                <i class="ri-star-fill" data-value="1"></i>
                <i class="ri-star-fill" data-value="2"></i>
                <i class="ri-star-fill" data-value="3"></i>
                <i class="ri-star-fill" data-value="4"></i>
                <i class="ri-star-fill" data-value="5"></i>
            </div>

            <!-- Vlera e yjeve që dërgohet te PHP -->
            <input type="hidden" name="rating" id="reviewRating" required>

            <!-- Komenti -->
            <textarea name="comment" placeholder="Your comment" required></textarea>

            <!-- Butoni i dërgimit -->
            <button type="submit">Submit Review</button>

        </form>
    </div>

    <script>
        const stars = document.querySelectorAll('.stars i');
        const ratingInput = document.getElementById('reviewRating');

        stars.forEach(star => {
            star.addEventListener('click', function () {
                const value = this.getAttribute('data-value');
                ratingInput.value = value;

                stars.forEach(s => s.classList.remove('active'));
                for (let i = 0; i < value; i++) {
                    stars[i].classList.add('active');
                }
            });
        });
    </script>

</body>

</html>
