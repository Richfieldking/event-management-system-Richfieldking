<?php
    $txteventname=filter_input(INPUT_POST, 'eventname');
    $txtorganizername=filter_input(INPUT_POST, 'organizername');
    $txtplace=filter_input(INPUT_POST, 'area');
    $txtaddress1=filter_input(INPUT_POST, 'address1');
    $txtaddress2=filter_input(INPUT_POST, 'address2');
    $txtCountry=filter_input(INPUT_POST, 'country');
    $txtZipCode=filter_input(INPUT_POST, 'ZipCode');
    $txtCity=filter_input(INPUT_POST, 'City');
    $txtState=filter_input(INPUT_POST, 'State');
    $txtstartdate=filter_input(INPUT_POST, 'start_date');
    $txtenddate=filter_input(INPUT_POST, 'end_date');
   
    if (!empty($txteventname)) {
       if (!empty($txtorganizername)) {
        if (!empty($txtplace)) {
                   if (!empty($txtaddress1)) {
                       if (!empty($txtaddress2)) {
                           if (!empty($txtCountry)) {
                               if (!empty($txtZipCode)) {
                                   if (!empty($txtCity)) {
                                       if (!empty($txtState)) {
                                        if (!empty($txtstartdate)) {
                                               if (!empty($txtenddate)) {
                   $host="localhost";
                   $dbusername="root";
                   $dbpassword="";
                   $dbname="eventbooking database";
                   $conn=new mysqli ($host, $dbusername, $dbpassword, $dbname);
                   if (mysqli_connect_error()) {
                       die('Connect Error ('. mysqli_connect_errno() .') ' . mysqli_connect_error());
                   }
                   else {
                       $sql="INSERT INTO event_creation (event_name, Organizer, area, first_address, second_address, Country, ZIP_Code, City, state_of_place, event_start, event_end)
                        values ('$txteventname', '$txtorganizername', '$txtplace', '$txtaddress1', '$txtaddress2', '$txtCountry', '$txtZipCode', '$txtCity', '$txtState', '$txtstartdate', '$txtenddate')";
                    if ($conn->query($sql)) {
                       
                        header("Location:index.php");
                   }
                   else {
                           echo "Sign up failed". $sql ."<br>". $conn->error;
   
                   }
                       $conn->close();
                   }
               }
               else {
                   echo "End Date cannot be empty";
               }
            }
            else {
                echo "Start Date cannot be empty";
            }
       }
       else {
           echo "State cannot be empty";
           die();
       }
    }
    else {
        echo "City cannot be empty";
    }
 }
 else {
     echo "ZIP code cannot be empty";
 }
 }
 else {
    echo "Country cannot be empty";
 }
 }
 else {
     echo "Address 2 cannot be empty";
 }
 }

else {
    echo "Address 1 cannot be empty";
}
 }
 else {
     echo "location cannot be empty";
 }
 
 }
 else {
     echo "Organizer cannot be empty";
 }
 }
 else {
      echo "Event Name cannot be empty";
 }
  
?>