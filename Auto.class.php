<?php

//Abstrakte Klassen werden dann benötigt, wenn man eine Vererbungsbeziehung
//darstellen möchte, aber verhindert werden soll, dass
//Objekte der Superklasse erzeugt werden können.

abstract class Auto {
    //ein Attribut, eine Eigenschaft
    private $geschwindigkeit = 0;
	
    protected function setGeschwindigkeit($geschwindigkeit){
        $this->geschwindigkeit=$geschwindigkeit;
    }
    protected function getGeschwindigkeit(){
        return $this->geschwindigkeit;
    }
    
	//Abstrakte Methoden sind Vorschriften, dh. die Subklassen
	//sind verpflichtent zu implementieren.
	//Sobald eine Klasse eine Abstrakte Methode enthält,
	//muss die gesamte Klasse als abstract definiert werden, 
	//weil die Klasse unvollständigen Code enthält und deshalb verhindert
	//werden muss, dass ein Objekt dieser Klasse erzeugt werden kann.

    //zum Bremsen
    public abstract function bremsen($aenderung);
    //zum Gasgeben
    public abstract function beschleunigen(int $bes){
    $this-> geschwindigkeit += $bes;
    }

}

?>
