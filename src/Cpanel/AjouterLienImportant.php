<?php
session_start();
$errors="";
if (!isset($_SESSION['admin'])) 
{
header('Location: index.html');
}
include ('fonction/function.php');

$stages=afficher_satges();
$photoEnfants=afficher_photoEnfants();
$bricolages=afficher_bricolages();
$pubs=afficher_pubs();
$liensImporatants=afficher_liensImporatants();
$liensJeux=afficher_liensJeux();
$photoAdherants=afficher_photoAdherants();
$fichiers=afficher_fichiers();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>روابط مهمة </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="templates/association/style.css" type="text/css" media="screen" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>

<script type="text/javascript" src="scrolltopcontrol.js"></script>

<script type="text/javascript" src="./js/ed.js"></script>
<script language="javascript" type="text/javascript">
<!--
var win=null;
function NewWindow(mypage,myname,w,h,scroll,pos){
if(pos=="random"){LeftPosition=(screen.width)?Math.floor(Math.random()*(screen.width-w)):100;TopPosition=(screen.height)?Math.floor(Math.random()*((screen.height-h)-75)):100;}
if(pos=="center"){LeftPosition=(screen.width)?(screen.width-w)/2:100;TopPosition=(screen.height)?(screen.height-h)/2:100;}
else if((pos!="center" && pos!="random") || pos==null){LeftPosition=0;TopPosition=20}
settings='width='+w+',height='+h+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',location=no,directories=no,status=no,menubar=no,toolbar=no,resizable=no';
win=window.open(mypage,myname,settings);}
// -->
</script>
<script type="text/javascript">var switchTo5x=true;</script>

<script type="text/javascript">stLight.options({publisher: "ur-2b34de7e-9da4-30e3-5f95-7bc8ce5d4ce9", doNotHash: false, 

doNotCopy: false, hashAddressBar: false});</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-23820941-2', 'auto');
  ga('send', 'pageview');

</script>

<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>

<script type="text/javascript" src="http://www.google.com/jsapi?key=ABQIAAAA14fmbcVHY6NfwaBuTcKbIhR2f9Go4sSz-

EWevUTPbf3tyVmL5hSpd5_7u3jw8C-xxKQy1atkKeymkA"></script>

<div id="headertop"></div>

<div id="headerbody">

<div id="fb-root"></div>
<script>
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<style><!--

#menu {float:center; margin:16px 0 0 0; height:14px; line-height:2px;}
#el1 { float:left; background:url(img/el1.png) bottom left no-repeat; width:17px; height:17px; border:none; cursor:pointer;text-indent:-9999em; margin-left:20px;}
#el1:hover{background:url(img/el1.png) top left no-repeat; width:17px; height:17px; border:none; cursor:pointer;}

#el2 { float:left; background:url(img/el2.png) bottom left no-repeat; width:17px; height:17px; border:none; cursor:pointer;text-indent:-9999em; margin-left:6px;}
#el2:hover{background:url(img/el2.png) top left no-repeat; width:17px; height:17px; border:none; cursor:pointer;}

#el3 { float:left; background:url(img/el3.png) bottom left no-repeat; width:17px; height:17px; border:none; cursor:pointer;text-indent:-9999em; margin-left:6px;}
#el3:hover{background:url(img/el3.png) top left no-repeat; width:17px; height:17px; border:none; cursor:pointer;}

#el4 { float:left; background:url(img/el4.png) bottom left no-repeat; width:17px; height:17px; border:none; cursor:pointer;text-indent:-9999em; margin-left:6px;}
#el4:hover{background:url(img/el4.png) top left no-repeat; width:17px; height:17px; border:none; cursor:pointer;}

#el0 { float:left; background:url(img/el0.png) bottom left no-repeat; width:17px; height:17px; border:none; cursor:pointer;text-indent:-9999em; margin-left:6px;}
#el0:hover{background:url(img/el0.png) top left no-repeat; width:17px; height:17px; border:none; cursor:pointer;}

#el00 { float:left; background:url(img/el00.png) bottom left no-repeat; width:17px; height:17px; border:none; cursor:pointer;text-indent:-9999em; margin-left:6px;}
#el00:hover{background:url(img/el00.png) top left no-repeat; width:17px; height:17px; border:none; cursor:pointer;}

