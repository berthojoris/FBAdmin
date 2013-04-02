<?php
include "breadcumb.php";
?>
<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<link rel="stylesheet" href="CSSFacebook/css/rpK4tMJQUx0.css" />
<link rel="stylesheet" href="CSSFacebook/css/TzlwPy7z3O9.css" />
<link rel="stylesheet" href="CSSFacebook/css/n66-WFi3CFk.css" />
<link rel="stylesheet" href="CSSButton/fb-1.css" />
<link rel="stylesheet" href="CSSButton/fb-3.css" />
<link rel="stylesheet" href="CSSButton/fb-buttons.css" />
<script src="jquery-1.9.1.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("li").click(function(e) {
		$(this).removeClass("active withsubsections");
		$('a').removeClass('selected');
		$(this).addClass("active withsubsections");
		$(this).find('a').addClass('selected');
		e.preventDefault();
	});
});

function  GetTime(){
         $.ajax({
		   url : "time.php",
           success : function (data) {
           $("#contentArea").html("Server Time : "+data);
     }
});

setTimeout("GetTime()", 1000);
}
</script>
</head>

<body onLoad="GetTime();" class="devsiteWiki win Locale_en_US">
<?php $start = (float) array_sum(explode(' ',microtime())); ?>

<div class="-cx-PRIVATE-fbLayout__root">
<div class="devsitePage"><div class="menu">
<div class="content">
<a class="topNavItem" href="#">Menu 1</a>
<a class="topNavItem" href="#">Menu 2</a>
<a class="topNavItem" href="#">Menu 3</a>
<a class="topNavItem" href="#">Menu 4</a>
<a class="topNavItem" href="#">Menu 5</a>
<a class="topNavItem account" href="#">Log Out</a>

<div class="clear"></div>
</div>
</div>

<div class="body nav">
<div class="content">
        <div id="bodyMenu" class="bodyMenu">
        
        <div class="toplevelnav">
            <ul id="list">
            	<li><a href="#"><img src="CSSFacebook/icon/message.png">&nbsp;Profile</a></li>
                <li><a href="#"><img src="CSSFacebook/icon/buy.png">&nbsp;Pembayaran</a></li>
                <li><a href="#"><img src="CSSFacebook/icon/user.png">&nbsp;Tagihan</a></li>
                <li><a href="#"><img src="CSSFacebook/icon/write.png">&nbsp;Cek Tayangan</a></li>
                <li><a href="#"><img src="CSSFacebook/icon/mail.png">&nbsp;Webmail</a></li>
                <li><a href="#"><img src="CSSFacebook/icon/cek.png">&nbsp;Status</a></li>
                <li><a href="#"><img src="CSSFacebook/icon/search.png">&nbsp;Cari Data</a></li>
                <li><a href="#"><img src="CSSFacebook/icon/lock.png">&nbsp;Ubah Akun</a></li>
            </ul>
          </div>
        </div>
    
    <div id="bodyText" class="bodyText">
    <div class="header">
    <div class="content">
    <h1>Administrator Menu</h1>
    <!--<div class="breadcrumbs"><a href="#">Getting Started</a> &rsaquo; <a href="index.html">Facebook for Websites</a>-->
    <div style="font-family:'playregular';font-size:14px;" id="contentArea">
   
    </div>
    </div>
    </div>

<!-------------------------------------------------------- Batas Header -------------------------------------------------------->
  
  
<div id="ContentWeb">
<p>Facebook Platform enables you to make your website more social.  You can use our <a href="../../plugins/index.html">Social Plugins</a>, such as the <a href="../../reference/plugins/like/index.html">Like Button</a> to drive user engagement with a single line of HTML. Our <a href="../../reference/plugins/login/index.html">Login Button</a> and <a href="../../plugins/registration/index.html">Registration Plugin</a> let you simplify or eliminate your own user registration and sign-in.  Lastly, the <a href="../../reference/api/index.html">Graph API</a> lets you access the full social graph of a given user, allowing you to create a truly deep personal experience.</p>
<p>This guide will walk you through the basics of creating a web app that leverages these features.  The examples in this guide use PHP for server-side programming and HTML/JavaScript for client-side code. These examples are very straightforward and easily translatable to other languages.</p>

<br />
<form>
<table>
	<tr>
    	<td>NIM</td>
        <td>:</td>
        <td><input type="text" id="nim" name="nim" class="TextMedium" /></td>
    </tr>
    <tr>
    	<td>Nama</td>
        <td>:</td>
        <td><input type="text" id="nama" name="nama" class="TextMedium" /></td>
    </tr>
    <tr>
    	<td>Alamat</td>
        <td>:</td>
        <td><input type="text" id="alamat" name="alamat" class="TextMedium" /></td>
    </tr>
     <tr>
    	<td>Pendidikan Terakhir</td>
        <td>:</td>
        <td>
        <select class="SelectSmall">
        	<option>SMP</option>
        	<option>SMA/SMK</option>
            <option>D3</option>
            <option>S1</option>
            <option>S2</option>
        </select>
        </td>
    </tr>
    <tr>
    	<td>Jenis Kelamin</td>
        <td>:</td>
        <td>
        <input type="radio" name="jenkel" value="laki">Laki-Laki
		<input type="radio" name="jenkel" value="perempuan">Perempuan
        </td>
    </tr>
</table>

<div class="uibutton-toolbar">
    <input type="submit" id="ProsesNow" class="uibutton confirm" value="Simpan Data"/>
    <input type="reset" class="uibutton" value="Reset Form"/>
<!--    <div class="uibutton-group">
        <a class="uibutton" href="#">Report spam</a>
        <a class="uibutton" href="#">Delete</a>
    </div>-->
                        
    
</div>
</form>
</div>


<!-------------------------------------------------------- Batas Footer -------------------------------------------------------->

<div class="mtl pvm uiBoxWhite topborder">
<div class="mbm lfloat"></div>

<div class="clear">
<abbr class="timestamp">
<?php
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$finish = $time;
$total_time = round(($finish - $start), 4);
echo 'Page generated in '.$total_time.' seconds.';
?>
</abbr>
</div>
</div>
</div>

<div class="clear"></div>
</div>
</div>

<div class="footer">
<div class="content">
<div class="copyright">
<div class="mrl">
<div class="fsm fwn fcg"><span> Facebook © 2012</span> · <a rel="dialog" href="http://developers.facebook.com/ajax/intl/language_dialog.php?uri=http%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fguides%2Fweb%2F" title="Use Facebook in another language.">English (US)</a></div></div></div><div class="links"><a href="http://www.facebook.com/FacebookDevelopers" accesskey="1" title="About">About</a><a href="http://www.facebook.com/campaign/landing.php?placement=pf_dev&amp;campaign_id=402047449186&amp;extra_1=auto" accesskey="2" title="Advertising">Advertising</a><a href="http://www.facebook.com/careers" accesskey="3" title="Careers">Careers</a><a href="http://developers.facebook.com/policy" accesskey="4" title="Platform Policies">Platform Policies</a><a href="http://www.facebook.com/policy.php" accesskey="5" title="Privacy Policy">Privacy Policy</a>
</div>
</div>
</div>

<div id="fb-root"></div>
<div id="fb-root"></div>
</div>
</div>


</body>
</html>