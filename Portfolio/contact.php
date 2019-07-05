<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $message = $_REQUEST['message'];
    require_once('phpmailer/PHPMailerAutoload.php');
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPSecure = 'tls';
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Port = 25;
    $mail->Username = "subbuswaroopportfolio@gmail.com";  // SMTP username
    $mail->Password = "Portfolio@Subbu"; // SMTP password
    $mail->From = $email;
    $mail->AddAddress("subbuswaroopportfolio@gmail.com", "Subbu Swaroop");
    $mail->WordWrap = 50;
    $mail->IsHTML(true);
    $mail->Subject = "You have received feedback from " . $email;
    $mail->Body = $message;

    if (!$mail->Send()) {
        echo "Message could not be sent. 
    ";
        echo "Mailer Error: " . $mail->ErrorInfo;
        exit;
    } else {
        header("Location: successform.html");
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700|Josefin+Sans" rel="stylesheet" />
</head>

<body>
    <div id="wholecontact">
        <div class="container-fluid contactme">
            <p>CONTACT</p>
        </div>
        <div class="container contactheader">
            <p>Do you find me interesting?<br />Then we should definitely talk.</p>
        </div>
        <div class="container contactform">
            <form id="myForm" method="POST" action="">
                <input class="form-control" name="name" id="inputname" placeholder="Name" type="text" required />
                <input class="form-control" name="email" id="inputemail" placeholder="Email" type="email" required />
                <textarea class="form-control" name="message" id="messagetext" placeholder="Message" rows="3"
                    required></textarea>
                <input type="submit" class="btn btn-dark" value="Send" />
            </form>
        </div>
        <div class="container-fluid">
            <div class="row iconsdiv">
                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4"></div>
                <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1 socialicons">
                    <a href="https://www.facebook.com/subbu.swaroop" target="_blank"><img
                            src="./Icons/iconmonstr-facebook-4-240.png" width="80%" height="80%" alt="Facebook"
                            title="Facebook" /></a>
                </div>
                <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1 socialicons">
                    <a href="https://github.com/SubbuSwaroop" target="_blank"><img
                            src="./Icons/iconmonstr-github-1-240.png" width="80%" height="80%" alt="Github"
                            title="Github" /></a>
                </div>
                <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1 socialicons">
                    <a href="https://twitter.com/Subbu_Swaroop" target="_blank"><img
                            src="./Icons/iconmonstr-twitter-4-240.png" width="80%" height="80%" alt="Twitter"
                            title="Twitter" /></a>
                </div>
                <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1 socialicons">
                    <a href="https://www.linkedin.com/in/subbu-swaroop-50a1a6108/" target="_blank"><img
                            src="./Icons/iconmonstr-linkedin-4-240.png" width="80%" height="80%" alt="Linkedin"
                            title="Linkedin" /></a>
                </div>
            </div>
        </div>
        <div class="container">
            <br />
            <br />
            <div class="row">
                <div class="col-sm-5 col-lg-5 col-md-5"></div>
                <div class="col-sm-2 col-lg-2 col-md-2">
                    <div class="containerSvg downarrow">
                        <a href="./index.php">
                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 69.28 60" height="100%">
                                <title>UpArrow</title>
                                <polygon points="0 60 34.64 0 69.28 60 0 60" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-sm-5 col-lg-5 co-md-5"></div>
            </div>
        </div>
    </div>
</body>

</html>