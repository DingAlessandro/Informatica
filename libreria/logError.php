<?php
function logError($exception):void {
    $errorMessage = "[" . date("Y-m-d H:i:s") . "] " . $exception->getMessage() . "\n";
    file_put_contents('error_log.txt', $errorMessage, FILE_APPEND);
    header("Location: result.php?status=failed");
    exit;
}