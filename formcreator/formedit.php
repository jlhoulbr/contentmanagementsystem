<?php
$page = $_POST['page'];
$form = file_get_contents('rawForms/'.$page.".html");
$formOptions = file_get_contents('rawForms/'.$page."Options.html");
$formArray = new stdClass();
$formArray->form = $form;
$formArray->options = $formOptions;
echo json_encode($formArray);