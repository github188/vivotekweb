<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>VIVOTEK - Info</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="robots" content="index, follow">
<link href="http://www.vivotek.com/style/gray.css" rel="stylesheet" type="text/css">
<?php  if ($_GET['send'] == "null"){ echo "<meta http-equiv='refresh' content='3;URL=". $_GET['inviturl'] ."'>";} ?>
<link rel="alternate" type="application/atom+xml" title="VIVOTEK Web News" href="http://feeds.feedburner.com/VIVOTEKWebNews">
<link rel="alternate" type="application/atom+xml" title="VIVOTEK's News on Internet" href="http://feeds.feedburner.com/VivotekNewsOnInternet">
</head>
<body>
<!-- BLUE -->
<div id="blue"></div>
<!-- LAYOUT CONTAINE START -->
<div id="layout_container">
<!-- BRANDING START -->
<div id="branding">
<div class="branding_left"></div>
<h1>VIVOTEK</h1>
<a href="http://www.vivotek.com" title="Home"><img src="http://www.vivotek.com/image/all/VIVOTEK_logo.png" alt="VIVOTEK Logo" id="VIVOTEK_logo"></a>
<!-- Language version START -->
<!-- Language version END -->
<a name="page_top"></a>
</div>
<!-- CONTECT CONTAINE -->
<div id="content_container">
<div id="content_body">

<!-- TITLE -->
<div id="title_nobanner">
<h1 id="one_row">Infomation</h1>
<div class="cleaner">&nbsp;</div>
</div>
<!-- CONTECT-1-ROW -->
<div id="content_one_row">
<!-- CONTECT-MAIN -->
<div id="content_main_nobanner_nonav">

