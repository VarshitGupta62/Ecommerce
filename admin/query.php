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


// Handle logo update request
if (isset($_FILES['logo'])) {
    $sqlSelect = "SELECT logo FROM settings WHERE id = 1;";
    $currentImage = selectSingleParams($sqlSelect);

    $image_name = rand() . rand() . time() . basename($_FILES["logo"]["name"]);

    if (move_uploaded_file($_FILES["logo"]["tmp_name"], "uploads/" . $image_name)) {
        if ($currentImage && file_exists("uploads/" . $currentImage)) {
            unlink("uploads/" . $currentImage);
        }

        $sqlUpdate = "UPDATE settings SET logo = ? WHERE id = 1;";
        $values = [$image_name];
        $param_types = 's';

        $result = updateIdAvaliable($sqlUpdate, $values, $param_types);
        echo $result ? 1 : 0;
    } else {
        echo 0;
    }
}

// Handle favicon update request
if (isset($_FILES['favicon'])) {
    $sqlSelect = "SELECT favicon FROM settings WHERE id = 1;";
    $currentImage = selectSingleParams($sqlSelect);

    $image_name = rand() . rand() . time() . basename($_FILES["favicon"]["name"]);

    if (move_uploaded_file($_FILES["favicon"]["tmp_name"], "uploads/" . $image_name)) {
        if ($currentImage && file_exists("uploads/" . $currentImage)) {
            unlink("uploads/" . $currentImage);
        }

        $sqlUpdate = "UPDATE settings SET favicon = ? WHERE id = 1;";
        $values = [$image_name];
        $param_types = 's';

        $result = updateIdAvaliable($sqlUpdate, $values, $param_types);
        echo $result ? 1 : 0;
    } else {
        echo 0;
    }
}

// Handle logo data load request
if (isset($_POST['loadLogoData'])) {
    $sql = "SELECT logo FROM settings WHERE id = 1;";
    $result = select($sql, [], '');
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        echo json_encode($row['logo']);
    } else {
        echo "Error loading logo.";
    }
}

if (isset($_POST['loadFaviconData'])) {
    $sql = "SELECT favicon FROM settings WHERE id = 1;";
    $result = select($sql, [], '');
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        echo json_encode($row['favicon']);
    } else {
        echo "Error loading logo.";
    }
}

if (isset($_POST['footer_about'])) {
    $sqlUpdate = "UPDATE settings 
                  SET footer_about = ?, 
                      footer_copyright = ?, 
                      contact_address = ?, 
                      contact_phone = ?, 
                      contact_email = ? ,
                      footer_heading = ?
                  WHERE id = 1;";
    $values = [$_POST['footer_about'], $_POST['footer_copyright'], $_POST['footer_contact_address'], $_POST['footer_contact_phone_number'], $_POST['footer_contact_email'], $_POST['footer_heading']];
    $param_types = 'ssssss';

    $result = updateIdAvaliable($sqlUpdate, $values, $param_types);
    echo $result ? 1 : 0;
}

if (isset($_POST['loadFooterData'])) {
    // echo "this is server";
    $sql = "SELECT footer_about , footer_copyright , contact_address , contact_phone ,  contact_email , footer_heading  FROM settings WHERE id = 1;";
    $result = select($sql, [], '');
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        echo json_encode($row);
    } else {
        echo "Error loading logo.";
    }
}


// Handle message settings update request
if (isset($_POST['forget_password_message'], $_POST['thank_you_message'])) {
    $sqlUpdate = "UPDATE settings SET forget_password_message = ?, thank_you_message = ? WHERE id = 1;";
    $values = [$_POST['forget_password_message'], $_POST['thank_you_message']];
    $param_types = 'ss';

    $result = updateIdAvaliable($sqlUpdate, $values, $param_types);
    echo $result ? 1 : 0;
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

    $sqlInsert = "INSERT INTO category ( category , navbar , status ) VALUES (? , ? , ?)";
    $values = [$_POST['category_name'], $_POST['navbar_id'],  1];
    $result = insert($sqlInsert,  $values, 'sss');
    if ($result) {
        echo 1;
    } else {
        echo 0;
    }
}

