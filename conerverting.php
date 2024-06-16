<?php

// Function to resize image with transparency support
function resizeImage($filename, $newWidth, $newHeight) {
    $image = imagecreatefrompng($filename); // Load the PNG image
    $width = imagesx($image); // Get the original width of the image
    $height = imagesy($image); // Get the original height of the image

    // Create a new true color image with transparency support
    $newImage = imagecreatetruecolor($newWidth, $newHeight);
    imagesavealpha($newImage, true); // Save full alpha channel information

    // Fill the new image with transparent color
    $transparent = imagecolorallocatealpha($newImage, 0, 0, 0, 127);
    imagefill($newImage, 0, 0, $transparent);

    // Resize the original image onto the new image preserving transparency
    imagecopyresampled($newImage, $image, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

    return $newImage;
}

// Function to convert image to ICO format
function imageToIco($image, $filename) {
    // Convert the PNG image to ICO format
    return imagepng($image, $filename);
}

// Resize and convert image to favicon.ico
$image32x32 = resizeImage('asset/images/favicon/fav.png', 32, 32);
imageToIco($image32x32, 'asset/images/favicon/favicon-32x32.ico');

$image192x192 = resizeImage('asset/images/favicon/fav.png', 192, 192);
imageToIco($image192x192, 'asset/images/favicon/favicon-192x192.ico');

// Free up memory
imagedestroy($image32x32);
imagedestroy($image192x192);

echo "Favicon generated successfully!";
?>
