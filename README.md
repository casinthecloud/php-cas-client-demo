PHP webapp protected by the phpCAS client (https://github.com/Jasig/phpCAS)
==

PHP demo using the phpCAS client (v1.3.3) to protect a web application. Install the dependency using Composer: `php composer.phar install`.

Use your favourite xAMP tool with **www** as the document root to start the webapp on **http://localhost**. The url 'protected/index.php' is protected and should trigger a CAS authentication.

Most of the configuration is defined in the **www/casconfig.php** file.

A specific logout application url is available at: http://localhost/logout.php.

Run your CAS server on http://localhost:8888/cas.
