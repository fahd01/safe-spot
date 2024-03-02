# Safe Spot
## Requirements
- PHP 8.*
- Symfony
- composer
- MySQL (recommend php-myadmin)  
  
A database schema named `safe-spot` is required, create it manually
via php-myadmin or via doctrine by running the following command
```shell
php bin/console doctrine:database:create
```
make sure to update `DATABASE_URL`in `.env`file to include your mysql server credentials
```
DATABASE_URL="mysql://username:password@127.0.0.1:3306/safe-spot?serverVersion=8&charset=utf8mb4"
```

## Run locally
1. Install dependencies
``` shell
composer install
```
2. Run application
``` shell
symfony server --port=8080
``` 
3. Open http://localhost:8080 in browser

## Used Commands
Creates a controller class and a directory with the same name under `templates`
```shell
symfony console make:controller
```
Generates entity
```shell
symfony console make:entity
```
after generating entity, create DB table 
```shell
symfony console make:migration
symfony console doctrine:migrations:migrate
```

## External Resources
- [flaticon](https://www.flaticon.com/search?word=bank%20savings%20jar) for icons
- [svgrepo](https://www.svgrepo.com/svg/228095/loan) for svg images

## Extra Tasks
- Put your images in Team section in welcome page
- Put your images and update the author section in every blog article
- Create email to use for the app 
  - `info@safe-spot.com` (an alias for any gmail address) 
  - or just `safe-spot@gmail.com`
- Social media accounts for Safe Spot to link in the welcome page
  - [ ] Facebook page with some content
  - [ ] LinkedIn account
  - [ ] Twitter account