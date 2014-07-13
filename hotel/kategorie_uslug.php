<?php
function addRow($name){
  echo "<tr>";
  echo "<td>$name</td>";;
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
<h1><center>Kategorie us³ug</center><h1>
<table style="width: 35%; text-align: left">
       <tr style="text-align: left">
           <th colspan="2">Nazwa kategorii</th>
       </tr>
       <tr></tr>
       <tr>
           <th>Nazwa</th>
           <th>Cena</th>
           <th></th>
       </tr>
       <tr>
       </tr>
       <?php addRow("Alkohole")?>
       <?php addRow("Przekaski")?>
       <?php addRow("Napoje gazowane")?>
</table>
<br>
<form action="kategorie_uslug.php" method="POST">
<table style="width: 50%">
       <tr>
           <th>Dodaj kategoriê: </th>
           <td><input type="text" name="dodaj_kategorie" style="width: 160"></td>
           <td><input type="submit" name="dodaj" value="dodaj" style="width: 100"></td>
       </tr>
</table>
</form>
</body>
</html>