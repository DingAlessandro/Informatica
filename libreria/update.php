<?php
require "top.php";
?>
<form action="aggiorna.php" method="POST">
    <h1>Aggiorna prezzo</h1>
    <label for="titolo">Titolo:</label><br>
    <input type="text" id="titolo" name="titolo" required><br><br

    <label for="prezzo">Nuovo prezzo:</label><br>
    <input type="number" step="0.01" id="prezzo" name="prezzo" required><br><br>

    <input type="submit" value="Aggiorna Prezzo">
</form>
<?php
require "bot.php";
?>
