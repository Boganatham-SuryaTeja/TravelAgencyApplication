<?php
// This should be the name of the service
$service_name = 'World Explorer Tours'; // Replace with the actual service name
$service_price = ' $7,000 per person';
// Include the tracking function and track the visit
include('track_service_visit.php');
track_service_visit($service_name);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($service_name); ?></title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <h1><?php echo htmlspecialchars($service_name); ?></h1>
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

    <!-- Your site's navigation -->

    <div class="content-wrapper">
        <main class="service-container">
            <div class="service-container">
                <h1 class="service-heading"><?php echo htmlspecialchars($service_name); ?></h1>
                <img src="world_explorer_tours.jpeg" alt="<?php echo htmlspecialchars($service_name); ?>" class="service-image">
                <p class="service-description">
                Become a global traveler with our World Explorer Tours. Journey to multiple countries, experience diverse cultures, and see the wonders of the world on a single, all-encompassing voyage.
                </p>
                <div class="service-price">
                    <h3>Price:<?php echo htmlspecialchars($service_price); ?></h3>
                </div>
            </div>
        </main>
    </div>

    <!-- Your site's footer -->
</body>

</html>