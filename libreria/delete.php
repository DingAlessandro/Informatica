<?php
require "top.php";
?>
<form action="elimina.php" method="POST">
    <h1>Elimina libro</h1>
    <label for="titolo">Titolo:</label><br>
    <input type="text" id="titolo" name="titolo" required><br><br>

    <label for="autore">Autore:</label><br>
    <input type="text" id="autore" name="autore" required><br><br>

    <input type="submit" value="Elimina Libro">
</form>
<?php
require "bot.php";
?>

