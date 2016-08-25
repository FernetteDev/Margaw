<?php
include('inc/php/classes/Configuration/Information.php');
include('inc/php/classes/Divers/autoload.php');
$oPage = new Page\structure('MarGaW', 'entete.php', 'footer.php', '<script src="inc/js/tinymce/tinymce.min.js"></script><script>tinymce.init({ selector:\'textarea\' });</script><script src="inc/js/Navigation.js">');
?>
<section class="menu">
    <nav class="navigation nav_chap">
        <li><a href="#chap1">chapitre 1</a></li>
        <li><a href="#chap2">chapitre 2</a></li>
        <li><a href="#chap3">chapitre 3</a></li>
        <li><a href="#chap4">chapitre 4</a></li>
        <li><a href="#chap5">chapitre 5</a></li>
        <li><a href="#chap6">chapitre 6</a></li>
        <li><a href="#chap7">chapitre 7</a></li>
        <li><a href="#chap8">chapitre 8</a></li>
        <li><a href="#chap9">chapitre 9</a></li>
    </nav>
    <article id="chap1" class="nouvelle">
    
    </article>
    
    
    <article id="chap2" class="hide nouvelle">

    </article>
</section>