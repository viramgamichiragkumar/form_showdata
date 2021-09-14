<?php


if (isset($_POST['update'])) {
    // $page = $_POST['page'];
    $page = $_GET['page'];
    $number_of_result = $_GET['number_result'];
    $hidden_id = $_POST['hidden'];
    $edit_name = trim($_POST['full_name']);
    $edit_email = trim($_POST['email']);
    $edit_gender = trim($_POST['gender']);

    $checkbox = $_POST['checkbox'];
    $hobby1 = '';
    foreach ($checkbox as $hobby) {
        $hobby1 .= $hobby . ",";
    }
    trim($hobby1);
    $random = rand(10000, 99999);
    $edit_image = $_FILES['Upload_image']['name'];
    $old_image = $_POST['old-profile-pic'];

    if (isset($edit_image) && $edit_image != null && (strlen($edit_image) > 8)) {
        unlink($old_image);
        $edit_image = $random . $edit_image;
    } else {
        $edit_image = basename($old_image);
    }

    $sql = "UPDATE form_data SET full_name='$edit_name',email='$edit_email',gender='$edit_gender',hobby='$hobby1',img='$edit_image',tstamp=CURRENT_TIMESTAMP where id='$hidden_id'";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        if (move_uploaded_file($_FILES['Upload_image']['tmp_name'], "upload/$random" . $_FILES['Upload_image']['name'])) {
            // echo $page;
            echo "<script>alert('data Updated success'); window.location='show-data.php?page=" . $page . "&number_result=" . $number_of_result . "';</script>";
        } else {
            echo "<script>alert('Error :: while uploading NEW image OLD image will added');window.location = 'show-data.php?page=" . $page . "&number_result=" . $number_of_result . "';</script>";
        }
    } else {
        echo "<script>alert('data not updated');</script>";
    }
}

    ?>