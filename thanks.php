<?php
if(isset($_POST['confirmBtn'])){
    $confirmed_name = $_POST['confirmed_name'];
    $confirmed_email = $_POST['confirmed_email'];
    $confirmed_subject = $_POST['confirmed_sub'];
    $confirmed_message = $_POST['confirmed_message'];
    $to ='anikahmedam@gmail.com';
}
?>

<?php

if(!(empty($confirmed_name)) && !(empty($confirmed_email)) && !(empty($confirmed_subject)) && !(empty($confirmed_message)) ){
    $subject = $confirmed_subject;
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: '.$confirmed_email.'<'.$confirmed_email.'>' . "\r\n".'Reply-To: '.$confirmed_email."\r\n" . 'X-Mailer: PHP/' . phpversion();
    $message = '<!doctype html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<meta name="viewport"
					  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
				<meta http-equiv="X-UA-Compatible" content="ie=edge">
				<title>Document</title>
			</head>
			<body>

			<div class="container">
			'.$confirmed_message.'
              <br/>
                    Regards<br/>
                  '.$confirmed_name.'
				</div>
			</body>
			</html>';



    $result = @mail($to, $subject, $message, $headers);
   $body='<!DOCTYPE html>
   <head>
	   <meta charset="utf-8" />
	   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	   <meta name="viewport" content="width=device-width, initial-scale=1">
	   <title></title>
	   <link href="https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700" rel="stylesheet" type="text/css">
	   <style>
		   @import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
		   @import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
	   </style>
	   <link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
	   <script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
	   <script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
   </head>
   <body>
	   <header class="site-header" id="header">
		   <h1 class="site-header__title" data-lead-id="site-header-title">THANK YOU!</h1>
	   </header>
   
	   <div class="main-content">
		   <i class="fa fa-check main-content__checkmark" id="checkmark"></i>
		   <p class="main-content__body" data-lead-id="main-content-body">Your email has been sent successfully. Thanks for reaching us out. We"ll contact you soon.</p>
		   <p>Go back to the <a href="input.php">homepage.</a></P>
	   </div>
   
   </body>
   </html>';

   echo $body;


}


else{ 

   echo "You must have to fill all the fields to submit the mail!!!";
}

?>

