PHP webapp protected by the phpCAS client
==

![English](https://www.casinthecloud.com/img/other/flag_en.png)

Demo PHP using the phpCAS client (v1.3.3) to protect a web application.

Use your favourite xAMP tool with **www** as the document root to start the webapp on **http://localhost**. The url 'protected/index.php' is protected and should trigger a CAS authentication.

Most of the configuration is defined in the **www/casconfig.php** file.

Use your own CAS in the cloud server with the following option:
- 'Authorize redirection urls after logout'
and the following service:
- Service url: 'http://localhost/protected/*' as an 'Ant pattern'
- 'Call from the browser to the specific application url for logout: http://localhost/logout.php'.

==

![Français](https://www.casinthecloud.com/img/other/flag_fr.png)

Démo PHP utilisant le client phpCAS (v1.3.3) pour protéger une application web.

Utilisez votre outil xAMP favori avec **www** comme répertoire de base pour lancer le site web sur **http://localhost**. L'url 'protected/index.php' est protégée et déclenche une authentification CAS.

L'essentiel de la configuration est défini dans le fichier **www/casconfig.php**.

Utilisez votre propre serveur CAS in the cloud avec l'option :
- 'Autoriser les urls de redirection après déconnexion'
et le service suivant :
- Url de service : 'http://localhost/protected/*' en tant que 'Expression Ant'
- 'Appel depuis le navigateur de l'url applicative spécifique pour la déconnexion : http://localhost/logout.php'.
