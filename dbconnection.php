<div class = "available-event">
    <?php
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="eventbooking database";
 $conn=new mysqli ($host, $dbusername, $dbpassword, $dbname);
    $sql = "SELECT event_name, Organizer, event_start FROM event_creation";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_all($result);
  echo json_encode($row);
  ?>
   </div>