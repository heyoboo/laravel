# How backend works
1. request <br>
2. server <br>
   1. gets url <br>
   2. performs logic <br>
       1. interact with database <br>
       2. conditional statements <br>
       3. updates page elements <br>
   3. return data



# Installation
- Xampp
> download php 7.4.16

- Composer
> install xampp first. VScode -> terminal
    check php path

- Node.js
> download 14.16.1 LTS

- HeidiSQL

- VS code

- Github
- Laravel7
> VScode -> terminal
    composer create-project --prefer-dist laravel/  laravel:^7.0 [project name]



# Check installation on cmd
> change directory => dc [project name]
> xampp => php -v
> composer => composer -v
> artisan => php artisan serve



# Vscode extensions
- lavarel extension pack
- material icon theme
- php namespace resolver
- php extension
- bracket pair colorizer
- *power mode (launch firework when typing ???????)*



# Create new repository on github
> Git ignore 'Lavaral'



### For other computers
> Delete repository and local folder of project
> clone -> choose laveral project -> set folder path 

# install back
> terminal
    composer install
    npm install   

# copy 'env.exmple' and paste and change to '.env'
> terminal 
    php artisan key:gen
    php artisan serve



*DONT ADD NEW TEMINAL* <br>
*SPLIT TERMINAL THEN USE COMMAND*



### Open file
choose
- routes/web.php  *where routes' assigned*
- views/welcome.blade.php *where views files assigned* *e.g. xxx.blade.php*
