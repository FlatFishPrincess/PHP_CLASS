<?php 

    require_once("inc/Page.class.php");
    require_once("inc/Person.class.php");
    require_once("inc/Student.class.php");
    require_once("inc/ClassList.class.php");

    Page::header();
    $s = new Student("Sam", "Student");
    $s->setAge(24);
    echo $s;

    $s1 = new Student("Samantha", "Student");
    $s1->setAge(18);
    echo $s1;

    $s2 = new Student("Simran", "Student");
    $s2->setAge(28);

    // echo get_class($s);
    $c = new ClassList();
    $c->addStudent($s);
    $c->addStudent($s1);
    $c->addStudent($s2);


    // if(is_subclass_of($s, "Person")){
    //     echo "This is a person.<br/>";
    // } else {
    //     echo "This is not a person <br/>";
    // }
    echo 1<=>0 . "<br/>"; // 1
    echo 1<=>1 . "<br/>"; // 0
    echo 0<=>1 . "<br/>"; //-1

    //php traits
    echo $s1;
    Page::footer();

?>