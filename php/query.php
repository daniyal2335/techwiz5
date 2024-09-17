<?php
include('dbcon.php');
$catNameErr = '';
$catDesErr = '';
$catImgErr = '';
$catName = $catDes = $catImg = '';

// Add category
if (isset($_POST['addCategory'])) {
    $catName = $_POST['cName'];
    $catDes = $_POST['cDes'];
    $catImg = $_FILES['cImg']['name'];
    $cImageTmpName = $_FILES['cImg']['tmp_name'];
    $extension = strtolower(pathinfo($catImg, PATHINFO_EXTENSION));
    $destination = "img/".$catImg;

    // Validate required fields
    if (empty($catName)) {
        $catNameErr = "Category name is required";
    }
    else{
        if (!preg_match("/^[a-zA-Z ]*$/",$catName)) {
            $catNameErr = "Enter correct name";
        }
       }
    if (empty($catDes)) {
        $catDesErr = "Description is required";
    }
    if (empty($catImg)) {
        $catImgErr = "Image is required";
    }
    else{

    // Validate file type
    if (!in_array($extension, ['jpg', 'png', 'jpeg'])) {
        $catImgErr = "Invalid image format. Only JPG, PNG, and JPEG are allowed.";
    }
}
    
    // Proceed if there are no errors
    if (empty($catNameErr) && empty($catDesErr) && empty($catImgErr)) {
        // Check if the directory exists
        if (!is_dir('img')) {
            mkdir('img', 0755, true);
        }

        // Move uploaded file
        if (move_uploaded_file($cImageTmpName, $destination)) {
            // Prepare and execute query
            $query = $pdo->prepare("INSERT INTO category (name, des, image) VALUES (:cName, :cDes, :cImage)");
            $query->bindParam(':cName',$catName);
            $query->bindParam(':cDes', $catDes);
            $query->bindParam(':cImage',$catImg);
            $query->execute();

            echo "<script>alert('Category added successfully'); location.assign('index.php');</script>";
        } 
        else {
            $catImgErr = "Failed to upload image.";
        }
    }
}

$cName = $cDes = $cImageName = '';
$destination = '';

// Initialize error variables
$cNameErr = $cDesErr = $cImgErr = '';

// Update category
if (isset($_POST['updateCategory'])) {
    $id = $_GET['cid'];
    $cName = $_POST['cName'];
    $cDes = $_POST['cDes'];

    // Validate Category Name
    if (empty($cName)) {
        $cNameErr = "Category name is required";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $cName)) {
        $cNameErr = "Enter a valid category name (only letters and spaces)";
    }

    // Validate Description
    if (empty($cDes)) {
        $cDesErr = "Category description is required";
    }

    // Validate Image
    if (isset($_FILES['cImg']) && !empty($_FILES['cImg']['name'])) {
        $cImageName = $_FILES['cImg']['name'];
        $cImageTmpName = $_FILES['cImg']['tmp_name'];
        $extension = pathinfo($cImageName, PATHINFO_EXTENSION);
        $destination = "img/" . $cImageName;

        if (!in_array($extension, ['jpg', 'jpeg', 'png'])) {
            $cImgErr = "Invalid image format. Only JPG, JPEG, and PNG are allowed.";
        } else {
            if (!is_dir('img')) {
                mkdir('img', 0755, true);
            }
            move_uploaded_file($cImageTmpName, $destination);
        }
    }

    // Proceed only if there are no validation errors
    if (empty($cNameErr) && empty($cDesErr) && empty($cImgErr)) {
        // Prepare update query
        if (!empty($cImageName)) {
            $query = $pdo->prepare("UPDATE category SET name=:uName, des=:uDes, image=:uImage WHERE id=:cid");
            $query->bindParam('uImage', $cImageName);
        } else {
            $query = $pdo->prepare("UPDATE category SET name=:uName, des=:uDes WHERE id=:cid");
        }
        
        $query->bindParam('cid', $id);
        $query->bindParam('uName', $cName);
        $query->bindParam('uDes', $cDes);

        // Execute the query
        if ($query->execute()) {
            echo "<script>alert('Category updated successfully');
            location.assign('viewCategory.php');</script>";
        } else {
            echo "<script>alert('Failed to update category. Please try again.');</script>";
        }
    }
}


    //delete catgeory
if(isset($_GET['cdid'])){
    $did=$_GET['cdid'];
    $query=$pdo->prepare("delete from category where id=:did");
    $query->bindParam('did',$did);
    $query->execute();
    echo "<script>alert('delete category successfully');
    location.assign('viewCategory.php');
    </script>";

}


// Initialize error variables
$prNameErr = $prDesErr = $pPriceErr = $pQtyErr = $pCidErr = $prBarcodeErr = $prImgErr = '';
$prName = $prDes = $pPrice = $pQty = $pCid = $prBarcode = '';
$prImageName = '';
$destination = '';

