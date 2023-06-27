<?php
include '../info/personne.php';

$p1 = new personne("toto", "tata", 20);
// $p1->prenom = "Toto";
// $p1->nom = "Tata";
// $p1->age = "20";

$p2 = new personne("titi", "tutu", 18, "Marseille");
// $p2->prenom = "Titi";
// $p2->nom = "Tutu";
// $p2->age = "18";


$p1->afficher();
echo "</br>";
$p2->afficher();
echo "</br>";

// echo $p1::$compteur;
echo "</br>";
// echo personne::$compteur;
echo personne::nbrePersonne();