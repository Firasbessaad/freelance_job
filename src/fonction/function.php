<?php 
$servername = "localhost";
$username = "root";
$pwd="";
$dbname = "siteWeb";
function seconnecter($login,$password){
try
{
global $servername;
global $username;
global $pwd;
global $dbname ;
   
$link = mysql_connect($servername, $username , $pwd);
mysql_select_db($dbname, $link);
mysql_query("SET NAMES UTF8") ;
$result = mysql_query("SELECT * FROM compte where login='$login' and password='$password'", $link);
$rows = mysql_num_rows($result);   
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
return $rows;
}

function afficher_satges(){
global $servername;
global $username;
global $pwd;
global $dbname ;
   
$link = mysql_connect($servername, $username , $pwd);
mysql_select_db($dbname, $link);
mysql_query("SET NAMES UTF8") ;
$result = mysql_query("SELECT * FROM stages ", $link);
return $result;
}

function afficher_photoEnfants(){
global $servername;
global $username;
global $pwd;
global $dbname ;
   
$link = mysql_connect($servername, $username , $pwd);
mysql_select_db($dbname, $link);
mysql_query("SET NAMES UTF8") ;
$result = mysql_query("SELECT * FROM photoEnfants where vue='1'", $link);
return $result;
}
function afficher_nvphotoEnfants(){
global $servername;
global $username;
global $pwd;
global $dbname ;
   
$link = mysql_connect($servername, $username , $pwd);
mysql_select_db($dbname, $link);
mysql_query("SET NAMES UTF8") ;
$result = mysql_query("SELECT * FROM photoEnfants where vue='0'", $link);
return $result;
}

function afficher_bricolages(){
global $servername;
global $username;
global $pwd;
global $dbname ;
   
$link = mysql_connect($servername, $username , $pwd);
mysql_select_db($dbname, $link);
mysql_query("SET NAMES UTF8") ;
$result = mysql_query("SELECT * FROM bricolages where vue='1' ", $link);
return $result;
}

function afficher_nvbricolages(){
global $servername;
global $username;
global $pwd;
global $dbname ;
   
$link = mysql_connect($servername, $username , $pwd);
mysql_select_db($dbname, $link);
mysql_query("SET NAMES UTF8") ;
$result = mysql_query("SELECT * FROM bricolages where vue='0'", $link);
return $result;
}
function afficher_pubs(){
global $servername;
global $username;
global $pwd;
global $dbname ;
   
$link = mysql_connect($servername, $username , $pwd);
mysql_select_db($dbname, $link);
mysql_query("SET NAMES UTF8") ;
$result = mysql_query("SELECT * FROM pubs ", $link);
return $result;
}
function afficher_liensImporatants(){
global $servername;
global $username;
global $pwd;
global $dbname ;
   
$link = mysql_connect($servername, $username , $pwd);
mysql_select_db($dbname, $link);
mysql_query("SET NAMES UTF8") ;
$result = mysql_query("SELECT * FROM lienImportant ", $link);
return $result;
}
function afficher_liensJeux(){
global $servername;
global $username;
global $pwd;
global $dbname ;
   
$link = mysql_connect($servername, $username , $pwd);
mysql_select_db($dbname, $link);
mysql_query("SET NAMES UTF8") ;
$result = mysql_query("SELECT * FROM lienJeux ", $link);
return $result;
}
function afficher_photoAdherants(){
global $servername;
global $username;
global $pwd;
global $dbname ;
   
$link = mysql_connect($servername, $username , $pwd);
mysql_select_db($dbname, $link);
mysql_query("SET NAMES UTF8") ;
$result = mysql_query("SELECT * FROM adherent ", $link);
return $result;
}
function afficher_fichiers(){
global $servername;
global $username;
global $pwd;
global $dbname ;
   
$link = mysql_connect($servername, $username , $pwd);
mysql_select_db($dbname, $link);
mysql_query("SET NAMES UTF8") ;
$result = mysql_query("SELECT * FROM fichiers ", $link);
return $result;
}


function AjouterPhoto($nom,$prenom,$age,$target_file){
global $servername;
global $username;
global $pwd;
global $dbname ;
   
$link = mysql_connect($servername, $username , $pwd);
mysql_select_db($dbname, $link);
mysql_query("SET NAMES UTF8") ;
$result = mysql_query("INSERT INTO `photoEnfants`(`nom`, `prenom`, `age`, `img`) VALUES ('$nom','$prenom','$age','$target_file')", $link);
}
function Ajouterbricolage($nom,$prenom,$age,$target_file,$description){
global $servername;
global $username;
global $pwd;
global $dbname ;
   
$link = mysql_connect($servername, $username , $pwd);
mysql_select_db($dbname, $link);
mysql_query("SET NAMES UTF8") ;
$q="INSERT INTO `bricolages`(`nom`, `prenom`, `age`, `bricolageDescription`, `url`) VALUES ('$nom','$prenom','$age','$description','$target_file') ";
//die($q);
$result = mysql_query($q, $link);


}
function inscriptionStage($stage,$nom,$prenom,$age,$mail){
global $servername;
global $username;
global $pwd;
global $dbname ;
   
$link = mysql_connect($servername, $username , $pwd);
mysql_select_db($dbname, $link);
mysql_query("SET NAMES UTF8") ;
$q="INSERT INTO `StagesInscription`(`id_stage`, `nom`, `prenom`, `age`, `mail`) VALUES ('$stage','$nom','$prenom','$age','$mail') ";
$result = mysql_query($q, $link);
}
function afficher_demandes(){
global $servername;
global $username;
global $pwd;
global $dbname ;
   
$link = mysql_connect($servername, $username , $pwd);
mysql_select_db($dbname, $link);
mysql_query("SET NAMES UTF8") ;
$q="SELECT * FROM `StagesInscription` WHERE `vue`='0' ";
$result = mysql_query($q, $link);
return $result;
}
function accepter($id){
global $servername;
global $username;
global $pwd;
global $dbname ;
   
$link = mysql_connect($servername, $username , $pwd);
mysql_select_db($dbname, $link);
mysql_query("SET NAMES UTF8") ;
$q="UPDATE `StagesInscription` SET `vue`='1' WHERE `id`='$id' ";
$result = mysql_query($q, $link);

}
function refuser($id){
global $servername;
global $username;
global $pwd;
global $dbname ;
   
$link = mysql_connect($servername, $username , $pwd);
mysql_select_db($dbname, $link);
mysql_query("SET NAMES UTF8") ;
$q="DELETE FROM `StagesInscription` WHERE `id`='$id' ";
$result = mysql_query($q, $link);

}
function accepterbrico($id){
global $servername;
global $username;
global $pwd;
global $dbname ;
   
$link = mysql_connect($servername, $username , $pwd);
mysql_select_db($dbname, $link);
mysql_query("SET NAMES UTF8") ;
$q="UPDATE `bricolages` SET `vue`='1' WHERE `id`='$id' ";
$result = mysql_query($q, $link);
}
function supprimerbrico($id){
global $servername;
global $username;
global $pwd;
global $dbname ;
   
$link = mysql_connect($servername, $username , $pwd);
mysql_select_db($dbname, $link);
mysql_query("SET NAMES UTF8") ;
$q="DELETE FROM `bricolages` WHERE `id`='$id' ";
$result = mysql_query($q, $link);
}
function ajouterStage($nomStage,$StageDesc){
global $servername;
global $username;
global $pwd;
global $dbname ;
   
$link = mysql_connect($servername, $username , $pwd);
mysql_select_db($dbname, $link);
mysql_query("SET NAMES UTF8") ;
$q="INSERT INTO `stages`( `nom`, `description`) VALUES ('$nomStage','$StageDesc') ";
$result = mysql_query($q, $link);
}
function modifierStage($idstage,$nomStageM,$StageDescM){
global $servername;
global $username;
global $pwd;
global $dbname ;
   
$link = mysql_connect($servername, $username , $pwd);
mysql_select_db($dbname, $link);
mysql_query("SET NAMES UTF8") ;
$q="UPDATE `stages` SET `nom`='$nomStageM',`description`='$StageDescM' WHERE `id`='$idstage'";
$result = mysql_query($q, $link);

}

function supprimerStage($id){
global $servername;
global $username;
global $pwd;
global $dbname ;
   
$link = mysql_connect($servername, $username , $pwd);
mysql_select_db($dbname, $link);
mysql_query("SET NAMES UTF8") ;
$q="DELETE FROM `stages` WHERE `id`='$id' ";
$result = mysql_query($q, $link);
}

function accepterPhoto($id){
global $servername;
global $username;
global $pwd;
global $dbname ;
   
$link = mysql_connect($servername, $username , $pwd);
mysql_select_db($dbname, $link);
mysql_query("SET NAMES UTF8") ;
$q="UPDATE `photoEnfants` SET `vue`='1' WHERE `id`='$id' ";
$result = mysql_query($q, $link);
}
function supprimerPhoto($id){
global $servername;
global $username;
global $pwd;
global $dbname ;
   
$link = mysql_connect($servername, $username , $pwd);
mysql_select_db($dbname, $link);
mysql_query("SET NAMES UTF8") ;
$q="DELETE FROM `photoEnfants` WHERE `id`='$id' ";
$result = mysql_query($q, $link);
}

function modifierLien($id,$nomlienM,$lienM){
global $servername;
global $username;
global $pwd;
global $dbname ;
   
$link = mysql_connect($servername, $username , $pwd);
mysql_select_db($dbname, $link);
mysql_query("SET NAMES UTF8") ;
$q="UPDATE `lienJeux` SET `nom`='$nomlienM',`url`='$lienM'  WHERE `id`='$id' ";
$result = mysql_query($q, $link);
}

function supprimerLien($id){
global $servername;
global $username;
global $pwd;
global $dbname ;
   
$link = mysql_connect($servername, $username , $pwd);
mysql_select_db($dbname, $link);
mysql_query("SET NAMES UTF8") ;
$q="DELETE FROM `lienJeux` WHERE `id`='$id' ";
$result = mysql_query($q, $link);
}
function ajouterLienJeux($nomlien,$lien){
global $servername;
global $username;
global $pwd;
global $dbname ;
   
$link = mysql_connect($servername, $username , $pwd);
mysql_select_db($dbname, $link);
mysql_query("SET NAMES UTF8") ;
$q="INSERT INTO `lienJeux`( `nom`, `url`) VALUES ('$nomlien','$lien') ";
$result = mysql_query($q, $link);
}


function modifierLienImportant($id,$nomlienM,$lienM){
global $servername;
global $username;
global $pwd;
global $dbname ;
   
$link = mysql_connect($servername, $username , $pwd);
mysql_select_db($dbname, $link);
mysql_query("SET NAMES UTF8") ;
$q="UPDATE `lienImportant` SET `nom`='$nomlienM',`lien`='$lienM'  WHERE `id`='$id' ";
$result = mysql_query($q, $link);
}

function supprimerLienImportant($id){
global $servername;
global $username;
global $pwd;
global $dbname ;
   
$link = mysql_connect($servername, $username , $pwd);
mysql_select_db($dbname, $link);
mysql_query("SET NAMES UTF8") ;
$q="DELETE FROM `lienImportant` WHERE `id`='$id' ";
$result = mysql_query($q, $link);
}
function ajouterLienImportant($nomlien,$lien){
global $servername;
global $username;
global $pwd;
global $dbname ;
   
$link = mysql_connect($servername, $username , $pwd);
mysql_select_db($dbname, $link);
mysql_query("SET NAMES UTF8") ;
$q="INSERT INTO `lienImportant`( `nom`, `lien`) VALUES ('$nomlien','$lien') ";
$result = mysql_query($q, $link);
}
function AjouterAdherents($nom,$prenom,$age,$nomphoto){
global $servername;
global $username;
global $pwd;
global $dbname ;
   
$link = mysql_connect($servername, $username , $pwd);
mysql_select_db($dbname, $link);
mysql_query("SET NAMES UTF8") ;
$q="INSERT INTO `adherent`(`nom`, `prenom`, `age`, `photo`) VALUES ('$nom','$prenom','$age','$nomphoto')";
$result = mysql_query($q, $link);
}
function supprimeradherent($idadherent){
global $servername;
global $username;
global $pwd;
global $dbname ;
   
$link = mysql_connect($servername, $username , $pwd);
mysql_select_db($dbname, $link);
mysql_query("SET NAMES UTF8") ;
$q="DELETE FROM `adherent` WHERE `id`='$idadherent' ";
$result = mysql_query($q, $link);
}
function ajouterFichier($nomFichier,$urlFichier){
global $servername;
global $username;
global $pwd;
global $dbname ;
   
$link = mysql_connect($servername, $username , $pwd);
mysql_select_db($dbname, $link);
mysql_query("SET NAMES UTF8") ;
$q="INSERT INTO `fichiers`( `nom`, `urlFtp`) VALUES ('$nomFichier','$urlFichier') ";
$result = mysql_query($q, $link);
}
function modifierfichier($idfichier,$nomfichierM,$urlFichier){
global $servername;
global $username;
global $pwd;
global $dbname ;
   
$link = mysql_connect($servername, $username , $pwd);
mysql_select_db($dbname, $link);
mysql_query("SET NAMES UTF8") ;
$q="UPDATE `fichiers` SET `nom`='$nomfichierM',`urlFtp`='$urlFichier' WHERE `id`='$idfichier'";
$result = mysql_query($q, $link);

}
function supprimerfichier($idfichier){
global $servername;
global $username;
global $pwd;
global $dbname ;
   
$link = mysql_connect($servername, $username , $pwd);
mysql_select_db($dbname, $link);
mysql_query("SET NAMES UTF8") ;
$q="DELETE FROM `fichiers` WHERE `id`='$idfichier' ";
$result = mysql_query($q, $link);
}



?>
