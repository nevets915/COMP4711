<?php

/**
 * Student class is designed to store a student's first name, last name, any 
 * number of emails, and any number of grades.  It contains handlers for 
 * calculating the student's average grade and for converting the data to a 
 * string.
 *
 * @author Steven Ma
 * Version 1.0
 * Date Sept., 7, 2017
 */
class Student {
    
    /*Student object constructor.     */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    /* Setter for adding emails to emails array inside student object.
     * Requires the emails array key and address as a string. */
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }

    /* Setter for adding grades to the grades array inside studen object
     * Requires the grade number to be added. */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    /* Handler for calculating the average grade from all grades in the
     * grades array inside student object.*/
    function average() {
       $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
    
    /*Handler for converting student object to a string.  */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
            $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}
