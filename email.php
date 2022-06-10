<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
  
require 'vendor/autoload.php';
  
$mail = new PHPMailer(true);

if(isset($_SESSION['uemail'])){

        $user_email = $_SESSION['uemail'];
        $username = $_SESSION['uname'];
        try {
            $mail->SMTPDebug = 2;                                       
            $mail->isSMTP();                                            
            $mail->Host       = 'smtp.gmail.com;';                    
            $mail->SMTPAuth   = true;                             
            $mail->Username   = 'occasionplanner46@gmail.com';                 
            $mail->Password   = 'occasion46';                        
            $mail->SMTPSecure = 'tls';                              
            $mail->Port       = 587;  
        
            $mail->setFrom('occasionplanner46@gmail.com', 'O&P Team');           
            $mail->addAddress($user_email);
            $mail->addAddress($user_email);
            
            $mail->isHTML(true);                                  
            $mail->Subject = 'Welcome Message';
            $mail->Body    = 'Hi, <b>'.$username.'</b> </br>
            <p>Welcome to Event family! <br>
            We plan events to give you a mindblowing experience for you special day. <br>
            Checkout our venues and gallery for better understanding for yourself,
            and help us plan your event wonderfull. </p>';
            
            $mail->AltBody = 'Body in plain text for non-HTML mail clients';
            $mail->send();
            
            echo "<script>alert('User Registration Success.');location.href='Innerhome.php'</script>";
        }
        catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
}           

?>