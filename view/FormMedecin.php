<?php
#######********                               *********##########
########******* Coding BY SON EXCELLENECE WADE **********#########
#######*********                               *********##########
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once '../view/header.php';
require_once '../model/ManagerMedecin.php';
require '../model/Medecin.class.php';

$manager= new ManagerMedecin();

require_once '../controller/AjoutMed.php'; //inclure le fichier ajout du nouvel Medecin
?>
<div class="container">
	<div class="row">
	<div class="col-lg-8 col-lg-offset-2">
    <fieldset class="panel panel-info form-horizontal">
		<div class="panel-heading">Rechercher ou Ajouter un nouvel Medecin </div>
		 <div class="panel-body"> 
	<?php require_once '../view/RechercheMed.php'  ?>
       
  <form  action="" method="POST">	
      <div class="form-group">
			<div class="col-lg-12">
				<label for="codeMed">Code</label>
<input type="text" name="codeMed" id="codeMed" class="form-control" readonly value="MED<?php echo $manager->CodeMed()?>SN" required>
	</div></div>
	<div class="form-group">
			<div class="col-lg-12">
				<label for="prenomMed">Prenom</label>
<input type="text" name="prenomMed" id="prenomMed" class="form-control"  placeholder="Prenom du Medecin" required>
<small> <b> <?php if(!empty($error['pnom'])) echo $error['pnom']?> </b> </small> 
</div></div>
<div class="form-group">
		<div class="col-lg-12">
  <label for="nomMed">Nom</label>
  <input type="text" name="nomMed" id="nomMed" class="form-control" placeholder="Nom du Medecin" required>
  <small> <b> <?php if(!empty($error['nom'])) echo $error['nom']?> </b> </small> 		
</div></div>
<div class="form-group">
		<div class="col-lg-12">
  <label for="emailMed">Email</label>
  <input type="email" name="emailMed" id="emailMed" class="form-control" placeholder="Email du Medecin" required>
  <small> <b> <?php if(!empty($error['email'])) echo $error['email']?> </b> </small> <br>
  <small> <b> <?php if(!empty($error['mail'])) echo $error['mail']?> </b> </small> 
</div></div>

<div class="form-group">
		<div class="col-lg-12">
  <label for="telMed">Téléphone</label>
  <input type="text" name="telMed" id="telMed" class="form-control" placeholder="Telephone  du Medecin" maxlength="9" minlength="9" required>
  <small> <b> <?php if(!empty($error['tel'])) echo $error['tel']?> </b> </small> <br>
  <small> <b> <?php if(!empty($error['optel'])) echo $error['optel']?> </b> </small> 
</div></div>
<div class="form-group">
		<div class="col-lg-12">
  <label for="sexe">Sexe</label>
  <input type="radio" name="sexeMed" id="sexe"  value="Homme" required> Homme
  <input type="radio" name="sexeMed" id="sexe"  value="Femme" required> Femme
  <input type="radio" name="sexeMed" id="sexe"  value="Autres" required> Autres
		</div></div>
        <div class="form-group">
		<div class="col-lg-12">
        <label for="idserv">Spécialité</label> 
    <select name="idSpecial" id="idSpecial" class="form-control" required>
	<?php 
    $man= new Manager();
    $pdo= $man->getConnexion();
        $req=$pdo->prepare("SELECT * FROM Specialite ");
        $req->execute();
        while($Special=$req->fetch(PDO::FETCH_ASSOC)){;
         ?>  
    <option value="<?= $Special['idSpecial'] ?>"> <?= $Special['nomSpecial'] ?> </option>
    <?php }?>
      </select>
      
    </div>
        </div>

         
<input type="submit" name="ajouter" class="btn btn-outline-info my-2 my-sm-0"  value="Ajouter" required>
  <input type="reset" name="annuler" class="btn btn-outline-danger my-2 my-sm-0"  value="Annuler" required> 	
</form>
 </div>
</fieldset>
</div>
</div></div>


<?php require_once '../view/footer.php'; ?>















































