<?php
//Eviter les problèmes de conversion sous linux ou mac.
 function __autoload($pStrClasse){
        $pStrClasse = str_replace('\\','/',$pStrClasse);
        include(\Configuration\Information::CHEMIN_RACINE. "inc/php/classes/$pStrClasse.php");
 }
