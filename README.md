# Docker-compose: Apache2 + PHP5 + SQLITE + Silly Project for pentesting XSS, CSRF and SQLi

This docker compose runs an apache server with php5.
This is a fork of https://github.com/juanmzaragoza/docker-compose-apache2-php5-mysql-phpmyadmin

## Overview

Un demo completo para para practicar sobre ténicas XSS, CSRF y SQL Injection

## Getting Started - Para comenzar

En la raiz del proyecto:

```
docker-compose up --build -d
```

En la carpeta **logs**  puede encontrar los logs del servidor apache2

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


## Authors

* **Juan Manuel Zaragoza** - *Initial work* - [juanmzaragoza](https://github.com/juanmzaragoza)
* **Raúl B. Netto** - *Adding silly project for pentesting studies* - [Piuliss](https://github.com/Piuliss)