if (isset($_POST['loadCategoryData'])) {
    // Join category table with navbar table to fetch navbar_name
    $query = "
        SELECT c.*, n.navbar_name
        FROM category c
        LEFT JOIN navbar n ON c.navbar = n.id
    ";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $sr = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            // Check if the status is 1 and set the checkbox as checked
            $isChecked = $row['status'] == 1 ? 'checked' : '';
            echo "
            <tr>
                <td>$sr</td>
                <td>" . htmlspecialchars($row['navbar_name']) . "</td>
                <td>" . htmlspecialchars($row['category']) . "</td>
                <td> 
                    <div class='form-check form-switch py-2'>
                        <input class='form-check-input' type='checkbox' id='flexSwitchCheckDefault' data-id='$row[id]' $isChecked>
                    </div>
                </td>
                <td>
                    <button type='button' class='btn mb-1 d-block btn-outline-dark waves-effect waves-light categoryDeleteById' 
                        data-bs-toggle='modal' data-bs-target='#new_samedata_modal' data-bs-whatever='@mdo' data-id='$row[id]'>
                        <i class='fas fa-trash'></i>
                    </button>
                </td>
            </tr>
            ";
            $sr++;
        }
    } else {
        echo "<tr><td colspan='5' class='text-center'>No Categories found.</td></tr>";
    }
}


if (isset($_POST['deletecategoryById'])) {

    // echo "server is working";
    $sql = "DELETE FROM `category` WHERE id = ?";
    $val = [$_POST['deletecategoryById']];
    $result =  delete($sql, $val, 'i');
    if ($result) {
        // unlink('uploads/' . $_POST['deleteCarouselImg']);
        echo 1;
    }
}

if (isset($_POST['updateCategoryStatus'])) {
    $id = $_POST['id']; // Category ID
    $status = $_POST['status']; // New status for the category

    // Update the category status
    $sqlUpdate = "UPDATE category SET status = ? WHERE id = ?";
    $values = [$status, $id];
    $result = update($sqlUpdate, $values, 'ii'); // Assuming 'update' is your helper function

    if ($result) {
        if ($status == 0) {
            // If the category is turned off, turn off all related subcategories
            $sqlUpdateSubcategories = "UPDATE subcategory SET status = 0 WHERE category_id = ?";
            $subcategoryValues = [$id];
            update($sqlUpdateSubcategories, $subcategoryValues, 'i');
        }
        echo 1; // Success response
    } else {
        echo 0; // Failure response
    }
}






if (isset($_POST['subcategory_name'])) {

    // echo( "data is sending ");

    $sqlInsert = "INSERT INTO subcategory (category_id , subcategory_name , status ) VALUES (? , ? , ?)";
    $values = [$_POST['category_id'], $_POST['subcategory_name'],  1];
    $result = insert($sqlInsert, $values, 'sss');
    if ($result) {
        echo 1;
    } else {
        echo 0;
    }
}

if (isset($_POST['loadsubcategoryData'])) {
    // Join the subcategory table with the category table
    $query = "SELECT subcategory.*, category.category AS category_name 
              FROM subcategory 
              LEFT JOIN category ON subcategory.category_id = category.id";

    $result = mysqli_query($conn, $query); // Use your database connection variable.

    if (mysqli_num_rows($result) > 0) {
        $sr = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            // Check if the status is 1 and set the checkbox as checked
            $isChecked = $row['status'] == 1 ? 'checked' : '';
            echo "
            <tr>
                <td>$sr</td>
                <td>" . htmlspecialchars($row['category_name']) . "</td>
                <td>" . htmlspecialchars($row['subcategory_name']) . "</td>
                <td> 
                    <div class='form-check form-switch py-2'>
                        <input class='form-check-input' type='checkbox' id='flexSwitchCheckDefault' data-id='{$row['id']}' $isChecked>
                    </div>
                </td>
                <td>
                    <button type='button' class='btn mb-1 d-block btn-outline-dark waves-effect waves-light subcategoryDeleteById' 
                        data-bs-toggle='modal' data-bs-target='#new_samedata_modal' data-bs-whatever='@mdo' data-id='{$row['id']}'>
                        <i class='fas fa-trash'></i>
                    </button>
                </td>
            </tr>
            ";
            $sr++;
        }
    } else {
        echo "<tr><td colspan='5' class='text-center'>No Subcategories found.</td></tr>";
    }
}



