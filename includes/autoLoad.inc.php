<?php
spl_autoload_register('autoLoad');
function autoLoad($className){
  $path = 'classes/';
  $extension = '.class.php';
  include_once $path. $className .$extension;
}
 ?>
