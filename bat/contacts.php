<?php
include "libmail.php";
$mail = new Mail(); // create the mail
// $mail->autoCheck( false );

$mail->From( "cls.x.me@gmail.com" );

$mail->To( "cls.apps.me@gmail.com" );
// $tos = array( "you@isp.com", "u2@isp.com" );
// $mail->To( $tos );

// $mail->ReplyTo( "helpdesk@mycompany.com" );

$mail->Cc( "cls.apps.me@gmail.com" );
// $adr_cc = array( "a@isp.com", "b@isp.com", "c@isp.com" );
// $mail->CC( $adr_cc ); // many recipients in CC

$mail->Subject( "Website Cls" );
$mail->Body( "Hello\nThis is a test of the Mail component Html Php By Cls" );

$mail->Priority(1);

// attach a file of type image/gif to be displayed in the message if possible
$mail->Attach( "./gif/me.gif", "image/gif", "inline" );

$mail->Send();	// send the mail

echo "Mail was sent:"
echo $mail->Get(); // show the mail source
?>