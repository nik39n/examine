<?php 

    $hostname="localhost";
    $username="root";
    $password="root";
    // $dbname="hw_stud";
    // $usertable="students";

    $sql = "SELECT * FROM menu";

    $connection = mysqli_connect("$hostname","$username","$password", "examine") ;

    $result = mysqli_query($connection, $sql) or die("Ошибка " . mysqli_error($connection)); 
            if($result)
            {
                $rows = mysqli_num_rows($result); // количество полученных строк
                
                echo "<table>";
                for ($i = 0 ; $i < $rows ; ++$i)
                {
                    $row = mysqli_fetch_row($result);
                    echo "<tr>" ;
                        for ($j = 1 ; $j < 2 ; ++$j) echo "<a href='".$row[$j+1]."'>".$row[$j]."</a><br>";
                    echo "</tr>";
                }
                echo "</table>";
                
                // очищаем результат
                mysqli_free_result($result);
            }
            
            mysqli_close($connection);


?>


