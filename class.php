<?php 

class Movie {
    protected $title;
    protected $genere;
    protected $eta;
    function __construct($_title, $_genere, $_eta){
        $this->title= $_title;
        $this->genere= $_genere;
        $this->eta= $_eta;
    }
    public function Etaminima($_eta){
        if($_eta == 0){
            $this->eta = 'T: Film adatto a tutti.';
        }
        else if ($_eta < 6){
            $this->eta = '6+: Non adatto ai minori di 6 anni.';
        }
        else if ($_eta < 14){
            $this->eta = '14+: Vietato ai minori di 14 anni; gli spettatori che hanno compiuto 12 anni sono ammessi alla proiezione se accompagnati da un genitore o da un tutore.';
        }
        else if ($_eta == 18){
            $this->eta = '18+: Vietato ai minori di 18 anni; gli spettatori che hanno compiuto 16 anni sono ammessi alla proiezione se accompagnati da un genitore o da un tutore.';
        }
    }
    public function getTitle(){
        return $this->title;
    }
    public function getGenere(){
        return $this->genere;
    }
    public function getEta(){
        return $this->eta;
    }
}

?>