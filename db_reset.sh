#!/bin/bash


echo "Pamiętaj, aby wyłączyć serwer, inaczej nic się nie zmieni 💖" &&
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
php artisan db:seed --class=PagesSeeder


read -p "Chcesz Seedować aktualności? [t/n] " -n 1 -r
echo
if [[ $REPLY =~ ^[Tt]$ ]]
then
    php artisan db:seed --class=NewsSeeder
fi

echo "Wszystko wyseedowane"
echo "Tworze użytkownika admin@admin.pl"
php artisan voyager:admin admin@admin.pl --create
echo "Ukończono, ale nie umiem powiedziec czy sukcesywanie "