if (isset($_POST['deletesubcategoryById'])) {

    // echo "server is working";
    $sql = "DELETE FROM `subcategory` WHERE id = ?";
    $val = [$_POST['deletesubcategoryById']];
    $result =  delete($sql, $val, 'i');
    if ($result) {
        // unlink('uploads/' . $_POST['deleteCarouselImg']);
        echo 1;
    }
}
if (isset($_POST['updatesubcategoryStatus'])) {
    $id = $_POST['id'];
    $status = $_POST['status'];

    $sqlCategory = "SELECT status FROM category WHERE id = (SELECT category_id FROM subcategory WHERE id = ?)";
    $categoryResult = fetch($sqlCategory, [$id], 'i');

    if ($categoryResult && $categoryResult['status'] == 1) {
        $sqlUpdate = "UPDATE subcategory SET status = ? WHERE id = ?";
        $values = [$status, $id];
        $result = update($sqlUpdate, $values, 'ii');

        echo $result ? 1 : 0;
    } else {
        echo 0;
    }
}

if (isset($_POST['updateProductStatus'])) {
    $id = intval($_POST['id']); // Ensure the ID is an integer
    $status = intval($_POST['status']); // Ensure the status is an integer (0 or 1)

    // Query to fetch current status of the product
    $sqlCategory = "SELECT p_is_active FROM addproduct WHERE id = ?";
    $categoryResult = fetch($sqlCategory, [$id], 'i');

    // Check if the category exists and process the update
    if ($categoryResult) {
        $sqlUpdate = "UPDATE addproduct SET p_is_active = ? WHERE id = ?";
        $values = [$status, $id];
        $result = update($sqlUpdate, $values, 'ii');

        echo $result ? "1" : "0";
    } else {
        echo "0";
    }
}




if (isset($_POST['loadCategories'])) {

    $query = "SELECT id, category FROM category WHERE status = 1"; // Only load active categories
    $result = $conn->query($query); // Execute the query

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<option value='" . htmlspecialchars($row['id']) . "'>" . htmlspecialchars($row['category']) . "</option>";
        }
    } else {
        echo "<option value=''>No categories found</option>";
    }
}


if (isset($_POST['City_name'])) {

    // echo( "data is sending ");

    $sqlInsert = "INSERT INTO addcity (cityname , status ) VALUES (? , ?)";
    $values = [$_POST['City_name'],  1];
    $result = insert($sqlInsert, $values, 'ss');
    if ($result) {
        echo 1;
    } else {
        echo 0;
    }
}

if (isset($_POST['loadCityData'])) {
    $result = selectalldata('addcity');
    if (mysqli_num_rows($result) > 0) {
        $sr = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            // Check if the status is 1 and set the checkbox as checked
            $isChecked = $row['status'] == 1 ? 'checked' : '';
            echo "
            <tr>
                <td>$sr</td>
                <td>" . htmlspecialchars($row['cityname']) . "</td>
                <td> 
                    <div class='form-check form-switch py-2'>
                        <input class='form-check-input' type='checkbox' id='flexSwitchCheckDefault' data-id='$row[id]' $isChecked>
                    </div>
                </td>
                <td>
                    <button type='button' class='btn mb-1 d-block btn-outline-dark waves-effect waves-light CityDeleteById' 
                        data-bs-toggle='modal' data-bs-target='#new_samedata_modal' data-bs-whatever='@mdo' data-id='$row[id]'>
                        <i class='fas fa-trash'></i>
                    </button>
                </td>
            </tr>
            ";
            $sr++;
        }
    } else {
        echo "<tr><td colspan='4' class='text-center'>No city found.</td></tr>";
    }
}


