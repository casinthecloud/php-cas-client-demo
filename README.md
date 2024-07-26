PHP webapp protected by the phpCAS client (https://github.com/apereo/phpCAS)
==

PHP demo using the phpCAS client (v1.6.1) to protect a web application. Install the dependency using Composer: `php composer.phar install`.

Run the website with: `cd www; php -S localhost:8000`.

The URL 'protected/index.php' is protected and should trigger a CAS authentication.

Most of the configuration is defined in the **www/casconfig.php** file.

Run your CAS server on `http://localhost:8080/cas`.
