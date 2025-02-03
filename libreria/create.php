<?php
require "top.php";
?>
<form action="input.php" method="POST">
    <h1>Inserimento libro</h1>
    <label for="titolo">Titolo:</label><br>
    <input type="text" id="titolo" name="titolo" required><br><br>

    <label for="autore">Autore:</label><br>
    <input type="text" id="autore" name="autore" required><br><br>

    <label for="genere">Genere:</label><br>
    <input type="text" id="genere" name="genere" required><br><br>

    <label for="prezzo">Prezzo:</label><br>
    <input type="number" step="0.01" id="prezzo" name="prezzo" required><br><br>

    <label for="anno_pubblicazione">Anno di Pubblicazione:</label><br>
    <input type="date" id="anno_pubblicazione" name="anno_pubblicazione" required><br><br>

    <input type="submit" value="Inserisci Libro">
</form>
<?php
require "bot.php";
?>
