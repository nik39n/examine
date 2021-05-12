<?php 

$str = file_get_contents("test.txt");
$arr = explode("\n",$str);

?>
<table border="1">
<?php foreach($arr as $key):?>
  <tr>
    <?php 
    $result = explode('#', $key);

    ?>
    <?php foreach($result as $item):?>
        <td>
            <?=$item?>
        </td>
    <?php endforeach;?>
  </tr>

<?php endforeach;?>
</table>
