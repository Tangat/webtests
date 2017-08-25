<html>
    <head>
        <title>Test</title>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        
    </head>
    <body>
        <?php
        for ($i = 1; $i <= 40; $i++) {
            echo '<input type="button" value="'.$i.'" id="test_'.$i.'">';
        }
        
        ?>
         <input type="button" value="TEST" id="test_button">
 
         
         <script >
            $(document).ready(function(){
                   $('#test_button').click(function(){
                      $.get('massiv1.php',{id_test:2},function(data){
                         $('#test_data').html(data); 
                      });
                   });
                });
        </script>
    <div id="test_data">
 
    </div>
    </body>
</html>