<form action="save_review.php" method="POST" class="review-form">

    <input type="hidden" name="tour_id" value="1000">

    <input type="text" name="name" placeholder="Your Name" required>

    <label>Rating:</label>

    <div class="stars">
        <i class="ri-star-fill" data-value="1"></i>
        <i class="ri-star-fill" data-value="2"></i>
        <i class="ri-star-fill" data-value="3"></i>
        <i class="ri-star-fill" data-value="4"></i>
        <i class="ri-star-fill" data-value="5"></i>
    </div>

    <input type="hidden" name="rating" id="reviewRating" required>

    <textarea name="comment" placeholder="Your comment" required></textarea>

    <button type="submit">Submit Review</button>

</form>

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
