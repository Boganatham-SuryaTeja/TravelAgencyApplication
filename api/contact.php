<!DOCTYPE html>
<html>
<head>
    <title>Contact Us - Our Website</title>
    <link rel="stylesheet" type="text/css" href="styles.css"> <!-- Create a CSS file for styling -->
</head>
<body>
    <header>
        <h1>Contact Us</h1>
    </header>
    
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="contact.php">Contact</a></li>
			<li><a href="secure.php">Secure</a></li>
        </ul>
    </nav>

    <section class="contact-form">
        <h2>Contact Wonderlust Adventures</h2>
        <p>
            Have a question or need assistance? Feel free to contact us.
        </p>
        <?php
        // $cur_dir = realpath('/api/contacts.txt'); 
        // echo "<p>$cur_dir</p>";
        // $exsists = file_exists('/api/contacts.txt');
        // echo "<p>$exsists</p>";
        // $contactFile1 = file_get_contents(__DIR__ . '/../api/contacts.txt');
        // echo "<p>$contactFile1</p>";
        if (file_exists(__DIR__ . '/../api/contacts.txt')) {
            $lines = file(__DIR__ . '/../api/contacts.txt');
            
            foreach ($lines as $line) {
                $info = explode(': ', $line);
                $label = $info[0];
                $value = $info[1];
                echo "<p><strong>$label:</strong> $value</p>";
            }
        } else {
            echo "<p>Contact information not available.</p>";
        }
        ?>
    </section>

    <footer>
        &copy; 2023 Wonderlust Adventures. All rights reserved.
    </footer>
</body>
</html>
