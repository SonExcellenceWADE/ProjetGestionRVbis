
<?php
#######********                               *********##########
########******* Coding BY SON EXCELLENECE WADE **********#########
#######*********                               *********##########
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once '../model/ManagerPatient.php';
require_once '../model/Patient.class.php';

$manager= new ManagerPatient();

$idPatient= (int) $_GET['supprimer'];

$manager->deletePatient($idPatient);

header("Location:listePatient.php");