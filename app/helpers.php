<?php

// Base path function to access the application's file system
function base_path($path = '')
{
    // Get the absolute path of the root directory 
    $root_path = realpath(__DIR__ . '/..'); // Fix the relative path
    return $root_path . '/' . $path;
}

// Base URL function to generate the full URL
function base_url($path = '')
{
    // Check if the request is using HTTPS
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';

    // Dynamically determine the base path of the application
    $basePath = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');

    // Build and return the full base URL
    return $protocol . '://' . $_SERVER['HTTP_HOST'] . $basePath . '/' . ltrim($path, '/');
}




