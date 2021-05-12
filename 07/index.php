<?php 

$str = file_get_contents("test.txt");
$arr = explode("\n",$str);

?>
<table border="1">
    <th>Номер</th>
    <th>Автор</th>
    <th>Название</th>
    <th>Обложка</th>
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
    <td>
            <img src="img/<?=$result[0]?>.jpg " width=200px alt="">
    </td>
  </tr>

<?php endforeach;?>
</table>
