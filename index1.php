<?php
include './config.php';
$i=1;
$sql_appoint= "SELECT tblappoint.Data, tblappoint.IDPredmet, tblpredmet.predmet, tblpredmet.teacher, tblclock.clock, tblclock.vopros, tblclock.vid FROM tblappoint INNER JOIN tblpredmet ON tblappoint.IDPredmet = tblpredmet.id_predmet INNER JOIN tblclock ON tblappoint.id_clock = tblclock.id_clock WHERE tblappoint.IDGrup = ".$_COOKIE['idgrup'];
$result_appoint= mysqli_query($link, $sql_appoint);
while ($row_appoint= mysqli_fetch_array($result_appoint)){
    echo $i.") <a href='question.php?idpredmet=".$row_appoint['IDPredmet']."'>".$row_appoint['predmet']."</a>";
    //echo "<a href='question.php>'";
    $i++;
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

