<?php

    session_start();
 $txtName=filter_input(INPUT_POST, 'name');
 $txtEmail=filter_input(INPUT_POST, 'email');
 $txtPassword=filter_input(INPUT_POST, 'password');

 if (!empty($txtName)) {
    if (!empty($txtEmail)) {
            if (!empty($txtPassword)) {
                $host="localhost";
                $dbusername="root";
                $dbpassword="";
                $dbname="eventbooking database";
                $conn=new mysqli ($host, $dbusername, $dbpassword, $dbname);
                if (mysqli_connect_error()) {
                    die('Connect Error ('. mysqli_connect_errno() .') ' . mysqli_connect_error());
                }
                else {
                    $sql="INSERT INTO users (Username, Email, Password)
                     values ('$txtName', '$txtEmail', '$txtPassword')";
                 if ($conn->query($sql)) {
                    echo "You have signed up Succesfully";
                    $_SESSION["username"] = $txtName;
                    header("Location:index.php");
            }
            else {
                    echo "Sign up failed". $sql ."<br>". $conn->error;

            }
                $conn->close();
            }
            }
            else {
                echo "This field cannot be empty";
            }
        }
        else {
            echo "This field cannot be empty";
            die();
        }
    }
    else {
        echo "This field cannot be empty";
        die();
    }
  

?>



