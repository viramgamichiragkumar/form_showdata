<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display data</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-components-web/4.0.0/material-components-web.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/dataTables.material.min.css">
</head>

<body>
  <?php
$sql ="SELECT * FROM form_data  ";

?>
<center>
   

    <table id="example" class="ui celled table" style="width:70%">
        <thead>
            <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
                <th>Extn.</th>
                <th>E-mail</th>
            </tr>
        </thead>
        <tbody>
        <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
                <th>Extn.</th>
                <th>E-mail</th>
            </tr>
        </tbody>
    
    </table>




    <script src='https://code.jquery.com/jquery-3.5.1.js'></script><!--jquery -->
    <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script><!--datatable js -->
<script src="https://cdn.datatables.net/1.11.1/js/dataTables.material.min.js"></script><!--material JS -->


    <script>
        $(document).ready(function() {
    $('#example').DataTable( {
        pageLength : 5,
    lengthMenu: [[5, 10, 20, -1], [5, 10, 20, 'Show All']],
        autoWidth: false,
        columnDefs: [
            {
                targets: ['_all'],
                className: 'mdc-data-table__cell'
            }
        ]
    } );
} );
    </script>
<center>
</body>

</html>