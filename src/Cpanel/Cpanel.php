<?php
session_start();
$errors="";
if (isset($_SESSION['admin'])) 
{
header('Location: AccepterSupprimerBricollage.php');
}
include ('fonction/function.php');
if(isset($_POST['connexion'])){
$login=$_POST['login'];
$password=$_POST['password'];
$connexion=seconnecter($login,$password);
if($connexion==1){
$_SESSION['admin']=$_POST['login'];
header('Location: AccepterSupprimerBricollage.php');
}else{
$errors="لم يتم الدخول";
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>تسجيل دخول </title>
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
<div class="divtitle"><a href="./pages/stages.php"><h2>تسجيل التربصات</h2></a></div>
<div class="divtext"><div class="divtextpadding"><ul>
<li><a href='#'>  Video 1</a></li>
<li><a href='#'>  Video 2</a></li>
<li><a href='#'>  Video 3</a></li>
<li><a href='#'>  Video 4</a></li>
<li><a href='#'>  Video 5</a></li>
<li><a href='#'> Video 6</a></li>
</ul></div></div>
<div class="divfooter"></div>
</div>
<div class="menus">
<div class="divtitle"><h2>روابط الألعاب</h2></div>
<div class="divtext"><div class="divtextpadding"><ul>
<li><a href="#">1</a></li>
<li><a href="#">2</a></li>
<li><a href="#">3</a></li>
<li><a href="#">4</a></li>
</ul></div></div>
<div class="divfooter"></div>
</div>
<div class="menus">
<div class="divtitle"><a href="./ListeAdherents.php"><h2>صور المنخرطين</h2></a></div>
<div class="divtext"><div class="divtextpadding"><p><a href="#">
<img border="0" src="" width="168" height="88"></a></p></div></div>
<div class="divfooter"></div>
</div>

</div><div class='divleftx'><div class="menus">
<div class="divtitle"><h2>مكتبة الوثائق</h2></div>
<div class="divtext"><div class="divtextpadding"><ul>
<li><a href='#'>كتب العقيدة والتوحيد</a></li>
<li><a href='#'>علوم القرءان والحديث</a></li>
<li><a href='#'>كتب الفقه الإسلامي</a></li>
<li><a href='#'>كتب الأطفال والناشئة</a></li>
<li><a href='#'>السير والتراجم</a></li></ul></div></div>
<div class="divfooter"></div>
</div><div class="menus">
<div class="divtitle"><a href="./pages/photoEnfants.php"><h2>فضاء الرسوم</h2></a></div>
<div class="divtext"><div class="divtextpadding"><ul>
<li><a href='#'>audio 1</a></li>
<li><a href='#'>audio 2</a></li>
<li><a href='#'>audio 3</a></li>
<li><a href='#'>audio 4</a></li>
<li><a href='#'>audio 5</a></li>
<li><a href='#'>audio 6</a></li>
<li><a href='#'>audio 7</a></li>
<li><a href='#'>audio 8</a></li>
</ul></div></div>
<div class="divfooter"></div>
</div>
<div class="menus">
<div class="divtitle"><a href="./pages/bricolage.php"><h2>البراعة اليدوية</h2><a></div>
<div class="divtext"><div class="divtextpadding"><ul>
<li><a href='#'>audio 1</a></li>
<li><a href='#'>audio 2</a></li>
<li><a href='#'>audio 3</a></li>
<li><a href='#'>audio 4</a></li>
<li><a href='#'>audio 5</a></li>
<li><a href='#'>audio 6</a></li>
<li><a href='#'>audio 7</a></li>
<li><a href='#'>audio 8</a></li>
</ul></div></div>
<div class="divfooter"></div>
</div>
<div class="menus">
<div class="divtitle"><h2>روابط مهمة</h2></div>
<div class="divtext"><div class="divtextpadding"><ul>
<li><a href="#">1</a></li>
<li><a href="#">2</a></li>
<li><a href="#">3</a></li>
<li><a href="#">4</a></li>
</ul></div></div>
<div class="divfooter"></div>
</div></div><div class='divcenterx'>
<div id="contents">
<br><br>
<?php
//if(isset($_SESSION['admin'])){
?>
<form class="form-horizontal" action="" method="post">
<fieldset>

<!-- Form Name -->
<legend>تسجيل دخول</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">الإسم</label>  
  <div class="col-md-4">
  <input name="login" type="text" placeholder="الإسم" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">كلمة العبور</label>  
  <div class="col-md-4">
  <input name="password" type="password" class="form-control input-md" required="">
    
  </div>
</div>

<br>
<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-8">
    <button name="connexion">دخول</button>
    <button name="annuler">إلغاء</button>
  </div>
</div>
<br>
</fieldset>
</form>
<?php
//}
echo "<p color:red>".$errors."</p>";

?>


</div></div>
<div class="divdown"></div>
</div>
</body></html>

