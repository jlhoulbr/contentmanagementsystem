<?php
$forms = "";
foreach(glob('forms/'."*.html") as $filename){
    $filename = str_replace("forms/","",str_replace(".html","",$filename));
    $forms .= '<option value="'.$filename.'">'.$filename.'</option>';
}
echo $forms;