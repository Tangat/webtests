<?php
include './config.php';
$sql_arr="SELECT  tblapi.*,  tbltest.* FROM tblapi  INNER JOIN tbltest    ON tblapi.id_test = tbltest.id_test WHERE tblapi.id_rezult = 239";
$query_arr= mysqli_query($link, $sql_arr);
$result_arr= mysqli_fetch_all($query_arr);
    /*echo '<pre>';
print_r($result_arr);
echo '</pre>';
}*/

if(isset($_GET['value'])){
        $position = $_GET['value'];
        $position = $position+1;
        $x=$result_arr[$position][1];
        $z=$result_arr[$position][2];
        $vopros = $result_arr[$position][8];
        $otvet1 = $result_arr[$position][9];
        $otvet2 = $result_arr[$position][10];
        $otvet3 = $result_arr[$position][11];
        $otvet4 = $result_arr[$position][12];
        $otvet5 = $result_arr[$position][13];
        echo 'qwe';
       
}else{ 
    $x=$result_arr[0][1];
    $z=$result_arr[0][2];
    $vopros = $result_arr[0][8];
        $otvet1 = $result_arr[0][9];
        $otvet2 = $result_arr[0][10];
        $otvet3 = $result_arr[0][11];
        $otvet4 = $result_arr[0][12];
        $otvet5 = $result_arr[0][13];
$position = 0;}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<form action="next.php" method="GET">
    <?php 
    /*$i= rand(0,4);
switch ($i){
    case 0:
        echo "<p>0A) <input type='radio' name='A' value='A'></p>";
        echo "<p>B) <input type='radio' name='A' value='A'></p>";
        echo "<p>C) <input type='radio' name='A' value='A'></p>";
        echo "<p>D) <input type='radio' name='A' value='A'></p>";
        echo "E) <input type='radio' name='A' value='A'>";
        break;
    case 1:
        echo "<p>1A) <input type='radio' name='A' value='A'></p>";
        echo "<p>B) <input type='radio' name='A' value='A'></p>";
        echo "<p>C) <input type='radio' name='A' value='A'></p>";
        echo "<p>D) <input type='radio' name='A' value='A'></p>";
        echo "E) <input type='radio' name='A' value='A'>";
        break;
    case 2:
        echo "<p>2A) <input type='radio' name='A' value='A'></p>";
        echo "<p>B) <input type='radio' name='A' value='A'></p>";
        echo "<p>C) <input type='radio' name='A' value='A'></p>";
        echo "<p>D) <input type='radio' name='A' value='A'></p>";
        echo "E) <input type='radio' name='A' value='A'>";
        break;
    case 3:
        echo "<p>3A) <input type='radio' name='A' value='A'></p>";
        echo "<p>B) <input type='radio' name='A' value='A'></p>";
        echo "<p>C) <input type='radio' name='A' value='A'></p>";
        echo "<p>D) <input type='radio' name='A' value='A'></p>";
        echo "E) <input type='radio' name='A' value='A'>";
        break;
    case 4:
        echo "<p>4A) <input type='radio' name='A' value='A'></p>";
        echo "<p>B) <input type='radio' name='A' value='A'></p>";
        echo "<p>C) <input type='radio' name='A' value='A'></p>";
        echo "<p>D) <input type='radio' name='A' value='A'></p>";
        echo "E) <input type='radio' name='A' value='A'>";
        break;
}*/
    echo $position."<br>";
    echo $z."<br>";
    echo $x." - ".$vopros."<br>";
    echo "<input type='radio' name='gender'>".$otvet1."</br>";
    echo "<input type='radio' name='gender'>".$otvet2."</br>";
    echo "<input type='radio' name='gender'>".$otvet3."</br>";
    echo "<input type='radio' name='gender'>".$otvet4."</br>";
    echo "<input type='radio' name='gender'>".$otvet5."</br>";
    
    
    ?>
    <input type="hidden" name = "value" value="<?php echo $position;?>">
    <input type="submit" value="next" />
</form>