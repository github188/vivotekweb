<?php 
require_once('../../condb/conEvent.php');

function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{$theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
 $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);
  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="robots" content="noindex, nofollow">
<title>A Very Special Invitation</title>
<style type="text/css">
body {margin: 0px auto;font-family: Arial, Helvetica, sans-serif; background-color:#1777AC;}
A:link, A:hover, A:active, A:visited, A:visited:hover, A:visited:active  {text-decoration:underline;color:#FFFFFF; }
img { border:0}
td img {display: block;}
</style>
</head>

<body>

<?php 

if(eregi("[0-9.-.+.(.)]",$_POST['pho'])){$pho="y";}
if(eregi("[0-9.#]",$_POST['ex'])){$ex="y";}
if(eregi("^([-a-zA-Z0-9._]+@[-a-zA-Z0-9._]+(\.[-a-zA-Z0-9._]+)+)*$",$_POST['mail'])){$mail="y";}
if(eregi("[..]",$_POST['web'])){$web="y";}


if(
((isset($_POST['asisusainster']))&&($_POST['asisusainster']=="1"))&&($pho="y")&&($ex="y")&&($mail="y")&&($web="y")&&($_POST['namef']!="")&&($_POST['namel']!="")&&($_POST['com']!="")&&($_POST['pho']!="")&&($_POST['mail']!="")&&($_POST['web']!="")
){
mysql_select_db($database_conEvent, $conEvent);
$insertSQL = sprintf("INSERT INTO tb2009asisusa (namef, namel, title, com, phone, ext, email, web) VALUES (%s, %s, %s, %s, %s, %s, %s, %s)",
					   GetSQLValueString($_POST['namef'], "text"),
					   GetSQLValueString($_POST['namel'], "text"),
					   GetSQLValueString($_POST['title'], "text"),
					   GetSQLValueString($_POST['com'], "text"),
					   GetSQLValueString($_POST['pho'], "text"),
					   GetSQLValueString($_POST['ex'], "text"),
					   GetSQLValueString($_POST['mail'], "text"),
					   GetSQLValueString($_POST['web'], "text"));
$resultEvent = mysql_query($insertSQL, $conEvent) or die(mysql_error()); 
$resultvoucher = "p";
;}


echo"
<table bgcolor='#1777AC' style='margin: 0pt auto; font-family:Arial, Helvetica, sans-serif;' cellspacing='0' cellpadding='0' width='100%' align='center' border='0'>
<tr><td>
<table bgcolor='#1777AC' style='margin: 0pt auto; font-family:Arial, Helvetica, sans-serif;' cellspacing='0' cellpadding='0' width='718' align='center' border='0'>
  <tr>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='71' height='1' border='0' alt='&nbsp;' /></td>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='193' height='1' border='0' alt='&nbsp;' /></td>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='282' height='1' border='0' alt='&nbsp;' /></td>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='7' height='1' border='0' alt='&nbsp;' /></td>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='76' height='1' border='0' alt='&nbsp;' /></td>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='15' height='1' border='0' alt='&nbsp;' /></td>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='74' height='1' border='0' alt='&nbsp;' /></td>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='1' height='1' border='0' alt='&nbsp;' /></td>
  </tr>

  <tr>
   <td colspan='4'><a href='http://www.vivotek.com/?utm_source=AsisUSA09&utm_medium=Logo&utm_content=AsisUSA09Logo&utm_campaign=AsisUSA09' target='_blank' title='link to VIVOTEK Web Site in new window'><img src='../../image/events/events_2009/asis2009_usa/usa/logo_VIVOTEK.gif' width='553' height='82' border='0' alt='&rArr; VIVOTEK - ASIS 2009 A Very Special Invitation'/></a></td>
   <td><a href='http://www.vivotek.com/products/model.php?network_camera=ip7161&utm_source=AsisUSA09&utm_medium=Logo7161&utm_content=AsisUSA09Logo7161&utm_campaign=AsisUSA09' target='_blank' title='link to IP7161 Page in new window'><img src='../../image/events/events_2009/asis2009_usa/usa/brand_ip7161.jpg' width='76' height='82' border='0' alt='&rArr; IP7161' /></a></td>
   <td colspan='2'><a href='http://www.vivotek.com/downloadfiles/downloads/datasheets/ip8161datasheet_en.pdf?utm_source=AsisUSA09&utm_medium=Logo8161&utm_content=AsisUSA09Logo8161&utm_campaign=AsisUSA09' target='_blank' title='Open IP8161 Datasheet PDF File in new window'><img src='../../image/events/events_2009/asis2009_usa/usa/brand_ip8161.jpg' width='89' height='82' border='0' alt='&rArr; IP8161' /></a></td>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='1' height='82' border='0' alt='&nbsp;' /></td>
  </tr>";



if($resultvoucher=="p"){echo"
  
  
  <tr>
  <td colspan='7'><img src='../../image/events/events_2009/asis2009_usa/usa/con_top.gif' width='718' height='18' border='0' alt='&nbsp;' /></td>
  <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='1' height='18' border='0' alt='&nbsp;' /></td>
  </tr>
  <tr>
  <td><img src='../../image/events/events_2009/asis2009_usa/usa/con_left.gif' width='71' height='600' border='0' alt='&nbsp;' /></td>
  <td colspan='5' style='background-color:#FFF;'>
  
  <table width='550' border='0' cellspacing='0' cellpadding='0' align='center' valign='middle'>
    <tr>
    <td colspan='2' width='550' height='100' align='center' valign='top'><p style='color:#CF441A;'>Your form has been received. We hope you win the prize!<br>You can now proceed to the following sections:</p></td>
  </tr>
  <tr>
    <td width='275' align='center' valign='middle'><a href='../../index.php?&utm_source=Homepage&utm_medium=Asis&utm_content=HomepageAsis&utm_campaign=Homepage' target='_blank'><img src='../../image/events/events_2009/asis2009_usa/usa/con_pass.gif' width='145' height='38' border='0' alt='&nbsp;' /></a><p><a href='../../index.php?&utm_source=Homepage&utm_medium=Asis&utm_content=HomepageAsis&utm_campaign=Homepage' target='_blank' style='color:#1777AC;'>Registration for the ASIS Free Pass</a></p></td>
    <td width='275' align='center' valign='middle'><a href='http://www.asisonline.org/' target='_blank'><img src='../../image/events/events_2009/asis2009_usa/usa/con_asisweb.gif' width='200' height='101' border='0' alt='&nbsp;' /></a><p><a href='http://www.asisonline.org/' target='_blank' style='color:#1777AC;'>Link to ASIS offical web site</a></p></td>
  </tr>
  <tr>
    <td width='275' align='center' valign='middle'><a href='../../downloadfiles/events/events_2009/VIVOTEK_partner_cocktail_reception.zip' target='_blank'><img src='../../image/events/events_2009/asis2009_usa/usa/con_calendar.gif' width='104' height='105' border='0' alt='&nbsp;' /></a><p><a href='../../downloadfiles/events/events_2009/VIVOTEK_partner_cocktail_reception.zip'  target='_blank' style='color:#1777AC;'>Add to your Calendar</a></p></td>
    <td width='275' align='center' valign='middle'><a href='http://maps.google.com/maps?rls=en&oe=UTF-8&um=1&ie=UTF-8&q=Conference+Room+Lanai+Deck,+Hilton+Anaheim,+777+Convention+Way,+Anaheim,+CA+92802&fb=1&split=1&cid=0,0,10086631484695396384&ei=iX6fStuqM5Dy7AO-3dn_Cw&sa=X&oi=local_result&ct=image&resnum=1&utm_source=AsisUSA09&utm_medium=Gmap&utm_content=AsisUSA09Gmap&utm_campaign=AsisUSA09' target='_blank'><img src='../../image/events/events_2009/asis2009_usa/usa/con_map.gif' width='148' height='53' border='0' alt='&nbsp;' /></a><p><a href='http://maps.google.com/maps?rls=en&oe=UTF-8&um=1&ie=UTF-8&q=Conference+Room+Lanai+Deck,+Hilton+Anaheim,+777+Convention+Way,+Anaheim,+CA+92802&fb=1&split=1&cid=0,0,10086631484695396384&ei=iX6fStuqM5Dy7AO-3dn_Cw&sa=X&oi=local_result&ct=image&resnum=1&utm_source=AsisUSA09&utm_medium=Gmap&utm_content=AsisUSA09Gmap&utm_campaign=AsisUSA09' target='_blank' style='color:#1777AC;'>Search location</a></p></td>
  </tr>
  <tr>
    <td colspan='2' width='550' height='150' align='center' valign='bottom'><a href='../../index.php'><img src='../../image/all/VIVOTEK_logo_388x100.gif' width='291' height='75' border='0' alt='&nbsp;' /></a><p><a href='../../index.php' style='color:#1777AC;'>Back to VIVOTEK web site</a></p></td>
  </tr>
</table>
  
  </td>
  <td><img src='../../image/events/events_2009/asis2009_usa/usa/con_right.gif' width='74' height='600' border='0' alt='&nbsp;' /></td>
  <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='1' height='304' border='0' alt='&nbsp;' /></td>
  </tr>




";}else{


echo"
  <tr>
   <td colspan='7'><a href='http://www1.hilton.com/en_US/hi/hotel/SNAAHHH-Hilton-Anaheim-California/index.do?utm_source=AsisUSA09&utm_medium=Ban&utm_content=AsisUSA09Ban&utm_campaign=AsisUSA09' title='link to Hilton Anaheim Web Site'><img src='../../image/events/events_2009/asis2009_usa/usa/banner.jpg' width='718' height='329' border='0' alt='&rArr; Hilton Anaheim' /></a></td>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='1' height='329' border='0' alt='&nbsp;' /></td>
  </tr>
  <tr>
   <td colspan='7'><img src='../../image/events/events_2009/asis2009_usa/usa/invitation.gif' width='718' height='153' border='0' alt='&rArr; VIVOTEK cordially invites you to the VIVOTEK Partner Cocktail Reception during ASIS 2009. Join us for happy hour after ASIS exhibition hours and receive a chance to win a VIVOTEK IP camera! Please bring your business card to enter our raffle. RSVP using the form below and come to the VIVOTEK booth (Booth No.: 2957) at ASIS for a free drink voucher!' style='color:#FFFFFF;'/></td>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='1' height='153' border='0' alt='&nbsp;' /></td>
  </tr>
  <tr>
   <td colspan='7'><a href='http://maps.google.com/maps?rls=en&oe=UTF-8&um=1&ie=UTF-8&q=Conference+Room+Lanai+Deck,+Hilton+Anaheim,+777+Convention+Way,+Anaheim,+CA+92802&fb=1&split=1&cid=0,0,10086631484695396384&ei=iX6fStuqM5Dy7AO-3dn_Cw&sa=X&oi=local_result&ct=image&resnum=1&utm_source=AsisUSA09&utm_medium=Gmap&utm_content=AsisUSA09Gmap&utm_campaign=AsisUSA09' target='_blank' title='open google map in new window'><img src='../../image/events/events_2009/asis2009_usa/usa/data.gif' width='718' height='68' border='0' alt='&rArr; Date: Tuesday, September 22, 2009  &rArr; Time: 5:00~8:00 PM &rArr; Venue: Conference Room Lanai Deck, Hilton Anaheim, 777 Convention Way,  Anaheim, CA 92802 (open google map in new window)' /></a></td>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='1' height='68' border='0' alt='&nbsp;' /></td>
  </tr>
  <tr>
   <td colspan='7'><a href='http://www.vivotek.com/downloadfiles/events/events_2009/VIVOTEK_partner_cocktail_reception.zip?utm_source=AsisUSA09&utm_medium=Gmap&utm_content=AsisUSA09Gmap&utm_campaign=AsisUSA09' target='_blank' title='open google map in new window'><img src='../../image/events/events_2009/asis2009_usa/usa/isc.gif' width='718' height='44' border='0' alt='&rArr; Download Calendar .isc file, and sync it to your Calendar or Phone.' /></a></td>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='1' height='44' border='0' alt='&nbsp;' /></td>
  </tr>
  <tr>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/form_left.gif' width='71' height='304' border='0' alt='&nbsp;' /></td>
   <td colspan='5' background='#CF441A' width='572' height='304' style='background-color:#CF441A;'>
   <!-- FORM START -->
   <form action='invitation_2009_asis_usa_send.php' method='post' style='margin:0;padding:0;'>
   <table bgcolor='#CF441A' border='0' cellpadding='0' cellspacing='0' width='572'>
  <tr>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='63' height='1' border='0' alt='' /></td>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='17' height='1' border='0' alt='' /></td>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='28' height='1' border='0' alt='' /></td>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='10' height='1' border='0' alt='' /></td>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='61' height='1' border='0' alt='' /></td>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='134' height='1' border='0' alt='' /></td>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='51' height='1' border='0' alt='' /></td>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='183' height='1' border='0' alt='' /></td>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='25' height='1' border='0' alt='' /></td>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='1' height='1' border='0' alt='' /></td>
  </tr>
  <tr>
   <td colspan='9' width='572' height='3' bgcolor='#CF441A' style='background-color:#CF441A'></td>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='1' height='3' border='0' alt='' /></td>
  </tr>
  <tr>
   <td colspan='4' align='left' valign='bottom'><img src='../../image/events/events_2009/asis2009_usa/usa/name_f.gif' width='118' height='28' border='0' alt='First Name' style='color:#FFFFFF;font-weight:800;font-family:Arial, Helvetica, sans-serif;' /></td>
   <td colspan='5' width='455' height='28' bgcolor='#CF441A' style='background-color:#CF441A' valign='bottom'><input name='namef' value='"; if((isset($_POST['namef']))&&($_POST['namef']!='')){echo $_POST['namef'];} echo"' style='width:420px;height:16px;color:#FFFFFF; font-size:16px; font-family: Arial, Helvetica, sans-serif; background-color:#CF441A; border:none;"; if(((isset($_POST['namef']))&&($_POST['namef']==''))||(!isset($_POST['namef']))){echo 'border:solid 1px #FFFFFF;';} echo"' /></td>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='1' height='28' border='0' alt='' /></td>
  </tr>
  <tr>
   <td colspan='9'><img src='../../image/events/events_2009/asis2009_usa/usa/invitation_2009_asis_usa_form_r3_c1.gif' width='572' height='8' border='0' alt='' /></td>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='1' height='8' border='0' alt='' /></td>
  </tr>
  <tr>
   <td colspan='4' align='left' valign='bottom'><img src='../../image/events/events_2009/asis2009_usa/usa/name_l.gif' width='118' height='28' border='0'  alt='Last Name' style='color:#FFFFFF;font-weight:800;font-family:Arial, Helvetica, sans-serif;' /></td>
   <td colspan='5' width='455' height='28' bgcolor='#CF441A' style=' background-color:#CF441A' valign='bottom'><input name='namel' value='"; if((isset($_POST['namel']))&&($_POST['namel']!='')){echo $_POST['namel'];} echo"' style='width:420px;height:16px;color:#FFFFFF; font-size:16px; font-family: Arial, Helvetica, sans-serif; background-color:#CF441A; border:none;"; if(((isset($_POST['namel']))&&($_POST['namel']==''))||(!isset($_POST['namel']))){echo 'border:solid 1px #FFFFFF;';} echo"' /></td>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='1' height='28' border='0' alt='' /></td>
  </tr>
  <tr>
   <td colspan='9'><img src='../../image/events/events_2009/asis2009_usa/usa/invitation_2009_asis_usa_form_r5_c1.gif' width='572' height='8' border='0' alt='' /></td>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='1' height='8' border='0' alt='' /></td>
  </tr>

  <tr>
   <td align='left' valign='bottom'><img src='../../image/events/events_2009/asis2009_usa/usa/title.gif' width='63' height='29' border='0' alt='Title' style='color:#FFFFFF;font-weight:800;font-family:Arial, Helvetica, sans-serif;' /></td>
   <td colspan='8' width='510' height='29' bgcolor='#CF441A' style='background-color:#CF441A' valign='bottom'><input name='title' value='"; if((isset($_POST['namef']))&&($_POST['namef']!='')){echo $_POST['title'];} echo"' style='width:480px;height:16px;color:#FFFFFF; font-size:16px; font-family: Arial, Helvetica, sans-serif; background-color:#CF441A; border:none;' /></td>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='1' height='29' border='0' alt='' /></td>
  </tr>
  <tr>
   <td colspan='9'><img src='../../image/events/events_2009/asis2009_usa/usa/invitation_2009_asis_usa_form_r7_c1.gif' width='572' height='8' border='0' alt='' /></td>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='1' height='8' border='0' alt='' /></td>
  </tr>
  <tr>
   <td colspan='3' align='left' valign='bottom'><img src='../../image/events/events_2009/asis2009_usa/usa/company.gif' width='108' height='28' border='0' alt='Company' style='color:#FFFFFF;font-weight:800;font-family:Arial, Helvetica, sans-serif;'  /></td>
   <td colspan='6' width='465' height='28' bgcolor='#CF441A' style='background-color:#CF441A' valign='bottom'><input name='com' value='"; if((isset($_POST['com']))&&($_POST['com']!='')){echo $_POST['com'];} echo"' style='width:430px;height:16px;color:#FFFFFF; font-size:16px; font-family: Arial, Helvetica, sans-serif; background-color:#CF441A; border:none;"; if(((isset($_POST['com']))&&($_POST['com']==''))||(!isset($_POST['com']))){echo 'border:solid 1px #FFFFFF;';} echo"' /></td>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='1' height='28' border='0' alt='' /></td>
  </tr>
  <tr>
   <td colspan='9'><img src='../../image/events/events_2009/asis2009_usa/usa/invitation_2009_asis_usa_form_r9_c1.gif' width='572' height='8' border='0' alt='' /></td>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='1' height='8' border='0' alt='' /></td>
  </tr>
  <tr>
   <td colspan='2' align='left' valign='bottom'><img src='../../image/events/events_2009/asis2009_usa/usa/phone.gif' width='80' height='29' border='0' alt='Phone' style='color:#FFFFFF;font-weight:800;font-family:Arial, Helvetica, sans-serif;'  /></td>
   <td colspan='4' width='233' height='29' bgcolor='#CF441A' style='background-color:#CF441A' valign='bottom'><input name='pho' value='"; if((isset($_POST['pho']))&&($_POST['pho']!='')||($pho!='y')){echo $_POST['pho'];} echo"' style='width:220px;height:16px;color:#FFFFFF; font-size:16px; font-family: Arial, Helvetica, sans-serif; background-color:#CF441A; border:none;"; if(((isset($_POST['pho']))&&($_POST['pho']==''))||($pho!='y')){echo 'border:solid 1px #FFFFFF;';} echo"' /></td>
   <td align='left' valign='bottom'><img src='../../image/events/events_2009/asis2009_usa/usa/ext.gif' width='51' height='29' border='0' alt='Ext' style='color:#FFFFFF;font-weight:800;font-family:Arial, Helvetica, sans-serif;'  /></td>
   <td colspan='2' width='209' height='29' bgcolor='#CF441A' style='background-color:#CF441A' valign='bottom'><input name='ex' value='"; if(((isset($_POST['ex']))&&($_POST['ex']!=''))||($ex!='y')){echo $_POST['ex'];} echo"' style='width:170px;height:16px;color:#FFFFFF; font-size:16px; font-family: Arial, Helvetica, sans-serif; background-color:#CF441A; border:none;"; if((isset($_POST['ex'])) && ($ex!='y')){echo 'border:solid 1px #FFFFFF;';} echo"' /></td>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='1' height='29' border='0' alt='' /></td>
  </tr>
  <tr>
   <td colspan='9'><img src='../../image/events/events_2009/asis2009_usa/usa/invitation_2009_asis_usa_form_r11_c1.gif' width='572' height='8' border='0' alt='' /></td>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='1' height='8' border='0' alt='' /></td>
  </tr>
  <tr>
   <td colspan='2' align='left' valign='bottom'><img src='../../image/events/events_2009/asis2009_usa/usa/email.gif' width='80' height='28' border='0' alt='E-mail' style='color:#FFFFFF;font-weight:800;font-family:Arial, Helvetica, sans-serif;'  /></td>
   <td colspan='7'width='493' height='28' bgcolor='#CF441A' style='background-color:#CF441A' valign='bottom'><input name='mail' value='"; if((isset($_POST['mail']))&&($_POST['mail']!='')||($mail!='y')){echo $_POST['mail'];} echo"' style='width:460px;height:16px;color:#FFFFFF; font-size:16px; font-family: Arial, Helvetica, sans-serif; background-color:#CF441A; border:none;"; if(((isset($_POST['mail']))&&($_POST['mail']==''))||($mail!='y')){echo 'border:solid 1px #FFFFFF;';} echo"' /></td>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='1' height='28' border='0' alt='' /></td>
  </tr>
  <tr>
   <td colspan='9'><img src='../../image/events/events_2009/asis2009_usa/usa/invitation_2009_asis_usa_form_r13_c1.gif' width='572' height='8' border='0' alt='' /></td>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='1' height='8' border='0' alt='' /></td>
  </tr>
  <tr>
   <td colspan='5' align='left' valign='bottom'><img name='site' src='../../image/events/events_2009/asis2009_usa/usa/site.gif' width='179' height='29' border='0' alt='Company Website' style='color:#FFFFFF;font-weight:800;font-family:Arial, Helvetica, sans-serif;'  /></td>
   <td colspan='4' width='394' height='29' bgcolor='#CF441A' style='background-color:#CF441A' valign='bottom'><span style='font-size:14px; color:#FFFFFF; font-family:Arial, Helvetica, sans-serif'>http://</span><input name='web' value='"; if((isset($_POST['web']))&&($_POST['web']!='')||($web!='y')){echo $_POST['web'];} echo"' style='width:330px;height:16px;color:#FFFFFF; font-size:16px; font-family: Arial, Helvetica, sans-serif; background-color:#CF441A; border:none;"; if(((isset($_POST['web']))&&($_POST['web']==''))||($web!='y')){echo 'border:solid 1px #FFFFFF;';} echo"' /></td>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='1' height='29' border='0' alt='' /></td>
  </tr>
  <tr>
   <td colspan='9'><img src='../../image/events/events_2009/asis2009_usa/usa/invitation_2009_asis_usa_form_r15_c1.gif' width='572' height='8' border='0' alt='' /></td>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='1' height='8' border='0' alt='' /></td>
  </tr>
  
  <tr>
   <td colspan='8' width='547' height='45' bgcolor='#CF441A' style='background-color:#CF441A' align='right' valign='middle'>
   <input type='hidden' name='asisusainster' value='1' />
   <input type='submit' value='Submit' />
   </td>
   <td width='26' height='45' bgcolor='#CF441A' style='background-color:#CF441A'></td>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='1' height='45' border='0' alt='' /></td>
  </tr>
  
</table>
   </form>
   <!-- FORM END -->
   </td>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/form_right.gif' width='74' height='304' border='0' alt='&nbsp;' /></td>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='1' height='304' border='0' alt='&nbsp;' /></td>
  </tr>
    <tr>
   <td colspan='7'><img src='../../image/events/events_2009/asis2009_usa/usa/form_bottom.gif' width='718' height='58' border='0' alt='&nbsp;' /></td>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='1' height='58' border='0' alt='&nbsp;' /></td>
  </tr>
  <tr>

";

;}

if($resultvoucher=="p"){echo"
  <tr>
  <td colspan='7'><img src='../../image/events/events_2009/asis2009_usa/usa/con_bottom.gif' width='718' height='38' border='0' alt='&nbsp;' /></td>
  <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='1' height='38' border='0' alt='&nbsp;' /></td>
  </tr>";}

echo"
   <td colspan='2'><a href='http://www.vivotek.com/products/model.php?network_camera=ip7161&utm_source=AsisUSA09&utm_medium=Footer7161&utm_content=AsisUSA09Footer7161&utm_campaign=AsisUSA09' target='_blank' title='link to IP7161 Page in new window'><img src='../../image/events/events_2009/asis2009_usa/usa/footer_ip7161.gif' width='264' height='59' border='0' alt='&rArr; 2MP IP7161 - more info...' /></a></td>
   <td rowspan='2'><a href='http://www.vivotek.com/downloadfiles/downloads/datasheets/ip8161datasheet_en.pdf?utm_source=AsisUSA09&utm_medium=Footer8161&utm_content=AsisUSA09Footer8161&utm_campaign=AsisUSA09' target='_blank' title='link to IP7161 Page in new window'><img src='../../image/events/events_2009/asis2009_usa/usa/footer_ip8161.gif' width='282' height='60' border='0' alt='&rArr; H.264 • 2MP IP8161 - more info...' /></a></td>
   <td rowspan='2' colspan='4'><a href='https://www.tradeshowregistrar.com/regsystem17/?event=ASIS2009&brand=EB-210?utm_source=Homepage&utm_medium=Asis&utm_content=HomepageAsis&utm_campaign=Homepage?utm_source=AsisUSA09&utm_medium=FooterPass&utm_content=AsisUSA09FooterPass&utm_campaign=AsisUSA09' target='_blank' title='link to IP7161 Page in new window'><img src='../../image/events/events_2009/asis2009_usa/usa/footer_pass.gif' width='172' height='60' border='0' id='footer_pass' alt='&rArr;To Get ASIS Free Pass' /></td>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='1' height='59' border='0' alt='&nbsp;' /></td>
  </tr>
  <tr>
   <td colspan='2' bgcolor='#1777AC'><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='264' height='1' border='0' alt='&nbsp;' /></td>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='1' height='1' border='0' alt='&nbsp;' /></td>
  </tr>
  <tr>
   <td colspan='3'><a href='http://www.vivotek.com/general/contact_us.php?&utm_source=AsisUSA09&utm_medium=FooterMail&utm_content=AsisUSA09FooterMail&utm_campaign=AsisUSA09' target='_blank' title='open email application in new window'><img src='../../image/events/events_2009/asis2009_usa/usa/footer_mail.gif' width='546' height='27' border='0' alt='&rArr; Contact VIVOTEK at salesusa@vivotek.com' /></a></td>
   <td colspan='4'><a href='tel:14087738686' target='_blank' title='Dial number direct for cell phone'><img src='../../image/events/events_2009/asis2009_usa/usa/footer_tel.gif' width='172' height='27' border='0' alt='&rArr; 1-408-773-8686' /></a></td>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='1' height='27' border='0' alt='&nbsp;' /></td>
  </tr>
  <tr>
   <td colspan='7'><a href='http://www.asisonline.org/?utm_source=AsisUSA09&utm_medium=FooterAsis&utm_content=AsisUSA09FooterAsis&utm_campaign=AsisUSA09' target='_blank' title='open ASIS web site in new window'><img src='../../image/events/events_2009/asis2009_usa/usa/footer_asis.gif' width='718' height='18' border='0' alt='&rArr; ASIS Anaheim' /></td>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='1' height='18' border='0' alt='&nbsp;' /></td>
  </tr>
  <tr>
   <td colspan='7'><a href='http://www.vivotek.com/lists/?p=unsubscribe&uutm_source=AsisUSA09&utm_medium=FooterUnsub&utm_content=AsisUSA09FooterUnsub&utm_campaign=AsisUSA098' target='_blank'><img src='../../image/events/events_2009/asis2009_usa/usa/footer_unsub.gif' width='718' height='35' border='0' alt='&rArr; If you prefer not to receive commercial emails from VIVOTEK, please click here.' /></a></td>
   <td><img src='../../image/events/events_2009/asis2009_usa/usa/spacer.gif' width='1' height='35' border='0' alt='&nbsp;' /></td>
  </tr>
</table>
</td></tr>
</table>
";


?>
</body>
</html>