if (isset($_POST['deleteCityById'])) {

    // echo "server is working";
    $sql = "DELETE FROM `addcity` WHERE id = ?";
    $val = [$_POST['deleteCityById']];
    $result =  delete($sql, $val, 'i');
    if ($result) {
        // unlink('uploads/' . $_POST['deleteCarouselImg']);
        echo 1;
    }
}

if (isset($_POST['updateCityStatus'])) {
    $id = $_POST['id'];
    $status = $_POST['status'];

    $sqlUpdate = "UPDATE addcity SET status = ? WHERE id = ?";
    $values = [$status, $id];
    $result = update($sqlUpdate, $values, 'ii'); // Assuming 'update' is your helper function

    echo $result ? 1 : 0;
}



if (isset($_POST['shippingcost'])) {

    // echo( "data is sending ");

    $sqlInsert = "INSERT INTO shippingcost ( city_id , amount  ) VALUES (? , ? )";
    $values = [$_POST['city_id'], $_POST['shippingcost']];
    $result = insert($sqlInsert, $values, 'ss');
    if ($result) {
        echo 1;
    } else {
        echo 0;
    }
}


if (isset($_POST['loadCity'])) {

    $query = "SELECT id, cityname FROM addcity WHERE status = 1"; // Only load active categories
    $result = $conn->query($query); // Execute the query

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<option value='" . htmlspecialchars($row['id']) . "'>" . htmlspecialchars($row['cityname']) . "</option>";
        }
    } else {
        echo "<option value=''>No City found</option>";
    }
}
if (isset($_POST['loadshippingcostData'])) {

    $sql = "SELECT sc.id AS shipping_id, sc.amount, ac.cityname 
            FROM shippingcost sc 
            INNER JOIN addcity ac ON sc.city_id = ac.id 
            WHERE ac.status = 1";

    $result = $conn->query($sql); // Assuming $conn is your MySQLi connection

    if ($result && mysqli_num_rows($result) > 0) {
        $sr = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            echo "
            <tr>
                <td>$sr</td>
                <td>" . htmlspecialchars($row['cityname']) . "</td>
                <td>" . htmlspecialchars($row['amount']) . "</td>
                <td>
                    <button type='button' class='btn mb-1 d-block btn-outline-dark waves-effect waves-light shippingcostDeleteById' 
                        data-bs-toggle='modal' data-bs-target='#new_samedata_modal' data-bs-whatever='@mdo' data-id='" . htmlspecialchars($row['shipping_id']) . "'>
                        <i class='fas fa-trash'></i>
                    </button>
                </td>
            </tr>
            ";
            $sr++;
        }
    } else {
        echo "<tr><td colspan='4' class='text-center' >No Shipping Cost available</td></tr>"; // Message for no data
    }
}



if (isset($_POST['deleteshippingcostById'])) {

    // echo "server is working";
    $sql = "DELETE FROM `shippingcost` WHERE id = ?";
    $val = [$_POST['deleteshippingcostById']];
    $result =  delete($sql, $val, 'i');
    if ($result) {
        // unlink('uploads/' . $_POST['deleteCarouselImg']);
        echo 1;
    }
}

