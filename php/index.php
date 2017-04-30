<!DOCTYPE html>
<html>
<head>
    <title>PHP Class Demo</title>
</head>
<body>
<?php
    include_once "person2.php";
    include_once "student.php";
    $student = new Student("Ben",new DateTime("1967-12-13"),array("CS101","CS105","WD202"));
    echo "<p>The student's name is: ";
    echo $student->name;
    echo "<p>The student's age is: ";
    echo $student->age;
    echo "<p>The student's classes are: ";
    echo $student->classList;
    echo "</p>"
    ?>
</body>
</html>