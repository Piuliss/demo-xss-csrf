FROM pitchanon/docker-apache-php:5.5
RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get install php5-sqlite

ADD sites-enabled/vhost.conf /etc/apache2/sites-enabled/

CMD ["/run.sh"]