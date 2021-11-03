1. run install php and laravel
2. run install sqlite3
3. install php-sqlite(package name according to your php version)
4. run ```cd singhgram```
5. run ```composer update```
6. create ```database.sqlite``` file inside database folder
7. create ```.env``` file from ```.eve.example```
8. run ```php artisan migrate:install```
9. run ```php artisan schema:dump```
10. run ```php artisan schema:dump --prune```
11. run ```php artisan migrate```
12. run ```php artisan make:migration create_users_table``` and copy paste the contents from database/migrations_bak/create_users_table.php to database/migrations/[your_time_stamp]_create_users_table.php
13. run ```php artisan make:migration create_password_resets_table``` and copy paste the contents from database/migrations_bak/create_password_resets_table.php to  database/migrations/[your_time_stamp]_create_password_resets_table.php
14. run ```php artisan make:migration create_failed_jobs_table``` and copy paste the contents from database/migrations_bak/create_failed_jobs_table.php to  database/migrations/[your_time_stamp]_create_failed_jobs_table.php
15. run ```php artisan migrate```
16. run ```php artisan serve```


After logged in, sample responses from https://jsonplaceholder.typicode.com/posts will be displayed as per logged in user's id (1,2.. so on).
