<?php
$config = require('databaseConfig.php');
require('DBcon.php');
require('logError.php');
$titolo = $_POST['titolo'];
$nuovo_prezzo = $_POST['prezzo'];

    if (is_numeric($nuovo_prezzo) && $nuovo_prezzo > 0) {
        try {
            $db = DBcon::getDB($config);

            // Esegui la query per aggiornare il prezzo
            $query = "UPDATE libri SET prezzo = :prezzo WHERE titolo = :titolo";
            $stm = $db->prepare($query);
            $stm->bindValue(':prezzo', $nuovo_prezzo);
            $stm->bindValue(':titolo', $titolo);

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
        }
    } else {
        header("Location: result.php?status=failed");
        exit;
}
?>
