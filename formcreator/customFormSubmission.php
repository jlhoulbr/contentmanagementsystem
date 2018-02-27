<?php
foreach ($_POST as $input){
  foreach ($input as $key => $value){
      error_log($key ." : ". $value);
  };
}
