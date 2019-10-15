
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo ASSETS ?>/css/style.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/jquery-ui.css">
    <link rel="stylesheet" href="../assets/css/jquery.timepicker.min.css">
   <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="../assets/css/style.css">
  
    <title>Gestion Rendez-Vous de SenHopital</title>
  </head>
  <body>
    <div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-info p-4">
      <h5 class="text-white h2"><a href="listePatient.php" class="nav-link "> <p>Liste des Patients </p></a></h5>
      <h5 class="text-white h2"><a href="ListeMedecin.php" class="nav-link" > <p>Liste des Medecins </p></a></h5>
      <h5 class="text-white h2"><a href="#" class="nav-link" > <p>Liste des Rendez-vous </p></a></h5>
    </div>
  </div>
  <nav class="navbar navbar-toggler navbar-collapse navbar-dark bg-info">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="nav">
   
     <li class="nav-item"> <a class="nav-link" href="index.php" > <img src="../assets/img/senhopital.jpeg" width="70px" height="70px" alt="" > </a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="index.php" > <p> Acceuil </p> </a>
  </li> 
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <p>Gestion des Patients </p>
        </a>
        <div class="dropdown-menu bg-info" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="FormPatient.php"><p> Nouvel Patient </p> </a>
          <a class="dropdown-item" href="listePatient.php"><p> Liste des Patients </p> </a>
          
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <p>Gestion des Medecins </p>
        </a>
        <div class="dropdown-menu bg-info" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="FormMedecin.php"><p> Nouvel Medecin </p> </a>
          <a class="dropdown-item" href="ListeMedecin.php"><p> Liste des Medecins </p> </a>
          
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <p>Gestion des Rendez-Vous </p>
        </a>
        <div class="dropdown-menu bg-info" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#"><p> Nouvel Rendez-Vous </p> </a>
          <a class="dropdown-item" href="#"><p> Liste des Rendez-Vous </p> </a>
          
        </div>
      </li>


    </ul>
    
    
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Rechercher sur Google" aria-label="Search" name="search">
      <input type="submit" class="btn btn-outline-primary my-2 my-sm-0" name="search" value="Search" >
    </form>
  </nav>
  
</div>



<?php
if (isset($_POST['search'])) {
  header("Location:https://www.google.com&search=".$_GET['search']);
}
?>