// Add Product
if (isset($_FILES['p_image'])) {
    $image_name = rand() . rand() . basename($_FILES["p_image"]["name"]);
    $subcategory_id = $_POST['subcategory_id'];
    $product_name = $_POST['product_name'];
    $old_price = $_POST['p_old_price'];
    $new_price = $_POST['p_new_price'];
    $description = $_POST['p_description'];
    $quantity = $_POST['p_qty'];
    $overview = $_POST['p_overview'];
    $offer = $_POST['p_offer'];
    $is_active = 1;

    // var_dump($_POST);
    // exit();

    $sqlInsert = "INSERT INTO addproduct (
                    subcategory_id, 
                    product_name, 
                    p_old_price, 
                    P_new_price, 
                    p_description, 
                    p_is_active, 
                    p_qty, 
                    p_image, 
                    p_overview, 
                    p_offer
                ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $values = [
        $subcategory_id,
        $product_name,
        $old_price,
        $new_price,
        $description,
        $is_active,
        $quantity,
        $image_name,
        $overview,
        $offer
    ];
    $result = insert($sqlInsert, $values, 'sssssiisss'); // Bind types

    if ($result) {
        move_uploaded_file($_FILES["p_image"]["tmp_name"], "uploads/" . $image_name);
        echo 1;
    } else {
        echo 0;
    }
}


if (isset($_POST['loadProductData'])) {
    // Modify the query to join with the `subcategory` table and fetch `subcategory_name`
    $query = "SELECT p.*, s.subcategory_name 
              FROM addproduct p 
              LEFT JOIN subcategory s ON p.subcategory_id = s.id";
    $result = mysqli_query($conn, $query); // Replace $connection with your DB connection variable

    if ($result && mysqli_num_rows($result) > 0) {
        $sr = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            // Escape data to prevent XSS
            $subcategoryName = htmlspecialchars($row['subcategory_name'], ENT_QUOTES, 'UTF-8');
            $productName = htmlspecialchars($row['product_name'], ENT_QUOTES, 'UTF-8');
            $oldPrice = htmlspecialchars($row['p_old_price'], ENT_QUOTES, 'UTF-8');
            $newPrice = htmlspecialchars($row['P_new_price'], ENT_QUOTES, 'UTF-8');
            $description = htmlspecialchars($row['p_description'], ENT_QUOTES, 'UTF-8');
            $overview = htmlspecialchars($row['p_overview'], ENT_QUOTES, 'UTF-8');
            $offer = htmlspecialchars($row['p_offer'], ENT_QUOTES, 'UTF-8');
            $quantity = htmlspecialchars($row['p_qty'], ENT_QUOTES, 'UTF-8');
            $imagePath = htmlspecialchars($row['p_image'], ENT_QUOTES, 'UTF-8');

            $isChecked = $row['p_is_active'] == 1 ? 'checked' : '';

            echo "
            <tr>
                <td>{$sr}</td>
                <td>{$subcategoryName}</td>
                <td>{$productName}</td>
                <td>₹{$oldPrice}</td>
                <td>₹{$newPrice}</td>
                <td>{$description}</td>
                <td>{$overview}</td>
                <td>{$offer}</td>
                <td>{$quantity}</td>
                <td> 
                    <div class='form-check form-switch py-2'>
                        <input class='form-check-input' type='checkbox' id='flexSwitchCheckDefault' data-id='$row[id]' $isChecked>
                    </div>
                </td>
                <td>
                    <img src='uploads/{$imagePath}' alt='Image not found' height='100' width='100'>
                </td>
                <td>
                    <div class='btn-group'>
                      <button type='button' class='btn btn-success dropdown-toggle ' data-bs-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                        Action
                      </button>
                      <ul class='dropdown-menu animated flipInX'>
                        <li><a class='dropdown-item loadEditForm' data-id='{$row['id']}' data-bs-toggle='modal' data-bs-target='#product-modal-edit' href='javascript:void(0)'>Edit</a></li>
                        <li><a class='dropdown-item deleteProduct' data-id='{$row['id']}' data-deleteimg='{$row['p_image']}' href='javascript:void(0)'>Delete</a></li>
                      </ul>
                    </div>
                </td>
            </tr>
            ";
            $sr++;
        }
    } else {
        echo "<tr><td colspan='12'>No products found.</td></tr>";
    }
}


