<?php
// This should be the name of the service
$service_name = 'Adventure Quests'; // Replace with the actual service name
$service_price = ' $1,800 per person';
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
                <img src="adventure_quests.jpeg" alt="<?php echo htmlspecialchars($service_name); ?>" class="service-image">
                <p class="service-description">
                Join our Adventure Quests for the ultimate challenge. Trek through jungles, climb towering peaks, or kayak through rapids. These journeys are designed to test your limits and invigorate your spirit.
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