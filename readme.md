

Steps for accessing Url Shortner application using command line and laravel server
--------------------------------------------------------------------------------------

Downlaod file from github. link : https://github.com/vijaynkhotborgaon/UrlShortner

Used framework: Laravel
version: 5.5

Once you downloaded file, unzip it. After unzipping you will get folder as "UrlShortner-master". Please rename it to "UrlShortner".

   
Follow below steps to access "Url Shortner" application :

1. open command line and move inside file which you downloaded from github (in this case inside "UrlShortner" folder)


3. Create database in phpMyadmin(you can use Xampp to create database using phpMyadmin) and give name to database as "urlshortner".

  After creating database follow bellow steps to migrate database using artisan command and seeding data for 100 most accessed site    url's :

   step 2 : use artisan command to migrate database "php artisan migrate"
   
   step 3 : use artisan command to seed data into database "php artisan db:seed"

                                           OR
                                           
   You can import tables and data to phpMyadmin without using artisan commands.
   
   import database in phpMyadmin(i have used XAMPP) by selecting database "urlshortner" (you will get "urlshortner.sql" file inside "UrlShortner" folder)
   
   
3. run command "php artisan serve" (do not include double quotes while running command)

4. This command will give result something as "Laravel development server started : <http://127.0.0.1:8000>".

5. copy "http://127.0.0.1:8000" from above result and paste into your browser and press enter key.

6. It will redirect to application home page and you can enter any url inside input to create short url's.




Steps for accessing Url Shortner application using localhost (inside htdoc file)
---------------------------------------------------------------------------------------------

Downlaod file from github. link : 

Database setup :

1. Create database "urlshortner" in your phpMyadmin

2. import database in phpMyadmin by selecting database "urlshortner" (you will get "urlshortner.sql" file inside "UrlShortner" folder)



Follow below steps to access "Url Shortner" application :

1. copy "UrlShortner" folder which you downloaded from github and paste it inside folder "htdoc"

2. access "UrlShortner" application using "http://localhost/UrlShortner/public/"

