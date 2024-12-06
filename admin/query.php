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

if (isset($_FILES['carouselImage'])) {

    $image_name = rand() . rand() . basename($_FILES["carouselImage"]["name"]);
    $sqlInsert = "INSERT INTO carousel (Image ) VALUES (?)";
    $values = [$image_name];
    $result = insert($sqlInsert, $values, 's');
    if ($result) {
        move_uploaded_file($_FILES["carouselImage"]["tmp_name"], "uploads/" . $image_name);
        echo 1;
    } else {
        echo 0;
    }
}

if (isset($_POST['loadCarouselData'])) {
    $result = selectalldata('carousel');
    if (mysqli_num_rows($result) > 0) {
        $sr = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            echo "
            <tr>
                <td>$sr</td>
                <td><img src='uploads/$row[Image]' alt='Image not found' height='100' width='100'></td>
                <td><button type='button' class='btn btn-sm btn-soft-danger carouselDeleteById' data-id='$row[id]' data-deleteimg='$row[Image]' id='sweetalert-params'><i class='bx bx-trash fs-16'></i></button></td>
            </tr>
           ";
            $sr++;
        }
    }
}

if (isset($_POST['deleteCarouselById'])) {
    $sql = "DELETE FROM `carousel` WHERE id = ?";
    $val = [$_POST['deleteCarouselById']];
    $result =  delete($sql, $val, 'i');
    if ($result) {
        unlink('uploads/' . $_POST['deleteCarouselImg']);
        echo 1;
    }
}

if (isset($_POST['AboutDescription'])) {

    // var_dump($_POST);

    $sqlInsert = "INSERT INTO about (description ) VALUES (?)";
    $values = [$_POST['AboutDescription']];
    $result = insert($sqlInsert, $values, 's');
    if ($result) {
        echo 1;
    } else {
        echo 0;
    }
}


if (isset($_POST['loadAboutData'])) {
    $result = selectalldata('about');
    if (mysqli_num_rows($result) > 0) {
        $sr = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            echo "
            <tr>
                <td>$sr</td>
                <td>$row[description]</td>
                <td><button type='button' class='btn btn-sm btn-soft-secondary me-1 AboutEditById' data-bs-toggle='modal'data-id='$row[id]' data-bs-target='#Model'><i class='bx bx-edit fs-16'></i></button></td>
                <td><button type='button' class='btn btn-sm btn-soft-danger AboutDeleteById' data-id='$row[id]' ' id='sweetalert-params'><i class='bx bx-trash fs-16'></i></button></td>
            </tr>
           ";
            $sr++;
        }
    }
}

if (isset($_POST['deleteAboutById'])) {
    $sql = "DELETE FROM `about` WHERE id = ?";
    $val = [$_POST['deleteAboutById']];
    $result =  delete($sql, $val, 'i');
    if ($result) {
        echo 1;
    }
}


if (isset($_POST['loadAboutEditForm'])) {
    $sql = "SELECT * FROM `about` WHERE id = ?";
    $val = [$_POST['loadAboutEditForm']];
    $result =  select($sql, $val, 'i');
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $row = json_encode($row);
        echo $row;
    }
}


if (isset($_POST['newAboutTitle'])) {

    $id = $_POST['AboutEditId'];

    // Update only the text fields if no new image is uploaded
    $sqlUpdate = "UPDATE about SET  description = ?  WHERE id = ?";
    $values = [$_POST['newAboutDescription'], $id];
    $param_types = 'ss'; // Three placeholders for title, text, and id


    $result = update($sqlUpdate, $values, $param_types);
    if ($result) {
        echo 1;
    } else {
        echo 0;
    }
}

if (isset($_POST['updateaboutdata'])) {

    // Sanitize the input to prevent SQL injection
    $title = mysqli_real_escape_string($conn, $_POST['aboutTitle']);

    // SQL query to update contact details
    $sqlUpdate = "UPDATE `about_title` SET `title_description` = ?  WHERE `id` = 1";
    
    // Prepare the statement
    if ($stmt = $conn->prepare($sqlUpdate)) {
        // Bind parameters
        $stmt->bind_param("s", $title );

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

// Add course
if (isset($_POST['courseName'])) {
    $courseName = trim($_POST['courseName']);

    if (!empty($courseName)) {
        $sqlInsert = "INSERT INTO courses (course_name) VALUES (?)";
        $values = [$courseName];
        $result = insert($sqlInsert, $values, 's');

        if ($result) {
            echo 1; // Success
        } else {
            echo 0; // Failure
        }
    } else {
        echo "Course name cannot be empty.";
    }
}

// Load courses
if (isset($_POST['loadcourseData'])) {
    $result = selectalldata('courses');

    if (mysqli_num_rows($result) > 0) {
        $sr = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>$sr</td>
                    <td>$row[course_name]</td>
                    <td><button type='button' class='btn btn-sm btn-soft-danger courseDeleteById' data-id='$row[id]' id='sweetalert-params'><i class='bx bx-trash fs-16'></i></button></td>
                  </tr>";
            $sr++;
        }
    } else {
        echo "<tr><td colspan='3' style='text-align:center;'>No courses available</td></tr>";
    }
}

// Delete course
if (isset($_POST['deletecourseById'])) {
    $courseId = $_POST['deletecourseById'];

    $sqlDelete = "DELETE FROM courses WHERE id = ?";
    $values = [$courseId];
    $result = delete($sqlDelete, $values, 'i');

    if ($result) {
        echo 1; // Success
    } else {
        echo 0; // Failure
    }
}

if (isset($_POST['contactName'])) {
    // echo "Varshit";
    
    $sqlInsert = "INSERT INTO contactus_web (name, email ,  message ) VALUES (?, ? ,  ? )";
    $values = [$_POST['contactName'], $_POST['email'] ,  $_POST['message']];
    $result = insert($sqlInsert, $values, 'sss');
    if ($result) {
        echo 1;
    } else {
        echo 0;
    }
}

if (isset($_POST['loadContactData'])) {
    $result = selectalldata('contactus_web');
    if (mysqli_num_rows($result) > 0) {
        $sr = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            echo "
            <tr>
                <td>$sr</td>
                <td>$row[name]</td>
                <td>$row[email]</td>
                <td>$row[message]</td>
                <td><button type='button' class='btn btn-sm btn-soft-danger contactDeleteById' data-id='$row[id]' ' id='sweetalert-params'><i class='bx bx-trash fs-16'></i></button></td>
            </tr>
           ";
            $sr++;
        }
    }
}

if (isset($_POST['contactDeleteById'])) {

    $sql = "DELETE FROM `contactus_web` WHERE id = ?";
    $val = [$_POST['contactDeleteById']];
    $result =  delete($sql, $val, 'i');

    if ($result) {
        echo 1;
    }
}
