


<!DOCTYPE html>
<html>
<!--2021 Kristian Töllikkö, Lämpötilanmuunnin 0.1-->
<head>
<title>Lomake</title>
<link rel="stylesheet" href="css/main.css"> 
<link rel="stylesheet" href="css/animate.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;0,800;1,300;1,700;1,800&display=swap" rel="stylesheet">

<meta charset="utf-8">

</head>

<body>
    
<br><br><br>
      
<section Lämpötilanmuunnin>
  <div class="container wow pulse">
    <div class="teksti">
      <p class="kav-teksti">PHP Lomake</p>
      <hr style="">
      <div class="js-boksi">

<form name="myform" action="mailer.php"  onsubmit="return validateForm()" method="POST">
    <div class="form-group">
        <input id="email" type="text" name="mail" placeholder="Sähköposti">
        <div class="msg error"></div>
    </div>
    <div class="form-group">
        <input id="nimi" type="text" name="nimi" placeholder="Nimi">
        <div class="msgy error"></div>
    </div>
    <div class="form-group">
        <input id="subject" type="text" name="aihe" placeholder="Aihe">
        <div class="msgk error"></div>
    </div>
    <div class="form-group">
        <input id="puhnmr" type="text"  name="puhnmr" placeholder="Puhelinnumero">
        <div class="msgkk error"></div>
    </div>
    <div class="form-group">
        <textarea id="text" name="text" rows="3" placeholder="Viestisi"></textarea>
        <div class="msgn error"></div>

        <button class="Btn" type="submit">Lähetä</button>
    </div>       
</form>
    
  </div>    
</section> 



               
</section Lomake> 
      


</body>

<script src="js/lomake.js"></script>


<!-- Koska työ on julkinen, latasin nopeasti "WOW" animaation-->
<script src="js/wow.min.js"></script>
<script> new WOW().init(); 
// Jälkimmäinen päivättää sivun == 2 on arvo selaimessa joka tunnistaa palaavan käyttäjän
if(performance.navigation.type == 2){ location.reload(true);}</script>


</html>


