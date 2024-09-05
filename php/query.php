<?php
include('dbcon.php');
$cNameErr = "";
$cDesErr = "";
$cImgErr = "";
$cName = $cDes = $cImg = '';

// Add category
if (isset($_POST['addCategory'])) {
    $cName = $_POST['cName'];
    $cDes = $_POST['cDes'];
    $cImg = $_FILES['cImg']['name'];
    $cImageTmpName = $_FILES['cImg']['tmp_name'];
    $extension = strtolower(pathinfo($cImg, PATHINFO_EXTENSION));
    $destination = "img/".$cImg;

    // Validate required fields
    if (empty($cName)) {
        $cNameErr = "Category name is required";
    }
    else{
        if (!preg_match("/^[a-zA-Z ]*$/",$cName)) {
            $cNameErr = "Enter correct name";
        }
       }
    if (empty($cDes)) {
        $cDesErr = "Description is required";
    }
    if (empty($cImg)) {
        $cImgErr = "Image is required";
    }
    else{

    // Validate file type
    if (!in_array($extension, ['jpg', 'png', 'jpeg'])) {
        $cImgErr = "Invalid image format. Only JPG, PNG, and JPEG are allowed.";
    }
}
    
    // Proceed if there are no errors
    if (empty($cNameErr) && empty($cDesErr) && empty($cImgErr)) {
        // Check if the directory exists
        if (!is_dir('img')) {
            mkdir('img', 0755, true);
        }

        // Move uploaded file
        if (move_uploaded_file($cImageTmpName, $destination)) {
            // Prepare and execute query
            $query = $pdo->prepare("INSERT INTO category (name, des, image) VALUES (:cName, :cDes, :cImage)");
            $query->bindParam(':cName',$cName);
            $query->bindParam(':cDes', $cDes);
            $query->bindParam(':cImage',$cImg);
            $query->execute();

            echo "<script>alert('Category added successfully'); location.assign('index.php');</script>";
        } 
        else {
            $cImgErr = "Failed to upload image.";
        }
    }
}
?>
