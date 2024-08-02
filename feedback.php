<?php include 'includes/header.php'; ?>
        <h2>Rate or add comments or feedback about the product</h2>
        <form action="php/feedback.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="feedback">Feedback:</label>
            <textarea id="feedback" name="feedback" rows="4" required></textarea>
            <button type="submit">Submit</button>
        </form>
<?php include 'includes/footer.php'; ?>
