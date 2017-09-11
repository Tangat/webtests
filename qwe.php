<html>
    <head>
        <title>Javascript</title>
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/scripts.js"></script>
    </head>
    <body>
        <?php
        include './config.php';
        $sql_arr = "SELECT  tblapi.*,  tbltest.* FROM tblapi  INNER JOIN tbltest    ON tblapi.id_test = tbltest.id_test WHERE tblapi.id_rezult = 239";
        $query_arr = mysqli_query($link, $sql_arr);
        $result_arr = mysqli_fetch_all($query_arr);
        ?>


        <input value="Вперед" onclick="next()" type="button" id="next"/>
        <input value="Назад" onclick="last()" type="button" id="last"/>
        <script>
            var arr = <?= json_encode($result_arr) ?>;
            i = -1;
            $(document).ready(function () {
                document.getElementById('idvopros').innerHTML = arr[0][1];
                document.getElementById('vopros').innerHTML = arr[0][8];
                document.getElementById('otvet1').innerHTML = arr[0][9];
                document.getElementById('otvet2').innerHTML = arr[0][10];
                document.getElementById('otvet3').innerHTML = arr[0][11];
                document.getElementById('otvet4').innerHTML = arr[0][12];
                document.getElementById('otvet5').innerHTML = arr[0][13];
                
            });
            //if(i=1){
            //   $('#last').hide();
            //document.getElementById('vopros').innerHTML=arr[1][8];
            //document.getElementById('otvet1').innerHTML=arr[1][9];
            //document.getElementById('otvet2').innerHTML=arr[1][10];
            //document.getElementById('otvet3').innerHTML=arr[1][11];
            //document.getElementById('otvet4').innerHTML=arr[1][12];
            //document.getElementById('otvet5').innerHTML=arr[1][13];
            //} else{
            //    alert('asdasd');
            //    $('#last').show();
            //}
            $(document).ready(next());
            function next() {
                ++i;
                if (i < 1) {
                    $('#last').hide();
                } else if (i > arr.length-2) {
                    $('#last').show();
                    $('#next').hide();
                } else
                {
                    $('#next').show();
                    $('#last').show();
                }



                document.getElementById('idvopros').innerHTML = arr[i][1];
                document.getElementById('vopros').innerHTML = arr[i][8];
                document.getElementById('otvet1').innerHTML = arr[i][9];
                document.getElementById('otvet2').innerHTML = arr[i][10];
                document.getElementById('otvet3').innerHTML = arr[i][11];
                document.getElementById('otvet4').innerHTML = arr[i][12];
                document.getElementById('otvet5').innerHTML = arr[i][13];
            }
            ;
            function last() {
                --i;
                if (i < 1) {
                    $('#last').hide();
                    
                } else if (i > arr.length-2) {
                    $('#last').show();
                    $('#next').hide();
                } else
                {
                    $('#next').show();
                    $('#last').show();
                }
                document.getElementById('idvopros').innerHTML = arr[i][1];
                document.getElementById('vopros').innerHTML = arr[i][8];
                document.getElementById('otvet1').innerHTML = arr[i][9];
                document.getElementById('otvet2').innerHTML = arr[i][10];
                document.getElementById('otvet3').innerHTML = arr[i][11];
                document.getElementById('otvet4').innerHTML = arr[i][12];
                document.getElementById('otvet5').innerHTML = arr[i][13];
            }
            ;
            
            function checked1(){
                if ($('#chkotv1').is(':checked')){
                    document.getElementById('chkotv2').checked=false;
                    document.getElementById('chkotv3').checked=false;
                    document.getElementById('chkotv4').checked=false;
                    document.getElementById('chkotv5').checked=false;
                }
            };
            function checked2(){
                if($('#chkotv2').is(':checked')){
                    document.getElementById('chkotv1').checked=false;
                    document.getElementById('chkotv3').checked=false;
                    document.getElementById('chkotv4').checked=false;
                    document.getElementById('chkotv5').checked=false;
                }    
            };
            function checked3(){
                if($('#chkotv3').is(':checked')){
                    document.getElementById('chkotv1').checked=false;
                    document.getElementById('chkotv2').checked=false;
                    document.getElementById('chkotv4').checked=false;
                    document.getElementById('chkotv5').checked=false;
                }
            };
            function checked4(){
             if($('#chkotv4').is(':checked')){
                    document.getElementById('chkotv1').checked=false;
                    document.getElementById('chkotv3').checked=false;
                    document.getElementById('chkotv2').checked=false;
                    document.getElementById('chkotv5').checked=false;
                }   
            };
            
            function checked5(){
        if($('#chkotv5').is(':checked')) {
                    document.getElementById('chkotv1').checked=false;
                    document.getElementById('chkotv3').checked=false;
                    document.getElementById('chkotv2').checked=false;
                    document.getElementById('chkotv4').checked=false;
                } 
            };
        </script>
        <p>
            <output id="idvopros"></output><br>
            <label id="vopros"></label><br>
            <input type="checkbox" id="chkotv1" onclick="checked1()"><label id="otvet1"></label><br>
            <input type="checkbox" id="chkotv2" onclick="checked2()"><label id="otvet2"></label><br>
            <input type="checkbox" id="chkotv3" onclick="checked3()"><label id="otvet3"></label><br>
            <input type="checkbox" id="chkotv4" onclick="checked4()"><label id="otvet4"></label><br>
            <input type="checkbox" id="chkotv5" onclick="checked5()"><label id="otvet5"></label>
    </body>
</html>

