<html>
<head>
      <style type="text/css">
      </style>
</head>
<body>
<form action="nowy_rodzaj_pokoju.php" method="POST">
      <center><h1>Nowy rodzaj pokoju</h1></center>
<table style="width: 60%">
       <tr>
           <td>Liczba osób</td>
           <td><input type="text" name="liczba_osob" style="width: 160px"></td>
       </tr>
       <tr>
           <td>Kategoria</td>
           <td><select name="Kategoria" style="width: 160px">
                       <option>cos tam</option>
               </select>
           </td>
       </tr>
       <tr>
           <td style="vertical-align: top">Opis</td>
           <td><input type="text" name="liczba_osob" style="width: 160px; height: 120px"></td>
       </tr>
</table>
<br>
<table width="85%">
       <tr>
           <td colspan="2">Wyposa¿enie:</td>
       </tr>
       <tr>
           <td style="width: 30%"><a href="">Typ</a></td>
           <td><a href="">Nazwa</a></td>
       </tr>
       <tr>
           <td><input type="checkbox" name="podstawowe">podstawowe</td>
           <td>rêczniki</td>
       </tr>       <tr>
           <td><input type="checkbox" name="dodatkowe">dodatkowe</td>
           <td>czajnik</td>
       </tr>       <tr>
           <td><input type="checkbox" name="rozszerzone">rozszerzone</td>
           <td>mikrofala</td>
       </tr>
</table>
<br><br>
<table style=" width: 85%">
       <tr>
         <td style="text-align: right; width: 20%"><input type="checkbox" name="na_pewno" value="na_pewno">na pewno</td>
         <td style="width: 35%"><input type="button" name="usun_rodzaj_pokoju" value="usuñ rodzaj pokoju"></td>
         <td><input type="button" name="zapisz" value="zapisz"></td>
       </tr>
</table>

</form>
</body>
</html>