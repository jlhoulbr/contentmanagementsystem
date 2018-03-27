<?php
function replace_between($str, $needle_start, $needle_end, $replacement)
{
    $pos = strpos($str, $needle_start);
    $start = $pos === false ? 0 : $pos;

    $pos = strpos($str, $needle_end, $start);
    $end = $pos === false ? strlen($str) : $pos + strlen($needle_end);
    return substr_replace($str, $replacement, $start, $end - $start);
}

$formFile = $_POST['formFile'];
$targetURL = $_POST['target_url'];
$pageContents = file_get_contents('forms/' . $formFile . '.html');
$file;
if ($pageContents != '' || $pageContents != null) {
    foreach (glob($targetURL . "*.md") as $filename) {
        $file = $filename;
    }

    $contents = file_get_contents($file);
    if (substr_count($contents, '<form id="' . $formFile) > 0) {
        $contents = replace_between($contents, '<form id="' . $formFile, '</form>', $pageContents);
        $myfile = fopen($file, "w") or die("Unable to open file!");
        fwrite($myfile, $contents);
        fclose($myfile);
        echo 'Form Updated!';
    } else {
        $myfile = fopen($file, "a") or die("Unable to open file!");
        fwrite($myfile, $pageContents);
        fclose($myfile);
        echo 'Form Added!';
    }
} else {
    echo 'error while adding form!';
}
