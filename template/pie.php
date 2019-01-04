<script src="static/js/highcharts.js"></script>
<div style="text-align:center;">
<div class="btn-group">
<button type="button" class="btn btn-default" onclick="writePie(get_title)">路径</button>
<button type="button" class="btn btn-default" onclick="writePie(referrer_title)">来路</button>
<button type="button" class="btn btn-default" onclick="writePie(country_title)">国家</button>
<button type="button" class="btn btn-default" onclick="writePie(os_title)">系统</button>
<button type="button" class="btn btn-default" onclick="writePie(browser_title)">浏览器</button>
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

var json = {};
json.tooltip = tooltip;
json.plotOptions = plotOptions;
json.credits = credits;
function writePie(title) {
	
	var url = null;
	if(title.text == "路径") {		
		url = "index.php?mod=pie&f=get&dt=" + Math.random();		
	}
	else if(title.text == "来路") {
		url = "index.php?mod=pie&f=referrer&dt=" + Math.random();
	}
	else if(title.text == "国家") {
		url = "index.php?mod=pie&f=country&dt=" + Math.random();
	}
	else if(title.text == "系统") {
		url = "index.php?mod=pie&f=os&dt=" + Math.random();
	}
	else if(title.text == "浏览器") {
		url = "index.php?mod=pie&f=browser&dt=" + Math.random();
	}
	
	if(url != null) {
		$.ajax({
			type: "GET",
			url: url,
			dataType: "json",
			success: function(data) {
				var series = [{
					type: 'pie',
					innerSize: '50%',
					data: data
				}];
			
				json.title = title;
				json.series = series;
				$("#pie").highcharts(json);
			}
		});
	}
}

</script>