<?php
if(isset($_GET['idtest'])){
    $testid=$_GET['idtest'];
    $sql_test="Select * from tbltest where id_test=".$testid;
    $test_result= mysqli_query($link, $sql_test);
    $test_row= mysqli_fetch_assoc($test_result);
        echo "<p>".$id."-".$test_row['vopros']."</p>";
	echo "<input type='checkbox' name='gender'>".$test_row['otvet1']."</br>";
	echo "<input type='checkbox' name='gender'>".$test_row['otvet2']."</br>";
	echo "<input type='checkbox' name='gender'>".$test_row['otvet3']."</br>";
	echo "<input type='checkbox' name='gender'>".$test_row['otvet4']."</br>";
	echo "<input type='checkbox' name='gender'>".$test_row['otvet5']."</br>";
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

