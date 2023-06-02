<?php

class Student extends Person
{
    private $class;

    public function getInformations()
    {
        return 'Student : ' . $this->firstname . ' ' . $this->lastname . ' ; Promo : ' . $this->class;
    }

    public function __construct($firstname = null, $lastname = null, $class = null)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->class = $class;
    }

    public function getClass()
    {
        return $this->class;
    }

    public function setClass($class)
    {
        $this->class = $class;
    }
}