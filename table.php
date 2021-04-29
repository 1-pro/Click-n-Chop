<?php
session_start();
require_once("head.php");?>
<?php


$db=mysqli_connect("localhost","root","","click") OR die("DEAD");
// die();
//fetch timetable of user
$sql="SELECT * FROM `timetable`";
$query= mysqli_query($db,$sql);
//var_dump($query);

?>
<div class="row mb-5 justify-content-center">
<div class="col-md-10">
<table class="w-100 table-striped table-active table">
	<?php
//	for($i= 0; $i < $query->num_row; $i++){
	$row= mysqli_fetch_assoc($query);
	$count =count($row);
	

	// die();
?>
<?php //while ($row) { ?>
<tr>
<th>Monday</th>

<td><?=$row['monday']?></td>
</tr>
<tr>
<th>Tuesday</th>
<td><?=$row['tuesday']?></td>
</tr>
<tr>
<th>Wednesday</th>
<td><?=$row['wednesday']?></td>
</tr>
<tr>
<th>Thursday</th>
<td><?= $row['thursday']?></td>
</tr>
<tr>
<th>Friday</th>
<td><?=$row['friday']?></td>
</tr>
<tr>
<th>Saturday</th>
<td><?=$row['saturday']?></td>
</tr>
<tr>
<th>Sunday</th>
<td><?=$row['sunday']; ?></td>
</tr>
</table>

</div>
</div>

<?php ; require_once("footer.php");?>



