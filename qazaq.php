<?php
session_start();
include './config.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$sql = "SELECT id_test FROM `tbltest` WHERE id_predmet=4";
$query40=mysqli_query($link,$sql);
$v40= mysqli_fetch_assoc($query40);
$v40first=$v40['id_test'];
//echo $v40first;
$v40last= mysqli_num_rows($query40)+$v40first;


$q=array();
for ($i = 1; $i <= 40; $i++) {
    er:
        $q[$i]= rand($v40first, $v40last);
        for ($j = 1; $j < ($i-1); $j++) {
            if ($q[$i]==$q[$j])
                goto er; 
                else break;
        }

}

        
foreach ($q as $key => $value) {
    echo "<a href='?id=$key&id_test=$value'>".$key."</a> | ";
    //echo "$key => $value";
}
   
for ($i = 1; $i < 41; $i++) {
//      echo $i." <a href='?id=$q[$i]'>".$q[$i]."</a> | ";
}
//print_r($q);
print_r($_COOKIE);
?>
