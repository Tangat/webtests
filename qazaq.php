<?php
include './config.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$query40=mysqli_query($link,"Select * from tbltest where id_predmet=4");
$v40=mysqli_fetch_array($query40);
$v40first=$v40['id_test'];
print_r($v40);
//echo $v40first;
$v40last= mysqli_num_rows($query40)+$v40first;
/*echo $v40last;
echo '<br>';*/

$q=array();
for ($i = 1; $i <= 5; $i++) {
    er:
        $q[$i]= rand($v40first, $v40last);
        for ($j = 1; $j < ($i-1); $j++) {
            if ($q[$i]==$q[$j])
                goto er; 
                else break;
        }
        echo $q[$i]."<br>";
}

for ($i = 0; $i < count($q)+1; $i++) {
    //echo $i." - "
    
}
?>