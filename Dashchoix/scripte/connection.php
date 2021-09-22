<?php
//information sur la connection de la base de donne
$localhost_db="localhost";
$root_db="root";
$password_db="";
$basededonnee_db="miracle";

//connection et information de la base de donnee
mysql_connect($localhost_db,$root_db,$password_db) or die ("ne peut acceder au serveur:".mysql_error());
mysql_select_db($basededonnee_db) or die ("ne peut acceder au base de donnee:".mysql_error()); ?>
