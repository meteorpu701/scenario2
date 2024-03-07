<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NHS Contacts Page</title>
    <link rel="stylesheet" href="something.css">    
</head>
<body>
    <div class="header">
        <img src="nhslogo.jpeg" alt="NHS Logo" class="nhs-logo" >
        <a href="#">Chat bot</a>
        <a href="why helpful.php">Why is this helpful?</a>
        <a href="contact.php">Contact us</a>
        <a href="login.php">Login</a>

    </div>

    <div class="container content">
        <h2>Contact Informations</h2>
        <?php
            echo "Here you would retrieve and display the NHS contact information.";
        ?>
    </div>

    <footer>
        <div class="container">
            <!-- Footer content -->
            <p>&copy; 2024 NHS. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>