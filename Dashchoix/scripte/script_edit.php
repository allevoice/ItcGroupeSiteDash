<?
//--si les entrees sont vide--//
if(isset($_POST['submit']))
{
if(!empty($_POST['pays']))
{
//declaration de variable
$name_country=$_POST['pays'];
if(strlen($name_country)>25)
{
echo"votre <b>$name_country</b> ne doit pas depasser les 25 caractere";
}else
{
//connection avec ma base si il a aucun problem
$connected=mysql_connect("localhost","root","") or die ("ne peut acceder au serveur:".mysql_error());
mysql_select_db("miracle") or die ("ne peut acceder au base de donnee:".mysql_error());

$query=mysql_query("INSERT INTO country (id_country,name_country) 
VALUES ('','$name_country')");

if($query)
{
echo"Votre nom de pays est bien inserer dans notre base de donnee..Merci";
}
}
}else {echo"veuillez saisir des donnees dans le champs";}
}
echo'<br>';
echo'<font size="5">
<a href="../country_view.php">Retour</a></font>';
?>
