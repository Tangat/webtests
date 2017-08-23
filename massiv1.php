<?php
$id= strip_tags($_GET['id']);
$id_test= strip_tags($_GET['id_test']);
include './config.php';
$sql1="SELECT * FROM `tbltest` WHERE id_test = '$id_test'";
$result= mysqli_query($link,$sql1);
$row_test= mysqli_fetch_assoc($result);
        echo $id."-".$row_test['vopros']."<br>";
	echo "<input type='checkbox' name='gender'>".$row_test['otvet1']."</br>";
	echo "<input type='checkbox' name='gender'>".$row_test['otvet2']."</br>";
	echo "<input type='checkbox' name='gender'>".$row_test['otvet3']."</br>";
	echo "<input type='checkbox' name='gender'>".$row_test['otvet4']."</br>";
	echo "<input type='checkbox' name='gender'>".$row_test['otvet5']."</br>";

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>