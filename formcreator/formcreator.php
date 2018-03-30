<?php
$regex = '(<img.*?>)';
$regex2 = '(<input class="empty.*?>)';
$regex3 = '(<span class="star.*?n>)';
$regex4 = '(<span class="re.*?n>)';
$regex5 = '(style="out.*?;")';

$formHTML = $_POST['form'];
$formname = $_POST['formname'];
$formOptions = $_POST['formOptions'];
$myfile = fopen('rawForms/'.$formname.'.html', "w") or die("Unable to open file!");
fwrite($myfile, trim($formHTML));
fclose($myfile);
$myfile = fopen('rawForms/'.$formname.'Options.html', "w") or die("Unable to open file!");
fwrite($myfile, trim($formOptions));
fclose($myfile);

$newFormName = str_replace(' ','',$formname);
$formHTML = preg_replace($regex,"",$formHTML);
$formHTML = preg_replace($regex2,"",$formHTML);
$formHTML = preg_replace($regex3,"",$formHTML);
$formHTML = preg_replace($regex4,"",$formHTML);
$formHTML = preg_replace($regex5,"",$formHTML);
$formHTML = str_replace('<br>',"",$formHTML);
$formHTML = trim($formHTML);
$formHTML = '<form id="'.$newFormName.'" onsubmit="return formHandler(\''.$newFormName.'\')">'.$formHTML.'<div class="g-recaptcha" data-sitekey="6Le_CEUUAAAAANDccAIPwwFvQnF5GTVz_NC0K17w"></div><br><input type="submit"></form>';

$myfile = fopen('forms/'.$formname.'.html', "w") or die("Unable to open file!");
fwrite($myfile, $formHTML);
fclose($myfile);



