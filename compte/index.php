<?php

include "compte.php";
include "../info/personne.php";
$p1 = new Personne("Julie", "Dupond", 25, "Nantes");
$c1 = new Compte(1001, new Personne("Jean", "Pierre", 35), 1500);
$c2 = new Compte(1002, $p1, 250);

echo $c1;
echo "<br>";
echo $c2; 

// echo $c1->getSolde();
 echo "<br>";
 echo $c2->getSolde();

// echo "<br>";
// $c1->virerVers(200, $c2);

// echo $c1->getSolde();
// echo "<br>";
// echo $c2->getSolde();

// echo $c1->getTitulaire();
// $c1->setSolde("truc");

// echo "<br>";
// echo $c1->getSolde();

$tab = [];

for ($i=0; $i < 10; $i++) { 
    $tab[] = new compte(100 + $i, new Personne("", "", 10), 200 + 100*$i); // Le 100 cest pour les numéros de compte
}

for ($i=0; $i< 10 ; $i++) { 
    for ($j=1; $j < count($tab); $j++) { 
        $tab[$i]->virerVers(20, $tab[$j]);
    }
}



