<?php
/**
 * Index page
 * User: Piyotr Kao
 * Date: 2018-01-10
 * Time: 11:01 AM
 */
include('Student.php');

$students = array();

$first = new Student();
$first->surname = "Doe";
$first->first_name = "John";
$first->add_email('home','john@doe.com');
$first->add_email('work','jdoe@mcdonalds.com');
$first->add_grade(65);
$first->add_grade(75);
$first->add_grade(55);
$students['j123'] = $first;

$second = new Student();
$second->surname = "Einstein";
$second->first_name = "Albert";
$second->add_email('home','albert@braniacs.com');
$second->add_email('work1','a_einstein@bcit.ca');
$second->add_email('work2','albert@physics.mit.edu');
$second->add_grade(95);
$second->add_grade(80);
$second->add_grade(50);
$students['a456'] = $second;

$third = new Student();
$third->surname = "Kao";
$third->first_name = "Piyotr";
$third->add_email('work','piyotrkao1998@outlook.com');
$third->add_grade(80);
$third->add_grade(60);
$third->add_grade(90);
$students['b789'] = $third;
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Test</title>
</head>
<body>
<?php
    foreach ($students as $student)
        echo $student->toString();
?>
</body>
</html>
