<?php
// pagination
include 'conn.php';

if(!isset($_GET['page'])){
    $page=1;
}else{
    $page=$_GET['page'];
}

$number_of_result = 2;
$sql = "SELECT * from form_data";
$result = mysqli_query($conn, $sql);

$total_records = mysqli_num_rows($result);


$start = ($page-1)*$number_of_result ;

$sql = "SELECT * from form_data limit ".$start.",".$number_of_result;
$result = mysqli_query($conn, $sql);


while($row= mysqli_fetch_array($result)){
    echo $row['id']." - ";
    echo $row['full_name']." - ";
    echo $row['email']." - ";
    echo $row['gender']." - ";
    echo"<br>";
}


$total_pages = ceil($total_records/$number_of_result);

for($page = 1;$page<=$total_pages;$page++){
    echo "<a href='show-data1.php?page=".$page."'>$page</a>";
}
?>