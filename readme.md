# laravelblog
Test for application

Author: Victor Cachi

Languages: PHP, JAVASCRIPT, CSS.

DataBase: MySQL

# Requirements
- Laravel 7.0
- PHP >= 7.2.5
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- Ctype PHP Extension
- JSON PHP Extension
- BCMath PHP Extension

# Install
1. git clone https://github.com/alecito2008/laravelblog.git
2. composer install
3. php artisan key:generate
4. php artisan migrate
5. for use API-REST add this code in cronjob:  * * * * * php /artisan schedule:run >> /dev/null 2>&1 or testing with php artisan schedule:run


Enjoy!
