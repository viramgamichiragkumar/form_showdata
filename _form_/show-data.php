<!-- 
    
<div class="preloader">
        <div class="spinner"></div>
    </div>
     -->
<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOW DATA</title>
    <!-- JQUERY CDNs -->
    <script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <!-- BOOTSTRAP CDNs -->
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>
    <!-- SWEET ALERT -->
    <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
    <!-- swal('Good job!', 'You clicked the button!', 'success'); -->
    <link rel="stylesheet" href="assest/style.css">

    <link rel="stylesheet" href="assest/loader.css">
    <script src="assest/loader.js"></script>

</head>

<body>
    <button class="btn btn-primary float-right" id='adduser'>ADD USERS</button>
    <br><br>
    <center>
        <p>AVAILABLE DATA</p>
        <br>
        <div class="table">
            <select name="select" id="select" style="float: right;">

                <option value="3">3</option>
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
            </select>
            <input type="search" id="search" name="search">
        </div>

        <br>

        <!-- table -->
        <div id="tabledata">
            <?php include 'show-table.php'; ?>
        </div>

        <script src="show-script.js"></script>


        <!-- Modal -->
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Update Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" id="form1" class="container" enctype="multipart/form-data">

                            <input type="hidden" name="hidden" id="hidden">
                            <input type="hidden" name="page" id="page">


                            <label for="Upload_image">
                                <div class="profile-pic">
                                    <input type="hidden" id="profile_pic" name="old-profile-pic">
                                    <span class="glyphicon glyphicon-camera"></span>
                                    <span>Change Image</span>
                                </div>
                            </label>
                            <input type="File" name="Upload_image" id="Upload_image">


                            <div class="form-group  justify-content-center">
                                <h5><label for="full_name">Full Name</label></h5>
                                <input type="text" name="full_name" id="full_name" class="form-control">
                                <span id='full_name_error'></span>
                            </div>
                            <div class="form-group  justify-content-center">
                                <h5><label for="email">Email</label></h5>
                                <input type="text" name="email" id="email" class="form-control">
                                <span id='email_error'></span>
                            </div>

                            <h5>Gender</h5>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" name="gender" id="male" value="male" checked>
                                <label class="form-check-label" for="male">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" name="gender" id="female" value="female">
                                <label class="form-check-label" for="female">Female</label>
                            </div>
                            <span id='gender_error'></span>

                            <h5>Hobby</h5>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" name="checkbox[]" class="form-check-input checkbox" id="cricket" value="cricket">
                                <label class="form-check-label" for="cricket">cricket</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" name="checkbox[]" class="form-check-input checkbox" id="sleeping" value="sleeping">
                                <label class="form-check-label" for="sleeping">sleeping</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" name="checkbox[]" class="form-check-input checkbox" id="gaming" value="gaming">
                                <label class="form-check-label" for="gaming">gaming</label>
                            </div>
                            <span id='hobby_error'></span>

                            <div class="modal-footer">
                                <input type="submit" name="update" id="update" class="btn btn-lg mr-auto btn-primary" value="Update">
                                <input type="submit" class="btn btn-lg btn-secondary" data-dismiss="modal" value="Close">
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <?php require 'edit.php';  ?>


        <script>
            // $(document).ready(function() {
            //     $.get("./show-data.php", function(data) {
            //        $("$").append(data);
            //     });
            // });
            $('#search').keyup(function() {
                search = $(this).val();

                $.ajax({
                    url: 'show-table.php',
                    method: 'post',
                    data: {
                        s: search
                    },
                    success: function(data) {
                        // console.log(data);
                        console.log();
                        $('#tabledata').html("");
                        $('#tabledata').append(data);
                        // $('#tabledata').load("show-table.php");

                    }
                });

            });
        </script>

    </center>
</body>



</html>