<?php php
if (isset($_POST['pro1']) && $_POST['pro1'] != ""){$procon = $_POST['pro1'] . ". ";}
if (isset($_POST['pro2']) && $_POST['pro2'] != ""){$procon .= $_POST['pro2'] . ". ";}
if (isset($_POST['pro3']) && $_POST['pro3'] != ""){$procon .= $_POST['pro3'] . ". ";}
if (isset($_POST['pro4']) && $_POST['pro4'] != ""){$procon .= $_POST['pro4'] . ". ";}
if (isset($_POST['pro5']) && $_POST['pro5'] != ""){$procon .= $_POST['pro5'] . ". ";}
if (isset($_POST['pro6']) && $_POST['pro6'] != ""){$procon .= $_POST['pro6'] . ". ";}
if (isset($_POST['pro7']) && $_POST['pro7'] != ""){$procon .= $_POST['pro7'] . ". ";}
if (isset($_POST['pro8']) && $_POST['pro8'] != ""){$procon .= $_POST['pro8'] . ". ";}
if (isset($_POST['pro9']) && $_POST['pro9'] != ""){$procon .= $_POST['pro9'] . ". ";}
if (isset($_POST['pro10']) && $_POST['pro10'] != ""){$procon .= $_POST['pro10'];}

if($_POST['iv'] == "event"){
$Event = "ASIS 2009";
$InvitURL = "http://www.vivotek.com/invitation/invitation_2009_secutech.htm";
$sendtoV = "miranda.peng@vivotek.com";
/*$sendtoV = "macglee@gmail.com";*/
$Bcc = "vivotekweb@gmail.com";
$ContactPer = "Miranda";
$ContactPerEmail = "miranda.peng@vivotek.com";
$Ok_EnUrl = "http://www.vivotek.com/invitation/invitation_send_info.php?lang=en&send=ok&iv=event&event=" . $event . "&name=" . $_POST['name'] . "&contactper=" . $ContactPer . "&contactperemail=" . $ContactPerEmail;
$Failed_EnUrl = "http://www.vivotek.com/invitation/invitation_send_info.php?lang=en&send=failed&iv=event";
$Null_EnUrl = "http://www.vivotek.com/invitation/invitation_send_info.php?lang=en&send=null&iv=event&inviturl=" . $InvitURL;
$Ok_TcUrl = "http://www.vivotek.com/invitation/invitation_send_info.php?lang=tc&send=ok&iv=event";
$Failed_TcUrl = "http://www.vivotek.com/invitation/invitation_send_info.php?lang=tc&send=failed&iv=event";}





if($_POST['iv'] == "seminar"){
$Event = "Seminario Videosorveglianza VIVOTEK";
$InvitURL = "http://www.vivotek.com/events/seminar/200905_italy/seminar_200905_italy.htm";
/*$sendtoV = "macglee@gmail.com";*/
$sendtoV = "vivotek@cdc.it";
/*$Bcc = "vivotekweb@gmail.com";*/
$Bcc = "cathy@vivotek.com,vivotekweb@gmail.com";
$ContactPer = "Yury Montagnani";
$ContactPerEmail = "vivotek@cdc.it";
$Ok_EnUrl = "http://www.vivotek.com/invitation/invitation_send_info.php?lang=en&send=ok&iv=seminar&event=" . $event . "&name=" . $_POST['name'] . "&contactper=" . $ContactPer . "&contactperemail=" . $ContactPerEmail;
$Failed_EnUrl = "http://www.vivotek.com/invitation/invitation_send_info.php?lang=en&send=failed&iv=seminar";
$Null_EnUrl = "http://www.vivotek.com/invitation/invitation_send_info.php?lang=en&send=null&iv=seminar&inviturl=" . $InvitURL;
$Ok_TcUrl = "http://www.vivotek.com/invitation/invitation_send_info.php?lang=tc&send=ok&iv=seminar";
$Failed_TcUrl = "http://www.vivotek.com/invitation/invitation_send_info.php?lang=tc&send=failed&iv=seminar";}



if(($_POST['name'] == "") ||($_POST['email'] == "")){header("Location:".$Null_EnUrl);}





