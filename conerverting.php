<?php


// Define the directory where the JPEG files are located
$directory = "asset/images/grid_collage/";

// Scan the directory for JPEG files
$files = glob($directory . "/*.jpeg");

// Loop through each file
foreach ($files as $file) {
    // Get the basename of the file
    $basename = pathinfo($file, PATHINFO_FILENAME);
    
    // Define the new filename with the .jpg extension
    $newFilename = $directory . "/" . $basename . ".jpg";
    
    // Rename the file
    if (rename($file, $newFilename)) {
        echo "File $file has been renamed to $newFilename. <br>";
    } else {
        echo "Error renaming file $file. <br>";
    }
}


function remove_jpeg_images($folder_path) {
    $files = scandir($folder_path);
    foreach ($files as $file) {
        if (is_file($folder_path . DIRECTORY_SEPARATOR . $file) && (pathinfo($file, PATHINFO_EXTENSION) == 'jpeg' || pathinfo($file, PATHINFO_EXTENSION) == 'JPEG')) {
            try {
                unlink($folder_path . DIRECTORY_SEPARATOR . $file);
                echo "Removed $file\n";
            } catch (Exception $e) {
                echo "Error removing $file: " . $e->getMessage() . "\n";
            }
        }
    }
}

// Specify the directory containing the images
$folder_path = "asset/images/grid_collage/";

// Call the function to remove JPEG images
remove_jpeg_images($folder_path);


// // Define the directory where the image files are located
// $directory = "asset/images/collection_shop/";

// // Scan the directory for image files
// $files = glob($directory . "/*.{jpg,jpeg,png,gif}", GLOB_BRACE);

// // Initialize a counter for sequence numbering
// $counter = 1;

// // Loop through each file
// foreach ($files as $file) {
//     // Get the extension of the file
//     $extension = pathinfo($file, PATHINFO_EXTENSION);
    
//     // Define the new filename with the sequence number and the original extension
//     $newFilename = $directory . "/" . $counter . "." . $extension;
    
//     // Rename the file
//     if (rename($file, $newFilename)) {
//         echo "File $file has been renamed to $newFilename. <br>";
//     } else {
//         echo "Error renaming file $file. <br>";
//     }
    
//     // Increment the counter for the next file
//     $counter++;
// }

?>
