<?php
function addNewRowToCategories($PersonsCount, $Category, $Facilities, $From, $To, $SezonName)
{
  echo "<tr>";
  echo "<td><input type='radio' name='PersonsCount' value=$PersonsCount>$PersonsCount</td>";
  echo "<td>$Category</td>";
  echo "<td>$Facilities</td>";
  echo "<td><input type='radio' name='From' value=$From>$From</td>";
  echo "<td>$To</td>";
  echo "<td>$SezonName</td>";
  echo "</tr>";
}
?>

<html>
<head>
      <link rel="stylesheet" type="text/css" href="ceny_style.css">
</head>
<body>
      <h1>Rejestracja</h1>
       <form action="ceny.php" method="GET">
       <table width="100%">

      <tr>
          <td>    <div class="filtrujrodzaj">Filtruj rodzaje pokoju:<br>
                   Liczba osób: od <input type="text" maxlength="4" name="od_l_osob" size="4">  do  <input type="text" name "do_l_osob" size="4" maxlength="4"><br>
                   Kategoria       <select name="kategoria" style="margin-left: 39px"><option value="cos tam">cos tam</option></select>
                   </div> <!--Koniec bloczka filtracji rodzaju-->
          </td>
          <td>
                   <div class="filtrujsezon">Filtruj sezony: <br>
                   Liczba osób: od <input type="text" name="od_l_data" size="4" maxlength="4">  do  <input type="text" name="do_l_data" size="4" maxlength="4"><br>
                   Kategoria       <input type="text" name="nazwa_zawiera" style="margin-left: 39px" size="18" maxlength="20">
                   </div> <!--Koniec bloczka filtracji sezonu-->
          </td>
      </tr>
      <tr>
          <td colspan="2">
                   <div class="button"><center><input type="submit" name="filtruj" value="Filtruj" class="button1"></center></div>
          </td>
      </tr>
      </table>
      </form>

      <form action="ceny.php" method="GET">
      <table width="100%">
             <tr>
                 <td><a href="">Liczba osob</a></td>
                 <td><a href="">Kategoria</a></td>
                 <td>Wyposazenie</td>
                 <td><a href="">Od</a></td>
                 <td><a href="">Do</a></td>
                 <td><a href="">Nazwa sezonu</a></td>
             </tr>
             <tr></tr><tr></tr><tr></tr>
             <?php addNewRowToCategories(4, "standard", "lodowka,barek", "1.07.2014","31.08.2014","Wakacje 2014");?>
             <?php addNewRowToCategories(2, "adfard", "lodasdfowka,barek", "1.07.201adf4","31.0af8.2014","Wakacafje 2014");?>
      </table>
      <br><br><br>
      Cena w dni robocze:<input type="text" name="cena_w_dni_robocze" size="8" maxlength="5" style="margin-left: 9px"><br>
      Cena w soboty:<input type="text" name="cena_w_soboty" size="8" maxlength="5" style="margin-left: 39px">          <br>
      Cena w niedziele:<input type="text" name="cena_w_niedziele" size="8" maxlength="5" style="margin-left: 29px">    <br>

      <input type="submit" name="zapisz_ceny" value="zapisz ceny" style="margin-left: 132px">
      </form>
</body>
</html>