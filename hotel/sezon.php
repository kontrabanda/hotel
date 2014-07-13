<html>
<head>
      <style type="text/css">
      </style>
</head>
<body>
<h1><center>sezon</center></h1>
<form action="sezon.php" method="POST">
<center><table>
       <tr>
           <td style="width: 80">Nazwa</td>
           <td><input type="text" name="nazwa" maxlength="45" style="width: 180px;"></td>
       </tr>
       <tr>
           <td>Od</td>
           <td><input type="text" name="od" maxlength="45" style="width: 180px;"></td>
       </tr>
       <tr>
           <td>Do</td>
           <td><input type="text" name="do" maxlength="45" style="width: 180px;"></td>
       </tr>
</table></center>
<br>
<center><table style="width: 50%">
       <tr>
           <td><input type="checkbox" name="na_pewno" value="na_pewno">na pewno</td>
           <td><input type="submit" name="usun_sezon" value="usuñ sezon" style="width: 100"></td>
           <td><input type="submit" name="zapisz" value="zapisz" style="width: 100"></td>
       </tr>
</table></center>
</form>
</body>
</html>