<?php include 'includes/header.php'; ?>
<div class="container">
    <h2>The Ford Model T</h2>
    <p>The Ford Model T, also known as the "Tin Lizzie," is one of the most famous cars in automotive history. Introduced in 1908, it was the first car to be mass-produced on a moving assembly line, making it affordable for the average American. The Model T revolutionized transportation and had a profound impact on society and industry.</p>
    
    <!-- Image Carousel -->
    <div class="carousel">
        <div class="carousel-images">
            <img src="images/model-t1.jpg" alt="Ford Model T" class="visible">
            <img src="images/model-t2.jpg" alt="Ford Model T">
            <img src="images/model-t3.jpg" alt="Ford Model T">
            <!-- Add more images as needed -->
        </div>
        <button class="carousel-button prev">❮</button>
        <button class="carousel-button next">❯</button>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let currentIndex = 0;
            const images = document.querySelectorAll('.carousel-images img');
            const totalImages = images.length;

            document.querySelector('.prev').addEventListener('click', () => {
                images[currentIndex].classList.remove('visible');
                currentIndex = (currentIndex === 0) ? totalImages - 1 : currentIndex - 1;
                images[currentIndex].classList.add('visible');
            });

            document.querySelector('.next').addEventListener('click', () => {
                images[currentIndex].classList.remove('visible');
                currentIndex = (currentIndex === totalImages - 1) ? 0 : currentIndex + 1;
                images[currentIndex].classList.add('visible');
            });

            // Initialize the first image
            images[currentIndex].classList.add('visible');
        });
    </script>
</div>
<?php include 'includes/footer.php'; ?>
