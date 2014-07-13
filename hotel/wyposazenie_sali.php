<?php
function addRow($facility){
  echo "<tr>";
  echo "<td style='width:50'>$facility</td>";
  echo "<td style='width:50'><a href=''>usuñ</a></td>";
  echo "</tr>";
}
?>

<html>
<head>
      <style type="text/css">
      </style>
</head>
<body>
<h1><center>Wyposa¿enie sali</center></h1>
<table style="width: 35%; text-align: left">
       <tr>
           <th colspan="2">Nazwa wyposa¿enia</th>
       </tr>
       <?php addRow("projektor")?>
       <?php addRow("tablica")?>
</table>
<br>
<form action="wyposazenie_pokoju.php" method="POST">
<table style="width: 50%">
       <tr style="text-align: left">
           <th>Dodaj wyposa¿enie:</th>
           <td><input type="text" name="dodaj_wyposazenie" style="width: 160"></td>
           <td><input type="submit" name="dodaj" value="dodaj" style="width: 80"></td>
       </tr>
</table>
</form>
<br>

</body>
</html>