<?php
include('inc/php/classes/Configuration/information.php');
include('inc/php/classes/Divers/autoload.php');
$oPage = new Page\structure('MarGaW - Nouvelle d\'auteur', 'entete.php', 'footer.php', '
<script src="inc/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
	$(document).ready(function(){
		$("article").mCustomScrollbar({
			theme:"minimal-dark",
			axis:"y"
			});
		});
        
        console.log($(window).width());
</script>
');
?>
    <section class="index">
        <article>
            <p>Margaw... Qui es-tu, Margaw ?</p>
            <br>
            <p>Je t'appelle et tu ne réponds pas. Je te cherche et tu ne me trouves pas. Réalité ou fiction ? Tu as laissé des traces de sang à user tes poings contre le béton sale d'une cave sordide où se noient tous les espoirs, toutes les illusions, tous les rêves d'une vie. Es-tu un rêve ou un cauchemar, Margaw. Les méandres de la psyché, ses recoins les plus sinistres. On t'a tout fait ou peut-être rien.</p>
            <br>
            <p>Tu visites un labyrinthe tortueux, torturé, tourmenté. Tu es un homme, une femme, un enfant. Qu'importe. Tu es un lieu de petite mort, hanté d'ombres amies et de sombres zombies</p>
            <br>
            <p>Ce lieu est gris, noir, rouge parfois. Il dit la peur. Mais il dit l'amour aussi. Avec force et douceur, la douceur d'une âme trainée dans la boue, d'un être piégé dans le malheur. Ni l'exil ni les paradis artificiels n'y pourront rien.</p>
            <br>
            <p>La résilience viendra d'ailleurs, d'un autre, de cet autre qui s'est cru anéanti lui aussi, mais ça c'est une autre histoire. Margaw.</p>
            <footer>"Nicolas JOLIVALT"</footer>
        </article>
    </section>