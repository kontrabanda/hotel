<?php
function addRow($persons, $category, $facility){
  echo "<tr>";
  echo "<td><input type='radio' name='persons_count' value=$persons>$persons</td>";
  echo "<td>$category</td>";
  echo "<td>$facility</td>";
  echo "</tr>";
}?>

<html>
<head>
      <style type="text/css">
      </style>
</head>
<body>
<h1><center>Nowy pokój</center></h1>
<table width="70%">
       <tr>
           <td width="30%">Numer pokoju</td>
           <td width="70%"><input type="text" name="nr_pokoju" style="width: 180"></td>
       </tr>
       <tr>
           <td width="25%">Zdjêcie</td>
           <td width="50%"><input type="text" name="nr_pokoju" style="width: 180" value="link do zdjêcia"></td>
       </tr>
       <tr>
           <td colspan="2">Rodzaj pokoju:</td>
       </tr>
       <tr>
           <td>Liczba osób:</td>
           <td>od<input type="text" name="od" style="width: 55px; margin-left: 10px; margin-right: 10px">
               do<input type="text" name="do" style="width: 55px; margin-left: 10px; margin-right: 10px"></td>
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
<br>
<table width="85%">
       <tr>
           <td><a href="">Liczba osób</a></td>
           <td><a href="">Kategoria</a></td>
           <td>Wyposa¿enie</td>
       </tr>
       <?php addRow("4","standard","czjnik")?>
</table>
<br><br>
<table style=" width: 85%">
       <tr>
         <td style="text-align: right; width: 20%"><input type="checkbox" name="na_pewno" value="na_pewno">na pewno</td>
         <td><input type="button" name="usun_pokoj" value="usuñ pokój"></td>
         <td><input type="button" name="zapisz" value="zapisz"></td>
       </tr>
</table>

</body>
</html>