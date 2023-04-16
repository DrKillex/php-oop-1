<?php
// creo classe film
class film
{
    // inizializzo i parametri della classe
    public $titolo;
    public $anno;
    public $min;
    public $genere;
    public $score;

    // funzione privata (serve solo all interno della classe) genera lo score
    private function setScore(){
        $this->score = rand(0, 100);
    }
    
    // funzione privata (serve solo all interno della classe) genera il minutaggio
    private function setMin(){
        $this->min = rand(120, 300);
    }

    // funzione costruttore pubblica genera l oggetto a partire da dati inseriti nella creazione
    public function __construct($titolo, $anno, array $genere){
        $this->titolo = $titolo;
        $this->anno = $anno;
        $this->setMin();
        $this->genere = $genere;
        $this->setScore();
    }

    // funzione pubblica (non ha un vero scopo se non solo didattico) cambia l anno inserito con un numero casuale
    public function setAnno(){
        $this->anno = rand(1000, 3000);
    }
}