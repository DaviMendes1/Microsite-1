<?php include('includes/header.php'); ?>

<div class="container">
    <h2>Support</h2>
    <p>If you have any questions or need assistance, please feel free to reach out to us through the following methods:</p>
    <p><strong>Phone:</strong> 1-800-555-1234</p>
    <p><strong>Email:</strong> support@fordmodelt.com</p>
    <h3>Contact Us</h3>
    <form action="php/contact.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="5" required></textarea>
        
        <button type="submit">Send</button>
    </form>
</div>

<?php include('includes/footer.php'); ?>
