<div class="container">
  <h1>Чекбокс как radio кнопка</h1>
  <input type='checkbox' name='mygroup1' value='1'>
  <input type='checkbox' name='mygroup2' value='2'>
  <input type='checkbox' name='mygroup3' value='3'>
</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script>
var $unique = $('input[type="checkbox"]');
$unique.click(function() {
    $unique.filter(':checked').not(this).removeAttr('checked');
});
</script>