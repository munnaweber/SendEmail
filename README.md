# Send Email & Save information into database

[![Issues](https://img.shields.io/github/issues/MunnaAhmed/SendEmail.svg?style=popout-square)](https://github.com/MunnaAhmed/SendEmail/issues)
[![Stars](https://img.shields.io/github/stars/MunnaAhmed/SendEmail.svg?style=popout-square)](https://github.com/MunnaAhmed/SendEmail/stargazers)
[![Forks](https://img.shields.io/github/forks/MunnaAhmed/SendEmail.svg?style=flat-square)](https://github.com/MunnaAhmed/SendEmail/network)


Send Email & Save to database


## Installing Email\Send

Next, run the Composer command to install the latest stable version:

```bash
composer require email/send
```


After installing, you need to require Composer's autoloader:

```php
php artisan vendor:publish
```

And then 

hit  0  and enter 

After complete publishing in vendor then migrating your database

```php
php artisan migrate
```

## Main Url is

```php
url: es/input
```


## Email Setup via env with gmail account

```php
MAIL_DRIVER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=yourgmail@gmail.com
MAIL_PASSWORD=yourgmailpassword
MAIL_ENCRYPTION=tls
```
After changing .env file then you should to go config folder and open  'mail.php' file and change following options from 'mail.php' file

```php
'host' => env('MAIL_HOST', 'smtp.gmail.com'),
'port' => env('MAIL_PORT', 587),
'from' => [
    'address' => env('MAIL_FROM_ADDRESS', 'reply email address for client'),
    'name' => env('MAIL_FROM_NAME', 'Your Company Title'),
],
```

Its just a testing send email package