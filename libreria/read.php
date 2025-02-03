<?php
require "top.php";

$config = require('databaseConfig.php');
require('DBcon.php');
require('logError.php');
try {
    $db = DBcon::getDB($config);
    $query = "SELECT * FROM libri ORDER BY anno_pubblicazione DESC";
    $stm = $db->prepare($query);
    $stm->execute();
    $libri = $stm->fetchAll(PDO::FETCH_ASSOC);

    if (count($libri) > 0) {
        echo "<h1>Visualizzazione libri</h1>";
        echo "<table border='1'>";
        echo "<tr>
                <th>Titolo</th>
                <th>Autore</th>
                <th>Genere</th>
                <th>Prezzo</th>
                <th>Anno di Pubblicazione</th>
              </tr>";
        foreach ($libri as $libro) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($libro['titolo']) . "</td>";
            echo "<td>" . htmlspecialchars($libro['autore']) . "</td>";
            echo "<td>" . htmlspecialchars($libro['genere']) . "</td>";
            echo "<td>" . htmlspecialchars($libro['prezzo']) . "</td>";
            echo "<td>" . htmlspecialchars($libro['anno_pubblicazione']) . "</td>";
            echo "</tr>";
        }

        echo "</table>";

    } else {
        echo "<p>Nessun libro trovato.</p>";
    }
} catch (PDOException $e) {
    logError($e);
}

require "bot.php";
?>
