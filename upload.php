<?php
ob_start();
// Set directory to save the uploaded image
$upload_dir = 'stores/';

// Get the uploaded image file and title from the form
$image = $_FILES['image']['name'];
$name = $_POST['name'];
$price = $_POST['price'];
$author = $_POST['author'];

// Generate a unique file name for the image
$uniq_image = uniqid() . '_' . $image;

// Move the uploaded image file to the upload directory
if(move_uploaded_file($_FILES['image']['tmp_name'], $upload_dir . $uniq_image)) {
    // Set the image information in array
    $data_info = array(
        'image' => $uniq_image,
        'name' => $name,
        'price' => $price,
        'author' => $author
    );
    
    // Read the existing JSON file, if it exists
    if(file_exists('store.json')) {
        $json = file_get_contents('store.json');
        $data = json_decode($json, true);
    } else {
        // Create a new empty array to store the image information
        $data = array();
    }

    // Add the new image information to the array
    $data[] = $data_info;

    // Convert the array to a JSON string
    $json = json_encode($data);

    // Save the JSON string to a file
    file_put_contents('store.json', $json);

    //shoe message data save or not
    echo "Data Saved Successfully";
} else {
    echo "Something Is problem";
}
?>
