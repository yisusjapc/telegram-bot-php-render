<?php
$token = '7624411941:AAEkfyoArXNGmKsv12DaCgIeUI59SKdF4YU';
$apiUrl = 'https://api.telegram.org/bot' . $token . '/';

function sendMessage($chatId, $text) {
    global $apiUrl;
    $url = $apiUrl . 'sendMessage?chat_id=' . $chatId . '&text=' . urlencode($text);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_exec($ch);
    curl_close($ch);
}

$content = file_get_contents('php://input');
$update = json_decode($content, TRUE);

if (isset($update["message"])) {
    $chatId = $update["message"]["chat"]["id"];
    $message = $update["message"]["text"];

    if ($message == "/start") {
        sendMessage($chatId, "¡Hola! Soy tu bot de Telegram.");
    } elseif ($message == "/help") {
        sendMessage($chatId, "Usa /start para comenzar o /hora para ver la hora.");
    } elseif ($message == "/hora") {
        $hora = date("H:i:s");
        sendMessage($chatId, "La hora actual es: $hora");
    } else {
        sendMessage($chatId, "Comando no reconocido. Usa /help para más opciones.");
    }
}
?>
