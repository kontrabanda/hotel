<?php
function addService($service, $amount, $cost){
  echo "<tr>";
  echo "<td>$service</td>";
  echo "<td>$amount</td>";
  echo "<td>$cost</td>";
  echo "<td><a href=''>usuñ</a></td>";
  echo "</tr>";
}
?>

<?php
function addRow($service, $cost){
  echo "<tr>";
  echo "<td><input type='checkbox' name='service' value=$service>$service</td>";
  echo "<td>$cost</td>";
  echo "</tr>";
}
?>

<html>
<head>
      <style type="text/css">
      </style>
</head>
<body>
<h1><center>Rachunek</center></h1>
<p>Imie Nazwisko</p>

<table style="width: 50%;">
       <tr style="text-align: left">
           <th>Us³uga</th>
           <th>iloœæ</th>
           <th>koszt</th>
           <th></th>
       </tr>
       <tr>
           <td></td>
           <td></td>
           <td></td>
           <td></td>
       </tr>
       <?php addService("us³uga1","1", "200,00")?>
       <?php addService("us³uga2","3", "65,00")?>
       <tr>
           <td></td>
           <td></td>
           <td></td>
           <td></td>
       </tr>
       <tr style="text-align: left">
           <th>Razem:</th>
           <td></td>
           <th>265,00</th>
           <td></td>
       </tr>
</table>
<br>
<form action="rachunek.php" method="POST">
<table style="width: 50%">
       <tr>
           <td colspan="3">Dopisz do rachunku:</td>
       </tr>
       <tr>
           <td>Kategoria:</td>
           <td><select name="kategoria">
           <option value="pierwsza">pierwsza</option>
           </select></td>
           <td><input type="submit" name="filtruj" value="filtruj"></td>
       </tr>
</table>
</form>
<br>
<form action="rachunek.php" method="POST">
<table style="width: 35%">
       <?php addRow("us³uga3",  "103,00")?>
       <?php addRow("us³uga5",  "84,00")?>
</table>
<br>
<table style="width: 50%">
       <tr>
           <td>Ilosæ:</td>
           <td><input type="text" name="ilosc" style="width: 80" maxlength="4"></td>
           <td><input type="submit" name="dopisz_do_rachunku" value="dopisz do rachunku"></td>
       </tr>
</table>

</form>
</body>
</html>