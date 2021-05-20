<html>

<head>
    <meta charset="UTF-8">
    <title>Events</title>
    <link rel="stylesheet" href="./assets/stylesheets/index.css" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">

        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/jumbotron/">
        <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
        <!-- Bootstrap core CSS -->
        <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="jumbotron.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

</head>

<body>
    
<?php 
    require "header.php";

    echo '<br />';
?>

<div class="container">
    <div class="row m-0">
        <?php 
            $conn = mysqli_connect ("localhost","root","","eventbooking database");

            $sql = "SELECT event_name, Organizer, event_start FROM event_creation";
        
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
        
            foreach($row as $key => $value){
                echo "
                    <div class='col-md-4'>

                        <img class='card-img-top' src='./assets/stylesheets1/images/careeer.jpeg'>
                        <h2>$value[event_name]</h2>

                        <p>Book this event now to learn more about your career
                        </p>
                        <small>Organizer: <b> $value[Organizer] </b> </small>
                    </div>
                ";
            }
        ?>
    </div>
</div>



</body>

</html>