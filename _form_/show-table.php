<script src="show-script.js"></script>

<?php

include 'conn.php';


?>

<?php
if (isset($_POST['s']) && ($_POST['s'] != null || $_POST['s'] != "")) {
    $search = $_POST['s'];


    if (!isset($_GET['page'])) {
        $page = 1;
    } else {
        if ($_GET['page']) {
            header('show-data.php?page=" . ($page + 1) . "&number_result=" . $number_of_result . "');
        }
        $page = $_GET['page'];
    }



    if (isset($_GET['number_result'])) {
        $number_of_result = $_GET['number_result'];
    } else {
        $number_of_result = 3;
    }

    $sql = "SELECT * from form_data where full_name LIKE '$search%'";
    $result = mysqli_query($conn, $sql);
    $total_records = mysqli_num_rows($result);
    $start = ($page - 1) * $number_of_result;

?>

    <?php
    $srno = $start + 1;

    $sql = "SELECT * from form_data where full_name LIKE '$search%' limit  $start , $number_of_result ";
    $result = mysqli_query($conn, $sql);
    $total = mysqli_num_rows($result);



    ?>

    <table class="table table-striped table-hover " id='table'>


        <tr>
            <th>SRno.</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>GENDER</th>
            <th>HOBBY</th>
            <th>PROFILE IMAGE</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        <?php

        if ($total > 0) {
            while ($r = mysqli_fetch_assoc($result)) {
        ?>
                <tr name="<?php echo $r['id']; ?>">
                    <td> <?php echo $srno; ?> </td>
                    <td> <?php echo $r['full_name']; ?> </td>
                    <td> <?php echo $r['email']; ?> </td>
                    <td> <?php echo $r['gender']; ?> </td>
                    <td> <?php echo $r['hobby']; ?> </td>
                    <td><img src='upload/<?php echo $r['img']; ?>' width=120 height=80></td>
                    <td><button name='edit' data-toggle='modal' data-target='#editModal' class='edit btn btn-md btn-outline-primary'> EDIT </button></td>
                    <td><button name='delete' class='btn btn-md btn-outline-danger delete' id='delete' data-id="<?php echo $r['id']; ?>"> DELETE </button></td>
                </tr>
        <?php
                $srno++;
            }

            echo "</table>";

            $total_pages = ceil($total_records / $number_of_result);

            // pages pagination
            if ($page > 1) {
                echo "<a href='show-data.php?page=" . ($page - 1) . "&number_result=" . $number_of_result . "'><button class='btn btn-primary m-2'>PREV</button></a>";
            } else {
                echo "<a href='show-data.php?page=" . $page . "&number_result=" . $number_of_result . "'><button class='btn btn-secondary m-2' disabled style='cursor:not-allowed;'>PREV</button></a>";
            }
            for ($pages = 1; $pages <= $total_pages; $pages++) {
                if ($page == $pages) {
                    echo "<a href='show-data.php?page=" . $pages . "&number_result=" . $number_of_result . "'><button class='btn btn-success m-2'>$pages</button></a>";
                } else
                    echo "<a href='show-data.php?page=" . $pages . "&number_result=" . $number_of_result . "'><button class='btn btn-primary m-2'>$pages</button></a>";
            }


            if ($page > 0 && $page != $pages - 1) {
                echo "<a href='show-data.php?page=" . ($page + 1) . "&number_result=" . $number_of_result . "'><button class='btn-disabled btn btn-primary m-2'>NEXT</button></a>";
            } else {
                echo "<a href='show-data.php?page=" . ($page + 1) . "&number_result=" . $number_of_result . "'><button class='btn-disabled btn btn-secondary m-2' disabled style='cursor:not-allowed;'>NEXT</button></a>";
            }
        } else {

            $path = "show-data.php" . "?page=" . ($page) . "&number_result=" . $number_of_result;
            // echo '<script>alert(NO SEARCH RESULT    !!!);</script>';
            echo '<script>alert("NO SEARCH RESULT    !!!"); location.replace("' . $path . '"); </script>';
        }
    } else {
        ?>



        <table class="table table-striped table-hover " id='table'>


            <tr>
                <th>SRno.</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>GENDER</th>
                <th>HOBBY</th>
                <th>PROFILE IMAGE</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>


            <?php

            if (!isset($_GET['page'])) {
                $page = 1;
            } else {
                if ($_GET['page']) {
                    header('show-data.php?page=" . ($page + 1) . "&number_result=" . $number_of_result . "');
                }
                $page = $_GET['page'];
            }



            if (isset($_GET['number_result'])) {
                $number_of_result = $_GET['number_result'];
            } else {
                $number_of_result = 3;
            }

            $sql = "SELECT * from form_data";
            $result = mysqli_query($conn, $sql);
            $total_records = mysqli_num_rows($result);
            $start = ($page - 1) * $number_of_result;

            ?>

            <?php
            $srno = $start + 1;

            $sql = "SELECT * from form_data limit " . $start . "," . $number_of_result;
            $result = mysqli_query($conn, $sql);
            $total1 = mysqli_num_rows($result);

            // echo $total;
            // exit();

            if ($total1 > 0) {
                while ($r = mysqli_fetch_assoc($result)) {
            ?>
                    <tr name="<?php echo $r['id']; ?>">
                        <td> <?php echo $srno; ?> </td>
                        <td> <?php echo $r['full_name']; ?> </td>
                        <td> <?php echo $r['email']; ?> </td>
                        <td> <?php echo $r['gender']; ?> </td>
                        <td> <?php echo $r['hobby']; ?> </td>
                        <td><img src='upload/<?php echo $r['img']; ?>' width=120 height=80></td>
                        <td><button name='edit' data-toggle='modal' data-target='#editModal' class='edit btn btn-md btn-outline-primary'> EDIT </button></td>
                        <td><button name='delete' class='btn btn-md btn-outline-danger delete' id='delete' data-id="<?php echo $r['id']; ?>"> DELETE </button></td>
                    </tr>
        <?php
                    $srno++;
                }
            } else {

                $path = basename($_SERVER['PHP_SELF']) . "?page=" . ($page - 1) . "&number_result=" . $number_of_result;
                echo '<script> location.replace("' . $path . '"); </script>';
            }

            echo "</table>";

            $total_pages = ceil($total_records / $number_of_result);

            // pages pagination
            if ($page > 1) {
                echo "<a href='show-data.php?page=" . ($page - 1) . "&number_result=" . $number_of_result . "'><button class='btn btn-primary m-2'>PREV</button></a>";
            } else {
                echo "<a href='show-data.php?page=" . $page . "&number_result=" . $number_of_result . "'><button class='btn btn-secondary m-2' disabled style='cursor:not-allowed;'>PREV</button></a>";
            }
            for ($pages = 1; $pages <= $total_pages; $pages++) {
                if ($page == $pages) {
                    echo "<a href='show-data.php?page=" . $pages . "&number_result=" . $number_of_result . "'><button class='btn btn-success m-2'>$pages</button></a>";
                } else
                    echo "<a href='show-data.php?page=" . $pages . "&number_result=" . $number_of_result . "'><button class='btn btn-primary m-2'>$pages</button></a>";
            }


            if ($page > 0 && $page != $pages - 1) {
                echo "<a href='show-data.php?page=" . ($page + 1) . "&number_result=" . $number_of_result . "'><button class='btn-disabled btn btn-primary m-2'>NEXT</button></a>";
            } else {
                echo "<a href='show-data.php?page=" . ($page + 1) . "&number_result=" . $number_of_result . "'><button class='btn-disabled btn btn-secondary m-2' disabled style='cursor:not-allowed;'>NEXT</button></a>";
            }
        }
        ?>