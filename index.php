<?php 
/**
 * Studio Heavens - Main Entry Point
 * Optimized for Render deployment
 */

// Define base path constants
define('BASE_PATH', __DIR__);
define('PROJECTS_PATH', BASE_PATH . '/PROJECTS');

// Set proper error handling
error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('log_errors', 1);

// Start session
session_start();

// Check if PROJECTS directory exists and serve from there
if (is_dir(PROJECTS_PATH) && file_exists(PROJECTS_PATH . '/index.php')) {
    // Change to PROJECTS directory for proper relative path resolution
    chdir(PROJECTS_PATH);
    include PROJECTS_PATH . '/index.php';
    exit;
} else {
    // Default landing page if PROJECTS doesn't exist
    http_response_code(200);
    echo <<<'HTML'
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Studio Heavens</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 20px;
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .container {
                background: white;
                border-radius: 10px;
                padding: 40px;
                box-shadow: 0 10px 40px rgba(0,0,0,0.2);
                text-align: center;
                max-width: 600px;
            }
            h1 {
                color: #333;
                margin: 0 0 10px 0;
            }
            p {
                color: #666;
                font-size: 16px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>🎨 Studio Heavens</h1>
            <p>Welcome to Studio Heavens - Social Services & Employment Opportunities Platform</p>
        </div>
    </body>
    </html>
    HTML;
    exit;
}
?>