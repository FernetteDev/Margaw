<?php

namespace Page;

class structure {
    
    /**
     * Variable contenant le pied de page par défaut
     * @var string
     */
    private $_strPied;
    
    /**
     * variable contenant des scripts facultatif
     * @var string
     */
    private $_strScript;
    
    /**
     * Constructeur permettant de charger l'entête du document.
     * @param string $pStrTitre Le title du document.
     * @param string $pStrEntete Le nom du fichier faisant référence à l'entête.
     * @param string $pStrPied Le nom du fichier faisant référence au pied de page.
     * @param string $pStrScript Script à intégrer après le jquery.
     */
    public function __construct($pStrTitre = "", $pStrEntete = "entete.php", $pStrPied = "footer.php", $pStrScript = "") {
        
        include(parent::CHEMIN_RACINE . 'inc/php/MiseEnPage/' . $pStrEntete);
        $this->_strPied = $pStrPied;
        $this->_strScript = $pStrScript;
        
    }
    
    public function __destruct() {
        
        include(parent::CHEMIN_RACINE . 'inc/php/MiseEnPage/' . $this->_strPied);
        
    }
    
}



