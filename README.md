# Démo POO abstract

Démonstration d'un cas d'utilisation de l'abstraction en POO.

On a une classe abstraite `Person` qui possède les propriétés `firstname` et `lastname` avec les getter et setter.

`Person` déclare une méthode abstraite `getInformations()` dont le rôle est de retourner des informations sur la personne sous forme de chaîne de caractères.

Deux classes héritent de `Person` :

- `Student` qui représente un étudiant avec sa promotion (propriété `class`)
- `Teacher` qui représente un enseignant avec des promotions (propriété `classes`) et ses domaines d'enseignement (propriétés `domains`)

Chaque classe définie la méthode `getInformations()` avec les informations spécifiques à chaque entité.

On déclare une fonction `showInformations(Person $person)`. Elle prend en argument un objet de type `Person` (ou un objet hérité de `Person`).

Comme on sait que toutes les classes héritées de `Person` définissent la méthode `getInformations()` (parce qu'elle est `abstract`, si elles ne 
la définissent pas, il y a une erreur à l'exécution), on peut appeler cette méthode dans la fonction pour afficher les informations.

Grâce à l'abstraction, on a la garantie que les enfants de `Person` définissent la méthode. C'est ce qui nous permet de créer une fonction
générique qui utilise cette méthode.
