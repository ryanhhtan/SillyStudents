<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DataFactory
 *
 * @author ryan
 */

include('Student.php');


class StudentDataFactory {
    //put your code here

    function getStudents() {
        $students = array();

        // Add first student into the students array.
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first; 

        // Add seconde student into the students array.
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


        // Add my info into the students array.
        $me = new Student();
        $me->surname = "Tan";
        $me->first_name = "Hai Hua";
        $me->add_email('school', 'htan45@my.bcit.ca');
        $me->add_grade(90);
        $students['b721'] = $me;


        // Add random generated students to the array
        $num = mt_rand(1, 10);
        for ($i = 0; $i < $num; ++$i) {
            $student = new Student();
            $student->surname = Helper::rand_name(10);
            $student->first_name = Helper::rand_name(10);
            $student->add_email('school', $student->first_name . '@.my.bcit.ca');
            $student->add_grade(mt_rand(0,100));
            $student->add_grade(mt_rand(0,100));
            $student->add_grade(mt_rand(0,100));
            $students['k' . mt_rand(100,999)] = $student;
        }

        return $students;
    }
}