if($_POST['iv'] == "event"){
$subV = "！重要！來自 - ". $_POST['name'] ." - 的" . $Event . "邀請函回覆";

$MailConV = "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\"><html xmlns=\"http://www.w3.org/1999/xhtml\"><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" /><title></title></head><body style='color:#666;'>

<p>以下是 <span  style='color:#06F;'>" . $_POST['name'] . "</span> 的 " . $Event . " 邀請函回覆資料。<br><br><br>
請特別注意 <span  style='color:#06F;font-size:18px; font-weight:800;'>" . $_POST['name'] . "</span> <span  style='color:#C00;font-size:18px; font-weight:800;'>預計抵達會場時間：" . $_POST['adate'] . " - " . $_POST['atime'] . "</span><br>
對 VIVOTEK <span  style='color:#C00;font-size:18px; font-weight:800;'>有興趣的產品是 " . $procon . "</span><br>
您可以主動與他聯絡！<br><br>
</p>

<ul style='line-height:2em'>
<li>姓名：<span  style='color:#06F;'>" . $_POST['name'] . "</span></li>
<li>公司：<span  style='color:#06F;'>" . $_POST['company'] . "</span></li>";}

if(($_POST['iv'] == "event") && ($_POST['lang'] == "en")){$MailConV.= "<li>國家：<span  style='color:#06F;'>" . $_POST['country'] . "</span></li>";}

/*if($_POST['lang'] == "sc"){$MailConV.= "<li>省份：<span  style='color:#06F;'>" . $_POST['country'] . "</span></li>";}*/
/*<li>住址：<span  style='color:#06F;'>" . $_POST['add'] . "</span></li>*/

if ($_POST['iv'] == "event"){
$MailConV.= "
<li>電話：<span  style='color:#06F;'>" . $_POST['tel'] . "</span></li>
<li>Email：<span  style='color:#06F;'>" . $_POST['email'] . "</span></li>
<li>預計抵達會場時間：<span  style='color:#06F;'>" . $_POST['adate'] . " - " . $_POST['atime'] . "</span></li>
<li>對 VIVOTEK 有興趣的產品：<span  style='color:#06F;'>";

$MailConV .= $procon . "</span></li>";}

if(isset($_POST['note'])){
$MailConV = $MailConV . "
<li>其他需求：<span  style='color:#C00;'>" . $_POST['note'] . "</span></li>
</ul>
</body></html>";} else {
$MailConV = $MailConV . "
</ul>
</body></html>";}





if($_POST['iv'] == "seminar"){
$subV = "！Importante！". $_POST['name'] ." risposta lettera di " . $Event . " invito";

$MailConV = "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\"><html xmlns=\"http://www.w3.org/1999/xhtml\"><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" /><title></title></head><body style='color:#666;'>

<ul style='line-height:2em'>
<li>Luogo del Seminario：<span  style='color:#06F;font-size:18px; font-weight:800;'>" . $_POST['place'] . "</span></li>
<li>Nome Azienda：<span  style='color:#06F;'>" . $_POST['name'] . "</span></li>
<li>Referente：<span  style='color:#06F;'>" . $_POST['company'] . "</span></li>
<li>Codice CDC：<span  style='color:#06F;'>" . $_POST['cdc'] . "</span></li>
<li>Tel：<span  style='color:#06F;'>" . $_POST['tel'] . "</span></li>
<li>Email：<span  style='color:#06F;'>" . $_POST['email'] . "</span></li>
</ul>
</body></html>";
;}






if ($_POST['iv'] == "event"){

$headersV = "MIME-Version: 1.0\r\n"; 
$headersV .= "Content-Type:text/html; charset=utf-8\r\n";
$headersV .= "From: ". $_POST['email'] . "\r\n";
$headersV .= "Bcc: " . $Bcc . "\r\n";
$headersV .= "Reply-To: ". $_POST['email'] . "\r\n";

$sendtoU = $_POST['email'];

if(($_POST['lang'] == "en") && ($_POST['name'] != "") && ($_POST['email'] != "")){
$subU = "Info from VIVOTEK " . $Event . " working group";

$MainConU = "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\"><html xmlns=\"http://www.w3.org/1999/xhtml\"><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" /><title></title></head><body>

<p>Hello, " . $_POST['name'] . ":</p>

<p>
VIVOTEK has received your confirmation of attendance.<br>
We thank you and look forward to seeing you at the exhibition.<br><br>

If you have any question, please contact <span style='color:#06F; font-size:18px; font-weight:800;'>" . $ContactPer . "</span>,<br>
the person in charge of the exhibition, at<br><br>

<br>
<a href='mailto:" . $ContactPerEmail . "'>" . $ContactPerEmail . "</a><br><br><br>

Best Regards,<br>
VIVOTEK " . $Event . " Exhibition Team
</p>

</body></html>";

$headersU = "MIME-Version: 1.0\r\n"; 
$headersU .= "Content-Type:text/html; charset=utf-8\r\n";
$headersU .= "From: VIVOTEK " . $Event . " Team " . "<" . $ContactPerEmail . ">\r\n";
$headersU .= "Bcc: " . $Bcc . "\r\n";
$headersU .= "Reply-To: VIVOTEK " . $Event . " Team " . "<" . $ContactPerEmail . ">\r\n";

$charset = 'utf-8';  
$messageEncoding = 'base64';  
$subFormat = '=?' . $charset . '?' . $messageEncoding[0] . '?%s?=';  

if (
mail($sendtoV, sprintf($subFormat, base64_encode($subV)), $MailConV, $headersV)){
mail($sendtoU, sprintf($subFormat, base64_encode($subU)), $MainConU,  $headersU);
header("Location:".$Ok_EnUrl);
}else{
header("Location:".$Failed_EnUrl);
}
}




if(($_POST['lang'] == "tc") && ($_POST['name'] != "") && ($_POST['email'] != "")){
$subU = "VIVOTEK " . $Event . " 工作小組 信息";

$MainConU = "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\"><html xmlns=\"http://www.w3.org/1999/xhtml\"><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" /><title></title></head><body>

<p>" . $_POST['name'] . "，您好：</p>

<p>
VIVOTEK 已收到您的參觀訊息，<br>
感謝您撥冗參展！<br><br>

若您有任何問題，可與 VIVOTEK 展覽會場負責人聯絡：<br><br>

<span style='color:#06F; font-size:18px; font-weight:800;'>" . $ContactPer . "</span><br>
<a href='mailto:" . $ContactPerEmail . "'>" . $ContactPerEmail . "</a><br><br><br>

VIVOTEK " . $Event . " 工作小組
</p>

</body></html>";

$headersU = "MIME-Version: 1.0\r\n"; 
$headersU .= "Content-Type:text/html; charset=utf-8\r\n";
$headersU .= "From: VIVOTEK " . $Event . " Team " . "<" . $ContactPerEmail . ">\r\n";
$headersU .= "Bcc: " . $Bcc . "\r\n";
$headersU .= "Reply-To: VIVOTEK " . $Event . " Team " . "<" . $ContactPerEmail . ">\r\n";

$charset = 'utf-8';  
$messageEncoding = 'base64';  
$subFormat = '=?' . $charset . '?' . $messageEncoding[0] . '?%s?=';  

if (
mail($sendtoV, sprintf($subFormat, base64_encode($subV)), $MailConV, $headersV)){
mail($sendtoU, sprintf($subFormat, base64_encode($subU)), $MainConU,  $headersU);
header("Location:".$Ok_TcUrl);
}else{
header("Location:".$Failed_TcUrl);
}
}
}






if ($_POST['iv'] == "seminar"){

$headersV = "MIME-Version: 1.0\r\n"; 
$headersV .= "Content-Type:text/html; charset=utf-8\r\n";
$headersV .= "From: ". $_POST['email'] . "\r\n";
$headersV .= "Bcc: " . $Bcc . "\r\n";
$headersV .= "Reply-To: ". $_POST['email'] . "\r\n";

$sendtoU = $_POST['email'];

if(($_POST['lang'] == "en") && ($_POST['name'] != "") && ($_POST['email'] != "") && ($_POST['place'] != "")){
$subU = "Info from CDC and VIVOTEK " . $Event . " working group";

$MainConU = "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\"><html xmlns=\"http://www.w3.org/1999/xhtml\"><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" /><title></title></head><body>

<p>Hello, " . $_POST['name'] . ":</p>

<p>
CDC and VIVOTEK has received your confirmation of attendance.<br>
We thank you and look forward to seeing you at the seminar.<br><br>

If you have any question, please contact <span style='color:#06F; font-size:18px; font-weight:800;'>" . $ContactPer . "</span>,<br>
the person in charge of the seminar, at<br><br>

<br>
<a href='mailto:" . $ContactPerEmail . "'>" . $ContactPerEmail . "</a><br><br><br>

Best Regards,<br>
CDC and VIVOTEK " . $Event . " Exhibition Team
</p>

</body></html>";

$headersU = "MIME-Version: 1.0\r\n"; 
$headersU .= "Content-Type:text/html; charset=utf-8\r\n";
$headersU .= "From: VIVOTEK " . $Event . " Team " . "<" . $ContactPerEmail . ">\r\n";
$headersU .= "Bcc: " . $Bcc . "\r\n";
$headersU .= "Reply-To: VIVOTEK " . $Event . " Team " . "<" . $ContactPerEmail . ">\r\n";

$charset = 'utf-8';  
$messageEncoding = 'base64';  
$subFormat = '=?' . $charset . '?' . $messageEncoding[0] . '?%s?=';  

if (
mail($sendtoV, sprintf($subFormat, base64_encode($subV)), $MailConV, $headersV)){
mail($sendtoU, sprintf($subFormat, base64_encode($subU)), $MainConU,  $headersU);
header("Location:".$Ok_EnUrl);
}else{
header("Location:".$Failed_EnUrl);
}
}
}










?>