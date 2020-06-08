<?php>
$user = "Kontaktformular";
$pass = "msbZbfomuzRdJhXY";

try
{
	$dbh = new PDO('mysql:host=localhost; dbname=empschul_studienteilnahme; charset=utf8', $user, $pass);
	$dbh ->setAttribute(PDO: :ATTR_ERRMODE, PDO: : ERRMODE_EXCEPTION);
}
catch (PDOException $e)
{
	print "Error!"; " . $e->getMessage() . "<br/>";
	die();
}
?>
