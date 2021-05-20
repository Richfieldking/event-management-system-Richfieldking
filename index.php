<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="./assets/stylesheets/index.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/jumbotron/">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <!-- Bootstrap core CSS -->
    <!-- <link href="../../dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="./assets/stylesheets1/bootstrap/bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css">
    <link href="jumbotron.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

</head>

<body>
    <!-- <ul>
            <li>
                <a href="index.php">TheEventBooker</a>
            </li>
            <li><a href="signup.php">Sign-Up</a></li>
            <li><a href="EventHost.php">Host an Event</a></li>
            <li><a href="contact-me.php">Contact Us</a></li>
            <li><a href="About.php">About</a></li>
        </ul> -->

    <?php include "header.php"; ?>

    <main role="main">

        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">Book Events Here!</h1>
                <p>Register to book an event with specification of venue, Decided number of attendees and may more
                <p>
                    <a href="events.php">
                        <section><button><a href="MoreEventPage">View More Events</button></section>
                    </a>
                </p>
            </div>
        </div>


        <div class="container">
            <div class="row m-0">
                <?php
                $conn = mysqli_connect("localhost", "root", "", "eventbooking database");

                $sql = "SELECT event_name, Organizer, event_start FROM event_creation";

                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_all($result, MYSQLI_ASSOC);

                foreach ($row as $key => $value) {
                    echo "
                                <div class='col-md-4 mb-2'>

                                    <img class='card-img-top' src='./assets/stylesheets1/images/drone.jpeg'>
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

    </main>

    <footer class="container ">
        <p>&copy; 2021</p>
    </footer>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js "><\/script>')
    </script>
    <script src="../../assets/js/vendor/popper.min.js "></script>
    <script src="../../dist/js/bootstrap.min.js "></script>
</body>