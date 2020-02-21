<?php
class Test extends Dbh{
 private $task;
 private $status;

 public function __construct($task,$status){
   $this->task = $task;
   $this->status = $status;
 }
 public function insertTodo(){
   $sql = "INSERT INTO usertodo(task,status) VALUES(?,?);";
   $stmt = $this->connect()->prepare($sql);
   $stmt->execute([$this->task,$this->status]);
   echo $this->task;
 }
 public function display(){
   $sql = "SELECT task,status from usertodo;";
   $stmt = $this->connect()->prepare($sql);
   $stmt->execute();
   $name = $stmt->fetchAll();
  // echo  gettype($name);
  foreach ($name as $key => $value) {
    echo $value['task'];
  }
 }
}
 ?>
