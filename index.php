<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>COMP4711 Lab 1</title>
    </head>
    <body>
        <?php
        include('Student.php');

        /*Creatting array of students*/
        $students = array();

        /*First student created*/
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;
        
        /*Second student created*/
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
        
        /*Third student created*/
        $third = new Student();
        $third->surname = "Steven";
        $third->first_name = "Ma";
        $third->add_email('school','sma52@my.bcit.ca');
        $third->add_grade(100);
        $third->add_grade(80);
        $third->add_grade(90);
        $students['n915'] = $third;
        
        ksort($students); // one of the many sort functions

        /*Printing out each student in array students using the student 
         * objects to string method.      */
        foreach($students as $student)
            echo $student->toString();
 
        ?>
    </body>
</html>
