<?php include './includes/head.php';?>
<?php include './includes/navbar.php';?>
    <div class="container">
        <div class="main-content">
            <h2 class="section-title">Get in Touch</h2>
            <form action="" method="POST" class="contact-form">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" id="name" class="form-input" required>
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" id="email" class="form-input" required>
                <label for="message" class="form-label">Message:</label>
                <textarea name="message" id="message" class="form-textarea" required></textarea>
                <button type="submit" class="form-button">Submit</button>
            </form>
<?php include './includes/sidebar.php';?>
<?php include './includes/footer.php';?>