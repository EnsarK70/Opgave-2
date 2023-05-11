<!DOCTYPE html>
<html>
<head>
    <title>Opgave 2</title>
</head>
<body>
<h2>Inloggen</h2>
<form method="post" action="opgave2.php">
    <label for="username">Gebruikersnaam:</label>
    <input type="text" id="username" name="username"><br><br>

    <label for="password">Wachtwoord:</label>
    <input type="password" id="password" name="password"><br><br>

    <input type="submit" value="Inloggen">
</form>
<?php

if(isset($_POST['username']) && isset($_POST['password'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  echo "Gebruikersnaam: " . $username . "<br>";
  echo "Wachtwoord: " . $password . "<br>";
}

// $variabele1 = 10;
// $variabele2 = 10;

// if($variabele1 == $variabele2) {
    // echo "De twee waarden zijn gelijk";
// }

// if($variabele1 !== $variabele2) {
    // echo "De twee waarden zijn ongelijk gelijk";
// }

?>
</body>
</html>