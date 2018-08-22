var jsPath=document.scripts;
jsPath=jsPath[jsPath.length-1].src.substring(0,jsPath[jsPath.length-1].src.lastIndexOf("/")+1);
var browser,referrer;
if (navigator.userAgent.indexOf('MSIE') >= 0){browser="IE";}
else if (navigator.userAgent.indexOf('Firefox') >= 0){browser="FireFox";}
else if (navigator.userAgent.indexOf('Opera') >= 0){browser="Opera";}
else if(navigator.userAgent.indexOf('Chrome') >= 0){browser="Chrome";}
else{browser="other";}
if(document.referrer.indexOf('baidu.com') >= 0){referrer="0";}
else if(document.referrer.indexOf('google') >= 0){referrer="1";}
else if(document.referrer.indexOf('bing.com') >= 0){referrer="2";}
else if(document.referrer.indexOf('so.com') >= 0){referrer="3";}
else if(document.referrer.indexOf('sogou.com') >= 0){referrer="4";}
else if(document.referrer.indexOf(location.hostname) >= 0){referrer="5";}
else if(document.referrer === ""){referrer="6";}
else {referrer="7";}

if (location.hash!="#nocount"){
	var countbyajax;
	countbyajax = new XMLHttpRequest();
	countbyajax.open("POST",jsPath+"count.php",true);
	countbyajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	countbyajax.send("get="+location.pathname+location.search+"&referrer="+referrer+"&os="+navigator.platform+"&lang="+navigator.language+"&browser="+browser+"&ua="+navigator.userAgent);
}