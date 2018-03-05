<?php
if($_POST) {
    foreach ($_POST as $input) {
        foreach ($input as $key => $value) {
            if($key != 'g-recaptcha-response') {
                echo $key . " : " . $value.'<br>';
            }
        };
    }
    echo 'Thank you, the form was submitted!';
} else {
    echo 'There was an error when submitting the form!';
}
