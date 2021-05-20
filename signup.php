<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Signup</title>
    <link rel="stylesheet" href="./assets/stylesheets/index.css" type="text/css">
    <script>
        $("#password").on("focusout", function() {
            if ($(this).val() != $("#password2").val()) {
                $("#password2").removeClass("valid").addClass("invalid");
            } else {
                $("#password2").removeClass("invalid").addClass("valid");
            }
        });

        $("#password2").on("keyup", function() {
            if ($("#password").val() != $(this).val()) {
                $(this).removeClass("valid").addClass("invalid");
            } else {
                $(this).removeClass("invalid").addClass("valid");
            }
        });
    </script>
</head>

<body>
    <ul>
        <li></li>
    </ul>
</body>

<?php require "./header.php"; ?>

<div>

    <br><br>
    <form name="frmContact" class="needs-validation " method="post" action="myphp.php">
        <fieldset>
            <section>
                <h1>Sign Up</h1>

                <input name="name" id="txtName" placeholder="Name" type="text" required /><br/><br>
                <input name="email" id="txtEmail" placeholder="Email" type="email" required /><br/><br>
                <input name="password" id="txtPassword" placeholder="password" type="password" required /><br/><br>


                <!-- <textarea name="message" placeholder="Message" required></textarea><br><br> -->
                <button type="submit" id="submit" class="btn">submit</button>
                <section><a href="login.php">Have an account already?, login</a>
                </section>
        </fieldset>
    </form>
</div>

<!-- Form section end -->
<br><br>

</html>