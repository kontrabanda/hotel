<?php
function addRow($persons, $category, $facility){
  echo "<tr>";
  echo "<td>$persons</td>";
  echo "<td>$category</td>";
  echo "<td>$facility</td>";
  echo "<td><a href=''>edycja</a></td>";
  echo "</tr>";
}
?>

<html>
<head>
      <style type="text/css">
      </style>
</head>
<body>
<center><h1>List rodzajów pokoju</h1></center>
<form action="lista_rodzajow_pokoju.php" method="POST">
<table style="width: 50%">
       <tr>
           <td style="width: 30%">Liczba osób:</td>
           <td>od<input type="text" name="od" style="width: 56px; margin-left: 10px; margin-right: 10px">
               do<input type="text" name="do" style="width: 57px; margin-left: 10px; margin-right: 10px"></td>
       </tr>
       <tr>
           <td>Kategoria:</td>
           <td><select name="Kategoria" style="width: 180px">
           <option value="pierwsza">pierwsza</option>
           </select></td>
       </tr>
       <tr>
           <td colspan="2" style="text-align: center"><input type="submit" name="filtruj" value="filtruj" style="width: 80px"></td>
       </tr>
</table>
<br><br>
<table width="65%">
       <tr>
           <td><a href="">Liczba osób</a></td>
           <td><a href="">Kategoria</a></td>
           <td>Wyposa¿enie</td>
           <td></td>
       </tr>
       <?php addRow("4","standard","lodówka, barek")?>
</table>
</body>
</html>