#!/bin/bash

# Render build script for PHP project
set -e

echo "Installing PHP dependencies..."
if [ -f "composer.json" ]; then
    composer install --optimize-autoloader --no-dev
fi

echo "Installing Node dependencies..."
if [ -f "package.json" ]; then
    npm install
    npm run build || echo "No build script defined"
fi

echo "Build completed successfully!"
