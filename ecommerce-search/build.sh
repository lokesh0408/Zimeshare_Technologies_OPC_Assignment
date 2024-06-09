#!/bin/sh

# Install Composer dependencies
composer install --no-dev --optimize-autoloader

# Install NPM dependencies and build assets
npm install
npm run prod

# Export the site to static files
php artisan export

# Move exported files to the public directory for Netlify to serve
mv public/exported public
