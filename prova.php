<?php

include_once 'Prodotto.php';
include_once 'Acqua.php';


$Acqua = new Acqua();


$Acqua->tipo= 'Cibo_e_bevande';
$Acqua->magazzino_destinatario='#01';
$Acqua->marca='sveva';
$Acqua->quantita='48';
$Acqua->numero_lotto='112';

$Acqua->stampa();
 ?>
