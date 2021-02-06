Conf.php
<?php
$serverinimi="localhost";
$kasutajanimi="Lera";
$parool="Lera";
$andmebaas="lera";
$yhendus=new mysqli($serverinimi,$kasutajanimi,$parool,$andmebaas);
$yhendus->set_charset("utf8");
?>