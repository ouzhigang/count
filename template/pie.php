<script src="static/js/highcharts.js"></script>
<div style="text-align:center;">
<div class="btn-group">
<button type="button" class="btn btn-default" onclick="writePie(get_title,get_series)">路径</button>
<button type="button" class="btn btn-default" onclick="writePie(referrer_title,referrer_series)">来路</button>
<button type="button" class="btn btn-default" onclick="writePie(country_title,country_series)">国家</button>
<button type="button" class="btn btn-default" onclick="writePie(os_title,os_series)">系统</button>
<button type="button" class="btn btn-default" onclick="writePie(browser_title,browser_series)">浏览器</button>
</div>
</div>
<div id="pie" style="height:224px;"></div>
<script>
var get_title = {
	text:'路径',
	align:'center',
	verticalAlign:'middle',
	y:50
};
var referrer_title = {
	text:'来路',
	align:'center',
	verticalAlign:'middle',
	y:50
};
var country_title = {
	text:'国家',
	align:'center',
	verticalAlign:'middle',
	y:50
};
var os_title = {
	text:'系统',
	align:'center',
	verticalAlign:'middle',
	y:50
};
var browser_title = {
	text:'浏览器',
	align:'center',
	verticalAlign:'middle',
	y:50
};
var tooltip = {
	enabled:false
};
var plotOptions = {
	pie:{
		dataLabels:{
			enabled:true,
			format:'{point.name}:{point.percentage:.1f} %',
			style:{
				color:(Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
			}
		},
		startAngle:-90,
		endAngle:90,
		center:['50%','75%']
	}
};
var credits = {
	enabled:false
};
var get_series = [{
	type:'pie',
	innerSize:'50%',
	data:[<?php getPie("get",$year,$month,$day);?>]
}];
var referrer_series = [{
	type:'pie',
	innerSize:'50%',
	data:[<?php getPie("referrer",$year,$month,$day);?>]
}];
var country_series = [{
	type:'pie',
	innerSize:'50%',
	data:[<?php getPie("country",$year,$month,$day);?>]
}];
var os_series = [{
	type:'pie',
	innerSize:'50%',
	data:[<?php getPie("os",$year,$month,$day);?>]
}];
var browser_series = [{
	type:'pie',
	innerSize:'50%',
	data:[<?php getPie("browser",$year,$month,$day);?>]
}];
var json = {};
json.tooltip = tooltip;
json.plotOptions = plotOptions;
json.credits = credits;
function writePie(title,series){
	json.title = title;
	json.series = series;
	$("#pie").highcharts(json);
}
</script>