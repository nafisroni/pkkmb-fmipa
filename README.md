SHOUT OUT TO MUHAMMAD PAUZI

Collaborator : 
1. Muhammad Nafis Roni Wijaya
2. Mohammad Nabiel Dwi Ananda
3. Rara Dita Purnama Reta
4. Maya Aulia Dwi
5. Muhammad Afifudin

## Cara install

-   Clone this repository

```sh
git clone https://github.com/nafisroni/pkkmb-fmipa.git
# make sure you are in the folder
cd absensi-app
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
```sh
it's admin mail
admin@gmail.com
password
```
-   And go to http://localhost:8000/
# pkkmb-fmipa
