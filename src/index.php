<?php

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
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Association de Développement de l’Enfance de la Manouba</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="templates/association/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="./gallerystyle2.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
<script type="text/javascript" src="./motiongallery2.js"></script>
<script type="text/javascript" src="scrolltopcontrol.js"></script>

<script type="text/javascript" src="js/ed.js"></script>
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

#el2 { float:left; background:url(img/el2.png) bottom left no-repeat; width:84px; height:17px; border:none; cursor:pointer;text-indent:-9999em;}
#el2:hover{background:url(img/el2.png) top left no-repeat; width:84px; height:17px; border:none; cursor:pointer;}

#el3 { float:left; background:url(img/el3.png) bottom left no-repeat; width:84px; height:17px; border:none; cursor:pointer;text-indent:-9999em; margin-left:415px;}
#el3:hover{background:url(img/el3.png) top left no-repeat; width:84px; height:17px; border:none; cursor:pointer;}

#el4 { float:left; background:url(img/el4.png) bottom left no-repeat; width:84px; height:17px; border:none; cursor:pointer;text-indent:-9999em;}
#el4:hover{background:url(img/el4.png) top left no-repeat; width:84px; height:17px; border:none; cursor:pointer;}

#el0 { float:left; background:url(img/el0.png) bottom left no-repeat; width:17px; height:17px; border:none; cursor:pointer;text-indent:-9999em; margin-left:15px;}
#el0:hover{background:url(img/el0.png) top left no-repeat; width:17px; height:17px; border:none; cursor:pointer;}

#el00 { float:left; background:url(img/el00.png) bottom left no-repeat; width:17px; height:17px; border:none; cursor:pointer;text-indent:-9999em; margin-left:37px;}
#el00:hover{background:url(img/el00.png) top left no-repeat; width:17px; height:17px; border:none; cursor:pointer;}

#el5 { float:left; background:url(img/el5.png) bottom left no-repeat; width:105px; height:17px; border:none; cursor:pointer;text-indent:-9999em; margin-left:15px;}
#el5:hover{background:url(img/el5.png) top left no-repeat; width:105px; height:17px; border:none; cursor:pointer;}

#el9 { float:left; background:url(img/el9.png) bottom left no-repeat; width:84px; height:17px; border:none; cursor:pointer;text-indent:-9999em; }
#el9:hover{background:url(img/el9.png) top left no-repeat; width:84px; height:17px; border:none; cursor:pointer;}

#el10 { float:left; background:url(img/el10.png) bottom left no-repeat; width:105px; height:17px; border:none; cursor:pointer;text-indent:-9999em; margin-left:15px;}
#el10:hover{background:url(img/el10.png) top left no-repeat; width:105px; height:17px; border:none; cursor:pointer;}

#el11 { float:left; background:url(img/el11.png) bottom left no-repeat; width:105px; height:17px; border:none; cursor:pointer;text-indent:-9999em; margin-left:7px;}
#el11:hover{background:url(img/el11.png) top left no-repeat; width:105px; height:17px; border:none; cursor:pointer;}

#el12 { float:left; background:url(img/el12.png) bottom left no-repeat; width:105px; height:17px; border:none; cursor:pointer;text-indent:-9999em; margin-left:7px;}
#el12:hover{background:url(img/el12.png) top left no-repeat; width:105px; height:17px; border:none; cursor:pointer;}

#el13 { float:left; background:url(img/el13.png) bottom left no-repeat; width:105px; height:17px; border:none; cursor:pointer;text-indent:-9999em; margin-left:7px;}
#el13:hover{background:url(img/el13.png) top left no-repeat; width:105px; height:17px; border:none; cursor:pointer;}

#el14 { float:left; background:url(img/el14.png) bottom left no-repeat; width:84px; height:17px; border:none; cursor:pointer;text-indent:-9999em;}
#el14:hover{background:url(img/el14.png) top left no-repeat; width:84px; height:17px; border:none; cursor:pointer;}

--></style>

