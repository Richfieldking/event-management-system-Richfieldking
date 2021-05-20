<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create Event</title>
    <link rel="stylesheet" href="./assets/stylesheets/index.css" type="text/css">
    <meta name="keywords" content="Eventbooking,Online booking,events">


</head>

<body>

    <?php require "header.php"; ?>

    <form class="container" method="post" action="create_event.php">

        <section>
            <h1>Basic Information Required</h1>
            <h4>(Provide event information)</h4>
            <p><input type="text" name="eventname" value="txteventname" placeholder="Event Name"></p>
            <p><input type="text" name="organizername" value="txtorganizername" placeholder="Organizer"></p>



        </section>


        <section>
            <h1>Venue Details</h1>
            <p><input type="text" value="txtplace" name="area"></p>
            <p>Provide Venue Location Details in the form below</p>
            <p><input type="text" value="txtaddress1" name="address1" placeholder="Addresss 1" required></p>
            <p><input type="text" value="txtaddress2" name="address2" placeholder="Address 2" required></p>
            <p><input type="text" value="txtCountry" name="country" placeholder="Country" required></p>
            <p><input type="text" value="txtZipCode" name="ZipCode" placeholder="Zip Code" required></p>
            <p><input type="text" value="txtCity" name="City" placeholder="City" required></p>
            <p><input type="text" value="txtState" name="State" placeholder="State" required></p>
        </section>


        <section>

            <h3>Start and End Date</h3>
            <input type="date" value="txtstartdate" name="start_date" placeholder="Start Date">
            <input type="date" value="txtenddate" name="end_date" placeholder="End Date">
        </section>


        <p></p>

        <p><input id=" Submitbutton1 " class="btn btn-primary" type="submit" value="Save and Continue" />
            <input class="btn btn-primary" type="button" onclick="window.location.replace('Eventbooker.html')" value="Cancel" /></p>
    </form>





</body>

</html>