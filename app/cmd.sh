#!/bin/bash
set -e

if [ "$ENV" = 'DEV' ]; then
    echo "Running development server"
    php-fpm

elif [ "$ENV" = 'UNIT' ]; then
    echo "Running unit tests"
    /var/www/html/vendor/bin/phpunit

else
    echo "Running production server"
    php-fpm

fi
