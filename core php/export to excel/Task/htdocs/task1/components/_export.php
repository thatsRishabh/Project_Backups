<!-- For user database -->
<?php
include '_dbconnect.php';
$sql="SELECT * FROM `users`";
$result = mysqli_query($conn, $sql);
$html='<table><tr><td><b>Name</b></td><td><b>Mobile</b></td><td><b>Email</b></td></tr>';
while($row = mysqli_fetch_assoc($result)){
    $html.='<tr><td>'. $row['name'].'</td><td>'.$row['mobile'].'</td><td>'.$row['email'].'</td></tr>';
}
$html.='</table>';
header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=report.xls');
echo $html;

?>


<!-- For Task database -->
<?php
include '_dbconnect.php';
$sql="SELECT * FROM `task`";
$result = mysqli_query($conn, $sql);
$html='<br><table><tr><td><b>Name</b></td><td><b>Task</b></td><td><b>Status</b></td></tr>';
while($row = mysqli_fetch_assoc($result)){
    $html.='<tr><td>'. $row['name'].'</td><td>'.$row['task_name'].'</td><td>'.$row['task_type'].'</td></tr>';
}
$html.='</table>';
header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=task.xls');
echo $html;

?>