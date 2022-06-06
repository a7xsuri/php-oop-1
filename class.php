<?php 

class Movie{
    public $title;
    public $genere;
    public $etaMinima;
    function __construct($_title, $_genere, $_etaMinima){
        $this->title= $_title;
        $this->genere= $_genere;
        $this->etaMinima= $_etaMinima;
    }  
}

?>