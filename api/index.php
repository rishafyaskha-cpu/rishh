<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

// Entry point for Vercel serverless functions (Laravel 11+).
// Mirrors public/index.php so the framework boots identically.
require __DIR__ . '/../vendor/autoload.php';

/** @var Application $app */
$app = require_once __DIR__ . '/../bootstrap/app.php';

$app->handleRequest(Request::capture());
