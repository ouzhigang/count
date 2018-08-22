<?php include("include/table.php");?>
<div class="container-fluid">
<div class="row-fluid">
<br />
<div class="col-sm-12">
<div class="panel panel-success">
<div class="panel-heading">
<h3 class="panel-title"><?php echo $table_head;?></h3>
</div>
<div class="panel-body" style="overflow-x:auto;">
<table class="table table-hover">
<thead>
<tr>
<th><nobr>时间</nobr></th>
<th><nobr>路径</nobr></th>
<th><nobr>来路</nobr></th>
<th><nobr>ip</nobr></th>
<th><nobr>国家</nobr></th>
<th><nobr>省份（州）</nobr></th>
<th><nobr>城市</nobr></th>
<th><nobr>区域</nobr></th>
<th><nobr>位置</nobr></th>
<th><nobr>系统</nobr></th>
<th><nobr>语言</nobr></th>
<th><nobr>浏览器</nobr></th>
<th><nobr>UA</nobr></th>
</tr>
</thead>
<tbody>
<?php gettable($year,$month,$day,$page);?>
</tbody>
</table>
</div>
</div>
<?php getpage($year,$month,$day,$page);?>
</div>
</div>
</div>