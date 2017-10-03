function productsshide(maintype, pagetype) {
	var obj = null;
	if (maintype == "Products") {
		obj = $('.list-item.box');
	} else if (maintype == "Topmenu") {
		obj = $('.nav_2');
	} else if (maintype == "Footer") {
		obj = $('.vivotek_footer_nav li');
	} else if (maintype == "Menu") {
		obj = $('.col_3');
	} else if (maintype == "Tabs") {
		obj = $('.mgmenu_tabs_nav li');
	} else if (maintype == "Downloads") {
		obj = $('.list-item.box');
	} else if (maintype == "Text") {
		obj = $('.legacy-text');
	}
	var countcode;
	var downloadfind = ".block a .jplist_pro_title";
	var productsfind = ".block.block_t84 a .jplist_pro_title";
	var topmenufind = "a span";
	var footerfind = ".footer";
	var meunfind = "a .img_description";
	var linkfind = "a";
	var textfind = ".red_5 strong a u span";
	var accessoriesfind = ".block .jplist_pro_title_acc_model";
	var poefind = ".block .jplist_pro_title_poe_no";
	$.ajax({
		url: "http://freegeoip.net/json/",
		type: 'GET',
		async: false,
		success: function (json) {
			countcode = json.country_code;
		},
	})
	$.ajax({
		url: encodeURI("http://www.vivotek.com/api/CountryModels.json"),
		type: 'GET',
		success: function (json) {
			var modelsarr = $.parseJSON(json);
			$.each(modelsarr, function (i, item) {
				$.each(obj, function (key, value) {
					var subitem = null;
					switch (pagetype) {
						case "Downloads":
							var subitem = $(this).find(downloadfind);
							break;
						case "Products":
							var subitem = $(this).find(productsfind);
							break;
						case "Tabs":
							var subitem = $(this).find(linkfind);
							break;
						case "Menu":
							var subitem = $(this).find(meunfind);
							break;
						case "Topmenu":
							var subitem = $(this).find(topmenufind);
							break;
						case "Footer":
							var subitem = $(this).find(footerfind);
							break;
						case "Text":
							var subitem = $(this).find(textfind);
							break;
						case "Accessories":
							var subitem = $(this).find(accessoriesfind);
							break;
						case "PoE":
							var subitem = $(this).find(poefind);
							break;
					}
					var test = subitem.text();
					if (subitem.text() == item.productName) {
						if (countcode == item.CountryUS || countcode == item.CountryCA || countcode == item.CountryTW) {
							if (item.Hide == true) {
								$(this).hide();
							}
							if (item.CommingSoon == true) {
								if (pagetype == "Products" || pagetype == "Accessories" || pagetype == "PoE") {
									var comingSpan = $(this).find('.h3.text-danger').text();
									if (($(this).find('span').text().length <= 0) || comingSpan == "") {
										var comsubobj = $(this).find("em");
										comsubobj.append("<span class='soon'>Coming Soon</span>");
									}
								}
							}
							if (item.Soon == true) {
								if (pagetype == "Products") {
									var comingSpan = $(this).find('.h3.text-danger').text();
									if (($(this).find('span').text().length <= 0) || comingSpan == "") {
										var comsubobj = $(this).find(".soon");
										comsubobj.remove();
									}
								}
							}
							if (item.New == true) {
								var comingSpan = $(this).find('.h3.text-danger').text();
								if (($(this).find('span').text().length <= 0) || comingSpan == "") {
									var comsubobj = $(this).find("em");
									comsubobj.append("<br><span class='new'>NEW</span>");
								}
							}
							if (item.removeNew == true) {
								if (pagetype == "Products") {
									var comingSpan = $(this).find('.h3.text-danger').text();
									if (($(this).find('span').text().length <= 0) || comingSpan == "") {
										var comsubobj = $(this).find(".new");
										comsubobj.remove();
									}
								}
							}
						}
					}
				});
			});
		}
	});
}