<?php 
if($_GET['iv'] == "event"){

if ($_GET['send'] == "null" && $_GET['lang'] == "en"){
echo
"<p>Please fill out the form below so we can provide you with the first-rate service at the exhibition!<br><br>
<span style='font-size:18px;font-weight:800'><a href='" . $_GET['inviturl'] . "'>&larr; Back To Fill out the Form</a></span><br><br><br>
VIVOTEK " . $_GET['event'] ." Exhibition Team
</p>";}


if ($_GET['send'] == "ok" && $_GET['lang'] == "en"){
echo
"<p>Hello, <span style='color:#666; font-size:18px; font-weight:800;'>" . $_GET['name'] . "</span>,</p>

<p>
VIVOTEK has received your confirmation of attendance.<br>
We thank you and look forward to seeing you at the exhibition.<br><br>

If you have any question, please contact&nbsp;&nbsp;<span style='color:#06F; font-size:18px; font-weight:800;'>" . $_GET['contactper'] . "</span>,<br>
the person in charge of the exhibition, at<br><br>

<br>
<a href='mailto:" . $_GET['contactperemail'] . "'>" . $_GET['contactperemail'] . "</a><br><br><br>

Best Regards,<br>
VIVOTEK " . $_GET['event'] ." Exhibition Team
</p>";}


if ($_GET['send'] == "failed" && $_GET['lang'] == "en"){
echo
"<p>
Sorry, Connection failed.<br>
Your message has not been sent.<br>
Please try again later.<br><br>

If connection continues to fail,<br>
please contact&nbsp;<span style='color:#0066DE; font-size:18px; font-weight:800;'>" . $_GET['contactper'] . "</span> at VIVOTEK at<br><br>
<a href='mailto:jpy@vivotek.com'>jpy@vivotek.com</a>
</p>";}


if ($_GET['send'] == "ok" && $_GET['lang'] == "tc"){
echo
"
<p><span style='color:#666; font-size:18px; font-weight:800;'>" . $_GET['name'] . "</span>, 您好: </p>
<p>
VIVOTEK 已收到您的參觀訊息，<br>
感謝您撥冗參展！<br><br>

若您有任何問題，請與 <span style='color:#0066DE; font-size:18px; font-weight:800;'>" . $_GET['contactper'] . "</span> 聯絡<br>
您可寄送 email 至 <a href='" . $_GET['contactperemail'] . "'>" . $_GET['contactperemail'] . "</a><br><br><br>

VIVOTEK " . $_GET['event'] . "工作小組
</p>";} 


if ($_GET['send'] == "failed" && $_GET['lang'] == "tc"){
echo
"<p>
抱歉，網路連線發生問題，<br>
回覆訊息並未寄出，<br>
您可收後再試。<br><br>

若網路連線一直發生問題，請與 <span style='color:#0066DE; font-size:18px; font-weight:800;'>" . $_GET['contactper'] . "</span> 聯絡<br>
您可寄送 email 至 <a href='" . $_GET['contactperemail'] . "'>" . $_GET['contactperemail'] . "</a><br><br><br>

VIVOTEK " . $_GET['event'] . "工作小組
</p>"
;}
;}







if($_GET['iv'] == "seminar"){

if ($_GET['send'] == "null" && $_GET['lang'] == "en"){
echo
"<p>Please fill out the form below so we can provide you with the first-rate service at the exhibition!<br><br>
<span style='font-size:18px;font-weight:800'><a href='" . $_GET['inviturl'] . "'>&larr; Back To Fill out the Form</a></span><br><br><br>
CDC & VIVOTEK " . $_GET['event'] ." Exhibition Team
</p>";}


if ($_GET['send'] == "ok" && $_GET['lang'] == "en"){
echo
"<p>Hello, <span style='color:#666; font-size:18px; font-weight:800;'>" . $_GET['name'] . "</span>,</p>

<p>
CDC & VIVOTEK has received your confirmation of attendance.<br>
We thank you and look forward to seeing you at the seminar.<br><br>

If you have any question, please contact&nbsp;&nbsp;<span style='color:#06F; font-size:18px; font-weight:800;'>" . $_GET['contactper'] . "</span>,<br>
the person in charge of the seminar, at<br><br>

<br>
<a href='mailto:" . $_GET['contactperemail'] . "'>" . $_GET['contactperemail'] . "</a><br><br><br>

Best Regards,<br>
CDC  & VIVOTEK " . $_GET['event'] ." Exhibition Team
</p>";}


if ($_GET['send'] == "failed" && $_GET['lang'] == "en"){
echo
"<p>
Sorry, Connection failed.<br>
Your message has not been sent.<br>
Please try again later.<br><br>

If connection continues to fail,<br>
please contact&nbsp;<span style='color:#0066DE; font-size:18px; font-weight:800;'>" . $_GET['contactper'] . "</span> at CDC at<br><br>
<a href='mailto:yury.montagnani@cdc.it'>yury.montagnani@cdc.it</a>
</p>";}


if ($_GET['send'] == "ok" && $_GET['lang'] == "tc"){
echo
"
<p><span style='color:#666; font-size:18px; font-weight:800;'>" . $_GET['name'] . "</span>, 您好: </p>
<p>
VIVOTEK 已收到您的參觀訊息，<br>
感謝您撥冗參展！<br><br>

若您有任何問題，請與 <span style='color:#0066DE; font-size:18px; font-weight:800;'>" . $_GET['contactper'] . "</span> 聯絡<br>
您可寄送 email 至 <a href='" . $_GET['contactperemail'] . "'>" . $_GET['contactperemail'] . "</a><br><br><br>

CDC & VIVOTEK " . $_GET['event'] . "工作小組
</p>";} 


if ($_GET['send'] == "failed" && $_GET['lang'] == "tc"){
echo
"<p>
抱歉，網路連線發生問題，<br>
回覆訊息並未寄出，<br>
您可收後再試。<br><br>

若網路連線一直發生問題，請與 <span style='color:#0066DE; font-size:18px; font-weight:800;'>" . $_GET['contactper'] . "</span> 聯絡<br>
您可寄送 email 至 <a href='mailto:yury.montagnani@cdc.it'>yury.montagnani@cdc.it</a><br><br><br>

CDC & VIVOTEK " . $_GET['event'] . "工作小組
</p>"
;}
;}

?>


<div style="height:20em"></div>

<div class="page_last"><a href="javascript:history.back()">Last Page</a></div>
</div>
<!-- NAV MAIN-->
<div id="nav_main">
<div class="nav_main_left"></div>
<ul>
<li><a href="../../aboutus/overview.php">About Us</a></li>	
<li><a href="../../products/network_cameras.php">Products</a></li>
<li><a href="../../support/faq.php">Support</a></li>
<li><a href="../../downloads/downloads.php?kind=usersmanuals&series=fixed">Downloads</a></li>
<li><a href="../events_2008.php">Events</a></li>
<li><a href="../../pressroom/news.php">Press Room</a></li>
<li><a href="../../wheretobuy/wheretobuy.php">Where to Buy</a></li>
<li><a href="../../alliance/siaprogram.php">Alliance</a></li>
</ul>
</div>
</div>
</div>
<!-- SITE-INFO -->
<div id="site_info">
<div class="site_info_left"></div>
<ul>
<li><a href="../../aboutus/careers.php">Job Opportunities</a></li>
<li><a href="../../general/site_map.php">Site Map</a></li>
<li><a href="../../general/privacy_policy.php">Privacy Policy</a></li>
<li><a href="../../general/contact_us.php">Contact Us</a></li>
<li><a href="http://validator.w3.org/check?uri=referer" id="valid_html" title="Valid HTML 4.01 Transitional">Valid HTML 4.01 Transitional</a></li>
<li><a href="http://jigsaw.w3.org/css-validator/check?uri=referer" id="valid_css" title="Valid CSS">Valid CSS</a></li>
<li><a href="http://www.microsoft.com/windows/products/winfamily/ie/" id="support_ie" title="Support Internet Explorer">Support Internet Explorer</a></li>
<li><a href="http://www.mozilla.com/firefox/" id="support_firefox" title="Support Firefox">Support Firefox</a></li>
<li><a href="http://www.apple.com/safari/" id="support_safari" title="Support Safari">Support Safari</a></li>
<li><a href="http://www.opera.com/" id="support_opera" title="Support Opera">Support Opera</a></li>
<li><a href='http://www.google.com/chrome/' id="support_chrome" title='Support Chrome'>Support Chrome</a></li>
</ul>
<p>Copyright © 2009 VIVOTEK Inc. All rights reserved.</p>
</div>
</div>
</div>
<!-- BLUE 2-->
<div id="blue2"></div>
<!-- GOOGLE ANALYTICS-->
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-1877002-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>
<!-- DELETE IE LINK DASHED-->
<script type="text/javascript">
if(document.all){
var tags=document.all.tags("a")
for (var i=0;i<tags.length;i++)
tags(i).outerHTML=tags(i).outerHTML.replace(">"," hidefocus=true>")}
if(document.all){
var tags=document.all.tags("input")
for (var i=0;i<tags.length;i++)
tags(i).outerHTML=tags(i).outerHTML.replace(">"," hidefocus=true>")}
</script> 
</body>
</html>