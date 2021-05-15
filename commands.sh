#!/usr/bin/env bash

# Crear proyecto
composer create-project laravel/laravel basic-laravel-example

# Crear controlador
php artisan make:Controller SongController --api

# Crear modelo
php artisan make:Model Song -m

## Requests

# Index
curl -X GET localhost:8000/api/songs \
    -H 'Accept: application/json'

# Store
curl -X POST localhost:8000/api/songs \
    -H 'Accept: application/json' \
    -H 'Content-type: application/json' \
    -d '{"name": "Helden", "author": "Till Lindemann"}'

# Show
curl -X GET localhost:8000/api/songs/1 \
    -H 'Accept: application/json'

# Store
curl -X PATCH localhost:8000/api/songs/1 \
    -H 'Accept: application/json' \
    -H 'Content-type: application/json' \
    -d '{"author": "Apocalyptica"}'

# Destroy
curl -X DELETE localhost:8000/api/songs/1 \
    -H 'Accept: application/json'