if (isset($_POST['loadSubcategories'])) {

    $query = "SELECT id, subcategory_name FROM subcategory WHERE status = 1"; // Only load active categories
    $result = $conn->query($query); // Execute the query

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<option value='" . htmlspecialchars($row['id']) . "'>" . htmlspecialchars($row['subcategory_name']) . "</option>";
        }
    } else {
        echo "<option value=''>No Sub-categories found</option>";
    }
}

// Delete Product
if (isset($_POST['deleteProductById'])) {
    $sql = "DELETE FROM `addproduct` WHERE id = ?";
    $val = [$_POST['deleteProductById']];
    $result = delete($sql, $val, 'i');

    if ($result) {
        unlink('uploads/' . $_POST['deleteProductByImg']);
        echo 1;
    } else {
        echo 0;
    }
}


if (isset($_POST['loadProductEditForm'])) {
    // echo "sever is hit but data not foud";
    $sql = "SELECT * FROM `addproduct` WHERE id = ?";
    $val = [$_POST['loadProductEditForm']];
    $result =  select($sql, $val, 'i');
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $row = json_encode($row);
        echo $row;
    }
}


if (isset($_POST['new_product_name'])) {

    // echo "sever is hit";
    // exit();

    // Get the product ID from the hidden field
    $id = $_POST['productDataId'];

    // Query to get the current product image
    $sqlSelect = "SELECT p_image FROM addproduct WHERE id = ?";
    $currentImage = selectSingleValue($sqlSelect, [$id], 's');

    if (isset($_FILES['new_p_image']) && $_FILES['new_p_image']['error'] == UPLOAD_ERR_OK) {

        // Generate a random name for the new image
        $image_name = rand() . rand() . basename($_FILES["new_p_image"]["name"]);

        // Move the uploaded image to the "uploads" folder
        if (move_uploaded_file($_FILES["new_p_image"]["tmp_name"], "uploads/" . $image_name)) {

            // Delete the old image file if it exists
            if (!empty($currentImage) && file_exists("uploads/" . $currentImage)) {
                unlink("uploads/" . $currentImage);
            }

            // Update the database with the new product image and other details
            $sqlUpdate = "UPDATE `addproduct` 
                  SET 
                    `subcategory_id` = ?, 
                    `product_name` = ?, 
                    `p_old_price` = ?, 
                    `P_new_price` = ?, 
                    `p_description` = ?, 
                    `p_qty` = ?, 
                    `p_image` = ?, 
                    `p_overview` = ?, 
                    `p_offer` = ?
                  WHERE `id` = ?";
            $values = [
                $_POST['new_subcategory_id'],
                $_POST['new_product_name'],
                $_POST['new_p_old_price'],
                $_POST['new_p_new_price'],
                $_POST['new_p_description'],
                $_POST['new_p_qty'],
                $image_name,
                $_POST['new_p_overview'],
                $_POST['new_p_offer'],
                $id
            ];
            $param_types = 'sssssssssi'; // Correct number of placeholders for all fields
        }
    } else {
        // If no new image is uploaded, update the product data without changing the image
        $sqlUpdate = "UPDATE `addproduct` 
                  SET 
                    `subcategory_id` = ?, 
                    `product_name` = ?, 
                    `p_old_price` = ?, 
                    `P_new_price` = ?, 
                    `p_description` = ?, 
                    `p_qty` = ?, 
                    `p_overview` = ?, 
                    `p_offer` = ?
                  WHERE `id` = ?";
        $values = [
            $_POST['new_subcategory_id'],
            $_POST['new_product_name'],
            $_POST['new_p_old_price'],
            $_POST['new_p_new_price'],
            $_POST['new_p_description'],
            $_POST['new_p_qty'],
            $_POST['new_p_overview'],
            $_POST['new_p_offer'],
            $id
        ];
        $param_types = 'ssssssssi'; // Correct number of placeholders for all fields
    }

    // Execute the database update query
    $result = update($sqlUpdate, $values, $param_types);

    // Return the result of the update
    if ($result) {
        echo 1; // Success
    } else {
        echo 0; // Failure
    }
}



