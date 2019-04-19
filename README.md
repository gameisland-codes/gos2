# ENV (Accessport Test Server)
~~~
> mysql --version
mysql  Ver 15.1 Distrib 10.2.21-MariaDB, for Linux (x86_64) using readline 5.1

> php71 --version
PHP 7.1.26 (cli) (built: Jan  9 2019 07:39:59) ( NTS )
Copyright (c) 1997-2018 The PHP Group
Zend Engine v3.1.0, Copyright (c) 1998-2018 Zend Technologies

> composer --version
Composer version 1.8.4 2019-01-01 00:00:00

> nginx -v
nginx version: nginx/1.10.2
~~~

# Initialize
~~~
chmod 777 logs
chmod 777 tmp
~~~

login mysql with root

SQL:
~~~
CREATE DATABASE official_gos;

grant all privileges on official_gos.* to official_gos@'localhost' identified by 'WjrPSRssiebVbh7G';
FLUSH PRIVILEGES;

use official_gos;

CREATE TABLE `preregisterUsers` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
~~~
next login (mysql -uofficial_gos -pWjrPSRssiebVbh7G official_gos)

# Nginx (Accessport Test Server)
~~~
server {
  listen 80;
  server_name n.test.gos2.jp;
  root /SET/PATH/TO/public;
  index index.php index.html index.htm;

  location / { 
    try_files $uri $uri/ /index.php?$query_string;
    #allow 39.110.213.12;
    #allow 219.119.86.86;
    deny all;
  }

  location ~ \.php$ {
    try_files $uri /index.php =404;
    fastcgi_split_path_info ^(.+\.php)(/.+)$;
    fastcgi_pass 127.0.0.1:9000;
    fastcgi_index index.php;
    fastcgi_param SCRIPT_FILENAME /SET/PATH/TO/public$fastcgi_script_name;
    include fastcgi_params;
  }
  
  location ~ /\.ht {
  	deny all;
  }
}

server {
  listen 80;
  server_name dmg.test.gos2.jp;
  root /SET/PATH/TO/public;
  index index.php index.html index.htm;

  location / { 
    try_files $uri $uri/ /index.php?$query_string;
    #allow 39.110.213.12;
    #allow 219.119.86.86;
    deny all;
  }
  
  location ~ \.php$ {
    try_files $uri /index.php =404;
    fastcgi_split_path_info ^(.+\.php)(/.+)$;
    fastcgi_pass 127.0.0.1:9000;
    fastcgi_index index.php;
    fastcgi_param SCRIPT_FILENAME /SET/PATH/TO/public$fastcgi_script_name;
    include fastcgi_params;
  }
  
  location ~ /\.ht {
  	deny all;
  }
}
~~~

# Other
Framework: Slim
|Item|dir|
----|----
|Version Detail|./comporser.json|
|Rooting|./src/routes.php|
|DB Setting|./src/settings.php|
|View Src|./templates/*|
|Controller|./app/*|
|Assets(images/css/js/videos/sounds)|./public/*|
|Plugins|./vendor/*|
