<?php
function addRow($service, $price){
  echo "<tr>";
  echo "<td>$service</td>";
  echo "<td>$price</td>";
  echo "<td><a href=''>usuñ</a></td>";
  echo "</tr>";
}
?>

<html>
<head>
      <style type="text/css">
      </style>
</head>
<body>
<h1><center>lista us³ug</center></h1>
<form action="list_uslug.php" method="POST">
<table style="width: 50%">
       <tr>
           <th style="text-align: left">Kategoria:</th>
           <td><select name="kategoria" style="width: 180">
           <option value="pierwsza">pierwsza</option>
           </select></td>
       </tr>
</table>
<br>
<table style="width: 35%; text-align: left">
       <tr>
           <th>Nazwa</th>
           <th>Cena</th>
           <th></th>
       </tr>
       <?php addRow("us³uga3",  "103,00")?>
       <?php addRow("us³uga5",  "84,00")?>
</table>
</form>
<br>

<table style="width: 50%">
       <tr style="text-align: left">
           <th colspan="2">Dodaj nowa us³ugê:</th>
       </tr>
       <tr>
           <td style="width: 30">Nazwa</td>
           <td><input type="text" name="nazwa" maxlength="45" style="width: 180px;"></td>
       </tr>
       <tr>
           <td>Od</td>
           <td><input type="text" name="od" maxlength="45" style="width: 180px;"></td>
       </tr>
       <tr style="text-align: center">
           <td colspan="2"><input type="submit" name="dodaj" value="dodaj" style="width: 100"></td>
       </tr>
</table>


</body>
</html>