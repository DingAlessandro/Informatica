
<?php
$status = isset($_GET['status']) ? $_GET['status'] : null;
require "top.php";

if ($status === 'success') {
    echo '<p style="color: green;">Operazione avvenuta con successo</p>';
} else{
    echo '<p style="color: red;">C\'è stato un errore nell\'operazione. Riprova.</p>';
}
?>

<?php
require "bot.php"; // Include la parte inferiore della pagina
?>
