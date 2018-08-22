$(document).ready(function(){
	$("[data-toggle='tooltip']").tooltip();
	$("[data-toggle='popover']").popover();
	$('#date').dateDropper({color:'#f87a54',animation:'dropdown',lock:'to',format:'y-m-d'});
});
function set()
{
	var value = document.getElementById("setvalue").value;
	var key = document.getElementById("setkey").value;
	if(value==="")
	{
		document.getElementById("setresult").innerHTML = "请输入完整！";
	}
	else
	{
		var setbyajax;
		setbyajax = new XMLHttpRequest();
		setbyajax.open("GET","index.php?mod=setting&key="+key+"&value="+value,true);
		setbyajax.send();
		setbyajax.onreadystatechange=function()
		{
			if(setbyajax.readyState==4 && setbyajax.status==200)
			{
				document.getElementById("setresult").innerHTML = setbyajax.responseText;
			}
		}
	}
}