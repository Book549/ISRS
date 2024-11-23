<?php
    // Get the request URI
    $uri = $_SERVER['REQUEST_URI'];

    // Split the URI into an array based on '/'
    $segments = explode('/', $uri);

    // Get the first segment (should be 'ISRS')
    $first_segment = $segments[1];

    // Redirect using the absolute path
    header('Location: /' . $first_segment . '/hidden_page.php');
    exit; // Make sure to exit after the header to stop further execution
?>
