<?php

include('track_service_visit.php');
// Initialize an empty array for visited services
$visited_services = array();

// Check if the cookie exists
if (isset($_COOKIE['visited_services'])) {
    // Unserialize the cookie to get the array of visited services
    $visited_services = unserialize($_COOKIE['visited_services']);
}

// HTML and PHP code for the services
?>
<!DOCTYPE html>
<html>

<head>
    <title>Services - Our Website</title>
    <link rel="stylesheet" type="text/css" href="styles.css"> <!-- Create a CSS file for styling -->
</head>

<body>
    <header>
        <h1>Our Services</h1>
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

    <section class="services">
        <!-- Services Links -->
        <h1>Our Services</h1>
        <ul>
            <li><a href="Wildlife Safaris.php">Wildlife Safaris</a></li>
            <li><a href="Historical Heritage Tours.php">Historical Heritage Tours</a></li>
            <li><a href="Luxury Getaways.php">Luxury Getaways</a></li>
            <li><a href="Honeymoon Packages.php">Honeymoon Packages</a></li>
            <li><a href="Cruise and Island Escapes.php">Cruise and Island Escapes</a></li>
            <li><a href="Adventure Travel.php">Adventure Travel</a></li>
            <li><a href="World Explorer Tours.php">World Explorer Tours</a></li>
            <li><a href="City Break Deals.php">City Break Deals</a></li>
            <li><a href="Adventure Quests.php">Adventure Quests</a></li>
            <li><a href="Cultural Immersion Programs.php">Cultural Immersion Programs</a></li>
        </ul>
    </section>

    <!-- Recently Visited Services -->
    <section class="recently-visited-services">
        <h3>Recently Visited Services</h3>
        <?php display_last_visited_services(); ?>
    </section>
    <footer>
        <p>&copy; 2023 Wonderlust Adventures. All rights reserved.</p>
    </footer>
</body>

</html>