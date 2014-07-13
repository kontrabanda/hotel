<html>
<head>
      <style type="text/css">
      </style>
</head>
<body>
<center><h1>Pracownik</h1></center>
<form action="pracownik.php" >
      <center><p>Login<input type="text" name="login" maxlenght="45" style="width: 150px; margin-left: 80px; margin-button: 15px;"><br>
      Has³o<input type="password" name="haslo" maxlenght="45" style="width: 150px; margin-left: 79px; margin-button: 15px;"><br>
      Powtórz has³o<input type="password" name="powtorz_haslo" maxlenght="45" style="width: 150px; margin-left: 28px; margin-button: 15px;"><br></p>
      <hr width="300">
      <p>Imiê<input type="text" name="imie" maxlenght="45" style="width: 150px; margin-left: 88px; margin-button: 15px;"><br>
      Nazwisko<input type="text" name="nazwisko" maxlenght="45" style="width: 150px; margin-left: 53px; margin-button: 15px;"><br>
      Numer telefonu<input type="text" name="nr_telefonu" maxlenght="9" style="width: 150px; margin-left: 21px; margin-button: 15px;"><br>
      Adres email<input type="text" name="mail" maxlenght="45" style="width: 150px; margin-left: 42px; margin-button: 15px;"><br>
      Stanowisko<select name="stanowisko" style="margin-left: 42px; width: 150px">
      <option value="lista">stanowiska</option>
      </select><br></p>
      <p><input type="submit" name="zapisz" value="zapisz pracownika"></p>
      <hr width="300">
      <p>
      <input type="checkbox" name="usun"> na pewno
      <input type="submit" name="usun_pracownika" value="usuñ pracownika" style="margin-left: 30px">
      </p></center>
</form>
</body>
</html>