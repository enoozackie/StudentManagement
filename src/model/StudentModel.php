<?php
namespace Akol\StudentManagement\Model;
use Akol\StudentManagement\Core\Crud;
use Akol\StudentManagement\Core\Database;
class StudentModel extends Database implements Crud {
    public $id;
    public $fullname;
    public $yearlevel;
    public $course;
    public $section;

    public function __construct()
    {
{
        parent:: __construct();
            $this-> id = "";
            $this->name = "";
            $this->yearlevel = " ";
            $this->course = "";
            $this->section = "";

}
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

        try {
            $sql = "SELECT * FROM students"; 
            $result = $this->conn->query($sql);
            return $result->fetch_all(MYSQLI_ASSOC);
        }catch(\Exception $e){
            echo $e->getMessage();
        }
    }
    public function update(){


    }
    public function delete(){


    }


}
