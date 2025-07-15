<?php
namespace Akol\StudentManagement\Model;
use Akol\StudentManagement\Core\Crud;
class StudentModel implements Crud {
    public $id;
    public $fullname;
    public $yearlevel;
    public $course;
    public $section;

    public function __construct(){
        $this->id = "";
        $this->fullname = "";
        $this->yealevel= "";
        $this->course = "";
        $this->section = "";
    }


    public function DisplayInfo(){

        echo "id : " .$this->id."\n";
        echo "name : " .$this->fullname."\n";
        echo "yearlevel : " .$this->yearlevel."\n";
        echo "course : " .$this->course."\n";
        echo "section   : " .$this->section."\n";
    }
    
    public function create (){

    }
    public function read(){

    }
    public function update(){


    }
    public function delete(){


    }


}