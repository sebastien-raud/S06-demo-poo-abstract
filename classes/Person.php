<?php

abstract class Person
{
    protected $firstname;
    protected $lastname;

    // Retourne les informations sur la personne
    // sous forme de chaîne de caractères
    abstract public function getInformations();

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }
}