<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';

    $mail = new PHPMailer(true);
    try {
        $mail->SMTPDebug = 2; // 2 Debug on päällä
        $mail->isSMTP();
        $mail->Host = ' ';//sähköpostin palvelin 
        $mail->SMTPAuth = true;
        $mail->Username = ' ';//sähköpostin tunnukset
        $mail->Password = ' ';//sähköpostin tunnukset
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom(''); //sähköpostin tunnukset
	    $mail->addReplyTo(" ", "Vastaa viestiin");
        $mail->addAddress($_POST['mail'], ' '); // vastaanottaja

        $nimi = $_POST['nimi'];
        $puhnmr = $_POST['puhnmr'];
        $text = $_POST['text'];
        $mail->isHTML(true);              
        $mail->Subject = $_POST['aihe'];
	    $mail->Body = "<h2>Kiitos viestistä, <b>".$nimi.".</h2></b><br>Puhelinnumerosi on <b>".$puhnmr."</b><br><br>Viestisi<br><br>.$text.<br><br><br><br><hr><br> <p>Otan mahdollisimman nopeasti yhteyttä.</p><p>Ystävällisin terveisin<b> Kriba.</b></p>";


 	

        $mail->send();
    	echo 'Debug sanoo että viesti on lähetetty';
        // echo location:'' jos sivun haluaa pävittiää uuteen, muuten se menee $mail->SMTPDebug = 2;  
        exit();
    } catch (Exception $e) {
        echo 'Debug sanoo että Viestiä ei lähetetty.';
        echo 'Virhe: /n' . $mail->ErrorInfo;
        // echo location:'' jos sivun haluaa pävittiää Virhe Sivuun, muuten se menee $mail->SMTPDebug = 2; 
    }
    ?>