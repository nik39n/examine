<table border="1">
<?php for($i=0;$i<=10;$i++):?>
  <tr>
    <?php for($j=0;$j<=10;$j++):?>
            <td><?=$i*$j?></td>
    <?php endfor;?>
  </tr>
<?php endfor;?>
</table>