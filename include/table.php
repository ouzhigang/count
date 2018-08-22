<?php
function gettable($year,$month,$day,$page){
	global $conn;
	$sql = "SELECT * FROM `count` WHERE year='".$year."' AND month='".$month."' AND day='".$day."' order by id desc LIMIT " . (($page - 1) * 20) . ", 20";
	$result = mysqli_query($conn,$sql);
	if($result->num_rows>0){
		while($row = $result->fetch_assoc()){
			echo "<tr><td>".$row['time']."</td><td><a href='".$row['get']."#nocount' target='_blank'>".$row['get']."</a></td><td><nobr>".$row['referrer']."</nobr></td><td><nobr>".$row['ip']."</nobr></td><td><nobr>".$row['country']."</nobr></td><td><nobr>".$row['state']."</nobr></td><td><nobr>".$row['city']."</nobr></td><td><nobr>".$row['area']."</nobr></td><td><nobr>".$row['extend']."</nobr></td><td><nobr>".$row['os']."</nobr></td><td><nobr>".$row['lang']."</nobr></td><td><nobr>".$row['browser']."</nobr></td><td><a data-trigger='click' data-placement='left' data-toggle='tooltip' title='".$row['ua']."'><nobr>查看</nobr></a></td></tr>";
		}
	} else {
		echo "<tr><td><nobr>暂无数据</nobr></td></tr>";
	}
}
function getpage($year,$month,$day,$page){
	global $conn;
	$pv=getdaypv($year,$month,$day);
	if($pv>20){
		echo "<div style='text-align:center;'><ul class='pagination'>";
		if(($pv%20)>0){$curpage=floor($pv/20)+1;}
		else{$curpage=floor($pv/20);}
		
		$date = isset($_GET['date']) ? str_filter($_GET['date']) : "";
		for($i=1;$i<=$curpage;$i++) {
			if($i == $page) {
				echo "<li class='active'><a href='index.php?date=" . $date . "&page=".$i."'>".$i."</a></li>";
			}
			else {
				echo "<li><a href='index.php?date=" . $date . "&page=".$i."'>".$i."</a></li>";
			}
		}
		echo "</ul></div>";
	}
}
