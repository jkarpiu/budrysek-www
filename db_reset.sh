#!/bin/bash

sudo -u postgres dropdb budrysek
sudo -u postgres createdb budrysek
php artisan migrate
php artisan db:seed --class=DataTypesTableSeeder
php artisan db:seed --class=DataRowsTableSeeder
php artisan db:seed --class=MenusTableSeeder
php artisan db:seed --class=MenuItemsTableSeeder
php artisan db:seed --class=RolesTableSeeder
php artisan db:seed --class=PermissionsTableSeeder
php artisan db:seed --class=PermissionRoleTableSeeder

echo "Wszystko wyseedowane"
echo "Tworze użytkownika admin@admin.pl"
php artisan voyager:admin admin@admin.pl --create

echo "Ukończono"