#el5 { float:left; background:url(img/el5.png) bottom left no-repeat; width:105px; height:17px; border:none; cursor:pointer;text-indent:-9999em; margin-left:15px;}
#el5:hover{background:url(img/el5.png) top left no-repeat; width:105px; height:17px; border:none; cursor:pointer;}

#el9 { float:left; background:url(img/el9.png) bottom left no-repeat; width:105px; height:17px; border:none; cursor:pointer;text-indent:-9999em; margin-left:7px;}
#el9:hover{background:url(img/el9.png) top left no-repeat; width:105px; height:17px; border:none; cursor:pointer;}

#el10 { float:left; background:url(img/el10.png) bottom left no-repeat; width:105px; height:17px; border:none; cursor:pointer;text-indent:-9999em; margin-left:15px;}
#el10:hover{background:url(img/el10.png) top left no-repeat; width:105px; height:17px; border:none; cursor:pointer;}

#el11 { float:left; background:url(img/el11.png) bottom left no-repeat; width:105px; height:17px; border:none; cursor:pointer;text-indent:-9999em; margin-left:7px;}
#el11:hover{background:url(img/el11.png) top left no-repeat; width:105px; height:17px; border:none; cursor:pointer;}

#el12 { float:left; background:url(img/el12.png) bottom left no-repeat; width:105px; height:17px; border:none; cursor:pointer;text-indent:-9999em; margin-left:7px;}
#el12:hover{background:url(img/el12.png) top left no-repeat; width:105px; height:17px; border:none; cursor:pointer;}

#el13 { float:left; background:url(img/el13.png) bottom left no-repeat; width:105px; height:17px; border:none; cursor:pointer;text-indent:-9999em; margin-left:7px;}
#el13:hover{background:url(img/el13.png) top left no-repeat; width:105px; height:17px; border:none; cursor:pointer;}

#el14 { float:left; background:url(img/el14.png) bottom left no-repeat; width:84px; height:17px; border:none; cursor:pointer;text-indent:-9999em; margin-left:20px;}
#el14:hover{background:url(img/el14.png) top left no-repeat; width:84px; height:17px; border:none; cursor:pointer;}

--></style>

<div align="center" style="margin:0 auto;width:963px;">
<table width="963" style="margin:0 0px 0 0;" height="45" border="0" cellpadding="0" cellspacing="0"><tbody>
<tr>
<td width="963" style="background:url(./templates/association/images/lat.png) no-repeat;width:963px;height:45px;">
<div style="position:absolute;width:963px;margin:-28px 0px 0 0;">

<div class="container">
<div id="menu" style="width: 963px; height: 30px" align="center">
<a id="el11" href="./deconnexion.php">خروج</a>
<a id="el4"  href="./ListeAdherents.php"></a>
<a id="el0"  href="./AccepterSupprimerPhotos.php"></a>
<a id="el00"  href="./AccepterSupprimerBricollage.php"></a>
<a id="el9"  href="./AjouterLienImportant.php"></a>
<a id="el10" href="./AjouterLien.php"></a>
<a id="el12"  href="./AjouterFichier.php"></a>
<a id="el13"  href="./AjouterStage.php"></a>
<a id="el14"  href="./index.php"></a>
</div>
<!-- menu end -->
</td>
</tr>
</table>

<script type="text/javascript" src="./js/jquery.js"></script>

<link rel="stylesheet" type="text/css" href="./css/slideshow.css">

</head>

<body>

<div style="width: 963px; height: 305px; margin-top: 0px; background-color: #transparent">

<!-- container for the slides -->

<div class="images">

<!-- 1 slide -->

<div style="display: none;">
<img src="./header-slider/s4.jpg" alt="#"></a>
<p class="MansetUstuText" align="right" dir="rtl"></p></div>

<!-- 2 slide -->

<div style="display: none;">
<img src="./header-slider/s5.jpg" alt="#"></a>
<p class="MansetUstuText" align="right" dir="rtl"></p></div>


<!-- 3 slide -->

<div style="display: none;">
<img src="./header-slider/s6.jpg" alt="#"></a>
<p class="MansetUstuText" align="right" dir="rtl"></p></div>


<!-- 4 slide -->

<div style="display: none;">
<img src="./header-slider/s7.jpg" alt="#"></a>
<p class="MansetUstuText" align="right" dir="rtl"></p></div>


