<?php

include_once 'Prodotto.php';

class Acqua extends Prodotto {
    public $marca;
    public $quantita;
    public $numero_lotto;

    public function stampa(){

    echo '<br>Tipo:  ' .$this->tipo .'<br> magazzino destinatario: '. $this->magazzino_destinatario . '<br> Marca: ' . $this->marca  . '<br> Quantità: ' .$this->quantita. '<br> Numero Lotto: ' . $this->numero_lotto;
}
}


 ?>