if (isset($_POST['navbar_name'])) {

    $sqlInsert = "INSERT INTO navbar (   navbar_name  ) VALUES ( ?)";
    $values = [$_POST['navbar_name']];
    $result = insert($sqlInsert, $values, 's');
    if ($result) {
        echo 1;
    } else {
        echo 0;
    }
}

if (isset($_POST['loadnavbarData'])) {
    $result = selectalldata('navbar');
    if (mysqli_num_rows($result) > 0) {
        $sr = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            echo "
            <tr>
                <td>$sr</td>
                <td>{$row['navbar_name']}</td>
                <td>
                    <button type='button' class='btn mb-1 d-block btn-outline-dark waves-effect waves-light navbarDeleteById' 
                        data-bs-toggle='modal' data-bs-target='#new_samedata_modal' data-bs-whatever='@mdo' data-id='$row[id]'>
                        <i class='fas fa-trash'></i>
                    </button>
                </td>
            </tr>
            ";
            $sr++;
        }
    } else {
        echo "<tr><td colspan='6' class='text-center'>No Navbar found.</td></tr>";
    }
}



if (isset($_POST['deletenavbarById'])) {

    // echo "server is working";
    $sql = "DELETE FROM `navbar` WHERE id = ?";
    $val = [$_POST['deletenavbarById']];
    $result =  delete($sql, $val, 'i');
    if ($result) {
        // unlink('uploads/' . $_POST['deleteCarouselImg']);
        echo 1;
    }
}

if (isset($_POST['loadNavbar'])) {

    $query = "SELECT id, navbar_name FROM navbar "; // Only load active categories
    $result = $conn->query($query); // Execute the query

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<option value='" . htmlspecialchars($row['id']) . "'>" . htmlspecialchars($row['navbar_name']) . "</option>";
        }
    } else {
        echo "<option value=''>No Sub-categories found</option>";
    }
}

if (isset($_POST['loadCustomerData'])) {
    $result = selectalldata('customer');
    if (mysqli_num_rows($result) > 0) {
        $sr = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            // Check if the status is 1 (active) or 0 (inactive)
            $isChecked = $row['cust_status'] == 1 ? 'checked' : '';
            $rowClass = $row['cust_status'] == 0 ? 'table-danger' : ''; // Add red background for inactive users
            echo "
            <tr class='$rowClass'>
                <td>$sr</td>
                <td>" . htmlspecialchars($row['cust_name']) . "</td>
                <td>" . htmlspecialchars($row['cust_email']) . "</td>
                <td>" . htmlspecialchars($row['cust_phone']) . "</td>
                <td>" . htmlspecialchars($row['cust_city']) . "</td>
                <td>" . htmlspecialchars($row['cust_state']) . "</td>
                <td>" . htmlspecialchars($row['cust_zip']) . "</td>
                <td> 
                    <div class='form-check form-switch py-2'>
                        <input class='form-check-input' type='checkbox' id='flexSwitchCheckDefault' data-id='$row[id]' $isChecked>
                    </div>
                </td>
            </tr>
            ";
            $sr++;
        }
    } else {
        echo "<tr><td colspan='4' class='text-center'>No customer found.</td></tr>";
    }
}


if (isset($_POST['updateCustomerStatus'])) {
    $id = $_POST['id']; // Category ID
    $status = $_POST['status']; // New status for the category

    // Update the category status
    $sqlUpdate = "UPDATE customer SET cust_status = ? WHERE id = ?";
    $values = [$status, $id];
    $result = update($sqlUpdate, $values, 'ii'); // Assuming 'update' is your helper function

    if ($result) {
        if ($status == 0) {
            // If the category is turned off, turn off all related subcategories
            $updateCustomerStatus = "UPDATE customer SET cust_status = 0 WHERE id = ?";
            $customerValues = [$id];
            update($updateCustomerStatus, $customerValues, 'i');
        }
        echo 1; // Success response
    } else {
        echo 0; // Failure response
    }
}





