<?php

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/');

if (str_contains($uri, "\0")) {
    http_response_code(400);

    exit;
}

$publicPath = realpath(__DIR__.'/../public') ?: __DIR__.'/../public';
$requestedPath = realpath($publicPath.$uri);

if (
    $uri !== '/'
    && $requestedPath !== false
    && is_file($requestedPath)
    && str_starts_with($requestedPath, $publicPath.DIRECTORY_SEPARATOR)
    && ! str_ends_with(strtolower($requestedPath), '.php')
) {
    $extension = strtolower(pathinfo($requestedPath, PATHINFO_EXTENSION));

    $mimeTypes = [
        'css' => 'text/css; charset=UTF-8',
        'js' => 'application/javascript; charset=UTF-8',
        'mjs' => 'application/javascript; charset=UTF-8',
        'json' => 'application/json; charset=UTF-8',
        'map' => 'application/json; charset=UTF-8',
        'txt' => 'text/plain; charset=UTF-8',
        'xml' => 'application/xml; charset=UTF-8',
        'html' => 'text/html; charset=UTF-8',
        'svg' => 'image/svg+xml',
        'png' => 'image/png',
        'jpg' => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'gif' => 'image/gif',
        'webp' => 'image/webp',
        'avif' => 'image/avif',
        'ico' => 'image/x-icon',
        'woff' => 'font/woff',
        'woff2' => 'font/woff2',
        'ttf' => 'font/ttf',
        'otf' => 'font/otf',
        'gz' => 'application/gzip',
        'mp4' => 'video/mp4',
        'webm' => 'video/webm',
        'pdf' => 'application/pdf',
        'wasm' => 'application/wasm',
    ];

    header('Content-Type: '.($mimeTypes[$extension] ?? 'application/octet-stream'));
    header('Content-Length: '.filesize($requestedPath));
    header('Cache-Control: public, max-age=3600');

    if (str_starts_with($uri, '/build/')) {
        header('Cache-Control: public, max-age=31536000, immutable');
    }

    readfile($requestedPath);

    exit;
}

require __DIR__.'/../public/index.php';
