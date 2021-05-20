<?php
session_start();
    
    $connection = mysqli_connect ("localhost","root","","eventbooking database");

    if(isset($_POST['submit']))
    {
       //getting the data from the form
        $username=$_POST['username'];
        $password=$_POST['password'];
        
        $find_username_query="select * from users where Username='$username'";
        
        
        $query_username=mysqli_query($connection,$find_username_query);
        
        $fetch_username=mysqli_fetch_array($query_username,MYSQLI_NUM);
        
        if($fetch_username)
        {
            $get_user_pass_query="select * from users where Username='$username'";
            
            $query_for_passget=mysqli_query($connection,$get_user_pass_query);
            
            $row = mysqli_fetch_assoc($query_for_passget);
            
            if ($password==$row['Password'])
            {
                echo "Log in successful";
                $_SESSION["username"]=$username;
                header('Location:index.php');
            }
            else
            {
                echo "Username and password mismatch";
                $_SESSION["status"]="Username and password mismatch";
                //header('Location: ../');   
            }
        }
        else
        {
            echo "Email is not registered.Please sign up or check typed email";
            $_SESSION["status"]="Email is not registered.Please sign up or check typed email";
            //header('Location:../login.html');
        }
        
    }
    else{
       echo "<p>Insertion Failed <br/> Some fields are Balnk......!!</p>"; 
        $_SESSION['status']="Empty Fields";
        //header('Location:../login.html');
    }
    mysqli_close($connection);
?>