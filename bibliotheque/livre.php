<?php
class livres{
     private $titre;
     private $auteur;
     private $editeur;

     public function __construct($titre, $auteur, $editeur)
     {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->editeur = $editeur;
     }

     //Get
     public function getTitre(){
     return $this->titre;
     }
     public function getAuteur(){
     return $this->auteur;
     }
     public function getEditeur(){
     return $this->editeur;
     }

     //Set
     public function setTitre($titre){
     return $this->titre;
     }
     public function setAuteur($auteur){
     return $this->auteur;
     }
     public function setEditeur($editeur){
     return $this->editeur;
     }

     public function __toString()
     {
        return "Titre : " . $this->titre .
               "Auteur : " . $this->auteur .
               "Editeur : " . $this->editeur;
     }

     


}