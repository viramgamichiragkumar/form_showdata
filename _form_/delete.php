<?php

include 'conn.php';
$id = $_POST['id'];
echo $id;
$sql = "SELECT * FROM form_data where id='$id'";

$result = mysqli_query($conn, $sql);
while($r = mysqli_fetch_assoc($result)){
    if(file_exists("upload/".$r['img'])){
        $img ="upload/".$r['img'];
        unlink($img);
    }
}
$sql1 = "DELETE FROM form_data where id='$id'";
$result1 = mysqli_query($conn, $sql1);
if($result1){
echo "deleted";
}else{
    echo "not delete";
}
?>
