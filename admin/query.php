<?php

include("config.php");
include("function.php");


if (isset($_POST['adminUsername'])) {
    $adminUsername = $_POST['adminUsername'];
    $adminPassword = md5($_POST['adminPassword']);

    $sql = "SELECT adminPassword FROM admin WHERE adminUsername = ?";
    $result = select($sql, [$adminUsername], 's');

    if ($result && $row = mysqli_fetch_assoc($result)) {
        if ($adminPassword == $row['adminPassword']) {
            session_start();
            $_SESSION['adminUsername'] = $adminUsername;
            echo 1;
        } else {
            echo "Invalid Username or Password";
        }
    } else {
        echo "Invalid Username or Password";
    }
}


if (isset($_FILES['faviconImage'])) {

    $sqlSelect = "SELECT setting_value FROM settings WHERE setting_key = 'favicon';";
    $currentImage = selectSingleParams($sqlSelect);

    $image_name = rand() . rand() . time() . basename($_FILES["faviconImage"]["name"]);

    if (move_uploaded_file($_FILES["faviconImage"]["tmp_name"], "uploads/" . $image_name)) {

        if ($currentImage && file_exists("uploads/" . $currentImage)) {
            unlink("uploads/" . $currentImage);
        }

        $sqlUpdate = "UPDATE settings SET setting_value = ? WHERE setting_key = 'favicon';";
        $values = [$image_name];
        $param_types = 's';  

        $result = updateIdAvaliable($sqlUpdate, $values, $param_types);
        if ($result) {
            echo 1; // Success
        } else {
            echo 0; // Failure
        }
    }
}

if (isset($_FILES['settingLogo'])) {

    $sqlSelect = "SELECT setting_value FROM settings WHERE setting_key = 'logo';";
    $currentImage = selectSingleParams($sqlSelect);

    $image_name = rand() . rand() . time() . basename($_FILES["settingLogo"]["name"]);
    if (move_uploaded_file($_FILES["settingLogo"]["tmp_name"], "uploads/" . $image_name)) {

        if ($currentImage && file_exists("uploads/" . $currentImage)) {
            unlink("uploads/" . $currentImage);
        }
        $sqlUpdate = "UPDATE settings SET setting_value = ? WHERE setting_key = 'logo';";
        $values = [$image_name];
        $param_types = 's';  

        $result = updateIdAvaliable($sqlUpdate, $values, $param_types);
        if ($result) {
            echo 1; // Success
        } else {
            echo 0; // Failure
        }
    }
}

if (isset($_POST['updatecontactdata'])) {

    // Sanitize the input to prevent SQL injection
    $contactNumber = mysqli_real_escape_string($conn, $_POST['contactNumber']);
    $contactaddress = mysqli_real_escape_string($conn, $_POST['contactaddress']);
    $contactemail = mysqli_real_escape_string($conn, $_POST['contactemail']);

    // SQL query to update contact details
    $sqlUpdate = "UPDATE `contactus` SET `number` = ?, `address` = ?, `email` = ? WHERE `id` = 1";
    
    // Prepare the statement
    if ($stmt = $conn->prepare($sqlUpdate)) {
        // Bind parameters
        $stmt->bind_param("sss", $contactNumber, $contactaddress, $contactemail);

        // Execute the query
        if ($stmt->execute()) {
            echo 1; // Success
        } else {
            echo 0; // Failure
        }

        // Close the statement
        $stmt->close();
    } else {
        echo 0; // Failure
    }
}

// ---------------------------------------------new code------------------------------------------------------


if (isset($_POST['category_name'])) {

    // echo( "data is sending ");

    $sqlInsert = "INSERT INTO category (category , status ) VALUES (? , ?)";
    $values = [$_POST['category_name'],  "on"];
    $result = insert($sqlInsert, $values, 'ss');
    if ($result) {
        echo 1;
    } else {
        echo 0;
    }
}

if (isset($_POST['loadCategoryData'])) {
    $result = selectalldata('category');
    if (mysqli_num_rows($result) > 0) {
        $sr = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            echo "
            <tr>
                <td>$sr</td>
                <td>$row[category]</td>
                <td>status</td>
                <td></td>
            </tr>
           ";
            $sr++;
        }
    }
}



?>
