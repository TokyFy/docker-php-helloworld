FROM php:7.0-apache

VOLUME /source

COPY config/apache2.conf /etc/apache2/
COPY config/000-default.conf /etc/apache2/sites-available/

EXPOSE 80

# docker build -t hellophp .
# docker run -p 80:80 -v ${pwd}:/source hellophp
