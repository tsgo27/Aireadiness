<?php
define('VIEW_PATH', __DIR__ . '/views/');
define('ERROR_PATH', __DIR__ . '/Page/');

// Obtém e sanitiza a URL
$url = filter_var($_GET['url'] ?? '', FILTER_SANITIZE_URL);
$safe_url = basename($url);

// Define o caminho do arquivo correspondente à URL
$file = VIEW_PATH . $safe_url . '.php';

// Verifica se a URL é inválida ou se o arquivo não existe
if ($url === '' || preg_match('/[^a-zA-Z0-9_-]/', $safe_url) || !file_exists($file) || !is_file($file) || pathinfo($file, PATHINFO_EXTENSION) !== 'php') {
    // Redireciona para a página de erro 404
    header("Location: " . ERROR_PATH . "404.php");
    exit();
} else {
    // Inclui o arquivo da URL se for válido
    include $file;
}
?>