<div align="center" style="margin:0 auto;width:963px;">
<table width="963" style="margin:0 0px 0 0;" height="45" border="0" cellpadding="0" cellspacing="0"><tbody>
<tr>
<td width="963" style="background:url(./templates/association/images/lat.png) no-repeat;width:963px;height:45px;">
<div style="position:absolute;width:963px;margin:-28px 0px 0 0;">

<div class="container">
<div id="menu" style="width: 963px; height: 30px" align="center">
<a id="el00"  href="#"></a>
<a id="el0"  href="https://www.facebook.com/Association-de-D%C3%A9veloppement-de-lEnfance-de-la-Manouba-133136323538497/timeline/"></a>
<a id="el3"  href="./pages/photoEnfants"></a>
<a id="el4" href="./pages/bricolage.php"></a>
<a id="el9"  href="./pages/books.php"></a>
<a id="el2"  href="./pages/stages.php"></a>
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



<script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"
    data-pin-hover="true"
></script>
</body>


<script type="text/javascript">







function popup(pUrl, pName, pWidth, pHeight, pScroll)



{



	LeftPosition = (screen.width) ? (screen.width-pWidth)   / 2 : 0;



	TopPosition  = (screen.height)? (screen.height-pHeight) / 2 : 0;



	settings = 'height='+pHeight+', width='+pWidth+', top='+TopPosition+', left='+LeftPosition+', scrollbars='+pScroll+', resizable';



	win = window.open(pUrl, pName, settings)



}



</script>






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
<?php 
while($stage = mysql_fetch_assoc($stages)){
echo "<li><a href=\"#\">".$stage['nom']."</a></li>";
}?>

</ul></div></div>
<div class="divfooter"></div>
</div>
<div class="menus">
<div class="divtitle"><h2>روابط الألعاب</h2></div>
<div class="divtext"><div class="divtextpadding"><ul>
<?php

while($lienJeux = mysql_fetch_assoc($liensJeux)){echo "<li><a href='".$lienJeux['url']."'>".$lienJeux['nom']."</a></li>";}
?>
</ul></div></div>
<div class="divfooter"></div>
</div>
<div class="menus">
<div class="divtitle"><h2>صور المنخرطين</h2></div>
<div class="divtext"><div class="divtextpadding">
<p id="nomadherent"><a href="#"><img id="srcadherent" border=0 src="" width="168" height="88"></a></p>

</div></div>
<div class="divfooter"></div>
</div>
<div class="menus">
<div class="divtitle"><h2>اﻹشهار </h2></div>
<div class="divtext"><div class="divtextpadding">
<p id="nompub"><a href="#"><img id="srcpub" border=0 src="" width="168" height="88"></a></p>

</div></div>
<div class="divfooter"></div>
</div>

</div><div class='divleftx'><div class="menus">
<div class="divtitle"><a href="./pages/books.php"><h2>مكتبة الوثائق</h2></a></div>
<div class="divtext"><div class="divtextpadding"><ul>
<?php
while($fichier = mysql_fetch_assoc($fichiers)){echo "<li><a href='".$fichier['urlFtp']."' download>".$fichier['nom']."</a></li>";}
?>
</ul></div></div>
<div class="divfooter"></div>
</div><div class="menus">
<div class="divtitle"><a href="./pages/photoEnfants.php"><h2>فضاء الرسوم</h2></a></div>
<div class="divtext"><div class="divtextpadding"><ul>
<?php
while($photoEnfant = mysql_fetch_assoc($photoEnfants)){echo "<li><a href='#'>صورة ".$photoEnfant['prenom']." ".$photoEnfant['nom']."</a></li>";}

?>
</ul></div></div>
<div class="divfooter"></div>
</div>
<div class="menus">
<div class="divtitle"><a href="./pages/bricolage.php"><h2>البراعة اليدوية</h2></a></div>
<div class="divtext"><div class="divtextpadding"><ul><?php
while($bricolage = mysql_fetch_assoc($bricolages)){echo "<li><a href='#'>".$bricolage['prenom']." ".$bricolage['nom']."</a></li>";}?>
</ul></div></div>
<div class="divfooter"></div>
</div>
<div class="menus">
<div class="divtitle"><h2>روابط مهمة</h2></div>
<div class="divtext"><div class="divtextpadding"><ul>
  <?php  
