<?php
function addRow($number, $persons, $category, $actual_cost){
  echo "<tr>";
  echo "<td><a href=''>$number</a></td>";
  echo "<td>$persons</td>";
  echo "<td>$category</td>";
  echo "<td>$actual_cost</td>";
  echo "</tr>";
}
?>

<html>
<head>
      <link rel="stylesheet" type="text/css" href="pokoje.css">
      <style type="text/css">
      </style>
</head>
<body>
<center><h1>Pokoje</h1></center> 
<form action "pokoje.php" method="POST">
<table width="60%">

       <tr>
           <td style="width: 30%">Numer pokoju:</td>
           <td style="width: 10%">od</td>
           <td style="width: 25%"><input type="text" name="od_1" class="input_to" maxlength="4"></td>
           <td style="width: 10%">do</td>
           <td style="width: 25%"><input type="text" name="do_1" class="input_to" maxlength="4"></td>
       </tr>
       <tr>
           <td style="width: 30%">Liczba osób:</td>
           <td style="width: 10%">od</td>
           <td style="width: 25%"><input type="text" name="od_2" class="input_to" maxlength="4"></td>
           <td style="width: 10%">do</td>
           <td style="width: 25%"><input type="text" name="do_2" class="input_to" maxlength="4"></td>
       </tr>
       <tr>
           <td style="width: 30%">Cena:</td>
           <td style="width: 10%">od</td>
           <td style="width: 25%"><input type="text" name="od_3" class="input_to" maxlength="4"></td>
           <td style="width: 10%">do</td>
           <td style="width: 25%"><input type="text" name="do_3" class="input_to" maxlength="4"></td>
       </tr>

</table>
       <center><input type="submit" name="filtruj" value="filtruj" style="width: 80"></center>
       </form>

<table width="85%">
       <tr>
           <td><a href="">Numer</a></td>
           <td><a href="">Liczba osób</a></td>
           <td><a href="">Kategoria</a></td>
           <td><a href="">Dzisiejsza cena</a></td>
       </tr>
       <?php addRow("512","2","standard","400")?>
</table>

</body>
</html>