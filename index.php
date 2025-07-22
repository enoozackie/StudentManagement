<?php
use akol\StudentManagement\Core\Database;
use Akol\StudentManagement\Model\StudentModel;


include 'vendor/autoload.php';


$students = new StudentModel;
$students  = $student->read();
var_dump($students);
