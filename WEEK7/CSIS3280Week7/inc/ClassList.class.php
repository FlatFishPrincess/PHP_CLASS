<?php

class ClassList {

    //Students go here
    public $students = array();

    function addStudent(Student $s) {
        //Add to the list
        $this->students[] = $s;
    }

    function cmp_sortAge($x, $y)  {
        return $x->age <=> $y->age;
    }

    function sortAge()    {
        usort($this->students, array('ClassList','cmp_sortAge'));
    }
}


?>