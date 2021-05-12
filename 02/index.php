<?php 
$temp = $_GET["num"];


?>

<form class="form-group">
  <label for=""></label>
  <input type="text"
    name="num">
   <input type="submit" />
</form>
<table border="1">
<?php for($i=1;$i<=$temp;$i++):?>
    <tr><?=$i**2?></tr>
    <br>
<?php endfor;?>
</table>