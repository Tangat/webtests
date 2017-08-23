<?php
session_start();
include './config.php';
    if(isset($_POST['submit'])){
        if (!empty($_POST['zachnom'])) {
            $zachnom=$_POST['zachnom'];
            $sql11 = "SELECT * FROM `tblstudent` WHERE zachnom = '".$zachnom."'";
            $zach= mysqli_query($link, $sql11);
            $row_student= mysqli_fetch_array($zach);
                if($zachnom == $row_student['zachnom']){
                    header("Location: index1.php");
                    setcookie("idstudent",$row_student['id_student']);
                    setcookie("SNP",$row_student['SNP']);
                    setcookie("zachnom",$row_student['zachnom']);
                    setcookie("grup",$row_student['grup']);
                    /*echo $_POST['zachnom'];          
                    echo "<a href='qazaq.php'>asdasd</a>";*/
                    //$_SESSION['id_student']=$row_student['id_student'];
                }
            echo $_POST['zachnom'];
        } else {
          echo 'Правильно введите ваше зачетный номер ';  
        } ;        
    };
?>
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
    
    <form method="POST" class="form-horizontal">
        <div class="col-md-4">
            <label class="col-md-4 control-label">Зачетный номер: </label>
            <input name="zachnom" type="text" class="form-control input-md">
            <button name="submit" class="btn btn-primary">Войти</button>
        </div>
    </form> 
</body>
</html>