// Add product
if (isset($_POST['addProduct'])) {
    // Retrieve form data
    $prName = $_POST['pName'];
    $prDes = $_POST['pDes'];
    $pPrice = $_POST['pPrice'];
    $pQty = $_POST['pQty'];
    $pCid = $_POST['cId'];
    $prBarcode = $_POST['pBar'];
    $prImageName= $_FILES['pImg']['name'];
    $pImageTmpName = $_FILES['pImg']['tmp_name'];
    $extension = strtolower(pathinfo($prImageName, PATHINFO_EXTENSION));
    $destination = "img/" . $prImageName;

    // Validate Product Name
    if (empty($prName)) {
        $prNameErr = "Product name is required";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $prName)) {
        $prNameErr = "Enter a valid product name (only letters and spaces)";
    }

    // Validate Description
    if (empty($prDes)) {
        $prDesErr = "Product description is required";
    }

    // Validate Price
    if (empty($pPrice)) {
        $pPriceErr = "Price is required";
    } elseif (!is_numeric($pPrice) || $pPrice <= 0) {
        $pPriceErr = "Enter a valid price";
    }

    // Validate Quantity
    if (empty($pQty)) {
        $pQtyErr = "Quantity is required";
    } elseif (!is_numeric($pQty) || $pQty < 0) {
        $pQtyErr = "Enter a valid quantity";
    }

    // Validate Category ID
    if (empty($pCid)) {
        $pCidErr = "Category is required";
    }

    // Validate Barcode
    if (empty($prBarcode)) {
        $prBarcodeErr = "Barcode is required";
    }

    // Validate Image
    if (empty($prImageName)) {
        $prImgErr = "Product image is required";
    } elseif (!in_array($extension, ['jpg', 'jpeg', 'png', 'webp'])) {
        $prImgErr = "Invalid image format. Only JPG, PNG, JPEG, and WEBP are allowed.";
    }

    // Proceed if there are no errors
    if (empty($prNameErr) && empty($prDesErr) && empty($pPriceErr) && empty($pQtyErr) && empty($pCidErr) && empty($prBarcodeErr) && empty($prImgErr)) {
        // Check if the 'img' directory exists
        if (!is_dir('img')) {
            mkdir('img', 0755, true);
        }

        // Move the uploaded file
        if (move_uploaded_file($pImageTmpName, $destination)) {
            // Prepare the query
            $query = $pdo->prepare("INSERT INTO products (name, des, price, qty, image, pr_barcode, c_id) 
                                    VALUES (:pName, :pDes, :pPrz, :pQty, :pImage, :pBarcode, :cid)");
            
            // Bind the parameters
            $query->bindParam(':pName', $prName);
            $query->bindParam(':pDes', $prDes);
            $query->bindParam(':pPrz', $pPrice);
            $query->bindParam(':pQty', $pQty);
            $query->bindParam(':pImage', $prImageName);
            $query->bindParam(':pBarcode', $prBarcode);
            $query->bindParam(':cid', $pCid);
            
            // Execute the query
            if ($query->execute()) {
                // Success message
                echo "<script>alert('Product added successfully'); location.assign('index.php');</script>";
            } else {
                // Database error
                echo "<script>alert('Failed to add product. Please try again.');</script>";
            }
        } else {
            $prImgErr = "Failed to upload the image.";
        }
    }
}


$Name = $Des = $Price = $Qty = $pBarcode = $cId = $pImageName = '';
$destination = '';

// Initialize error variables
$pNameErr = $pDesErr = $priceErr = $qtyErr = $cidErr = $pBarcodeErr = $pImgErr = '';

