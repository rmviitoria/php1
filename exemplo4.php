<?php

    $inicio = 1;
    $fim = rand(1, 100);
    echo "Fim: ".$fim;
    echo "<table border='1'>";
        echo "<tr>";
        echo "<th> exemplo 1</th> <th> exemplo 2</th>
              <th> exemplo 3</th> <th> exemplo 4</th>";
        echo "</tr>";
        echo "<tr>";
    for($i = $inicio; $i <= $fim; $i++){
        echo "<td>1</td>
              <td>2</td>
              <td>3</td>
              <td>4</td>
             </tr>";
    }
  echo" </table>";
