var redirect = false;

try
{
	if (top.location.origin != location.origin) 
	{
		redirect = true
	}
}
catch(err)
{
	redirect = true
}

if (redirect) 
{
	var href 	 = location.href.replace(/\/+$/, ''),
		theme    = href.split('/').pop(),
		redirect = "http://www.kriesi.at/themedemo/?theme="+theme;
				
	top.location.href = redirect;
}