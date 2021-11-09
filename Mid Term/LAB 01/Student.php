<?php
class Student{ 
    public $name;
    public $id;
    public $dob;
    public $courses = [];
   
    function set_name($name) {
        $this->name = $name;
    }
    function set_id($id) {
        $this->id = $id;
    }
    function set_dob($dob) {
        $this->dob = $dob;
    }
    function add_course($courseName) {
        $this->courses[] = $courseName;
    }

    function show_info() {
        echo "Show Info: <br>";
        echo "Name :" .$this->name; 
        echo "<br>";
        echo "Id: " .$this->id;
        echo "<br>";
        echo "DOB: " .$this->dob;
        echo "<br><br>";
    }
    function show_all_course(){
        echo "Show All courses: <br>";
        echo "Name :" .$this->name;
        echo "<br>";
        echo "Id: " .$this->id;
        echo "<br>";
        foreach($this->courses as $c){
            echo "$c<br>";
        } 
    }
}

$s1 = new Student();
$s1->set_name('Rasel');
$s1->set_id('18-37797-2');
$s1->set_dob('30-oct-99');
$s1->show_info();

$s1->add_course("PL1");
$s1->add_course("PL2");
$s1->add_course("ALGO");

$s1->show_all_course();



?>