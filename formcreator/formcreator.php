<?php
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
$formHTML = str_replace('<span class="star">*</span>',"",$formHTML);
$formHTML = str_replace('<span class="star" style="display: block;">*</span>',"",$formHTML);
$formHTML = str_replace('<span class="remove-formPanel" style="display: block;"><img class="remove-img" src="../../formcreator/custom/delete.png"></span>',"",$formHTML);
$formHTML = str_replace('style="outline: rgb(212, 212, 212) dashed 1px;" ',"",$formHTML);
$formHTML = str_replace('<input class="empty ui-sortable-handle" style="">',"",$formHTML);
$formHTML = str_replace('<span class="remove-formPanel"><img class="remove-img" src="../../formcreator/custom/delete.png"></span>',"",$formHTML);
$formHTML = str_replace('<span class="star" style="display: none;">*</span>',"",$formHTML);
$formHTML = str_replace('<span class="remove-formPanel" style="display: none;"><img class="remove-img" src="../../formcreator/custom/delete.png"></span>',"",$formHTML);
$formHTML = str_replace('<input class="empty">',"",$formHTML);
$formHTML = str_replace('<input class="empty" style="">',"",$formHTML);
$formHTML = str_replace('<span class="star">*</span>',"",$formHTML);
$formHTML = str_replace('<br>',"",$formHTML);
$formHTML = str_replace('<img class="sortable-img" src="../../formcreator/custom/sortable.png">',"",$formHTML);
$formHTML = trim($formHTML);
$formHTML = '<form id="'.$newFormName.'" onsubmit="return formHandler(\''.$newFormName.'\')">'.$formHTML.'<div class="g-recaptcha" data-sitekey="6Le_CEUUAAAAANDccAIPwwFvQnF5GTVz_NC0K17w"></div><br><input type="submit"></form>';

$myfile = fopen('forms/'.$formname.'.html', "w") or die("Unable to open file!");
fwrite($myfile, $formHTML);
fclose($myfile);



