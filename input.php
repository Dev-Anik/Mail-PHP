<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<main>
    <section>
        <h1>Contact Us</h1>
    </section>

    <section>
        <form action="confirm.php" method="POST">
            <label for="name">Name</label> <br>
            <input type="text" name="name"><br>
             <p style="color:#f16262">
                <?php
                if(isset($_SESSION["name_error"])){
                echo $_SESSION["name_error"];
                }
                ?>
             </p>

            <label for="email">Email</label> <br>
            <input type="email" name="email"> <br>
            <p style="color:#f16262">
                <?php
                     if(isset($_SESSION["email_error"])){
                echo $_SESSION["email_error"];
                     }
                ?>
             </p>

            <label for="subject">Subject</label> <br>
            <input type="text" name="subject"> <br>
            <p style="color:#f16262">
                <?php
                if(isset($_SESSION["sub_error"])){
                echo $_SESSION["sub_error"];
                     }
                ?>
             </p>

            <label for="message"> Message</label> <br>
            <textarea  name="message"></textarea>
             <br>
             <p style="color:#f16262">
                <?php
                 if(isset($_SESSION["text_error"])){
                echo $_SESSION["text_error"];
                     }
                ?>
             </p>

            <input type="submit" value="Submit" name="sendMailBtn">
        </form>
    </section>

    </main>
</body>
</html>