while($liensImporatant = mysql_fetch_assoc($liensImporatants)){
echo "<li><a href='".$liensImporatant['lien']."'>".$liensImporatant['nom']." </a></li>";}
?>
</ul></div></div>
<div class="divfooter"></div>
</div>
</div>
<div class='divcenterx'><div id="contents">
<div class="divup"><h1>أنشطتنا</h1></div>
<div class="divcenter"><div class="divcenterpadding"><style type="text/css">


#mcis {
 display: none;
}

#sliderFrame {



  position: relative;
  width: 510px;
  margin: 0 auto;
  border: 5px solid #3F881C;
  border-bottom: 25px solid #3F881C;
  background: #fff;
  border-radius: 0 0 5px 5px;
  -webkit-border-radius: 0 0 5px 5px;
  -moz-border-radius: 0 0 5px 5px;
  margin-bottom: 5px;
 
}
#slider img {
 position: absolute;
 border: none;
display: none;
}

#slider,#sliderMs {
 width: 510px;
 height: 218px;
 background: #fff url('') no-repeat 50% 50%;
 position: relative;
 margin: 0 auto;
 box-shadow: 0px 1px 5px #999999;
}
#sliderMs a.imgLink,
#slider a.imgLink {
 z-index: 2;
 display: none;
 position: absolute;
 top: 0px;
 left: 0px;
 border: 0;
 padding: 0;
 margin: 0;
 width: 100%;
 height: 100%;
}

div.mc-caption-bg, div.mc-caption-bg2 {
 position: absolute;
 width: 100%;
 height: auto;
 padding: 0;
 left: 0px;
 bottom: 0px;
 z-index: 3;
 overflow: hidden;
 font-size: 0;
}

div.mc-caption-bg {
 background-color: black;
}

div.mc-caption {
 font: normal 20px/22px GE_SS_Two_Medium;
 color: #EEE;
 z-index: 4;
 padding: 10px 0;
 text-align: center;
}

div.mc-caption a {
 color: #FB0;
}

div.mc-caption a:hover {
 color: #DA0;
}

div.navBulletsWrapper {
 top:225px;
background: none;
 position: relative;
 z-index: 5;
 cursor: pointer;
}

div.navBulletsWrapper div {
 width: 11px;
 height: 11px;
 background:transparent url(./img/cnmu-sliddot.png) no-repeat 0 0;
 float: left;
 overflow: hidden;
 vertical-align: middle;
 cursor: pointer;
 margin-right: 11px;
 _position: relative;
}



div.navBulletsWrapper div.active {
 background-position: 0 -11px;
}

#slider,#sliderMs {
 transform: translate3d(0,0,0);
 -ms-transform: translate3d(0,0,0);
 -moz-transform: translate3d(0,0,0);
 -o-transform: translate3d(0,0,0);
 -webkit-transform: translate3d(0,0,0);
}
 </style> 

<script src="http://www.sunnaonline.org/ramadan/cnmuslid.js" type="text/javascript"></script>

