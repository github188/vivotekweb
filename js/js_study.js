// function todaytime(){
// 	var today = new Date();
// 	document.write("<p>Document accessed: " + today.toLocaleString());
// }


function hello1 (){
	var w = window.open();
	var d = w.document;
	d.open();
	d.write("<h1>Hello world!</h1>");
	d.close();
}

function hello2 (){
	var username = "macglee";
	document.write("Hello, " + username + " welcome!")
}