</div>

<div class="slidetabs" style="width: 906px; height: 15px">

<a href="#1" class="current"></a>
<a href="#2" class="current"></a>
<a href="#3" class="current"></a>
<a href="#4" class="current"></a>
</div>







        <script type="text/javascript">







                $(function() {







                $(".slidetabs").tabs("div > div", {







	                // enable "cross-fading" effect







	                effect: 'fade',







	                fadeOutSpeed: 400,







	                // start from the beginning after the last tab







	                rotate: true







                }).slideshow({autoplay: true, interval: 1000, autopause: true});







                });







        </script>



 </div>




</body>








</td>

</td>

</tr>

</table>
<div class="header-left"></div>
</div>
<div id="xpage">
	<div class="navbar"></div><div class='divrightx'>
<div class="menus">
<div class="divtitle"><a href="./AjouterStage.php"><h2>تسجيل التربصات</h2></a></div>
<div class="divtext"><div class="divtextpadding"><ul>
<?php 
while($stage = mysql_fetch_assoc($stages)){
echo "<li><a href=\"#\">".$stage['nom']."</a></li>";
}?>

</ul></div></div>
<div class="divfooter"></div>
</div>
<div class="menus">
<div class="divtitle"><h2><a href="./AjouterLien.php">روابط الألعاب</a></h2></div>
<div class="divtext"><div class="divtextpadding"><ul>
<?php

while($lienJeux = mysql_fetch_assoc($liensJeux)){echo "<li><a href='".$lienJeux['url']."'>".$lienJeux['nom']."</a></li>";}
?>
</ul></div></div>
<div class="divfooter"></div>
</div>
<div class="menus">
<div class="divtitle"><a href="./ListeAdherents.php"><h2>صور المنخرطين</h2></a></div>
<div class="divtext"><div class="divtextpadding">
<p id="nomadherent"><a href="#"><img id="srcadherent" border=0 src="" width="168" height="88"></a></p>

</div></div>
<div class="divfooter"></div>
</div>


</div><div class='divleftx'><div class="menus">
<div class="divtitle"><a href="./AjouterFichier.php"><h2>مكتبة الوثائق</h2></a></div>
<div class="divtext"><div class="divtextpadding"><ul>
<?php
while($fichier = mysql_fetch_assoc($fichiers)){echo "<li><a href='".$fichier['urlFtp']."' download>".$fichier['nom']."</a></li>";}
?>
</ul></div></div>
<div class="divfooter"></div>
</div><div class="menus">
<div class="divtitle"><a href="./AccepterSupprimerPhotos.php"><h2>فضاء الرسوم</h2></a></div>
<div class="divtext"><div class="divtextpadding"><ul>
<?php
while($photoEnfant = mysql_fetch_assoc($photoEnfants)){echo "<li><a href='#'>صورة ".$photoEnfant['prenom']." ".$photoEnfant['nom']."</a></li>";}

?>
</ul></div></div>
<div class="divfooter"></div>
</div>
<div class="menus">
<div class="divtitle"><a href="./AccepterSupprimerBricollage.php"><h2>البراعة اليدوية</h2></a></div>
<div class="divtext"><div class="divtextpadding"><ul><?php
while($bricolage = mysql_fetch_assoc($bricolages)){echo "<li><a href='#'>".$bricolage['prenom']." ".$bricolage['nom']."</a></li>";}?>
</ul></div></div>
<div class="divfooter"></div>
</div>
<div class="menus">
<div class="divtitle"><h2><a href="./AjouterLienImportant.php">روابط مهمة</a></h2></div>
<div class="divtext"><div class="divtextpadding"><ul>
  <?php  
while($liensImporatant = mysql_fetch_assoc($liensImporatants)){
echo "<li><a href='".$liensImporatant['lien']."'>".$liensImporatant['nom']." </a></li>";}
?>
</ul></div></div>
<div class="divfooter"></div>
</div>
</div><div class='divcenterx'>
<div id="contents">
<br><br>
<form class="form-horizontal" action="" method="post">
<fieldset>

