<?php
$page = $_POST['page'];
if(unlink('forms/'.$page.'.html')){
    echo 'Form Deleted!';
} else {
    echo 'error while deleting form!';
}
