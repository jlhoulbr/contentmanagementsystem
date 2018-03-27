<?php
$page = $_POST['page'];
if(unlink('forms/'.$page.'.html') && unlink('rawForms/'.$page.".html") && unlink('rawForms/'.$page."Options.html")){
    echo 'Form Deleted!';
} else {
    echo 'error while deleting form!';
}
