<?php

    namespace Structure;

    class headAdmin extends head {

        /**
         * Fonction permettant d'afficher tout les éléments du "head"
         * Par défaut :
         * Description -> inutile pour le coté administrateur
         * Langue      -> "fr"
         * Titre       -> "nouvelle page"
         * Charset     -> "utf-8"
         * Viewport    -> "width=device-width"
         * Css         -> non remplit
         * Robot       -> "noindex,nofollow"
         */
        public function afficher_head(){
            echo '<!doctype html>';
            echo '<html lang="' . $this->langue_html . '">';
            echo '<head>';
            echo '<title>' . $this->strTitre . '</title>';
            echo '<meta charset="' . $this->strCharset . '"/>';
            echo '<meta name="viewport" content="' . $this->strViewport . '"/>';
            echo '<meta name="robot" content="'. $this->strRobot . '">';
            if($this->strDescription != null) {
                echo '<meta name="description" content="' . $this->strDescription . '"/>';
            }
            if(count($this->strCss) != 0){
                for($i = 0; $i < count($this->strCss); $i++){
                    echo '<link href="../inc/css/' . $this->strCss[$i] . '.css" rel="stylesheet"/>';
                }
            }
            echo '</head>';
            echo '<body>';
        }

        /**
         * Le Javascript est appelé dans le destructeur
         * $this->strScript contient tous les fichiers .js
         * $this->strJavascript contient le code Javascript écrit sur la page
         * il est appelé après $this->strScript pour que l'exécution du jquery
         * puisse être effectué avant.
         */
        function __destruct() {
            if(count($this->strScript) != 0){
                for($i = 0; $i < count($this->strScript); $i++){
                    echo $this->strScript[$i] = '<script src="../inc/js/' . $this->strScript[$i] . '.js"></script>';
                }
            }
            if($this->strJavaScript != null){
                echo $this->strJavaScript;
            }
            echo'</body>';
            echo '</html>';
        }

    }