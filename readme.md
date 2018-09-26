

Steps for accessing Url Shortner application using command line and laravel server
--------------------------------------------------------------------------------------

Used framework: Laravel

version: 5.5

Requirements:

1. install XAMPP
2. install "Composer" for dependany management. link : https://getcomposer.org

Downlaod file from github. link : https://github.com/vijaynkhotborgaon/UrlShortner

Once you downloaded file, unzip it. After unzipping you will get folder as "UrlShortner-master". Please rename it to "UrlShortner".

   
Follow below steps to access "Url Shortner" application :

1. open command line and move inside file which you downloaded from github (in this case inside "UrlShortner" folder)

2. install composer by using command "composer install"

3. Create database in phpMyadmin(you can use Xampp to create database using phpMyadmin) and give name to database as "urlshortner".

  After creating database follow bellow steps to migrate database using artisan command and seeding data for 100 most accessed site    url's :

   step 1: use artisan command to migrate database "php artisan migrate"
   
   step 2: use artisan command to seed data into database "php artisan db:seed"

                                           OR
                                           
   You can import tables and data to phpMyadmin without using artisan commands(No need to follow step 1 and step 2 in this case. This is manual way to upload database in phpMyadmim).
   
   import database in phpMyadmin(i have used XAMPP) by selecting database "urlshortner" (you will get "urlshortner.sql" file inside "UrlShortner" folder)
   
   
4. run command "php artisan serve" (do not include double quotes while running command)

5. This command will give result something as "Laravel development server started : <http://127.0.0.1:8000>".

6. copy "http://127.0.0.1:8000" from above result and paste into your browser and press enter key.

7. It will redirect to application home page and you can enter any url inside input to create short url's.




Steps for accessing Url Shortner application using localhost (inside htdoc file)
---------------------------------------------------------------------------------------------

Downlaod file from github. link : https://github.com/vijaynkhotborgaon/UrlShortner

Used framework: Laravel version: 5.5

Once you downloaded file, unzip it. After unzipping you will get folder as "UrlShortner-master". Please rename it to "UrlShortner".

Database setup :

1. Create database "urlshortner" in your phpMyadmin

2. import database in phpMyadmin by selecting database "urlshortner" (you will get "urlshortner.sql" file inside "UrlShortner" folder)



Follow below steps to access "Url Shortner" application :

1. copy "UrlShortner" folder which you downloaded from github and paste it inside folder "htdoc"

2. access "UrlShortner" application using "http://localhost/UrlShortner/public/"

