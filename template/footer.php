<?php echo $info;?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h4 class="modal-title" id="myModalLabel">系统设置</h4>
</div>
<div class="modal-body">
<div class="input-group">
<span class="input-group-addon">选择修改项</span>
<select class="form-control" id="setkey" name="key">
<option value="admin" selected="selected">用户名</option>
<option value="pass">密码</option>
<option value="title">标题</option>
</select>
</div>
<br />
<div class="input-group">
<span class="input-group-addon">新的值</span>
<input type="text" class="form-control" id="setvalue" name="value">
</div>
<br />
<div id="setresult"></div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
<button type="button" class="btn btn-primary" onclick="set()">提交</button>
</div>
</div>
</div>
</div>
<div style="text-align:center;">
&copy;&nbsp;<?php echo date("Y");?>&nbsp;Powered by <a href="https://github.com/ouzhigang/count" target="_blank" style="text-decoration:none;">https://github.com/ouzhigang/count</a>
</div>

</body>
</html>