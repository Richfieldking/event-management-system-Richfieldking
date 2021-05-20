<ul>
    <li>
        <a href="index.php">TheEventBooker</a>
    </li>
    <li><a href="EventHost.php">Host an Event</a></li>
    <li><a href="contact-me.php">Contact US</a></li>
    <li><a href="About.php">About</a></li>
    <?php 

        session_start();

        if(!isset($_SESSION['username'])){
            echo '<li><a href="signup.php">Sign-Up</a></li>';
        }else{
            echo '<li><a href="logout.php">LOGOUT</a></li>';
        }
    ?>
</ul>