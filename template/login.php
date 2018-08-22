<!DOCTYPE html>
<html>
<head>
<title><?php echo getValue("title")?>统计系统-登录</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8" />
<link rel="icon" href="/upload/10001/config/favicon.ico" mce_href="/upload/10001/config/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" type="image/x-icon" href="/upload/10001/config/favicon.ico" />
<link href="static/css/bootstrap.min.css" rel="stylesheet" />
<script src="static/js/jquery.min.js"></script>
<script src="static/js/bootstrap.min.js"></script>
<script src="template/main.js"></script>
</head>
<body>

<div class="container-fluid">
<div class="row-fluid">
<br />
<form method="POST" action="index.php?mod=log" class="bs-example bs-example-form" role="form">
<fieldset>
<center><legend>登录</legend></center>
<div class="input-group">
<span class="input-group-addon">用户名</span>
<input type="text" class="form-control" id="admin" name="admin">
</div>
<br />
<div class="input-group">
<span class="input-group-addon">登录密码</span>
<input type="password" class="form-control" id="pass" name="pass">
</div>
<br />
<div style="text-align:center;">
<div class="btn-group" id="bt">
<button type="submit" class="btn btn-success">登录</button>
<button type="reset" class="btn btn-info">重填</button>
</div>
</div>
</fieldset>
</form>
<br />