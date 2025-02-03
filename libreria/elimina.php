<?php
$config = require('databaseConfig.php');
require('DBcon.php');
require('logError.php');

$titolo = $_POST['titolo'];
$autore = $_POST['autore'];

try {
    $db = DBcon::getDB($config);

    $query = "DELETE FROM libri WHERE titolo = :titolo AND autore = :autore";
    $stm = $db->prepare($query);
    $stm->bindValue(':titolo', $titolo);
    $stm->bindValue(':autore', $autore);

    if ($stm->execute()) {
        $rowsAffected = $stm->rowCount(); // Ottieni il numero di righe aggiornate

        if ($rowsAffected > 0) {
            header("Location: result.php?status=success");
            exit;
        } else {
            header("Location: result.php?status=failed");
            exit;
        }
    } else {
        header("Location: result.php?status=failed");
        exit;
    }
} catch (Exception $e) {
    logError($e);
    exit;
}
?>
