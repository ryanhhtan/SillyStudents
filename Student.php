<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 * A class stores and processes the information of a student 
 *
 * @author ryan
 */
class Student {
    /**
     * Constructor of the class
     *
     */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }

    /**
     * Add email address to the student's address array.
     * @param $which: key of the email.
     * @param $email: value of the email address.
     */
    function add_email($which, $email) {
        $this->emails[$which] = $email;
    }

    /**
     * Add grade to the student's grades array.
     * @param $grade: the grade to input.
     *
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }

    /**
     * Calculate the average grades of the student.
     */
    function average() {
        $total = 0;
        foreach($this->grades as $score) {
            $total += $score;
        }
        return round(($total / count($this->grades)));
    }

    /**
     * Output the student information.
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
            $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}
