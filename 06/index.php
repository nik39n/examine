<?php 

    $hostname="localhost";
    $username="root";
    $password="root";

    $sql = "SELECT * FROM pasport";

    $connection = mysqli_connect("$hostname","$username","$password", "examine") ;

    $result = mysqli_query($connection, $sql) or die("Ошибка " . mysqli_error($connection)); 
            if($result)
            {
                $rows = mysqli_num_rows($result); // количество полученных строк
                
                echo "<table border=1>";
                for ($i = 0 ; $i < $rows ; ++$i)
                {
                    $row = mysqli_fetch_row($result);
                    echo "<tr>" ;
                        for ($j = 0 ; $j < 3 ; ++$j) echo "<td> $row[$j] </td>";
                    echo "</tr>";
                }
                echo "</table>";
                
                // очищаем результат
                mysqli_free_result($result);
            }
            
            mysqli_close($connection);


?>