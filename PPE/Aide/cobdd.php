
<?php
try
{
	$bdd = new PDO('mysql:host=sls-mysql03.sls.aphp.fr;dbname=lrb-bactsouchier;charset=utf8', 'u_bactsouchier', 'pwd_b@ctsouchier076');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
