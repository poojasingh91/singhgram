1. run install php and laravel
3. run install sqlite3
4. install php module for sqlite
5. run ```cd singhgram```
6. run ```composer update```
7. create ```database.sqlite``` file inside database folder
8. create ```.env``` file from ```.eve.example```
9. run ```php artisan migrate:install```
10. run ```php artisan schema:dump```
11. run ```php artisan schema:dump --prune```
12. run ```php artisan migrate```
13. run ```php artisan make:migration create_users_table``` and copy paste the contents from database/migrations_bak/create_users_table.php to database/migrations/[your_time_stamp]_create_users_table.php
14. run ```php artisan make:migration create_password_resets_table``` and copy paste the contents from database/migrations_bak/create_password_resets_table.php to  database/migrations/[your_time_stamp]_create_password_resets_table.php
15. run ```php artisan make:migration create_failed_jobs_table``` and copy paste the contents from database/migrations_bak/create_failed_jobs_table.php to  database/migrations/[your_time_stamp]_create_failed_jobs_table.php
16. run ```php artisan migrate```
17. run ```php artisan serve```


After logged in, sample responses from https://jsonplaceholder.typicode.com/posts will be displayed as per logged in user's id (1,2.. so on).
