# farm
JAPAN FARM PROJECT

### Installation steps 

run the following commands 
```
git clone https://github.com/netro/lara-farm.git
cd lara-farm
composer install
cp .env-example .env
```
Enter your database credentials in `.env` then
```
php artisan migrate
php artisan db:seed
php artisan serve
```
Now you are ready to go
User Credentials 
```
mobile: 01010
name: admin
```