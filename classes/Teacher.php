<?php

class Teacher extends Person
{
    private $classes = [];
    private $domains = [];

    public function getInformations()
    {
        return 'Teacher : ' . $this->firstname . ' ' . $this->lastname . ' ; ' . 
               'Promos : ' . implode(', ', $this->classes) . ' ; ' . 
               'Domaines : ' . implode(', ', $this->domains);
    }

    public function __construct($firstname = null, $lastname = null)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    public function getClasses()
    {
        return $this->classes;
    }

    public function addClass($class)
    {
        $this->classes[] = $class;
    }

    public function getDomains()
    {
        return $this->domains;
    }

    public function addDomain($domain)
    {
        $this->domains[] = $domain;
    }
}