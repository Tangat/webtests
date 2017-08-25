<?php

include './config.php';
if (isset($_GET['idpredmet'])) {
    //setcookie("idpredmet") = $_GET['idpredmet'];
    $idpredmet = $_GET['idpredmet'];
    $sql_q = "Select * from tbltest where id_predmet=" . $idpredmet;
    $result_q = mysqli_query($link, $sql_q);
    if (mysqli_num_rows($result_q) == 0) {
        echo 'Тест не загружен !!!';
    } else {
        $row_q = mysqli_fetch_assoc($result_q);
        $first_q = $row_q['id_test'];
        $last_q = mysqli_num_rows($result_q) + $first_q;
        $temp_q = array();
        for ($i = 1; $i <= 40; $i++) {
            er:
            $temp_q[$i] = rand($first_q, $last_q);
            for ($j = 1; $j < ($i - 1); $j++) {
                if ($temp_q[$i] == $temp_q[$j])
                    goto er;
                else
                    break;
            }
        }

        $idgrup = $_COOKIE['idgrup'];
        $idstudent = $_COOKIE['idstudent'];
        $sql_rezult = "INSERT into tblrezult (id_grup, idstudent, idpredmet ) values (" . $idgrup . ", " . $idstudent . ", " . $idpredmet . ")";
        $result_rezult = mysqli_query($link, $sql_rezult);
        $sql_id_rezult = "select * from tblrezult where id_grup=" . $idgrup . " and idstudent=" . $idstudent . " and idpredmet=" . $idpredmet;
        $result_id_rezult = mysqli_query($link, $sql_id_rezult);
        $idrezult = mysqli_fetch_assoc($result_id_rezult);


        for ($i = 1; $i < 41; $i++) {
            $sql_tblapi = "Insert into tblapi (id_temp, id_test, otv, missed, id_rezult) values (" . $i . ", " . $temp_q[$i] . ", 5, 5," . $idrezult['id_rezult'] . ")";
            $result_tblapi = mysqli_query($link, $sql_tblapi);
        }
        header("Location: asset.php?idpredmet=4");
        

        /* $sql_question = "SELECT  tblrezult.id_grup,  tblrezult.idstudent,  tblrezult.idpredmet,  tblrezult.rezult,   tblrezult.kas,  tblrezult.start,  tblrezult.end,  tblapi.id_test,  tblapi.id_temp FROM tblrezult   INNER JOIN tblapi    ON tblrezult.id_rezult = tblapi.id_rezult WHERE tblrezult.idstudent = " . $_COOKIE['idstudent'] . " AND tblrezult.idpredmet = " . $id_predmet;
          $result_question = mysqli_query($link, $sql_question);
          $row_question = mysqli_fetch_assoc($result_question);
          print_r($row_question); */
    }
} else {
    echo '0';
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

