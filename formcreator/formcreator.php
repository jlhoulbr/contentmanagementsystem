<?php
$formHTML = $_POST['form'];
$formname = $_POST['formname'];

$formHTML = str_replace('<span class="star">*</span>',"",$formHTML);
$formHTML = str_replace('<span class="star" style="display: block;">*</span>',"",$formHTML);
$formHTML = str_replace('<span style="color: red; display: block;" class="remove-formPanel">remove</span>',"",$formHTML);
$formHTML = str_replace('<input class="empty ui-sortable-handle" style="">',"",$formHTML);
$formHTML = str_replace('<span style="color:red;" class="remove-formPanel">remove</span>',"",$formHTML);
$formHTML = str_replace('<input class="empty">',"",$formHTML);
$formHTML = str_replace('<input class="empty" style="">',"",$formHTML);
$formHTML = str_replace('<span class="star">*</span>',"",$formHTML);
$formHTML = str_replace('<br>',"",$formHTML);
$formHTML = trim($formHTML);
$formHTML = '<form onsubmit="return formHandler(this)">'.$formHTML.'<div class="g-recaptcha" data-sitekey="6Le_CEUUAAAAANDccAIPwwFvQnF5GTVz_NC0K17w"></div><br><input type="submit"></form>';

$myfile = fopen('forms/'.$formname.'.html', "w") or die("Unable to open file!");
fwrite($myfile, $formHTML);
fclose($myfile);



