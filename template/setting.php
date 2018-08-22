<?php include("include/setting.php");?>
<script>
$(document).ready(function(){
	$("#a_admin").click(function(){
		$("#input_pass").val("");
		$("#input_apikey").val("");
	});
	$("#a_pass").click(function(){
		$("#input_admin").val("");
		$("#input_apikey").val("");
	});
	$("#a_apikey").click(function(){
		$("#input_admin").val("");
		$("#input_pass").val("");
	});
});
</script>
<div class="container-fluid">
<div class="row-fluid">
<br />
<div class="col-sm-12">
<div class="panel panel-success">
<div class="panel-heading">
<h3 class="panel-title">系统设置</h3>
</div>
<div class="panel-body" style="overflow-x:auto;">
<div class="row-fluid">
<div class="col-sm-12 col-lg-6 col-md-offset-3">
<br />
<form action="index.php?mod=setting" method="POST" role="form">
<div class="panel-group" id="accordion">
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#admin" id="a_admin">修改用户名</a>
</h4>
</div>
<div id="admin" class="panel-collapse collapse">
<div class="panel-body">
<div class="input-group">
<span class="input-group-addon">新用户名</span>
<input type="text" class="form-control" id="input_admin" name="admin">
</div>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#pass" id="a_pass">修改密码</a>
</h4>
</div>
<div id="pass" class="panel-collapse collapse">
<div class="panel-body">
<div class="input-group">
<span class="input-group-addon">新密码</span>
<input type="text" class="form-control" id="input_pass" name="pass">
</div>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#apikey" id="a_apikey">修改apikey</a>
</h4>
</div>
<div id="apikey" class="panel-collapse collapse">
<div class="panel-body">
<div class="input-group">
<span class="input-group-addon">新apikey</span>
<input type="text" class="form-control" id="input_apikey" name="apikey">
</div>
</div>
</div>
</div>
</div>
<div style="text-align:center;">
<div class="btn-group" id="bt">
<button type="submit" class="btn btn-success">修改</button>
<button type="reset" class="btn btn-info">重填</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>