<div id="sliderFrame">
<div id="slider">
<a href="#"><img src="https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-xap1/v/t1.0-9/10632847_329497517235709_5929278322557348836_n.jpg?oh=5790816975583a624e3ec55e41219ee5&oe=56AABAD4&__gda__=1449689096_2cbf1ff5fe4874478ff029a721c97cb1" alt="اليوم الإعلامي للمحاضن المدرسية بمحضنة ابن سينا منوبة الوسطى 2"/></a>
<a href="#"><img src="https://scontent-cdg2-1.xx.fbcdn.net/hphotos-xpf1/v/t1.0-9/10632733_329497380569056_6044915053740623544_n.jpg?oh=b7e4afcf0eddef84caa7774f60a959a2&oe=5671EFC9" alt="اليوم الإعلامي للمحاضن المدرسية بمحضنة ابن سينا منوبة الوسطى 2"/></a>
<a href="#"><img src="https://fbcdn-sphotos-c-a.akamaihd.net/hphotos-ak-xaf1/v/t1.0-9/10423909_329497160569078_2651172565316324048_n.jpg?oh=b37ecb16ce78b579fca3e4535171d5bb&oe=56613BF3&__gda__=1450294850_7c82448a5ad9a846206703169d4fee12" alt="اليوم الإعلامي للمحاضن المدرسية بمحضنة ابن سينا منوبة الوسطى 2"/></a>
<a href="#"><img src="https://scontent-cdg2-1.xx.fbcdn.net/hphotos-xap1/v/t1.0-9/1506408_329496470569147_9101495097874811406_n.jpg?oh=df4fef7754a7b5807ba8d478b02e6626&oe=5671EAE3" alt="اليوم الإعلامي للمحاضن المدرسية بمحضنة ابن سينا منوبة الوسطى 2"/></a>
<a href="#"><img src="https://scontent-cdg2-1.xx.fbcdn.net/hphotos-xaf1/v/t1.0-9/1939618_329496380569156_1549093625488575223_n.jpg?oh=2ebbca14af3d32b597ea67339b3e72ba&oe=56739551" alt="اليوم الإعلامي للمحاضن المدرسية بمحضنة ابن سينا منوبة الوسطى 2"/></a>
<a href="#"><img src="https://scontent-cdg2-1.xx.fbcdn.net/hphotos-xfa1/v/t1.0-9/10409511_329496343902493_5024426955052770788_n.jpg?oh=0d21ec4c711454c7839ca8b8b50cba1b&oe=566C2F5F" alt="اليوم الإعلامي للمحاضن المدرسية بمحضنة ابن سينا منوبة الوسطى 2"/></a>
<a href="#"><img src="https://fbcdn-sphotos-d-a.akamaihd.net/hphotos-ak-xpt1/v/t1.0-9/10645312_329496183902509_1774095651991012629_n.jpg?oh=0d0778cee843a655446ec518fe529c7c&oe=566A8B2F&__gda__=1449695531_9c82149b47d8a5d6052f3111424988c6" alt="اليوم الإعلامي للمحاضن المدرسية بمحضنة ابن سينا منوبة الوسطى 2"/></a>
<a href="#"><img src="https://fbcdn-sphotos-c-a.akamaihd.net/hphotos-ak-xaf1/v/t1.0-9/10516836_329495993902528_8297619660015711352_n.jpg?oh=1914a6767be227ca77213c1f9886e2f2&oe=566AC797&__gda__=1453136934_f823c9eda61cc41c77527f11b86ed1f1" alt="اليوم الإعلامي للمحاضن المدرسية بمحضنة ابن سينا منوبة الوسطى 2"/></a>
<a href="#"><img src="https://fbcdn-sphotos-c-a.akamaihd.net/hphotos-ak-xfa1/v/t1.0-9/1619116_329493717236089_4896862268926643051_n.jpg?oh=ee9116c2bc1eb2a711ca4c6c62e8eef6&oe=569D398C&__gda__=1453424860_01378864af5eda41d28abae3ef95edca" alt="اليوم الإعلامي للمحاضن المدرسية بمحضنة ابن سينا منوبة الوسطى 2"/></a>
<a href="#"><img src="https://fbcdn-photos-d-a.akamaihd.net/hphotos-ak-xap1/v/t1.0-0/p206x206/10645252_324499111068883_8936810874832232357_n.jpg?oh=c833b0b9167feb2fe844ac8d2451a7ac&oe=566C516D&__gda__=1449897779_5114f3fe2202bfba65d74f11c2cb4e7d" alt="اليوم الإعلامي للمحاضن المدرسية بمحضنة ابن سينا منوبة الوسطى 2"/></a>












