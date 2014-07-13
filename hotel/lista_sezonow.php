<?php
function addRow($from, $to, $sezon){
  echo "<tr>";
  echo "<td>$from</td>";
  echo "<td>$to</td>";
  echo "<td><a href=''>$sezon</a></td>";
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
<table style="width: 50%;">
       <tr>
           <td>Numer pokoju:</td>
           <td>od</td>
           <td><input type="text" name="od" style="width: 50px" maxlength="5"></td>
           <td>do</td>
           <td><input type="text" name="do" style="width: 50px" maxlength="5"></td>
           <td><input type="submit" name="filtruj" value="filtruj"></td>
       </tr>
</table>
<br>
<table width="50%">
       <tr style="text-align: left">
           <th><a href="">Od</a></th>
           <th><a href="">Do</a></th>
           <th><a href="">Nazwa sezonu</a></th>
       </tr>
       <?php addRow("10.07.2014","12.07.2014", "Wakacje2014")?>
       <?php addRow("13.10.2014","15.10.2014", "Jesien2014")?>
</table>
</form>
</body>
</html>