<!-- Form Name -->
<legend>إضافة رابط</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nomlien"> إسم الرابط</label>  
  <div class="col-md-4">
  <input id="nomlien" name="nomlien" type="text" placeholder=" إسم الرابط" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="lien">الرابط</label>
  <div class="col-md-4">                     
    <input id="lien" name="lien" type="text" class="form-control input-md" required="">
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="ajouter"></label>
  <div class="col-md-8">
    <button id="ajouter" name="ajouter" class="btn btn-success">إضافة</button>
    <button id="annuler" name="annuler" class="btn btn-danger">إلغاء</button>
  </div>
</div>

</fieldset>
</form>

<?php
if(isset($_POST['ajouter'])){
$nomlien=$_POST['nomlien'];
$lien=$_POST['lien'];

ajouterLienImportant($nomlien,$lien);
}

?><h1>الروابط المهمة</h1>

<table class="xtable" width="90%" id="AutoNumber1f5">
    <tbody>   
    <tr>
      <td width="40%" class="xtr"> إسم الرابط </td>
      <td width="30%" class="xtd">الرابط</td>
      <td width="30%" class="xtd"></td>
    </tr>

<?php
$liensImporatants=afficher_liensImporatants();
while($lien = mysql_fetch_assoc($liensImporatants)){
echo "<tr><td width=\"40%\" class=\"xtr\"><p id=\"n".$lien['id']."\" >".$lien['nom']."</p></td><td width=\"30%\" class=\"xtr\"><p id=\"l".$lien['id']."\" >".$lien['lien']."</p></td><td width=\"30%\" class=\"xtr\" ><a href=\"#\" id=\"".$lien['id']."\" onclick=\"select(this.id);\" >تغيير/حذف</a></td></tr>";
}
?>
</tbody></table>

<script>
function select(id){
var e = document.getElementById('n'+id).innerHTML;
var l = document.getElementById('l'+id).innerHTML;
document.getElementById('nomlienM').value=e;
document.getElementById('lienM').value=l;
document.getElementById('idhidden').value=id;
document.getElementById('modif').style.visibility="visible";
}
</script>
</div><div id="modif" class="modif" style="visibility:hidden;">
<form class="form-horizontal" action="" method="post">
<fieldset>

<!-- Form Name -->
<legend>تغير رابط</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nomStage"> إسم الرابط</label>  
  <div class="col-md-4">
  <input id="nomlienM" name="nomlienM" type="text" placeholder=" إسم الرابط" class="form-control input-md" required="">
   <input type="hidden" id="idhidden" name="idhidden"> 
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="lien">الرابط</label>
  <div class="col-md-4">                     
    <input id="lienM" name="lienM" type="text" class="form-control input-md" required="">
  </div>
</div>
<br><br>
<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="ajouter"></label>
  <div class="col-md-8">
    <button id="Modifier" name="Modifier" class="btn btn-success">تغير</button>
    <button id="Supprimer" name="supprimer" class="btn btn-danger">فسخ</button>
  </div>
</div>

</fieldset>
</form>

<?php
if(isset($_POST['Modifier'])){
$nomlienM=$_POST['nomlienM'];
$lienM=$_POST['lienM'];
$idlien=$_POST['idhidden'];
modifierLienImportant($idlien,$nomlienM,$lienM);
}
if(isset($_POST['supprimer'])){
$nomlienM=$_POST['nomlienM'];
$lienM=$_POST['lienM'];
$idlien=$_POST['idhidden'];
supprimerLienImportant($idlien);
}

?>

</div></div>
<div class="divdown"></div>
</div>
<table style="visibility:hidden" width="100%" id="tabadherents">
    <tbody>   
   
<?php 
$photoAdherants=afficher_photoAdherants();
//echo mysql_num_rows($photoAdherants);
while($photoAdherant = mysql_fetch_assoc($photoAdherants)){
echo "<tr><td>".$photoAdherant['photo']."</td><td>".$photoAdherant['nom']."</td>
</tr>";
}?>
 </tbody></table>
<script>
function adherentsImg(){
var n = document.getElementById("tabadherents").rows.length;
var i = Math.floor((Math.random() * n-1) + 1);
var x = document.getElementById("tabadherents").rows[i].cells;
//var nom = x[1].innerHTML;
var src = x[0].innerHTML;
//document.getElementById("nomadherent").innerHTML=nom;
document.getElementById("srcadherent").src=src;
setTimeout(adherentsImg,1000);
} 
 adherentsImg();
</script>
</body></html>

