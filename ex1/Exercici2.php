
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>
    TAULA ARRAYS
  </title>
</head>

<body>
  <style>
  td {
    border: 1px solid red;
    border-collapse: collapse;
  } 
  </style>

  <h1>
    Tabulant Informació
  </h1>
  
  <table>
    <tr>
      <th> Index </th>
      <th> Valor </th>
    </tr>

  <?php
      $matriz[0] = "cougar";
      $matriz[1] = "ford";
      $matriz[2] = null;
      $matriz[3] = "2.500";
      $matriz[4] = "V6";
      $matriz[5] = 182;

      $contador = 0;
      $camps="";

      while ($contador < count($matriz)) {
        $camps.="
        <tr>
            <td>".$contador."</td>
            <td>".$matriz[$contador]."</td>
        </tr
        ";
        $contador++;
        };
        echo $camps;

    ?>
  
    </table>
</body>

</html>