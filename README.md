1. Create database teams which ever driver you prefer (I am using Postgres).
2. After setting up database and done migrations or you can use without migration as laravel helper method
'useRefreshDatabase' will handle migration.
3. After 2 step just run 'vendor/bin/phpunit' in console  all the test will be triggred by laravel.
4. There are two folders added under tests folder by default for testing files 'feature' and 'unit'.
5. To specific test  vendor/bin/phpunit 'tests/Feature/TeamsTest'.
6. You can also make an alias for this 'vendor/bin/phpunit' by running "alias test = 'vendor/bin/phpunit'" in console.
   Now we can run all test by just typing 'test' in console rather than 'vendor/bin/phpunit'.
   
    