// Update product
if (isset($_POST['updateProduct'])) {
    $id = $_GET['pid'];
    $Name = $_POST['pName'];
    $Des = $_POST['pDes'];
    $Price = $_POST['pPrice'];
    $Qty = $_POST['pQty'];
    $pBarcode = $_POST['pBar'];
    $cId = $_POST['cId'];

    // Validate Product Name
    if (empty($Name)) {
        $pNameErr = "Product name is required";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $Name)) {
        $pNameErr = "Enter a valid product name (only letters and spaces)";
    }

    // Validate Description
    if (empty($Des)) {
        $pDesErr = "Product description is required";
    }

    // Validate Price
    if (empty($Price)) {
        $priceErr = "Price is required";
    } elseif (!is_numeric($Price) || $Price <= 0) {
        $priceErr = "Enter a valid price";
    }

    // Validate Quantity
    if (empty($Qty)) {
        $qtyErr = "Quantity is required";
    } elseif (!is_numeric($Qty) || $Qty < 0) {
        $qtyErr = "Enter a valid quantity";
    }

    // Validate Category ID
    if (empty($cId)) {
        $cidErr = "Category is required";
    }

    // Validate Barcode
    if (empty($pBarcode)) {
        $pBarcodeErr = "Barcode is required";
    }

    // Proceed if there are no validation errors
    if (empty($pNameErr) && empty($pDesErr) && empty($priceErr) && empty($qtyErr) && empty($cidErr) && empty($pBarcodeErr)) {

        // Handle image upload if file is present
        if (isset($_FILES['pImage']) && !empty($_FILES['pImage']['name'])) {
            $pImageName = $_FILES['pImage']['name'];
            $pImageTmpName = $_FILES['pImage']['tmp_name'];
            $extension = pathinfo($pImageName, PATHINFO_EXTENSION);
            $destination = "img/" . $pImageName;

            // Validate Image
            if (!in_array($extension, ['jpg', 'jpeg', 'png', 'webp'])) {
                $pImgErr = "Invalid image format. Only JPG, PNG, JPEG, and WEBP are allowed.";
            }

            if (empty($pImgErr)) {
                // Create img directory if not exists
                if (!is_dir('img')) {
                    mkdir('img', 0755, true);
                }

                // Move uploaded file to destination
                if (move_uploaded_file($pImageTmpName, $destination)) {
                    $query = $pdo->prepare("UPDATE products SET name=:uName, des=:uDes, price=:uPrice, qty=:uQty, pr_barcode=:pBar, c_id=:cId, image=:uImage WHERE id=:pid");
                    $query->bindParam('uImage', $pImageName);
                } else {
                    $pImgErr = "Failed to upload the image.";
                }
            }
        } else {
            // Update query without image
            $query = $pdo->prepare("UPDATE products SET name=:uName, des=:uDes, price=:uPrice, qty=:uQty, pr_barcode=:pBar, c_id=:cId WHERE id=:pid");
        }

        if (empty($pImgErr)) {
            // Bind common parameters
            $query->bindParam('pid', $id);
            $query->bindParam('uName', $Name);
            $query->bindParam('uDes', $Des);
            $query->bindParam('uPrice', $Price);
            $query->bindParam('uQty', $Qty);
            $query->bindParam('pBar', $pBarcode);
            $query->bindParam('cId', $cId);

            // Execute the query
            if ($query->execute()) {
                // Success message
                echo "<script>alert('Product updated successfully'); location.assign('index.php');</script>";
            } else {
                // Database error
                echo "<script>alert('Failed to update product. Please try again.');</script>";
            }
        }
    }
}

    

     //delete catgeory
if(isset($_GET['pdid'])){
    $pdid=$_GET['pdid'];
    $query=$pdo->prepare("delete from products where id=:pdid");
    $query->bindParam('pdid',$pdid);
    $query->execute();
    echo "<script>alert('delete product successfully');
    location.assign('viewProduct.php');
    </script>";

}

// search work view category adminpanel
if(isset($_POST['cat'])){
    $val = $_POST['cat'];
    $query = $pdo->prepare("select * from category Where name LIKE :val");
    $val ="%$val%";
    $query->bindParam('val',$val);
    $query->execute();
    $allCategories =$query->fetchAll(PDO::FETCH_ASSOC);
	foreach ($allCategories as $cat) {
        ?>         

                         <tr>
                            <td><?php echo $cat['name']?></td>
                            <td><?php echo $cat['des']?></td>
                            <td><img height="50px" src="../assets/img/<?php echo $cat['image']?>" alt=""></td>
                            <td><a href="editCategory.php?cid=<?php echo $cat['id']?>" class="btn btn-info">Edit</a></td>
                            <td><a href="?cdid=<?php echo $cat['id']?>" class="btn btn-danger">Delete</a></td>
                                </tr>
                  <?php  
                   }
                   exit();
  
             }


 // search work view products adminpanel
if(isset($_POST['pdt'])){
    $val = $_POST['pdt'];

    $query = $pdo->prepare("select products .*,category.name as cName,c_id as catId from products inner join category on products.c_id=category.id where products.name LIKE :val");
    $val ="%$val%";
    $query->bindParam('val',$val);
    $query->execute();
    $allProducts =$query->fetchAll(PDO::FETCH_ASSOC);
	foreach ($allProducts as $pdt) {
        ?>         

                         <tr>
                            <td><?php echo $pdt['name']?></td>
                            <td><?php echo $pdt['des']?></td>
                            <td><?php echo $pdt['price']?></td>
                            <td><?php echo $pdt['qty']?></td>
                            <td><?php echo $pdt['pr_barcode']?></td>
                            <td><?php echo $pdt['cName']?></td>
                            <td><img height="50px" src="../assets/img/<?php echo $pdt['image']?>" alt=""></td>
                            <td><a href="editProduct.php?pid=<?php echo $pdt['id']?>" class="btn btn-info">Edit</a></td>
                            <td><a href="?pdid=<?php echo $pdt['id']?>" class="btn btn-danger">Delete</a></td>
                                </tr>
                  <?php  
                   }
                   exit();
  
             }
?>



