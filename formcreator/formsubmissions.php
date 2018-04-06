<?php
foreach(glob('forms/*', GLOB_ONLYDIR) as $dir) {
    $i = 1;
    $dirname = basename($dir);
    echo '<div class="form-header">'.$dirname.' <i class="fa fa-chevron-down"></i></div><ul>';
    foreach (glob('forms/'.$dirname.'/*') as $submission){
        echo '<div><span class="plus">+</span><span>ID: '.$i.'</span></div><li>'. file_get_contents($submission). '</li>';
        $i++;
    }
    echo '</ul>';
}

