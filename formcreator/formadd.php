<?php
$formFile = $_POST['formFile'];
$targetURL = $_POST['target_url'];
$pageContents = file_get_contents('forms/'.$formFile.'.html');
$file;
if($pageContents != '' || $pageContents != null){
    foreach(glob($targetURL."*.md") as $filename){
   $file = $filename;
}
    $myfile = fopen($file, "a") or die("Unable to open file!");
    fwrite($myfile, $pageContents);
    fclose($myfile);
    echo 'Form Added!';
} else {
    echo 'error while adding form!';
}
