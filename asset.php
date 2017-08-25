<?php

include './config.php';
$idgrup = $_COOKIE['idgrup'];
$idstudent = $_COOKIE['idstudent'];
$idpredmet = $_GET['idpredmet'];
$sql_question = "SELECT  tblrezult.*,  tblapi.*,  tbltest.* FROM tblapi  INNER JOIN tblrezult    ON tblapi.id_rezult = tblrezult.id_rezult  INNER JOIN tbltest    ON tblapi.id_test = tbltest.id_test WHERE tblrezult.id_grup = " . $idgrup . " AND tblrezult.idstudent = " . $idstudent . " AND tblrezult.idpredmet = " . $idpredmet;
$result_question = mysqli_query($link, $sql_question);
echo mysqli_error($link);
while($row_question = mysqli_fetch_array($result_question)){
    echo " <a href='?idpredmet=".$idpredmet."&idtest=".$row_question['id_test']."'>".$row_question['id_temp']."</a>";
}

include './asd.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>