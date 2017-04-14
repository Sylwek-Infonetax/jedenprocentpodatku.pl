<?php
if (!isset($_GET['a'])) {$_GET['a']='dane_kontaktowe';}
    
if ($_GET['a']=='dane_kontaktowe') {
echo '
    <h1>Dane kontaktowe</h1>
    <br /><br />
    
    <center>
        <h3>INFONETAX Sp. z o.o.</h3><br />
        
        <div style="font-size: 18px;">
            Ul. Olszewskiego 6, 25-663 Kielce<br />
            Telefon: 41 344 52 24<br />
            FAX: 41 343 67 31<br />
            NIP: 657 273 65 50<br />
            Nr KRS: 0000277160<br />
            Kapitał zakładowy: 50 000 zł<br />
            Sąd Rejonowy w Kielcach, X Wydział Gospodarczy KRS<br />
        </div>
        <br /><br />

        <h3>Jak do nas trafić</h3>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1453.810791981296!2d20.62298097416031!3d50.89313667462715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x28a6f5c8d57960bf!2sKielecki+Park+Technologiczny!5e0!3m2!1spl!2spl!4v1470994996221" width="90%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </center>
';}

if ($_GET['a']=='formularz_kontaktowy') {
echo '
    <h1>Formularz kontaktowy</h1>
    <br /><br />

		                                                
<form name="enq" method="post" action="email/" onsubmit="return validation();">
<fieldset>
    
<input type="text" name="name" id="name" value=""  class="input-block-level" placeholder="Name" />
<input type="text" name="email" id="email" value="" class="input-block-level" placeholder="Email" />
<textarea rows="11" name="message" id="message" class="input-block-level" placeholder="Comments"></textarea>
   
<div class="actions">
<input type="submit" value="Send Your Message" name="submit" id="submitButton" class="btn btn-info pull-right" title="Click here to submit your message!" />
</div>
	
</fieldset>
</form> 
';

 if(isset($_POST['submit']))
 {
    $name = $_POST['name'];
	$email = $_POST['email'];
	$query = $_POST['message'];
	$email_from = $name.'<'.$email.'>';

 $to="s.zajac@infonetax.pl";
 $subject="Enquiry!";
 $headers  = 'MIME-Version: 1.0' . "\r\n";
 $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 $headers .= "From: ".$email_from."\r\n";
 $message="	  
 	   
 		 Name:
		 $name 	   
         <br>
 		 Email-Id:
		 $email 	   
         <br>
 		 Message:
		 $query 	   
      
   ";
	if(mail($to,$subject,$message,$headers))
		echo 'Successful Submission! Thankyou for contacting us.';
	else
		echo 'Error To send Email !';
		//contact:-your-email@your-domain.com
 }
    
}