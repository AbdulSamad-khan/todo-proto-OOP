<?php
include_once 'includes/autoLoad.inc.php';

if (isset($_POST['submit'])) {
  print_r($_POST);

$task = $_POST['task'];

if(empty($task)){
header("Location:index.php?error=emptytask");
exit();
}else if(!isset($_POST['status'])){
$test = new Test($task,'unactive');
$test->insertTodo();
$test->display();
}else if(isset($_POST['status'])){
  $test = new Test($task,$_POST['status']);
  $test->insertTodo();
  $test->display();
}
}


 ?>

<form class="" action="" method="post">
  <input type="text" name="task" placeholder="enter a placeholder">
   <input type="checkbox" name="status" value = 'active'>
  <input type="submit" name="submit" value="+">
</form>
