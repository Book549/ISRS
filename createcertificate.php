<?php
// Set the content type header to indicate an image
header("Content-Type: image/png");

// Load the background image
$background = imagecreatefrompng('pic\certificate.png');

  
if (!$background) { /* See if it failed */
    $background  = imagecreatetruecolor(180, 30); /* Create a blank image */
    $bgc = imagecolorallocate($background, 255, 255, 255);
    $tc  = imagecolorallocate($background, 0, 0, 0);
    imagefilledrectangle($background, 0, 0, 180, 30, $bgc);
    /* Output an errmsg */
    imagestring($background, 1, 5, 5, "Failed to load background image...", $tc);
}else{

    // Allocate a color for text (optional, if you want to add text)
    $text_color = imagecolorallocate($background, 255, 255, 255); // White color
    // Add text to the image
    imagestring($background, 5, 50, 50, "Your Certificate", $text_color);
}

// Output the image
imagepng($background);

// Free memory
imagedestroy($background);
?>
