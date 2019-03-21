<?php 
    class ClassList{
        // students go here 
        public $students = array();

        function addStudent(Student $s){
            // Add to the list
            $this->students[] = $s;
        }
        function cmp_sortAge($x, $y){
            return $x->age <=> $y->age;
        }

        function sortAge(){
            
        }

    }
?>