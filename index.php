<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<title>Система тестирования</title>
        <link rel='stylesheet' type='text/css' href='css/bootstrap.css'>
	<link rel='stylesheet' type='text/css' href='css/style.css'>
	<script src='js/bootstrap.js'></script>
        <script src='js/jquery-3.2.1.min.js'></script>
        <script src='js/scripts.js'></script>	
</head>
<body>
<form action="">

<?php
$rows=array();
include'config.php';
$query=mysqli_query($link,"Select * from tbltest");
while ($row=mysqli_fetch_array($query)){
	$rows[]=$row['otvet1'];
	echo "<p>".$row['vopros']."</p>";
	echo "<input type='radio' name='gender'>".$row['otvet1']."</br>";
	echo "<input type='radio' name='gender'>".$row['otvet2']."</br>";
	echo "<input type='radio' name='gender'>".$row['otvet3']."</br>";
	echo "<input type='radio' name='gender'>".$row['otvet4']."</br>";
	echo "<input type='radio' name='gender'>".$row['otvet5']."</br>";
}

?>
<!--<script>
var arrayObjects = <?php echo json_encode($result_array); ?>
</script>-->
</form>
</body>
</html>