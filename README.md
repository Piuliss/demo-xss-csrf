# Docker-compose: Apache2 + PHP5 + SQLITE + Silly Project for pentesting XSS, CSRF and SQLi

This docker compose runs an apache server with php5.
This is a fork of https://github.com/juanmzaragoza/docker-compose-apache2-php5-mysql-phpmyadmin

## Overview

Un demo completo para para practicar sobre ténicas XSS, CSRF y SQL Injection

## Getting Started - Para comenzar

Descargar o clonar el proyecto: 

```
git clone git@github.com:Piuliss/demo-xss-csrf.git
```

con la linea de comandos dirigirse a la raiz del proyecto:

```
docker-compose up --build -d
```

En el navegador dirigirse a ```http://localhost:9991```

En la carpeta **logs**  puede encontrar los logs del servidor apache2

### Comandos Utiles

Para tener acceso a la shell del servidor montado:
```
docker exec -ti demo-xss-csrf_web_1 /bin/bash
```

Para dar de baja el servidor o apagar el servicio docker levantado

```
docker-compose down
```

### Prerequisites - Prerequesitos

Instalar los siguientes prerequesitos

* [Docker Engine](https://docs.docker.com/engine/installation/) - The docker itself
* [Docker Compose](https://docs.docker.com/compose/install/) - For defining and running multi-container Docker applications

### Distribution of directories

The following directory structure fully describes the project
```
.
+-- docker-compose.yml
+-- include
|   +-- sites-enabled
|   	+-- vhost.conf
|   +-- Dockerfile
+-- web
```

Inside include/sites-enabled is the configuration of the server where we will install our project.
Inside web is all our php project. The silly project for pentesting

### TIPS

Bajo ambiente Windows 10 hemos visto algunos problemas, luego que se ejecuta ```docker-compose up``` el servidor se levanta pero no se pueden editar los "messajes", es un problema de permisos dentro del container.  Por alguna razón solo pasa bajo ciertas circunstancia en Windows 10, especialmente si tiene VirtualBox o VMware instalado. 
Para solucionar deben ingresar al container:

```
docker exec -ti demo-xss-csrf_web_1 /bin/bash
```
y luego revisar los permisos de la carpeta ```/var/www/html```  que deben ser *www-data* o *root*.


## Authors

* **Juan Manuel Zaragoza** - *Initial work* - [juanmzaragoza](https://github.com/juanmzaragoza)
* **Raúl B. Netto** - *Adding silly project for pentesting studies* - [Piuliss](https://github.com/Piuliss)
