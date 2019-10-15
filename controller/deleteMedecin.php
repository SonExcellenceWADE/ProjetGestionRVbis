
<?php
#######********                               *********##########
########******* Coding BY SON EXCELLENECE WADE **********#########
#######*********                               *********##########
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once '../model/ManagerMedecin.php';
require_once '../model/Medecin.class.php';
$manager= new ManagerMedecin();

$idMed= (int) $_GET['supprimer'];

$manager->deleteMed($idMed);
header("Location:listeMedecin.php");
?>

