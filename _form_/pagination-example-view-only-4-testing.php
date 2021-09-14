
<?php

include 'conn.php';

if (!isset($_GET['page'])) {
    $page = 1;
} else {
    $page = $_GET['page'];
}

$number_of_result = 5;

// echo $_POST['number_result'];
if (isset($_POST['number_result'])) {
    $number_of_result = $_POST['number_result'];
    echo $number_of_result;
    exit;
} else {
    $number_of_result = 5;
}


echo "<table >";


$sql = "SELECT * from form_data";
$result = mysqli_query($conn, $sql);
$total_records = mysqli_num_rows($result);
$start = ($page - 1) * $number_of_result;



$srno = $start + 1;

$sql = "SELECT * from form_data limit " . $start . "," . $number_of_result;

$result = mysqli_query($conn, $sql);
while ($r = mysqli_fetch_assoc($result)) {
    echo "<tr name=" . $r['id'] . ">
<td>" . $srno . "</td>
<td>" . $r['full_name'] . "</td>
<td>" . $r['email'] . "</td>
<td>" . $r['gender'] . "</td>
<td>" . $r['hobby'] . "</td>
<td><img src='upload/" . $r['img'] . "' width=120  height=80></td>
<td><button name='edit' data-toggle='modal' data-target='#editModal' class='edit btn btn-md btn-outline-primary'> EDIT </button></td>
<td><button name='delete' class='btn btn-md btn-outline-danger delete'  id='delete' data-id=" . $r['id'] . "> DELETE </button></td>
</tr>";
    $srno++;
}

echo "</table><br>";
$total_pages = ceil($total_records / $number_of_result);

if ($page > 1) {
    echo "<a href='view.php?page=" . ($page - 1) . "&number_result=" . $number_of_result . "'><button class='btn btn-primary m-2'>PREV</button></a>";
} else {
    echo "<a href='view.php?page=" . $page . "&number_result=" . $number_of_result . "'><button class='btn btn-secondary m-2' disabled style='cursor:not-allowed;'>PREV</button></a>";
}
for ($pages = 1; $pages <= $total_pages; $pages++) {
    if ($page == $pages) {
        echo "<a href='view.php?page=" . $pages . "&number_result=" . $number_of_result . "'><button class='btn btn-success m-2'>$pages</button></a>";
    } else
        echo "<a href='view.php?page=" . $pages . "&number_result=" . $number_of_result . "'><button class='btn btn-primary m-2'>$pages</button></a>";
}


if ($page > 0 && $page != $pages - 1) {
    echo "<a href='view.php?page=" . ($page + 1) . "&number_result=" . $number_of_result . "'><button class='btn-disabled btn btn-primary m-2'>NEXT</button></a>";
} else {
    echo "<a href='view.php?page=" . ($page + 1) . "&number_result=" . $number_of_result . "'><button class='btn-disabled btn btn-secondary m-2' disabled style='cursor:not-allowed;'>NEXT</button></a>";
}

?>