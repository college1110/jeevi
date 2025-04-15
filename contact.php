<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Dog Selling Shop</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.html" style="font-size:30px;">Home</a></li>
                <li><a href="product.html" style="font-size:30px;">Products</a></li>
                <li><a href="about.html" style="font-size:30px;">About Us</a></li>
                <li><a href="contact.php" style="font-size:30px;">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="contact">
        <h2>Contact Us</h2>
        <form action="contact.php" method="POST">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Your Message:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit" name="submit">Submit</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $message = htmlspecialchars($_POST['message']);

            // You can add email sending or database storage here

            echo "<p>Thank you for reaching out, <strong>$name</strong>! We will get back to you soon.</p>";
        }
        ?>
    </section>

    <footer>
        <p>&copy; 2025 Dog Selling Shop</p>
    </footer>

    <script src="assets/js/script.js"></script>
</body>
</html>
