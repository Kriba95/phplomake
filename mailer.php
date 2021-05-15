<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';

    $mail = new PHPMailer(true);                             
    try {
        $mail->SMTPDebug = 2;                                 
        $mail->isSMTP();                                      
        $mail->Host = ' ';			  
        $mail->SMTPAuth = true;                               
        $mail->Username = ' ';                 
        $mail->Password = ' ';                           
        $mail->SMTPSecure = 'ssl';                          
        $mail->Port = 465;
        $mail->setFrom('');
	    $mail->addReplyTo(" ", "Vastaa viestiin");
        $mail->addAddress($_POST['mail'], ' ');

        $nimi = $_POST['nimi'];
        $puhnmr = $_POST['puhnmr'];
        $text = $_POST['text'];
        $mail->isHTML(true);              
        $mail->Subject = $_POST['aihe'];
	    $mail->Body = "<h2>Kiitos viestistä, <b>".$nimi.".</h2></b><br>Puhelinnumerosi on <b>".$puhnmr."</b><br><br>Viestisi<br><br>.$text.<br><br><br><br><hr><br> <p>Otan mahdollisimman nopeasti yhteyttä.</p><p>Ystävällisin terveisin<b> Kristian.</b></p>";


 	

        $mail->send();
    	echo 'Debug sanoo että viesti on lähetetty';
        exit();
    } catch (Exception $e) {
        echo 'Debug sanoo että Viestiä ei lähetetty.';
        echo 'Virhe: /n' . $mail->ErrorInfo;
    }
    ?>