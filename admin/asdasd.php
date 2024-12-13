<?php



if (isset($_POST['City_name'])) {

    // echo( "data is sending ");

    $sqlInsert = "INSERT INTO addcity (City , status ) VALUES (? , ?)";
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
                <td>" . htmlspecialchars($row['City']) . "</td>
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
        echo "<tr><td colspan='4'>No categories found.</td></tr>";
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


?>