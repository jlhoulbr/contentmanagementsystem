<?php
// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);
error_log('af');
// send email
if(mail("extane2@gmail.com","My subject",$msg)){
    error_log('sent');
};
