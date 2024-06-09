#!/bin/sh

# Install Composer dependencies
composer install --no-dev --optimize-autoloader

# Install NPM dependencies and build assets
npm install
npm run build

# Run migrations and seed the database
php artisan migrate:fresh --seed

# Export the site to static files
php artisan export

# Move exported files to the public directory for Netlify to serve
mv dist public