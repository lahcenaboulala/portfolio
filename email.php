<?php
if(isset($_POST['submit']))
{
	if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message']) && !empty($_POST['subject']) )
	{

		$header="MIME-Version: 1.0\r\n";
		$header.='From:"PrimFX.com"<support@primfx.com>'."\n";
		$header.='Content-Type:text/html; charset="uft-8"'."\n";
		$header.='Content-Transfer-Encoding: 8bit';

		$message='
		<html>
			<body>
				<div align="center">
					<img src="http://www.primfx.com/mailing/banniere.png"/>
					<br />
					<u>Nom de l\'expéditeur :</u>'.$_POST['name'].'<br />
					<u>Mail de l\'expéditeur :</u>'.$_POST['email'].'<br />
					<br />
					'.nl2br($_POST['message']).'
					<br />
					<img src="http://www.primfx.com/mailing/separation.png"/>
				</div>
			</body>
		</html>
		';

		if(mail("lahcen.tri@gmail.com", "CONTACT - Monsite.com", $message, $header))	
		{

			echo "Votre message a bien été envoyé !";
		}
		else
		{
			echo "not sent";
		}
	
	}
	else
	{
		$msg="Tous les champs doivent être complétés !";
	}
}
?>