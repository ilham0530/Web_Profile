## Cara install

-   Clone this repository

```sh
git clone https://github.com/ilham0530/Web_Profile.git
# make sure you are in the folder
cd [folder yang sudah di clone]
```

-   Install semua package

```sh
composer install
```

-   Copy/rename file .env.example to .env

```sh
# windows
copy .env.example .env
# unix (ubuntu, mac os and others)
cp .env.example .env
```

-   Configure .env file
    <br>
    Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.

-   Create database
    <br>
    Create a database according to the name in DB_DATABASE in the .env file

-   Run artisan commands

```sh
php artisan key:generate
php artisan migrate
php artisan serve
```
-   And go to http://localhost:8000/
