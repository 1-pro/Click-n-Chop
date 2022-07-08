FROM php:8.0-apache
RUN apt-get update && apt upgrade -y
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable mysqli
ADD ./src /var/www/html
COPY ./src/click_n_chop.conf /etc/apache2/sites-available/click_n_chop.conf
RUN echo 'SetEnv MYSQL_DB_CONNECTION ${MYSQL_DB_CONNECTION}' >> /etc/apache2/conf-enabled/envronment.conf
RUN echo 'SetEnv MYSQL_DB_NAME ${MYSQL_DB_NAME}' >> /etc/apache2/conf-enabled/envronment.conf
RUN echo 'SetEnv MYSQL_DB_USER ${MYSQL_DB_USER}' >> /etc/apache2/conf-enabled/envronment.conf
RUN echo 'SetEnv MYSQL_PASSWORD ${MYSQL_PASSWORD}}' >> /etc/apache2/conf-enabled/environment.conf
RUN echo 'SetEnv SITE_URL ${SITE_URL}' >> /etc/apache2/conf-enabled/envronment.conf
RUN echo 'ServerName localhost' >> /etc/apache2/conf-enabled/envronment.conf &&\
    a2enmod rewrite &&\
    a2enmod headers &&\
    a2enmod rewrite &&\
    a2dissite 000-default &&\
    a2ensite click_n_chop &&\
    service apache2 restart
EXPOSE 80
#EXPOSE 443