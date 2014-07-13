<?php
function addRow($persons, $apartment){
  echo "<tr>";
  echo "<td><a href=''>$persons</a></td>";
  echo "<td>$apartment</td>";
  echo "</tr>";
}
?>

<html>
<head>
      <style type="text/css">
      </style>
</head>
<body>
<form action="glowna_barmana.php" method="POST">
<h1><center>G³ówna barmana</center></h1>
<table>
       <tr>
           <td>Numer pokoju:</td>
           <td>od</td>
           <td><input type="text" name="od" style="width: 50px" maxlength="5"></td>
           <td>do</td>
           <td><input type="text" name="do" style="width: 50px" maxlength="5"></td>
           <td><input type="checkbox" name="szukaj_w_zameldowanch">szukaj w zameldowanych</td>
           <td><input type="submit" name="filtruj" value="filtruj"></td>
       </tr>
</table>
<br>
<table width="35%">
       <tr style="text-align:left">
           <th><a href="">Klient</a></th>
           <th><a href="">Pokój</a></th>
       </tr>
       <?php addRow("Marusz Pudzianowski","405")?>
</table>
</form>
</body>
</html>