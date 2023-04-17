<style>
    <?php
    include 'css/style.css'
    ?>
</style>

<?php
if (isset($_POST['sendMailBtn'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subjectName = $_POST['subject'];
    $message = $_POST['message'];

?>

<?php
    if(!(empty($name)) && !(empty($email)) && !(empty($subjectName)) && !(empty($message)) ){
    session_start();
   $_SESSION["name_error"]="";
   $_SESSION["email_error"]="";
   $_SESSION["sub_error"]="";
   $_SESSION["text_error"]="";


   
echo"<form action=\"thanks.php\" method=\"POST\"  class=\"confirm-form\">
<table class=\"tbl\">
<tbody>
    <tr>
        <td>Name</td>
        <td><input type=\"text\" name=\"confirmed_name\" value=\"$name\" required></td>
    </tr>

    <tr>
        <td>Email</td>
        <td><input type=\"email\" name=\"confirmed_email\" value=\"$email\" required></td>
    </tr>

    <tr>
    <td>Subject</td>
    <td><input type=\"text\" name=\"confirmed_sub\" value=\"$subjectName\" required></td>
    </tr>

    <tr>
    <td>Message</td>
    <td><input type=\"text\" name=\"confirmed_message\" value=\"$message\" required></td>
    </tr>

    <tr>
        <td colspan=\"2\">  <input type=\"submit\" value=\"Confirm\" name=\"confirmBtn\" class=\"confirmBtn\"></td>
    </tr>
</tbody>
</table>
</form>";

    }

    else{ 
        session_start();
        if(empty($name)){
            $_SESSION["name_error"] = "Name Field must be filled in*";
        }
        if(empty($email)){
            $_SESSION["email_error"] = "Email Field must be filled in*";
        }
        if(empty($subject)){
            $_SESSION["sub_error"] = "Subject Field must be filled in*";
        }
        if(empty($message)){
            $_SESSION["text_error"] = "Message Field must be filled in*";
        }
    

       echo '<script>window.location.href="input.php";</script>';
    }
}