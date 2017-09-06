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

    function add_email($which, $email) {
        $this->emails[$which] = $email;
    }

    function add_grade($grade) {
        $this->grades[] = $grade;
    }

    function average() {
        $total = 0;
        foreach($this->grades as $score) {
            $total += $score;
        }
        return $total / count($this->grades);
    }

    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
            $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}
