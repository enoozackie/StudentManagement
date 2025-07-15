<?php
include 'vendor/autoload.php';

Use Akol\StudentManagement\Model\StudentModel;

$student = new StudentModel;
$student-> id = 2024611053;
$student-> fullname = "lourd ian";
$student-> yearlevel = "FirstYear";
$student-> course = "BSIT 1";
$student-> section = "A";

$student-> DisplayInfo();
