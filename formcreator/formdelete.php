<?php
function deleteDir($dirPath) {
    if (! is_dir($dirPath)) {
        throw new InvalidArgumentException("$dirPath must be a directory");
    }
    if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
        $dirPath .= '/';
    }
    $files = glob($dirPath . '*', GLOB_MARK);
    foreach ($files as $file) {
        if (is_dir($file)) {
            self::deleteDir($file);
        } else {
            unlink($file);
        }
    }
    rmdir($dirPath);
}

$page = $_POST['page'];
if(unlink('forms/'.$page.'.html') && unlink('rawForms/'.$page.".html") && unlink('rawForms/'.$page."Options.html")){
    deleteDir('forms/'.$page);

        echo 'Form Deleted!';
} else {
    echo 'error while deleting form!';
}
