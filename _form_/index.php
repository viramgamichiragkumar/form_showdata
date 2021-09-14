<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>
    <script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
    <!-- swal('Good job!', 'You clicked the button!', 'success'); -->

    <link rel="stylesheet" href="assest/style.css">
    <script src="assest/script.js"></script>

    <style>
        span {
            color: rgb(231 182 64);
        }
    </style>

</head>

<body>
    <button class="btn btn-primary float-right" id='showdata'>Show Data</button>
    <br><br>
    <center>
        <p>Sign Up </p>
    </center>
    <div class="container col-md-5 bg-secondary text-white p-4">

        <form method="post"  id="form1" enctype="multipart/form-data">

            <div class="form-group  justify-content-center">
                <h5><label for="full_name">Full Name</label></h5>
                <input type="text" name="full_name" id="full_name" minlength="5" class="form-control">
                <span id='full_name_error'></span>
            </div>

            <hr>
            <div class="form-group  justify-content-center">
                <h5><label for="email">Email</label></h5>
                <input type="email" name="email" id="email" class="form-control">
                <span id='email_error'></span>
            </div>

            <hr>
            <h5>Gender</h5>
            <div class="form-check form-check-inline">

                <input type="radio" class="form-check-input" name="gender" id="male" value="male">

                <label class="form-check-label" for="male">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="gender" id="female" value="female">
                <label class="form-check-label" for="female">
                    Female
                </label>
            </div>
            <span id='gender_error'></span>

            <hr>
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

            <hr>
            <h5>Select Image</h5>
            <div class="form-group justify-content-center">
                <input type="file" name="upload_image" id="upload_image" class="form-control-file" style="display:block;">
                <span id='upload_image_error'></span>
            </div>

            <hr>
            <div class="form-group justify-content-center">
                <input type="submit" name="submit" id="submit" class="form-control btn-lg btn-primary">
            </div>

        </form>
    </div>

    <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
     -->
    <script>
        $('#showdata').click(function() {
            window.location = "show-data.php";
        });
        $('#form1').submit(function() {
            console.log(validate_data());
            if (validate_data() == true) {
                
                return true;
            } else {
                console.log(0);
                return false;

            }
        });
    </script>
</body>

</html>
<?php require 'data.php'; ?>