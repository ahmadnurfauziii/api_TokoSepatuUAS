chmod -R 777 /var/www/html/storage/; \
composer install; \
php artisan key:generate; \
php artisan migrate