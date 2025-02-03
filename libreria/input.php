<?php
$config = require('databaseConfig.php');
require('DBcon.php');
require('logError.php');

try {
    $db = DBcon::getDB($config);

        $titolo = $_POST['titolo'];
        $autore = $_POST['autore'];
        $genere = $_POST['genere'];
        $prezzo = $_POST['prezzo'];
        $anno_pubblicazione = $_POST['anno_pubblicazione'];

        $query = "INSERT INTO libri (titolo, autore, genere, prezzo, anno_pubblicazione) 
                  VALUES (:titolo, :autore, :genere, :prezzo, :anno_pubblicazione)";

        $stm = $db->prepare($query);

        $stm->bindValue(':titolo', $titolo);
        $stm->bindValue(':autore', $autore);
        $stm->bindValue(':genere', $genere);
        $stm->bindValue(':prezzo', $prezzo);
        $stm->bindValue(':anno_pubblicazione', $anno_pubblicazione);

    if ($stm->execute()) {
        header("Location: result.php?status=success");
        exit;
    } else {
        header("Location: result.php?status=failed");
        exit;
    }
} catch (Exception $e) {
    logError($e);
}

?>


