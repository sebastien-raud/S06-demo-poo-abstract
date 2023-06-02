<?php

require __DIR__ . '/classes/Person.php';
require __DIR__ . '/classes/Student.php';
require __DIR__ . '/classes/Teacher.php';

// fonction qui affiche les informations sur une personne
function showInformations(Person $person)
{
    echo $person->getInformations() . PHP_EOL;
}

// un élève
$student = new Student('Aline', 'Éha', 'Mandoline');

// un prof
$teacher = new Teacher('Robert-Denis', 'Raud');
$teacher->addClass('Mandoline');
$teacher->addClass('Mandoloncelle');
$teacher->addDomain('PHP');
$teacher->addDomain('JS');
$teacher->addDomain('HTML');
$teacher->addDomain('CSS');

// on affiche ?
showInformations($student);
showInformations($teacher);

// Student et Teacher héritent de Person :
// - la fonction showInformation() prend en paramètre un objet du type Person
// - comme les deux classes héritent de Person, elles sont bien aussi du type Person
// - comme la méthode getInformations() de Person est abstraite, les deux classes DOIVENT
//   implémenter cette méthode. On est donc certain qu'elles possèdent cette méthode.
//   On peut donc écrire une fonction générique d'affichage des informations en se
//   basant sur le type d'objet Person qui possède une méthode getInformations().