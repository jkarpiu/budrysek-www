#!/bin/bash

php artisan db:seed --class=DataTypesTableSeeder
php artisan db:seed --class=DataRowsTableSeeder
php artisan db:seed --class=MenusTableSeeder
php artisan db:seed --class=MenuItemsTableSeeder
php artisan db:seed --class=RolesTableSeeder
php artisan db:seed --class=PermissionsTableSeeder
php artisan db:seed --class=PermissionRoleTableSeeder

echo "Wszystko wyseedowane"
