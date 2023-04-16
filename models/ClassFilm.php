<?php

class film
{
    public $titolo;
    public $anno;
    public $min;
    public $genere;
    public $score;


    private function setScore(){
        $this->score = rand(0, 100);
    }

    private function setMin(){
        $this->min = rand(120, 300);
    }

    public function __construct($titolo, $anno, array $genere){
        $this->titolo = $titolo;
        $this->anno = $anno;
        $this->setMin();
        $this->genere = $genere;
        $this->setScore();
    }

    public function setAnno(){
        $this->anno = rand(1000, 3000);
    }
}