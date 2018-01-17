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
		url: "//freegeoip.net/json/",
		type: 'GET',
		async: false,
		success: function (json) {
			countcode = json.country_code;
		},
	})
	$.ajax({
		url: encodeURI("//www.vivotek.com/website/api/CountryModels.json"),
		type: 'GET',
		dataType: 'text',
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
						if (countcode == item.CountryAD || countcode == item.CountryAE || countcode == item.CountryAF || countcode == item.CountryAG || countcode == item.CountryAI || countcode == item.CountryAL || countcode == item.CountryAM || countcode == item.CountryAN || countcode == item.CountryAO || countcode == item.CountryAQ || countcode == item.CountryAR || countcode == item.CountryAS || countcode == item.CountryAT || countcode == item.CountryAU || countcode == item.CountryAW || countcode == item.CountryAZ || countcode == item.CountryBA || countcode == item.CountryBB || countcode == item.CountryBD || countcode == item.CountryBE || countcode == item.CountryBF || countcode == item.CountryBG || countcode == item.CountryBH || countcode == item.CountryBI || countcode == item.CountryBJ || countcode == item.CountryBL || countcode == item.CountryBM || countcode == item.CountryBN || countcode == item.CountryBO || countcode == item.CountryBR || countcode == item.CountryBS || countcode == item.CountryBT || countcode == item.CountryBW || countcode == item.CountryBY || countcode == item.CountryBZ || countcode == item.CountryCA || countcode == item.CountryCC || countcode == item.CountryCD || countcode == item.CountryCF || countcode == item.CountryCG || countcode == item.CountryCH || countcode == item.CountryCI || countcode == item.CountryCK || countcode == item.CountryCL || countcode == item.CountryCM || countcode == item.CountryCN || countcode == item.CountryCO || countcode == item.CountryCR || countcode == item.CountryCU || countcode == item.CountryCV || countcode == item.CountryCW || countcode == item.CountryCX || countcode == item.CountryCY || countcode == item.CountryCZ || countcode == item.CountryDE || countcode == item.CountryDJ || countcode == item.CountryDK || countcode == item.CountryDM || countcode == item.CountryDO || countcode == item.CountryDZ || countcode == item.CountryEC || countcode == item.CountryEE || countcode == item.CountryEG || countcode == item.CountryEH || countcode == item.CountryER || countcode == item.CountryES || countcode == item.CountryET || countcode == item.CountryFI || countcode == item.CountryFJ || countcode == item.CountryFK || countcode == item.CountryFM || countcode == item.CountryFO || countcode == item.CountryFR || countcode == item.CountryGA || countcode == item.CountryGB || countcode == item.CountryGD || countcode == item.CountryGE || countcode == item.CountryGG || countcode == item.CountryGH || countcode == item.CountryGI || countcode == item.CountryGL || countcode == item.CountryGM || countcode == item.CountryGN || countcode == item.CountryGQ || countcode == item.CountryGR || countcode == item.CountryGT || countcode == item.CountryGU || countcode == item.CountryGW || countcode == item.CountryGY || countcode == item.CountryHK || countcode == item.CountryHN || countcode == item.CountryHR || countcode == item.CountryHT || countcode == item.CountryHU || countcode == item.CountryID || countcode == item.CountryIE || countcode == item.CountryIL || countcode == item.CountryIM || countcode == item.CountryIN || countcode == item.CountryIO || countcode == item.CountryIQ || countcode == item.CountryIR || countcode == item.CountryIS || countcode == item.CountryIT || countcode == item.CountryJE || countcode == item.CountryJM || countcode == item.CountryJO || countcode == item.CountryJP || countcode == item.CountryKE || countcode == item.CountryKG || countcode == item.CountryKH || countcode == item.CountryKI || countcode == item.CountryKM || countcode == item.CountryKN || countcode == item.CountryKP || countcode == item.CountryKR || countcode == item.CountryKW || countcode == item.CountryKY || countcode == item.CountryKZ || countcode == item.CountryLA || countcode == item.CountryLB || countcode == item.CountryLC || countcode == item.CountryLI || countcode == item.CountryLK || countcode == item.CountryLR || countcode == item.CountryLS || countcode == item.CountryLT || countcode == item.CountryLU || countcode == item.CountryLV || countcode == item.CountryLY || countcode == item.CountryMA || countcode == item.CountryMC || countcode == item.CountryMD || countcode == item.CountryME || countcode == item.CountryMF || countcode == item.CountryMG || countcode == item.CountryMH || countcode == item.CountryMK || countcode == item.CountryML || countcode == item.CountryMM || countcode == item.CountryMN || countcode == item.CountryMO || countcode == item.CountryMP || countcode == item.CountryMR || countcode == item.CountryMS || countcode == item.CountryMT || countcode == item.CountryMU || countcode == item.CountryMV || countcode == item.CountryMW || countcode == item.CountryMX || countcode == item.CountryMY || countcode == item.CountryMZ || countcode == item.CountryNA || countcode == item.CountryNC || countcode == item.CountryNE || countcode == item.CountryNG || countcode == item.CountryNI || countcode == item.CountryNL || countcode == item.CountryNO || countcode == item.CountryNP || countcode == item.CountryNR || countcode == item.CountryNU || countcode == item.CountryNZ || countcode == item.CountryOM || countcode == item.CountryPA || countcode == item.CountryPE || countcode == item.CountryPF || countcode == item.CountryPG || countcode == item.CountryPH || countcode == item.CountryPK || countcode == item.CountryPL || countcode == item.CountryPM || countcode == item.CountryPN || countcode == item.CountryPR || countcode == item.CountryPS || countcode == item.CountryPT || countcode == item.CountryPW || countcode == item.CountryPY || countcode == item.CountryQA || countcode == item.CountryRE || countcode == item.CountryRO || countcode == item.CountryRS || countcode == item.CountryRU || countcode == item.CountryRW || countcode == item.CountrySA || countcode == item.CountrySB || countcode == item.CountrySC || countcode == item.CountrySD || countcode == item.CountrySE || countcode == item.CountrySG || countcode == item.CountrySH || countcode == item.CountrySI || countcode == item.CountrySJ || countcode == item.CountrySK || countcode == item.CountrySL || countcode == item.CountrySM || countcode == item.CountrySN || countcode == item.CountrySO || countcode == item.CountrySR || countcode == item.CountrySS || countcode == item.CountryST || countcode == item.CountrySV || countcode == item.CountrySX || countcode == item.CountrySY || countcode == item.CountrySZ || countcode == item.CountryTC || countcode == item.CountryTD || countcode == item.CountryTG || countcode == item.CountryTH || countcode == item.CountryTJ || countcode == item.CountryTK || countcode == item.CountryTL || countcode == item.CountryTM || countcode == item.CountryTN || countcode == item.CountryTO || countcode == item.CountryTR || countcode == item.CountryTT || countcode == item.CountryTV || countcode == item.CountryTW || countcode == item.CountryTZ || countcode == item.CountryUA || countcode == item.CountryUG || countcode == item.CountryUS || countcode == item.CountryUY || countcode == item.CountryUZ || countcode == item.CountryVA || countcode == item.CountryVC || countcode == item.CountryVE || countcode == item.CountryVG || countcode == item.CountryVI || countcode == item.CountryVN || countcode == item.CountryVU || countcode == item.CountryWF || countcode == item.CountryWS || countcode == item.CountryXK || countcode == item.CountryYE || countcode == item.CountryYT || countcode == item.CountryZA || countcode == item.CountryZM || countcode == item.CountryZW) {
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