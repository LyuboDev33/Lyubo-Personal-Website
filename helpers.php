<?php 

function view(string $path, array $data = []) {

    extract($data);
    $basePath = __DIR__ . '/resources/views/';
    $path = str_replace(['.', '/'], DIRECTORY_SEPARATOR, $path);
    $viewFile = $basePath . $path . '.php';

    if (!file_exists($viewFile)) {
        throw new Exception("View not found: {$viewFile}");
    }
    require $viewFile;
}

/**
 * 
 * @param string $path
 * @throws Exception
 * @return void
 */
function include_asset (string $path): void {
    $basePath = __DIR__ . '/resources/views/';

    $path = str_replace(['.', '/'], DIRECTORY_SEPARATOR, $path);
    $viewFile = $basePath . $path . '.php';

    if (!file_exists($viewFile)) {
        throw new Exception("View not found: {$viewFile}");
    }
    require $viewFile;
}

/** Redirect a url
 * 
 * @param string $url
 * @return void
 */
function redirect (string $url): void  {
    
    header('Location:', $url);    
}

/** Return to the previous link
 * 
 * @return void
 */
function back(): void {
    $url = $_SERVER['HTTP_REFERER'] ?? '/';
    header("Location: $url");
    exit; 
}

/** Translation method
 * 
 * @param string $key
 * @return string|null
 */
function __(string $key): string|null
{
    $lang = $_SESSION['language'] ?? 'bg';
    

    $translations = require __DIR__ . "/lang/{$lang}.php";

    if (!array_key_exists($key, $translations)) {
        throw new Exception("Translation key '{$key}' does not exist in language '{$lang}'");
        die;
    }

    return $translations[$key];
}