</div></div></div></div>
<div class="divdown"></div>
</div>
<br /><div id="contents">
<div class="divup"><h1>التعريف بالجمعية</h1></div>
<div class="divcenter"><div class="divcenterpadding"><html dir="rtl">


<table border="1" width="99%" id="table1" style="border-width: 0px" height="2">
	<tr>
		<td style="border-style: none; border-width: medium" width="6%">
								<img border="0" src="" width="72" height="57"></td>
		<td style="border-style: none; border-width: medium" width="1%">
	<img border="0" src="http://www.a7bash.com/souwar/1371246015-aa95d.png" width="2" height="57"></td>
		<td style="border-style: none; border-width: medium" width="92%">
	<p class="MsoNormal" dir="RTL">
	<span lang="AR-SA" style="font-size:8.5pt;font-family:
Tahoma">
التعريف بالجمعية &nbsp; ... 
<a href="#">&#1575;&#1604;&#1605;&#1586;&#1610;&#1583;</a></font></span></td>
	</tr>
	</table>

</html></div></div>
<div class="divdown"></div>
</div>
<br /><div id="contents">
<div class="divup"><h1>أهدافنا</h1></div>
<div class="divcenter"><div class="divcenterpadding"><html dir="rtl">


<table border="1" width="99%" id="table1" style="border-width: 0px" height="2">
	<tr>
		<td style="border-style: none; border-width: medium" width="6%">
								<img border="0" src="" width="72" height="57"></td>
		<td style="border-style: none; border-width: medium" width="1%">
	<img border="0" src="http://www.a7bash.com/souwar/1371246015-aa95d.png" width="2" height="57"></td>
		<td style="border-style: none; border-width: medium" width="92%">
	<p class="MsoNormal" dir="RTL">
	<span lang="AR-SA" style="font-size:8.5pt;font-family:
Tahoma">
&nbsp; ... 
<a href="#">&#1575;&#1604;&#1605;&#1586;&#1610;&#1583;</a></font></span></td>
	</tr>
	</table>

</html></div></div>
<div class="divdown"></div>
</div>
<br /><div id="contents">
<div class="divup"><h1>الأنشطة</h1></div>
<div class="divcenter"><div class="divcenterpadding"><html dir="rtl">


<table border="1" width="99%" id="table1" style="border-width: 0px" height="2">
	<tr>
		<td style="border-style: none; border-width: medium" width="6%">
								<img border="0" src="" width="72" height="57"></td>
		<td style="border-style: none; border-width: medium" width="1%">
	<img border="0" src="http://www.a7bash.com/souwar/1371246015-aa95d.png" width="2" height="57"></td>
		<td style="border-style: none; border-width: medium" width="92%">
	<p class="MsoNormal" dir="RTL">
	<span lang="AR-SA" style="font-size:8.5pt;font-family:
Tahoma">الأنشطة
&nbsp; ... 
<a href="#">&#1575;&#1604;&#1605;&#1586;&#1610;&#1583;</a></font></span></td>
	</tr>
	</table>

</html></div></div>
<div class="divdown"></div>
</div>
<br /><div id="contents">
<div class="divup"><h1>أخر المستجدات </h1></div>
<div class="divcenter"><div class="divcenterpadding">
</div></div>
<div class="divdown"></div>
</div>
<br /><div class='divcenterxpadding'></div></div><div style='clear:both;'></div>

<table  width="100%" id="tabpubs" style="visibility:hidden">
    <tbody>   
   
<?php 
$pubs=afficher_pubs();
while($pub = mysql_fetch_assoc($pubs)){
echo "<tr><td>".$pub['url']."</td><td>".$pub['nom']."</td>
</tr>";
}?>
 </tbody></table>
<script>
function pubsImg(){
var n = document.getElementById("tabpubs").rows.length;
var i = Math.floor((Math.random() * n-1) + 1);
var x = document.getElementById("tabpubs").rows[i].cells;
var src = x[0].innerHTML;
document.getElementById("srcpub").src=src;
setTimeout(pubsImg,1000);
} 
 pubsImg();
</script>
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
