<?php
$date2 = date('d/m/y h:i:sa');
$ip = $_SERVER['REMOTE_ADDR'];
$data = 'Date Submitted: '. $date2 . '<br>IP: '.$ip.'<br>';
$b = 1;
$formname = $_POST['formId'];

$dir = scandir('forms/'.$formname);
    if(max($dir) != '..'){
        $b = max($dir);
    $b = str_replace('.html', '', $b);
    $b++;
}

if($_POST['values']) {
        foreach ($_POST['values'] as $key => $value) {
            if($key != 'g-recaptcha-response') {
                $data .= $key . " : " . $value.'<br>';
            }
        };

    $myfile = fopen('forms/'.$formname.'/'.$b.'.html', "w") or die("Unable to open file!");
    fwrite($myfile, $data);
    fclose($myfile);
    echo 'Thank you the form was submitted!';
} else {
    echo 'There was an error when submitting the form!';
}
