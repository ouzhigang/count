<?php include("include/top.php");?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo getValue("title")?>统计系统</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8" />
<link href="static/css/bootstrap.min.css" rel="stylesheet" />
<link href="./static/css/datedropper.css" rel="stylesheet" />
<script src="static/js/jquery.min.js"></script>
<script src="static/js/bootstrap.min.js"></script>
<script src="./static/js/datedropper.min.js"></script>
<script src="./static/js/main.js"></script>
</head>
<body>

<div class="container-fluid">
<div class="row-fluid">
<br />
<div class="col-sm-12 col-lg-4">
<div class="panel panel-success">
<div class="panel-heading">
<h3 class="panel-title">基本统计信息</h3>
</div>
<div class="panel-body">
<table class="table table-hover">
<tbody>
<tr><td>月PV</td><td><?php echo getmonthpv(date("Y"),date("n"));?></td></tr>
<tr><td>月UV</td><td><?php echo getmonthuv(date("Y"),date("n"));?></td></tr>
<tr><td>日PV</td><td><?php echo getdaypv(date("Y"),date("n"),date("j"));?></td></tr>
<tr><td>日UV</td><td><?php echo getdayuv(date("Y"),date("n"),date("j"));?></td></tr>
</tbody>
</table>
</div>
</div>
</div>
<div class="col-sm-12 col-lg-4">
<?php include("template/pie.php");?>
</div>
<div class="col-sm-12 col-lg-4">
<div class="well well-sm" style="text-align:center;">
本系统从<?php echo getValue("date");?>开始运行。<br /><a href="index.php" style="text-decoration:none;">首页</a>&nbsp;|&nbsp;<a data-toggle="modal" data-target="#myModal" style="text-decoration:none;">设置</a>&nbsp;|&nbsp;<a title="使用说明" data-container="body" data-toggle="popover" data-placement="bottom" data-content="在需要统计的网页中引用count.js即可实现自动统计。" style="text-decoration:none;">帮助</a>&nbsp;|&nbsp;<a href="index.php?mod=logout" style="text-decoration:none;">注销</a>
</div>
<form action="index.php" method="GET" role="form">
<div class="input-group">
<span class="input-group-addon">查询日期</span>
<input type="text" class="form-control" id="date" name="date" style="background-color:#fff;">
<span class="input-group-btn"><button class="btn btn-default" type="submit">查询</button></span>
</div>
</form>
</div>
</div>
</div>