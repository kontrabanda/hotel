<?php
     function addRow($name, $position, $telephon)
     {
       echo "<tr>";
       echo "<td><a href=''>$name</a></td>";
       echo "<td>$position</td>";
       echo "<td>$telephon</td>";
       echo "</tr>";
     }
?>

<html>
<head>
      <style type="text/css">
      </style>
</head>
<body>
<center><h1>Lista pracownik�w</h1></center>
<table width="80%">
       <tr>
           <p><td><a href="">Imi� i nazwisko</a></td>
           <td><a href="">Stanowisko</a></td>
           <td>Numer telefonu</td></p>
       </tr>
       <?php addRow("Rados�aw �awrynowicz", "raper", "534 523 342")?>
</table>
</body>
</html>