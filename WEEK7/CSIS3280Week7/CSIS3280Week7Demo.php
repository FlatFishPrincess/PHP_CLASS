<?php

require_once("inc/Page.class.php");
require_once("inc/Person.class.php");
require_once("inc/Student.class.php");
require_once("inc/ClassList.class.php");

Page::header();

$s = new Student("Sam", "Student");
$s->setAge(24);


$s1 = new Student("Samantha", "Student");
$s1->setAge(18);
$s1->gender = "Female";

$s2 = new Student("Simran", "Student");
$s2->setAge(28);

//echo get_class($s)."<BR>";

$c = new ClassList();
$c->addStudent($s);
$c->addStudent($s1);
$c->addStudent($s2);

echo $s1;

//echo get_class($c);

/*
if (is_subclass_of($c, "Person"))   {
    echo "This is a Person.<BR>";
} else {
    echo "This is not a Person.<BR>";
}
*/

$c->sortAge();

//var_dump($c);

echo 1<=>0 . '<BR>'; //1
echo 1<=>1 . '<BR>'; //0
echo 0<=>1 . '<BR>'; //-1


Page::footer();


?>
