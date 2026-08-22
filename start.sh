#!/bin/sh

# Jalankan migrasi database
php artisan migrate --force

# Seed database dengan data awal
php artisan db:seed --force

# Cache config untuk performa
php artisan optimize

# Jalankan Apache web server di background (foreground di docker)
apache2-foreground
