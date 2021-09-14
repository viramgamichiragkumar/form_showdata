<?php
include 'conn.php';
$error='';
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      if ($_POST['full_name'] != null && $_POST['email'] != null && $_POST['gender'] != null && $_POST['checkbox'] != null && $_FILES['upload_image']['name'] != null) {
          $full_name = $_POST['full_name'];
          $email = $_POST['email'];
          $gender = $_POST['gender'];

          $checkbox = $_POST['checkbox'];
          $hobby1 = '';
          foreach ($checkbox as $hobby) {
              $hobby1 .= $hobby . ',';
          }
          $random = rand(10000, 99999);
          $upload_image = $random .$_FILES['upload_image']['name'];


          $sql = "INSERT INTO form_data (full_name,email,gender,hobby,img,tstamp) VALUES('$full_name','$email','$gender','$hobby1','$upload_image',CURRENT_TIMESTAMP)";

          $result = mysqli_query($conn, $sql);
          if ($result) {
              if (move_uploaded_file($_FILES['upload_image']['tmp_name'], "upload/" .$random . $_FILES['upload_image']['name'])) {
                //   echo 'data & image has been uploaded';
            echo "<script>alert('data & image has been uploaded');</script>";
              } else {
                  echo "image not uploaded";
              }
          } else {
            //   echo "data not submited";
            echo "<script>alert('data not submited');</script>";
            }
        } else {
            echo "please Fill all fields";
            
      }

    
  }
?>
