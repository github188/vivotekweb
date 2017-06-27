$(document).ready(function(){
$('#1').hide();
$('#fastcode').val('');
$('#menu li').click(function(){
	var index=$('#menu li').index(this);
	$('#menu li').removeClass('active');
	$(this).addClass('active');
	$('.primarycontent').hide();	
		$('#'+index).fadeIn('slow');	

	});
	$(".select").click(function(){
var target=$(this).attr('rel');
$('#t'+target).select();
});
var a = document.createElement("a");
a.style.color = "white";
a.style.backgroundColor = "red";
a.style.textDecoration = "none";
a.style.fontSize = "90%";
a.href = "javascript:c=unescape(document.documentElement.innerHTML);c=c.replace(/&/g,'&amp;');c=c.replace(/</g,'&lt;');c=c.replace(/>/g,'&gt;');c=c.replace(/</g,'&amp;lt;');c=c.replace(/>/g,'&amp;gt;');c=c.replace(/href=\"(.*?)\"/g,'href=\"<a href=\"$1\">$1</a>\"');c=c.replace(/src=\"(.*?)\"/g,'src=\"<a href=\"$1\">$1</a>\"');document.write('<html><head><title>Source of Page</title>	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-KV2JCZ');</script>
	<!-- End Google Tag Manager -->
</head><body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KV2JCZ"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) --><div align=\"center\"><a href=\"#\" onclick=\"history.back();return false;\">Back</a></div><pre>' + c + '</pre></body></html>');";
a.appendChild(document.createTextNode('網頁原始碼'));
$('#vs').html(a);


$('#code a').click(function(){
	var mycodeurl=$(this).attr('href');
$.ajax({
url:mycodeurl,
	cache:false,
success:function(data){
$('#fastcode').val(data);
}
});


return false;
});
});