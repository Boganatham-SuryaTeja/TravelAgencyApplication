<?php
function track_service_visit($service_name) {
    
    if (isset($_COOKIE['visited_services'])) {
    
        $visited_services = unserialize($_COOKIE['visited_services']);
    } else {
    
        $visited_services = [];
    }

    
    if (!in_array($service_name, $visited_services)) {
        array_unshift($visited_services, $service_name); // Add to the beginning of the array
        $visited_services = array_slice($visited_services, 0, 5); // Keep only the last five services
        setcookie('visited_services', serialize($visited_services), time() + (86400 * 30), "/"); // 86400 = 1 day
    }
    else
    {
        unset($visited_services[array_search($service_name, $visited_services)]);
        array_unshift($visited_services, $service_name);   
        $visited_services = array_slice($visited_services, 0, 5);
        setcookie('visited_services', serialize($visited_services), time() + (86400 * 30), "/"); // 86400 = 1 day
    }
}


function display_last_visited_services() {
    if (isset($_COOKIE['visited_services'])) {

        $visited_services = unserialize($_COOKIE['visited_services']);
        echo '<ul>';
        foreach ($visited_services as $service_name) {

            echo '<li><a href="' . $service_name . '.php">' . htmlspecialchars($service_name) . '</a></li>';
        }
        echo '</ul>';
    } else {
        echo '<p>No recently visited services.</p>';
    }
}
?>
