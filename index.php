<?php
/**
 * Studio Heavens - Main Entry Point
 */

// Define base path
define('BASE_PATH', __DIR__);

// Check if PROJECTS directory exists and load from there
$projects_dir = BASE_PATH . '/PROJECTS';

if (is_dir($projects_dir)) {
    // Load index from PROJECTS folder if it exists
    $projects_index = $projects_dir . '/index.php';
    if (file_exists($projects_index)) {
        include $projects_index;
        exit;
    }
    
    // List available projects
    echo "<h1>Studio Heavens - Projects</h1>";
    echo "<p>Welcome to Studio Heavens!</p>";
    echo "<h2>Available Projects:</h2>";
    echo "<ul>";
    
    $projects = array_diff(scandir($projects_dir), ['.', '..']);
    foreach ($projects as $project) {
        if (is_dir($projects_dir . '/' . $project)) {
            echo "<li><a href='/PROJECTS/$project/'>$project</a></li>";
        }
    }
    echo "</ul>";
} else {
    // Default landing page
    echo <<<HTML
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
            .info {
                background: #f0f0f0;
                padding: 20px;
                border-radius: 5px;
                margin-top: 20px;
                text-align: left;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>🎨 Studio Heavens</h1>
            <p>Welcome to Studio Heavens - Social Services & Employment Opportunities Platform</p>
            <div class="info">
                <p><strong>About:</strong> This organization is holding many social services with employment opportunities to the public. It also supports public speaking of students in school for a better generation.</p>
            </div>
        </div>
    </body>
    </html>
    HTML;
}
?>
